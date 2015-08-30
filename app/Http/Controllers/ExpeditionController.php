<?php namespace App\Http\Controllers;

use App\Expfriend;
use App\Expedition;
use App\Http\Requests;
use App\Http\Requests\CreateExpadition;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ExpeditionController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
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
		//
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

		$expfriends->save();

		return redirect('story/'. $story->id . '/edit');

	}
	public function getAddfriend($id, CreateExpfriend $request)
	{
		// add user_id & expadition id
		// zien of friend wel in de vrienden lijst zit van creator expedition
if (condition) {
	# code...
} else {
	# code...
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
