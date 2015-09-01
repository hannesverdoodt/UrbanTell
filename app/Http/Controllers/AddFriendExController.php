<?php namespace App\Http\Controllers;

use App\Expfriend;
use App\Expedition;
use App\User;
use App\Friend;
use App\Http\Requests;
use App\Http\Requests\CreateExpadition;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;


class AddFriendExController extends Controller {

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
		
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($ExpeditionId, $FriendId)
	{
		$expfriends = new Expfriend;
		$expfriends->expedition_id = $ExpeditionId;
		$expfriends->user_id = $FriendId;
		
		//get creator
		$creator = expedition::where('id', $ExpeditionId)->select('user_id')->first();
		$expfriends->creator_id = $creator->user_id;
		
		$expfriends->state = 0;

		$expfriends->save();

		return redirect('expedition/'. $ExpeditionId);
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
