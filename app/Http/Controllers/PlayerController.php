<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Poolplayer;
use Auth;
class PlayerController extends Controller
{
    public function viewPlayers()
    {
		$players = Poolplayer::where('sport', Auth::user()->sport)->get();

    	$title = "My Team";

    	return view('team_cap.team')->with(compact(['title','players']));
    }
}
