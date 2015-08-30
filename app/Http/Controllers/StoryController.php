<?php namespace App\Http\Controllers;

use Input;
use App\Story;
use App\Part;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateStory;


class StoryController extends Controller {



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
		$stories = Story::all();
		return view('story.index', compact('stories'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('story.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateStory $request)
	{
		$input = $request->all();
		$author = \Auth::user()->id;

		$story = new story;
		$story->user_id = $author;
		$story->title = $input['title'];
		$story->location = $input['location'];
		$story->subtitle = $input['subtitle'];
		$story->description = $input['description'];

		

		//image

		$story->save();		

		$destinatonPath = '';
    	$filename = '';

	    $file = Input::file('image');
	    $destinationPath = public_path().'/images/story';
	    $filename = $story->id .'_'.$file->getClientOriginalName();
	    $uploadSuccess = $file->move($destinationPath, $filename);
	    
	    $addimage = Story::find($story->id);

		$addimage->image = $filename;

		$addimage->save();
		
  
     
		return redirect('story/'. $story->id . '/edit');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$state = 'off';
		$story = story::find($id);
		$parts = part::where('story_id', $id)->get();
		$reader = \Auth::user()->id;
		$author = story::where('id', $id)->pluck('user_id');
		if ($author == $reader ) {
			$isthisme = "yes";
		}
		else {
			$isthisme = "no";
		}

		$author = user::where('id', $author)->get()->first();
		return view('story.read', compact('state', 'reader', 'parts', 'story', 'isthisme', 'author'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$editor = \Auth::user()->id;
		$author = Story::where('id', $id)->pluck('user_id');

		if ($author == $editor) {
			$state = 'on';
			$story = Story::find($id);
			$parts = part::where('story_id', $id)->get();
			$author = user::where('id', $editor)->get()->first();
                        
			return view('story.edit', compact('story', 'state', 'parts', 'author' ));
		} 
		else 
		{
		 return	redirect('story/' . $id);
		}

		
	
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		
              
                    $story = Story::find($id);
                    $story->title  = Input::get('title');
                    $story->subtitle = Input::get('subtitle');
                    $story->description = Input::get('description');
                    $story->location = Input::get('location');
                    $story->save();
                        
                   return redirect ('story/'.$id);
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
