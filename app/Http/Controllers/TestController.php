<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Entryform;
use App\Entryformplayer;
use View;
class TestController extends Controller
{
    public function viewTest()
    {
    	
 		return View::make('test');
    }

    public function doTest()
    {
    	echo "done";
    }
}
