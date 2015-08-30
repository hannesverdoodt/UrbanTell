<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Expfriend extends Model {

	protected $table = 'expfriends';

	protected $fillable =
	[
		'user_id',
		'expedition_id'
	];

	protected $hidden = ['created_at', 'updated_at'];

	public function expedition()
	{
		return $this->belongTo('App\expedition');
	}

	public function user()
	{
		return $this->hasMany('App\User');
	}

}
