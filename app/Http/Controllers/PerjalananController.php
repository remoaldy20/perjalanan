<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perjalanan;
use App\User;
use Auth;

class PerjalananController extends Controller
{
    public function index()
    {
        $jalan = Perjalanan::where('user_id',Auth::user()->id)->paginate(3);
        return view('perjalanan.index', compact('jalan'));
    }

    public function create()
    {
        return view('perjalanan.create');
    }
  
    public function store(Request $request)
    {
        Perjalanan::create([
            'tanggal'=>$request->tanggal,
            'jam'=>$request->jam,
            'lokasi'=>$request->lokasi,
            'suhu_tubuh'=>$request->suhu_tubuh,
            'user_id'=> Auth::user()->id
        ]);
        return redirect('/perjalanan');
    }

    public function delete($id)
    {
        $delete = Perjalanan::find($id);
        $delete->delete();
        return redirect('/perjalanan');
    }

}
