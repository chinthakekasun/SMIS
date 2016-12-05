<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class EditprofileController extends Controller
{
    public function showEditprofile()
    {
        return view('common.editprofile')
        ->with('title','Edit Profile');    
    }
    public function doEditprofile()
    {
        return view('editprofile');    
    }
}
