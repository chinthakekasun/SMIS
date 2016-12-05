<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entryform extends Model
{
    public function Entryformplayer()
    {
        return $this->hasMany('App\Entryformplayer');
    }
}
