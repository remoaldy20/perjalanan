<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class UserController extends Controller
{
    public function profile()
    {
        $profile = User::where('id',Auth::user()->id)->first();
        return view('profile.profile');
    }

    public function edit($id)
    {
        $edit = User::find($id);
        return view('profile.profile', compact('edit'));
    }

    public function update(request $request, $id)
    {

        if ($request->foto > 0) {
            $foto = $request->foto;
            $v_foto = time().rand(100,900).".".$foto->getClientOriginalName();
        }

        $edit = User::find($id);
        $data = [
            'nik' => $request->nik,
            'username' => $request->username,
            'nama' => $request->nama,
            'email' => $request->email,
            'no_telp' => $request->no_telp,
            'alamat' => $request->alamat
        ];
        if ($request->foto > 0 && isset($v_foto)) {
            $edit->foto = $v_foto;
        }
        if (isset($v_foto) > 0) {
            $foto->move(public_path().'/foto',$v_foto);
        }

        $edit->update($data);
        return redirect("/profile/$id");
    }
}
