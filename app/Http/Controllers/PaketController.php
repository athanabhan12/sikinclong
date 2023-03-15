<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class PaketController extends Controller
{
    public function index() {
        $paket = Paket::all();
        return view('paket')->with('paket', $paket);
    }
    public function create()
    {
        $paket = DB::table('pakets')->pluck('jenis_paket', 'id');
        return view('tambah_paket', compact('paket'));
    }
    public function store(Request $request)
    {
        $paket                           = new Paket;
        $paket->nama_paket               = $request->nama_paket;
        $paket->jenis_paket              = $request->jenis_paket;
        $paket->harga                    = $request->harga;

        $paket->save();

        return redirect('paket');
    }
    public function edit($id)
    {
        $paket = Paket::whereId($id)->first();
        return view('edit-paket')->with('paket', $paket);
    }
    public function update(Request $request, $id)
    {
        $paket                          = Paket::find($id);
        $paket->nama_paket              = $request->nama_paket;
        $paket->jenis_paket             = $request->jenis_paket;
        $paket->harga                   = $request->harga;
        $paket->save();

        return redirect('paket');
    }
    public function hapus($id){
        $paket = Paket::find($id);
        $paket->delete();

        return redirect('paket');
    }
}
