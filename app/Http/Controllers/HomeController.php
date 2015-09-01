<?php namespace App\Http\Controllers;

use App\Story;
use App\User;
use App\Friend;
use App\Part;
use App\Expedition;
use App\Expfriend;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

use Illuminate\Http\Request;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$authID = \Auth::user()->id;
		$stories = story::where('user_id', $authID)->get();
		$profile = user::where('id', $authID)->get();
		$thisProfiel = user::where('id', $authID)->get()->first();
		

		// explore trip I made
		$explore = Expfriend::where('user_id', $authID)->where('state', 1)->take(5)->lists('expedition_id');
		$explore = Expedition::whereIn('id', $explore)->get();
		
		// explore trips where I'm invite too
		$invexploration = Expfriend::where('user_id', $authID)->where('state', 0)->take(5)->lists('expedition_id');
		$invexploration = Expedition::whereIn('id', $invexploration)->get();

		// explored
		$mytime = Carbon::now();
		$explored = Expfriend::where('user_id', $authID)->where('state', 1)->lists('expedition_id');
		$explored = Expedition::whereIn('id', $explored)->where('date', '<', $mytime)->get();

		//my friends
		$listfriends = friend::select('friend_id')->where('user_id', $authID)->where('state', 1)->get();
		$listfriends = $listfriends->lists('friend_id');
		$friends = user::whereIn('id', $listfriends)->get();

		//my invited for friends
		$notmyfriends = friend::select('user_id')->where('friend_id', $authID)->where('state', 0)->get();
		$notmyfriends = $notmyfriends->lists('user_id');
		$invitefriends = user::whereIn('id', $notmyfriends)->get();

		//stories of friends
		$friendsStory = Story::whereIn('user_id', $listfriends)->orderBy('created_at')->get();

		if (\Auth::user()->id == $authID ) {
			$isthisme = "yes";
		}
		else {
			$isthisme = "no";
		}
		return view('home', compact('stories',
									'friendsStory', 
									'isthisme',
									'friends', 
									'invitefriends',
									'thisProfiel',
									'explore', 
									'invexploration',
									'explored'));
	}
	

}
