<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Auth;
use App\Notice;
use App\Entryform;
class RequestController extends Controller
{
    public function showRequests()
    {

    	if(Auth::check())
    	{
	    	
	    	$noticeRequests = DB::table('notices')
                 ->orderBy('id', 'desc')
                 ->where('approval','false')
                 ->paginate(5);

            $teamcard = DB::table('entryforms')
                        ->where('approval', 'false')
                       ->paginate(5);

	    	$ground = DB::table('groundbookings')
                    ->where('approval', 'Not approved')
                    ->orderBy('id', 'desc')
                    ->get();

	        $view = view('director.requests')->with('notices',$noticeRequests);
            $view->num_notices = count($noticeRequests);
            $view->teamcards = $teamcard;
            $view->num_teamcards = count($teamcard);
            $view->grounds = $ground;
            $view->num_grounds = count($ground);
	        $view->title = 'Requests';
	        return $view;
		}
		else
		{
			return Redirect::to('login');
		}
    }

    public function noticeReq()
    {
        $notices = DB::table('notices')
                 ->orderBy('id', 'desc')
                 ->where('approval','false')
                 ->paginate(5);
        $num_notices = count($notices);

        $title = 'New Notices';
        return view('director.notice_requests')->with(compact('title', 'notices', 'num_notices'));
    }

    public function publish($id)
    {
    	DB::table('notices')
    		->where('id', $id)
    		->update(['approval'=>'true']);
		return back();
    }

    public function approveEntryforms($id)
    {
        DB::table('entryforms')
            ->where('id', $id)
            ->update(['approval'=>'true']);
        return back();
    }

    public function show()
    {
        return DB::table('notices')
                 ->orderBy('id', 'desc')
                 ->where('approval','false')
                 ->count();
    }
}
