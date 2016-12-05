<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class EventController extends Controller
{
	public function upcomigEvent()
	{
		return view('common.upcomingevents')
            ->with('title','New event');
	}

     public function newEvent()
    {
        return view('director.newevent')
            ->with('title','New event');
    }

    public function addEvent(Request $data)
    {
        if ($data['role'] === 'director') {
            $approval = 'Approved';
        }
        else{
            $approval = 'Not approved';
        }

        $table = new Event;
        $table->title = $data['title'];
        $table->approval = $approval;
        $table->description = $data['description'];
        $table->date = $data['date'];
        $table->stime = $data['stime'];
        $table->etime = $data['etime'];
        $table->venue = $data['venue'];
        $table->postedby = $data['postedby'];
        $table->created_at = date('Y-m-d H:m:s');
        $table->updated_at = date('Y-m-d H:m:s');
        $table->save();

        return Redirect::to('upcoming');
    }
}
