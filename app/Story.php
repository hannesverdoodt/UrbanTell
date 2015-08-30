<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Story extends Model {

	protected $table = 'stories';

	protected $fillable =
	[
		'title',
		'location',
		'subtitle',
		'description',
		'parts',
        'image'
	];

	protected $hidden = ['created_at', 'updated_at'];

	public function author()
	{
		return $this->belongTo('App\User');
	}

	public function part()
	{
		return $this->hasMany('App\Part');
	}
}
