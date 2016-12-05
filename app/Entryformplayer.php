<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entryformplayer extends Model
{
    public function Entryform()
    {
        return $this->belongsTo('App\Entryform');
    }
}
