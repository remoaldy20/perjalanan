<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use PDF;

class AdminController extends Controller
{
    public function index()
    {
        $User = User::all();
        return view('admin.index', compact('User'));
    }

    public function cetak_pdf()
    {
    	$user = User::all();
 
    	$pdf = PDF::loadview('cetak-pdf',['user'=>$user]);
    	return $pdf->stream();
    }

    
}
