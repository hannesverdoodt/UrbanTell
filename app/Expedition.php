<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Expedition extends Model {

	protected $table = 'expeditions';

	protected $fillable =
	[
		'title',
		'location',
		'date',
		'description'
	];

	protected $hidden = ['created_at', 'updated_at'];
	
	/*
	public function author()
	{
		return $this->belongTo('App\User');
	}

	public function part()
	{
		return $this->hasMany('App\Part');
	}*/

}
