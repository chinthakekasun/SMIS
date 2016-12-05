<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Auth;
use App\User;
use App\Record;
use App\Http\Requests;

class UserController extends Controller
{
    public function showLogin()
    {
        $frecords = Record::all()->where('type', 'faculty');
        
        $view = view('login')->with('frecords',$frecords);
        $view->urecords = Record::all()->where('type', 'university');
        return $view;   
    }

    public function doLogin(Request $request)
    {        
        $user = array('userid' => $request['userid'],'password'=>$request['password']);
        if (Auth::attempt($user))
        {           
        
            $role=Auth::user()->role;
            
            if($role=="director")
            {
                return Redirect::to("/director_home");

            }
            else if($role=="instructor")
            {
                return Redirect::to("/instructor_home");
            }
            else if($role=="team_cap")
            {
                return Redirect::to("/team_cap_home");
            }
            else if($role=="faculty_cap")
            {
                return Redirect::to("/faculty_cap_home");
            }
            else if($role=="player")
            {
                return Redirect::to("/player_home");
            }
        }
        else
        {
            return back()
                    ->with('message','Login unsuccess.');
        }
    }
}
