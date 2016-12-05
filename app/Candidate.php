<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
	public function Candidatesport()
    {
    	return $this->hasMany('App\Candidatesport');
    }
}
