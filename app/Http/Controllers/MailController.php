<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Candidate;

class MailController extends Controller
{
    public function sendMail(Request $data)
    {
        $id = $data['id'];
        DB::table('candidates')
            ->where('id', $id)
            ->update(['status'=>'confirmed']);

    	$address = array('email' =>$data['email'] , 'name' =>$data['name'] );
    	$name = $data['name'];
    	
    	Mail::send('emails.mail',['name'=>$name], function($message) use ($address)
    	{
    		$message->to($address['email'], $address['name'])->subject('Welcome');
    	});

        return back()->with('message','Confirmation email was sent.');
    }

    public function sendMessage()
    {
        echo "Message send";
    }
}
