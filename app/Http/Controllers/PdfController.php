<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use App\Student;
use PDF;

class PdfController extends Controller
{
    public function createPdf($id)
    {
        $team = DB::table('entryforms')
                ->where('id', $id)
                ->get();
        $pdf=PDF::loadView('director.vista',['teamcards' => $team]);
        return $pdf->download('team.pdf');
    }
}
