<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Part extends Model {

	protected $table = 'parts';

	protected $fillable =
	[
		'title',
		'description'
	];

	protected $hidden = ['created_at', 'updated_at'];

	public function story()
	{
		return $this->belongTo('App\Story');
	}
}
