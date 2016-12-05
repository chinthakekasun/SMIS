<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ReservationController extends Controller
{
    public function viewGroundbooking()
    {
    	return view('team_cap.ground')
    			->with('title', 'Ground Booking');
    }
}
