<?php namespace App\Http\Controllers;

use App\Story;
use App\User;
use App\Friend;
use App\Part;
use App\Expedition;
use App\Expfriend;
use App\Http\Requests\CreateSearch;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class SearchController extends Controller {

public function search(Request $request)
{
   	$idA = \Auth::user()->id;
   	$input = $request->all(); 
    $query = $input['search'];


    $allready_friends = Friend::where('user_id', $idA )->lists('friend_id');
    array_push($allready_friends, $idA);
  	$search_f = User::where('firstname', 'LIKE', '%' . $query . '%')->whereNotIn('id', $allready_friends)->get();
	return view('search', compact('search_f'));    
 }
}