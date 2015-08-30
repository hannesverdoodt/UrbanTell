<?php namespace App\Http\Controllers;

use App\Story;
use App\User;
use App\Friend;
use App\Part;
use App\Expedition;
use App\Expfriend;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ProfileController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$authID = \Auth::user()->id;
		$stories = story::where('user_id', $id)->get();
		$profile = user::where('id', $id)->get();
		$thisProfiel = user::where('id', $id)->get()->first();
		

		// explore trip I made
		$explore = Expedition::where('user_id', $id)->get();

		
		// explore trips where I'm invite too
		$invexplore = Expfriend::select('expedition_id')->where('user_id',$id)->get();
		$invexplore = $invexplore->lists('expedition_id');
		$invexploration = Expedition::whereIn('id', $invexplore)->get();


		//my friends
		$listfriends = friend::select('friend_id')->where('user_id', $id)->where('state', 1)->get();
		$listfriends = $listfriends->lists('friend_id');
		$friends = user::whereIn('id', $listfriends)->get();

		//my invited for friends
		$notmyfriends = friend::select('user_id')->where('friend_id', $id)->where('state', 0)->get();
		$notmyfriends = $notmyfriends->lists('user_id');
		$invitefriends = user::whereIn('id', $notmyfriends)->get();

		if ($id == $authID ) {
			$isthisme = "yes";
		}
		else {
			$isthisme = "no";
		}
		return view('profile.index', compact('stories', 
												'isthisme',
												'friends', 
												'invitefriends',
												'thisProfiel',
												'explore', 
												'invexploration'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
