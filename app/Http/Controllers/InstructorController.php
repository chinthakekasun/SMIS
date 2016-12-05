<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Universitybadnimtonplayer;
use App\Entryform;
use App\Entryformplayer;
use App\Poolplayer;
use Auth;

class InstructorController extends Controller
{
    public function viewPlayers($game)
    {
    	if (Auth::check())
    	{
    		if (Auth::user()->role === 'instructor')
    		{
    			$faculty_players = DB::table('entryforms')
    								->where('sport', $game)
    								->groupBy('faculty')
    								->get();

                $pool_player = DB::table('poolplayers')
                            ->where('sport', $game)
                            ->get();

    			$view =  view('instructor.players')->with('title','Players');
                $view->game = $game;
                $view->faculty_players = $faculty_players;
                $view->num_faculty_players = count($faculty_players);
                $view->pool_players = $pool_player;
        		$view->num_pool_players = count($pool_player);
        		//$view->basketball_faculty = $basketball_faculty;
        		return $view;
                //echo $game;
        	}
    		else{
    			 return view('errors.404')->with('title','Page error');
    		}
    	}
    	else
    	{
    		 return Redirect::to("/login");
    	}
    }

    public function rateMe($value)
    {
        //echo $id."<br>".$value;
        echo $value;
    }

    public function addtoPool(Request $data)
    {
        $id = $data['id'];

        $table = new Poolplayer;
        $table->sport = $data->Input('sport');
        $table->user_id = $data->Input('user_id');;
        $table->name = $data->Input('name');
        $table->faculty = $data->Input('faculty');
        $table->approval = 'Not approved';
        $table->created_at = date('Y-m-d');
        $table->updated_at = date('Y-m-d');
        $table->save();

        //return Redirect::to('notice');
        DB::table('entryformplayers')
            ->where('id', $id)
            ->update(['status'=>'Pool selected']);

        return back();
        //echo $userid." Added to university pool";
    }

    public function addtoTeam(Request $data)
    {   
        $sport = $data['sport'];
        if ($data['sport'] === 'badminton') 
        {
            $table = new Universitybadnimtonplayer;
            $table->user_id = $data->Input('user_id');;
            $table->name = $data->Input('name');
            $table->faculty = $data->Input('faculty');
            $table->approval = 'Not approved';
            $table->created_at = date('Y-m-d');
            $table->updated_at = date('Y-m-d');
            $table->save();

            Poolplayer::find($data->Input('id'))->delete();
            return back();
        }

        //echo "Added to the University ".$sport." team";
    }
}
