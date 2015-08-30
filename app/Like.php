<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model {

	protected $table = 'stories';

	protected $fillable =
	[
		'story_id',
		'user_id'
	];

	protected $hidden = ['created_at', 'updated_at'];

	public function like()
	{
		return $this->belongTo('App\Story');
	}
}
