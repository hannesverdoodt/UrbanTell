<?php namespace App\Http\Controllers;

use App\Friend;
use App\User;
use App\Http\Requests\CreateFriend;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class FriendController extends Controller {

	public function getAddFriend($id)
    {
  	$authU = \Auth::user()->id;

  	$friendinv = Friend::where('user_id', $id)
  					->where('friend_id', $authU)
  					->update(['state' => 1]);

  	$friend = new friend;
  	$friend->user_id = $authU;
	$friend->friend_id = $id;
	$friend->state = 1;

	$friend->save();

    return redirect('profile/'. $authU);
	}

	public function getRemoveFriend($id)
	{
	 	$authU = \Auth::user()->id;

	  	$friendinv = Friend::where('user_id', $id)
	  					->where('friend_id', $authU)
	  					->update(['state' => -1]);   
	    return redirect('profile/'. $authU);
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
	public function store(CreateFriend $request)
	{

		$input = $request->all();
		$authU = \Auth::user()->id;
		$friend_mail = $input['email'];
		$friend_id = user::where('email', $friend_mail)->pluck('id');
		$friend_list = friend::where('user_id', $authU)->where('friend_id', $friend_id)->pluck('id');
		
		if ($authU == $friend_id) {
			return "u cant invite yourself to friends";
		}
		elseif (!empty($friend_list)) {
			return "friend is already your friend";
		}
		elseif (empty($friend_id)){
			return "Persone u looking for isn't on Urban Tell, invite him/her";
		}
		else
		{
			
		$friend = new friend;
		$friend->user_id = $authU;
		$friend->friend_id = $friend_id;
		$friend->state = 0;

		$friend->save();

		return redirect('profile/' . $authU);
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
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
