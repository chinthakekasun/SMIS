<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use Auth;
use App\Http\Requests;

class HomeController extends Controller
{           
        public function goHome()
        {
            $role=Auth::user()->role;
            
            if($role=="admin")
            {
                return Redirect::to("/admin_home");
            }
            else if($role=="team_cap")
            {
                return Redirect::to("/team_cap_home");
            }
            else if($role=="instructor")
            {
                return Redirect::to("/instructor_home");
            }
            else if($role=="director")
            {
                return Redirect::to("/director_home");
            }
            else if($role=="faculty_cap")
            {
                return Redirect::to("/faculty_cap_home");
            }
            else if($role=="player")
            {
                return Redirect::to("/player_home");
            }
            else
        	{
            return view('errors.login_error');
        	}
        }
    }

