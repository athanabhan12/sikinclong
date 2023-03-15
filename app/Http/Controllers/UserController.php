<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index() {
        $pengguna = User::all();
        return view('pengguna')->with('pengguna', $pengguna);
    }
    public function create()
    {
        return view('tambah_pengguna');
    }
    public function store(Request $request)
    {
        $pengguna                          = new User;
        $pengguna->name                    = $request->name;
        $pengguna->email                   = $request->email;
        $pengguna->password                = $request->password;

        $pengguna->save();

        return redirect('pengguna');
    }

    public function hapus($id){
        $pengguna = User::find($id);
        $pengguna->delete();

        return redirect('pengguna');
    }
    public function edit($id)
    {
        $pengguna = User::whereId($id)->first();
        return view('edit-pengguna')->with('pengguna', $pengguna);
    }
    public function update(Request $request, $id)
    {
        $pengguna                          = User::find($id);
        $pengguna->name                    = $request->name;
        $pengguna->email                   = $request->email;
        $pengguna->password                = $request->password;

        $pengguna->save();

        return redirect('pengguna');
    }
}
