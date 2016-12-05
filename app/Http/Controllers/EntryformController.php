<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Auth;
use App\Entryform;
use App\Entryformplayer;

class EntryformController extends Controller
{
	public function viewTeams()
    {
        if (Auth::check())
        {
               $fac = Auth::user()->faculty;

                
                $teamcard = DB::table('entryforms')
                            ->where('faculty', $fac)
                            ->paginate(5);
                    
                
                $view = view('faculty_cap.entryforms')->with('title','Entry Forms');
                $view->title = 'Entry Forms';
                $view->teamcards = $teamcard;
                return $view;
        }
        else{
            return view('errors.404')->with('title','Page connot be found');
        }
    }

	public function viewEntryforms()
	{
		return view('faculty_cap.team_card')
    			->with('title','Team Card');
	}

    public function sendEntryforms(Request $data)
    {
        $entryform_id=DB::table('entryforms')->insertGetId([
            'approval' => 'false',
            'faculty' => Auth::user()->faculty,
            'sport' =>  $data->Input('sport'),
            'team' =>  $data->Input('gender'),
            'created_at' =>  date('Y-m-d'),
            'updated_at' =>  date('Y-m-d'),
        ]);

        DB::table('entryformplayers')->insert([
                'entryform_id' => $entryform_id,
                'name' => $data->Input('cap'),
                'user_id' => $data->Input('cap_indexNo'),
                'role' => 'captain',
                'rating' => 0,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ]);  
        DB::table('entryformplayers')->insert([
                'entryform_id' => $entryform_id,
                'name' => $data->Input('vcap'),
                'user_id' => $data->Input('vcap_indexNo'),
                'role' => 'vice captain',
                'rating' => 0,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ]);
         // for ($i=1; $i < 19; $i++) { 
         //    if ($data['name$i']!=="")
         //        {
         //               DB::table('entryformplayers')->insert([
         //                    'entryform_id' => $entryform_id,
         //                    'name' => $data['name$i'],
         //                    'user_id' => $data['name$i_indexNo'],
         //                    'role' => 'team member',
         //                    'created_at' => date('Y-m-d H:m:s'),
         //                    'updated_at' => date('Y-m-d H:m:s'),
         //                ]);  
         //        }
         //    }
            if ($data['name1']!=="")
                {
                       DB::table('entryformplayers')->insert([
                            'entryform_id' => $entryform_id,
                            'name' => $data['name1'],
                            'user_id' => $data['name1_indexNo'],
                            'role' => 'team member',
                            'rating' => 0,
                            'created_at' => date('Y-m-d H:m:s'),
                            'updated_at' => date('Y-m-d H:m:s'),
                        ]);  
                }
                if ($data['name2']!=="")
                {
                       DB::table('entryformplayers')->insert([
                            'entryform_id' => $entryform_id,
                            'name' => $data['name2'],
                            'user_id' => $data['name2_indexNo'],
                            'role' => 'team member',
                            'rating' => 0,
                            'created_at' => date('Y-m-d H:m:s'),
                            'updated_at' => date('Y-m-d H:m:s'),
                        ]);  
                }
                if ($data['name3']!=="")
                {
                       DB::table('entryformplayers')->insert([
                            'entryform_id' => $entryform_id,
                            'name' => $data['name3'],
                            'user_id' => $data['name3_indexNo'],
                            'role' => 'team member',
                            'rating' => 0,
                            'created_at' => date('Y-m-d H:m:s'),
                            'updated_at' => date('Y-m-d H:m:s'),
                        ]);  
                }
                if ($data['name4']!=="")
                {
                       DB::table('entryformplayers')->insert([
                            'entryform_id' => $entryform_id,
                            'name' => $data['name4'],
                            'user_id' => $data['name4_indexNo'],
                            'role' => 'team member',
                            'rating' => 0,
                            'created_at' => date('Y-m-d H:m:s'),
                            'updated_at' => date('Y-m-d H:m:s'),
                        ]);  
                }
                if ($data['name5']!=="")
                {
                       DB::table('entryformplayers')->insert([
                            'entryform_id' => $entryform_id,
                            'name' => $data['name5'],
                            'user_id' => $data['name5_indexNo'],
                            'role' => 'team member',
                            'rating' => 0,
                            'created_at' => date('Y-m-d H:m:s'),
                            'updated_at' => date('Y-m-d H:m:s'),
                        ]);  
                }
                if ($data['name6']!=="")
                {
                       DB::table('entryformplayers')->insert([
                            'entryform_id' => $entryform_id,
                            'name' => $data['name6'],
                            'user_id' => $data['name6_indexNo'],
                            'role' => 'team member',
                            'rating' => 0,
                            'created_at' => date('Y-m-d H:m:s'),
                            'updated_at' => date('Y-m-d H:m:s'),
                        ]);  
                }
                if ($data['name7']!=="")
                {
                       DB::table('entryformplayers')->insert([
                            'entryform_id' => $entryform_id,
                            'name' => $data['name7'],
                            'user_id' => $data['name7_indexNo'],
                            'role' => 'team member',
                            'rating' => 0,
                            'created_at' => date('Y-m-d H:m:s'),
                            'updated_at' => date('Y-m-d H:m:s'),
                        ]);  
                }
                if ($data['name8']!=="")
                {
                       DB::table('entryformplayers')->insert([
                            'entryform_id' => $entryform_id,
                            'name' => $data['name8'],
                            'user_id' => $data['name8_indexNo'],
                            'role' => 'team member',
                            'rating' => 0,
                            'created_at' => date('Y-m-d H:m:s'),
                            'updated_at' => date('Y-m-d H:m:s'),
                        ]);  
                }
                if ($data['name9']!=="")
                {
                       DB::table('entryformplayers')->insert([
                            'entryform_id' => $entryform_id,
                            'name' => $data['name9'],
                            'user_id' => $data['name9_indexNo'],
                            'role' => 'team member',
                            'rating' => 0,
                            'created_at' => date('Y-m-d H:m:s'),
                            'updated_at' => date('Y-m-d H:m:s'),
                        ]);  
                }
                if ($data['name10']!=="")
                {
                       DB::table('entryformplayers')->insert([
                            'entryform_id' => $entryform_id,
                            'name' => $data['name10'],
                            'user_id' => $data['name10_indexNo'],
                            'role' => 'team member',
                            'rating' => 0,
                            'created_at' => date('Y-m-d H:m:s'),
                            'updated_at' => date('Y-m-d H:m:s'),
                        ]);  
                }
                if ($data['name11']!=="")
                {
                       DB::table('entryformplayers')->insert([
                            'entryform_id' => $entryform_id,
                            'name' => $data['name11'],
                            'user_id' => $data['name11_indexNo'],
                            'role' => 'team member',
                            'rating' => 0,
                            'created_at' => date('Y-m-d H:m:s'),
                            'updated_at' => date('Y-m-d H:m:s'),
                        ]);  
                }
                if ($data['name12']!=="")
                {
                       DB::table('entryformplayers')->insert([
                            'entryform_id' => $entryform_id,
                            'name' => $data['name12'],
                            'user_id' => $data['name12_indexNo'],
                            'role' => 'team member',
                            'rating' => 0,
                            'created_at' => date('Y-m-d H:m:s'),
                            'updated_at' => date('Y-m-d H:m:s'),
                        ]);  
                }
                if ($data['name13']!=="")
                {
                       DB::table('entryformplayers')->insert([
                            'entryform_id' => $entryform_id,
                            'name' => $data['name13'],
                            'user_id' => $data['name13_indexNo'],
                            'role' => 'team member',
                            'rating' => 0,
                            'created_at' => date('Y-m-d H:m:s'),
                            'updated_at' => date('Y-m-d H:m:s'),
                        ]);  
                }
                if ($data['name14']!=="")
                {
                       DB::table('entryformplayers')->insert([
                            'entryform_id' => $entryform_id,
                            'name' => $data['name14'],
                            'user_id' => $data['name14_indexNo'],
                            'role' => 'team member',
                            'rating' => 0,
                            'created_at' => date('Y-m-d H:m:s'),
                            'updated_at' => date('Y-m-d H:m:s'),
                        ]);  
                }
                if ($data['name15']!=="")
                {
                       DB::table('entryformplayers')->insert([
                            'entryform_id' => $entryform_id,
                            'name' => $data['name15'],
                            'user_id' => $data['name15_indexNo'],
                            'role' => 'team member',
                            'rating' => 0,
                            'created_at' => date('Y-m-d H:m:s'),
                            'updated_at' => date('Y-m-d H:m:s'),
                        ]);  
                }
                if ($data['name16']!=="")
                {
                       DB::table('entryformplayers')->insert([
                            'entryform_id' => $entryform_id,
                            'name' => $data['name16'],
                            'user_id' => $data['name16_indexNo'],
                            'role' => 'team member',
                            'rating' => 0,
                            'created_at' => date('Y-m-d H:m:s'),
                            'updated_at' => date('Y-m-d H:m:s'),
                        ]);  
                }
                if ($data['name17']!=="")
                {
                       DB::table('entryformplayers')->insert([
                            'entryform_id' => $entryform_id,
                            'name' => $data['name17'],
                            'user_id' => $data['name17_indexNo'],
                            'role' => 'team member',
                            'rating' => 0,
                            'created_at' => date('Y-m-d H:m:s'),
                            'updated_at' => date('Y-m-d H:m:s'),
                        ]);  
                }
                if ($data['name18']!=="")
                {
                       DB::table('entryformplayers')->insert([
                            'entryform_id' => $entryform_id,
                            'name' => $data['name18'],
                            'user_id' => $data['name18_indexNo'],
                            'role' => 'team member',
                            'rating' => 0,
                            'created_at' => date('Y-m-d H:m:s'),
                            'updated_at' => date('Y-m-d H:m:s'),
                        ]);  
                }
                
        return Redirect::to('teamcard');
    }

    public function confirmedApp()
    {
        $applications = DB::table('candidates')
                ->where([['status', 'confirmed'],['faculty',Auth::user()->faculty]])
                ->paginate(5);
        $title = 'Applications';
        return view('faculty_cap.applications')->with(compact(['title', 'applications']));
    }

    public function destroy($id)
    {
        DB::table('entryforms')->where('id', $id)->delete();
        DB::table('entryformplayers')->where('entryform_id', $id)->delete();
        return back();
    }

    public function show()
    {
        return DB::table('entryforms')
                        ->where('approval', 'false')
                       ->count();
    }
}
