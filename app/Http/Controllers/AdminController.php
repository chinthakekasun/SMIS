<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Auth;
use App\Notice;
use App\User;
use App\Event;

class AdminController extends Controller
{
    public function showHome()
    {
    	return view('director.director_home');
    }

    public function showUpload()
    {
    	return view('director.uploadNotice')
            ->with('title','Upload Notices');
    }

    public function doUpload(Request $data)
    {
    	$table = new Notice;
        $table->body = $data->Input('body');
        $table->postedby = $data->Input('postedby');
        $table->title = $data->Input('title');
        $table->approval = $data->Input('approval');
        $table->date = date('Y-m-d');
        $table->save();

        return Redirect::to('notice');
    }

    public function destroy($id)
    {
        Notice::find($id)->delete();
        return back();
    }

    public function newUser(Request $data)
    {
        $table = new User;
        $table->userid = $data->Input('userid');
        $table->username = $data->Input('username');
        $table->role = $data->Input('role');
        $table->faculty = $data->Input('faculty');
        $table->password = bcrypt('12345');
        $table->picurl = 'images/users/sc8844.jpg';
        $table->created_at = date('Y-m-d H:m:s');
        $table->updated_at = date('Y-m-d H:m:s');
        $table->save();

        return Redirect::to('home');
    }

    public function viewFacultyteams()
    {
        if (Auth::check())
        {
               $fac = Auth::user()->faculty;
               $teamcard = DB::table('entryforms')
                        ->orderBy('faculty','asc')
                        ->where('faculty','true')
                       ->paginate(3);
                $view = view('director.entryfrm')->with('title','Entry Forms');
                $view->title = 'Entry Forms';
                $view->teamcards = $teamcard;
                return $view;
        }
        else{
            return view('errors.404')->with('title','Page connot be found');
        }
    }

}
