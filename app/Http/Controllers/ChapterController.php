<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Story;
use App\chapter;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ChapterController extends Controller {
    
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
	public function create($id)
	{
		$story = Story::where('id','=',$id)->first();
                return view('chapter.create', compact('story'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store($story)
	{
		$input = $request->all();
		$story_id = $story;
                $chapter = new chapter;

		$part->story_id = $story_id;
		$part->title = $input['title'];
		$part->description = $input['description'];
		
		//place of part
		$position = 0; 
		$current_position = Part::where('story_id', $story)->pluck('position');

		if (empty($current_positioncount)) {
			
			$current_position = 0;
		}
		else
		{
			$current_position;
		}
		//current_position = 1
		if ($position <= $current_position ) {

			$position = $current_position + 1;
			//expect position to go to 2
		}
		else
		{
			$position = $current_position;
		}
		$part->position = $position;
		//setting position 2

		$part->save();		
	//image
		$destinatonPath = '';
    	$filename = '';

	    $file = Input::file('image');
	    $destinationPath = public_path().'/images/parts';
	    $filename = $part->id .'_'.$file->getClientOriginalName();
	    $uploadSuccess = $file->move($destinationPath, $filename);
	    
	    $addimage = Part::find($part->id);

		$addimage->image = $filename;

		$addimage->save();

		return redirect('story/'. $story . '/edit');;
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
