<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{

	protected $guarded = [];
	
	public function post()
	{
		return $this->belongsTo(Post::class);
	}

    public function user() //$post->user
    {
    	return $this->belongsTo(User::class);
    }
}
