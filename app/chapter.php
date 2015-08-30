<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class chapter extends Model {

	protected $table = 'chapter';

	protected $fillable =
	[
		'title',
		'description',
                'subtitle',
                'type'
               
	];

	protected $hidden = ['created_at', 'updated_at'];

	public function story()
	{
		return $this->belongTo('App\Story');
	}
        
        public function chapter ()
        {
            return $this->belongTo('App\Chapter');
        }

}
