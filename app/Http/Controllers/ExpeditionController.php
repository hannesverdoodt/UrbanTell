<?php namespace App\Http\Controllers;

use App\Expfriend;
use App\Expedition;
use App\User;
use App\Friend;
use App\Http\Requests;
use App\Http\Requests\CreateExpadition;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ExpeditionController extends Controller {

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
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getRemoveInv($id)
	{
				$authU = \Auth::user()->id;

  		$expinv = Expfriend::where('expedition_id', $id)
  					->where('user_id', $authU)->delete();	
    
    	return redirect('home');
	}
	public function getAcceptInv($id)
	{
		$authU = \Auth::user()->id;

  		$expinv = Expfriend::where('expedition_id', $id)
  					->where('user_id', $authU)->first();
		$expinv->state = 1;
		$expinv->save();	
    
    	return redirect('home');	
	}


	public function index()
	{

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('expeditions.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateExpadition $request)
	{
		$input = $request->all();
		$creator = \Auth::user()->id;

		$expedition = new Expedition;
		$expedition->title = $input['title'];
		$expedition->location = $input['location'];
		$expedition->date = $input['date'];
		$expedition->description = $input['description'];
		$expedition->user_id = $creator;

		// image 

		$expedition->save();
	
		$expfriends = new Expfriend;
		$expfriends->expedition_id = $expedition->id;
		$expfriends->user_id = $creator;
		$expfriends->creator_id = $creator;
		$expfriends->state = 1;

		$expfriends->save();

		return redirect('expedition/'. $expedition->id);

	}
	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{

		$expedition = expedition::where('id', $id)->first();
		$thisExpedition = $id;
		// creator
		$creator = $expedition->user_id;
		$creatorinfo = user::where('id', $creator)->first();

		//friends

		//friends inv
		$friendsinv = expfriend::where('expedition_id', $id)->where('state', 1)->lists('user_id');
		$friendsinv = user::where('id',$friendsinv)->get();
		$listinv = expfriend::where('expedition_id', $id)->where('state', 1)->lists('user_id');
		$listinvque = expfriend::where('expedition_id', $id)->where('state', 0)->lists('user_id');

		//friends to inv
		$friendlist = friend::whereNotIn('friend_id', $listinv)->whereNotIn('friend_id', $listinvque)->where('user_id', $creator)->where('state', 1)->lists('friend_id');
		$friendlist = user::where('id', $friendlist)->get();

		//friend in que
		$friendque = expfriend::where('expedition_id', $id)->where('state', 0)->lists('user_id');
		$friendque = user::where('id',$friendque)->get();

		return view('expeditions.show', compact('thisExpedition',
												'expedition',
												'creatorinfo',
												'friendsinv',
												'friendlist',
												'friendque'	));

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
		$exploration = expedition::find($id);
		$exploration->done = Request::input('done');
		$exploration->save();
 
		return $exploration;
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		expedition::destroy($id);
	}

}
