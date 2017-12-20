<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
     public  function Topic(){
		return  $this->belongsTo('App\Topic');
	}
	public function user(){
		return $this->belongsTo('App\User');
	}
}
