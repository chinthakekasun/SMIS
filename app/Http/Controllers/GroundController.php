<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Groundbooking;
use Auth;

class GroundController extends Controller
{
    public function viewGrounds()
    {
    	$main = DB::table('groundbookings')
    				->where('venue', 'mainGround')
    				->orderBy('id', 'desc')
    				->get();
    	$indoor = DB::table('groundbookings')
    				->where('venue', 'indoorStadium')
    				->orderBy('id', 'desc')
    				->get();
    	$hapugala = DB::table('groundbookings')
    				->where('venue', 'hapugala')
    				->orderBy('id', 'desc')
    				->get();
    	$karapitiya = DB::table('groundbookings')
    				->where('venue', 'karapitiya')
    				->orderBy('id', 'desc')
    				->get();
    	$kamburupitiya = DB::table('groundbookings')
    				->where('venue', 'kamburupitiya')
    				->orderBy('id', 'desc')
    				->get();
    	$title = 'Ground';
    	return view('ground.ground')->with(compact(['main','indoor','hapugala','karapitiya','kamburupitiya','title']));
    }

    public function bookGrounds(Request $data)
    {
    	DB::table('groundbookings')->insert([
                'approval' => 'Not approved',
                'venue' => $data['venue'],
                'date' => $data['date'],
                'stime' => $data['startTime'],
                'etime' => $data['endTime'],
                'faculty' => $data['faculty'],
                'sport' => $data['sport'],
                'requestedby' => Auth::user()->username,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ]);

    	return back();
    }

    public function approveGrounds($id)
    {
        DB::table('groundbookings')
            ->where('id', $id)
            ->update(['approval'=>'Approved']);
        
        return back();
    }

    public function rejectGrounds($id)
    {
        Groundbooking::find($id)->delete();
        return back();
    }

    public function show()
    {
        return DB::table('groundbookings')
                    ->where('approval', 'Not approved')
                    ->count();
    }
}
