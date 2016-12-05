<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidatesport extends Model
{
    public function Candidate(){

    	return $this->belongsTo('App\Candidate','candidate_id');
    }
}