<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Candidate;
use App\Candidatesport;

class ApplicationController extends Controller
{
    public function showApplycation($game)
    {
    	return view('application.application')
    	->with('title',$game);
    }

    
    public function doApplycation(Request $data)
    {
        $candidate_id=DB::table('candidates')->insertGetId([
                'appliedfor' => $data->Input('appliedfor'),
                'status' => 'not-accepted',
                'name' => $data->Input('name'),
                'indexnumber' => $data->Input('id'),
                'level' => $data->Input('level'),
                'dateofbirth' => $data->Input('date_of_birth'),
                'gender' => $data->Input('gender'),
                'faculty' => $data->Input('faculty'),
                //'bloodgp' => $data->Input('blood'),
                //'weight' => $data->Input('weight'),
                //'hight' => $data->Input('hight'),
                'address1' => $data->Input('address1'),
                'address2' => $data->Input('address2'),
                'address3' => $data->Input('address3'),
                'tele' => $data->Input('tpnumber'),
                'email' => $data->Input('email'),
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ]);
        
        if ($data->Input('event1')!=="")
        {
           DB::table('candidatesports')->insert([
                'candidate_id' => $candidate_id,
                'sports' => $data->Input('event1'),
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ]);
        }
        if ($data->Input('event2')!=="")
        {
           DB::table('candidatesports')->insert([
                'candidate_id' => $candidate_id,
                'sports' => $data->Input('event2'),
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ]);
        }
        if ($data->Input('event3')!=="")
        {
           DB::table('candidatesports')->insert([
                'candidate_id' => $candidate_id,
                'sports' => $data->Input('event3'),
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ]);
        }

        if (isset($data['crk']))
        {
           DB::table('candidatesports')->insert(['candidate_id' => $candidate_id, 'sports' => $data->Input('crk'), 'created_at' => date('Y-m-d H:m:s'), 'updated_at' => date('Y-m-d H:m:s'),
            ]);
        }
        if (isset($data['rgr']))
        {
           DB::table('candidatesports')->insert(['candidate_id' => $candidate_id, 'sports' => $data->Input('rgr'), 'created_at' => date('Y-m-d H:m:s'), 'updated_at' => date('Y-m-d H:m:s'),
            ]);
        }
        if (isset($data['ftb']))
        {
           DB::table('candidatesports')->insert(['candidate_id' => $candidate_id, 'sports' => $data->Input('ftb'), 'created_at' => date('Y-m-d H:m:s'), 'updated_at' => date('Y-m-d H:m:s'),
            ]);
        }
        if (isset($data['vlb']))
        {
           DB::table('candidatesports')->insert(['candidate_id' => $candidate_id, 'sports' => $data->Input('vlb'), 'created_at' => date('Y-m-d H:m:s'), 'updated_at' => date('Y-m-d H:m:s'),
            ]);
        }
        if (isset($data['bktb']))
        {
           DB::table('candidatesports')->insert(['candidate_id' => $candidate_id, 'sports' => $data->Input('bktb'), 'created_at' => date('Y-m-d H:m:s'), 'updated_at' => date('Y-m-d H:m:s'),
            ]);
        }
        if (isset($data['elle']))
        {
           DB::table('candidatesports')->insert(['candidate_id' => $candidate_id, 'sports' => $data->Input('elle'), 'created_at' => date('Y-m-d H:m:s'), 'updated_at' => date('Y-m-d H:m:s'),
            ]);
        }
        if (isset($data['bsb']))
        {
           DB::table('candidatesports')->insert(['candidate_id' => $candidate_id, 'sports' => $data->Input('bsb'), 'created_at' => date('Y-m-d H:m:s'), 'updated_at' => date('Y-m-d H:m:s'),
            ]);
        }
        if (isset($data['krt']))
        {
           DB::table('candidatesports')->insert(['candidate_id' => $candidate_id, 'sports' => $data->Input('krt'), 'created_at' => date('Y-m-d H:m:s'), 'updated_at' => date('Y-m-d H:m:s'),
            ]);
        }
        if (isset($data['tt']))
        {
           DB::table('candidatesports')->insert(['candidate_id' => $candidate_id, 'sports' => $data->Input('tt'), 'created_at' => date('Y-m-d H:m:s'), 'updated_at' => date('Y-m-d H:m:s'),
            ]);
        }
        if (isset($data['tkd']))
        {
           DB::table('candidatesports')->insert(['candidate_id' => $candidate_id, 'sports' => $data->Input('tkd'), 'created_at' => date('Y-m-d H:m:s'), 'updated_at' => date('Y-m-d H:m:s'),
            ]);
        }
        if (isset($data['crm']))
        {
           DB::table('candidatesports')->insert(['candidate_id' => $candidate_id, 'sports' => $data->Input('crm'), 'created_at' => date('Y-m-d H:m:s'), 'updated_at' => date('Y-m-d H:m:s'),
            ]);
        }
        if (isset($data['hky']))
        {
           DB::table('candidatesports')->insert(['candidate_id' => $candidate_id, 'sports' => $data->Input('hky'), 'created_at' => date('Y-m-d H:m:s'), 'updated_at' => date('Y-m-d H:m:s'),
            ]);
        }
        if (isset($data['chs']))
        {
           DB::table('candidatesports')->insert(['candidate_id' => $candidate_id, 'sports' => $data->Input('chs'), 'created_at' => date('Y-m-d H:m:s'), 'updated_at' => date('Y-m-d H:m:s'),
            ]);
        }
        if (isset($data['swm']))
        {
           DB::table('candidatesports')->insert(['candidate_id' => $candidate_id, 'sports' => $data->Input('swm'), 'created_at' => date('Y-m-d H:m:s'), 'updated_at' => date('Y-m-d H:m:s'),
            ]);
        }
        if (isset($data['tns']))
        {
           DB::table('candidatesports')->insert(['candidate_id' => $candidate_id, 'sports' => $data->Input('tns'), 'created_at' => date('Y-m-d H:m:s'), 'updated_at' => date('Y-m-d H:m:s'),
            ]);
        }
        if (isset($data['wrt']))
        {
           DB::table('candidatesports')->insert(['candidate_id' => $candidate_id, 'sports' => $data->Input('wrt'), 'created_at' => date('Y-m-d H:m:s'), 'updated_at' => date('Y-m-d H:m:s'),
            ]);
        }
        if (isset($data['wl']))
        {
           DB::table('candidatesports')->insert(['candidate_id' => $candidate_id, 'sports' => $data->Input('wl'), 'created_at' => date('Y-m-d H:m:s'), 'updated_at' => date('Y-m-d H:m:s'),
            ]);
        }
        if (isset($data['rr']))
        {
           DB::table('candidatesports')->insert(['candidate_id' => $candidate_id, 'sports' => $data->Input('rr'), 'created_at' => date('Y-m-d H:m:s'), 'updated_at' => date('Y-m-d H:m:s'),
            ]);
        }
        if (isset($data['ntb']))
        {
           DB::table('candidatesports')->insert(['candidate_id' => $candidate_id, 'sports' => $data->Input('ntb'), 'created_at' => date('Y-m-d H:m:s'), 'updated_at' => date('Y-m-d H:m:s'),
            ]);
        }
        if (isset($data['bdm']))
        {
           DB::table('candidatesports')->insert(['candidate_id' => $candidate_id, 'sports' => $data->Input('bdm'), 'created_at' => date('Y-m-d H:m:s'), 'updated_at' => date('Y-m-d H:m:s'),
            ]);
        }

        return Redirect::to('login')->with('message_success','Application was sent.');
        
        // return view('application.success')
        //         ->with('title',$data->Input('appliedfor'));
    }

    public function viewApplications()
    {
    	$badminton =  DB::table('candidates')
                 // ->groupBy('status')
                 ->where([['appliedfor','badminton'], ['status','not-accepted']])
                 //->paginate(5);
                 ->get();
        $basketball =  DB::table('candidates')
                 // ->groupBy('status')
                 ->where([['appliedfor','basketball'],  ['status','not-accepted']])
                 //->paginate(5);
                 ->get();
        $old = DB::table('candidates')
                ->where('status', 'confirmed')
                ->paginate(5);
                //->get();

        $view =  view('instructor.applications')->with('title','Applications');
        $view->badminton = $badminton;
        $view->basketball = $basketball;
        $view->old = $old;
        $view->num_old = count($old);
        $view->num_badminton = count($badminton);
        $view->num_basketball = count($basketball);
        return $view;
    }

     public function show()
    {
        return DB::table('candidates')
                 ->where('status','not-accepted')
                 ->count();
    }

   public function viewApp($id)
   {
      $application = DB::table('candidates')
                 ->where('id',$id)
                 ->get();
    $view = view('application.show_application')->with('title','Application'); 
    $view->applications=$application;
    return $view;
   }
}
