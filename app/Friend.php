<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Friend extends Model {

	protected $table = 'friends';

	protected $fillable =
	[
		'user_id',
		'friend_id',
		'state'
	];

	protected $hidden = ['created_at', 'updated_at'];

	//
	public function user()
	{
		return $this->belongsTo('App\User');
	}

}
