<?php

namespace App\Http\Controllers;

use App\Models\Outlet;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OutletController extends Controller
{
    public function index() {
        $outlet = Outlet::all();
        return view('outlet')->with('outlet', $outlet);
    }
    public function create()
    {
        return view('tambah_outlet');
    }
    public function store(Request $request)
    {
        $outlet                             = new Outlet;
        $outlet->nama_outlet                = $request->nama_outlet;
        $outlet->alamat_outlet              = $request->alamat_outlet;
        $outlet->no_telp_outlet             = $request->no_telp_outlet;
        $outlet->save();

        return redirect('outlet');
    }
    public function edit($id)
    {
        $outlet = Outlet::whereId($id)->first();
        return view('edit-outlet')->with('outlet', $outlet);
    }
    public function update(Request $request, $id)
    {
        $outlet                      = Outlet::find($id);
        $outlet->nama_outlet         = $request->nama_outlet;
        $outlet->no_telepon          = $request->no_telepon;
        $outlet->alamat              = $request->alamat;

        $outlet->save();

        return redirect('outlet');
    }
    public function hapus($id){
        $outlet = Outlet::find($id);
        $outlet->delete();

        return redirect('outlet');
    }
}
