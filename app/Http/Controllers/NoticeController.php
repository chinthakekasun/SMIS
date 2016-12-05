<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Auth;
use App\Notice;

class NoticeController extends Controller
{
    public function getNotice()
    {

    	if(Auth::check())
    	{
	    	
	    	$notices = DB::table('notices')
                 ->orderBy('id', 'desc')
                 //->where('approval','true')
                 ->paginate(3);  
	    	 
	        $view = view('common.viewNotice')->with('notices',$notices);
	        $view->title = 'Notices';
	        return $view;
		}
		else
		{
			return Redirect::to('login');
		}

    }

    public function viewEdit($id)
    {
    	$notices = DB::table('notices')
                ->where('id', $id)
                ->get();
        $title = 'Edit Notice';
        // foreach ($notices as $key => $value) {
        //    echo $value->id;
        // }
        return view('common.editnotice')->with(compact(['title', 'notices']));
    }

    public function doEdit(Request $data)
    {
    	
    	$id = $data->Input('id');
    	$title = $data->Input('title');
    	$body = $data->Input('body');
    	DB::table('notices')
    		->where('id', $id)
    		->update(['title'=>$title, 'body'=>$body]);
    		
    		return Redirect::to('notice');
    }
}
