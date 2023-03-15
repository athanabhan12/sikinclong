<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PDF;

class PelangganController extends Controller
{
    public function index() {
        $pelanggans = Pelanggan::all();
        return view('pelanggan')->with('pelanggans', $pelanggans);
    }
    public function create()
    {
        return view('tambah_pelanggan');
    }
    public function store(Request $request)
    {
        $pelanggan                                    = new Pelanggan;
        $pelanggan->nama_pelanggan                    = $request->nama_pelanggan;
        $pelanggan->umur                              = $request->umur;
        $pelanggan->no_telp                           = $request->no_telp;
        $pelanggan->jenis_kelamin                     = $request->jenis_kelamin;
        $pelanggan->alamat                            = $request->alamat;
        $pelanggan->no_telp_darurat                   = $request->no_telp_darurat;
        $pelanggan->tgl_register                      = $request->tgl_register;

        $pelanggan->save();

        return redirect('pelanggan');
    }
    public function edit($id)
    {
        $pelanggan = Pelanggan::whereId($id)->first();
        return view('edit-pelanggan')->with('pelanggan', $pelanggan);
    }
    public function update(Request $request, $id)
    {
        $pelanggan                          = Pelanggan::find($id);
        $pelanggan->nama_pelanggan          = $request->nama_pelanggan;
        $pelanggan->umur                    = $request->umur;
        $pelanggan->no_telp                 = $request->no_telp;
        $pelanggan->jenis_kelamin           = $request->jenis_kelamin;
        $pelanggan->alamat                  = $request->alamat;
        $pelanggan->no_telp_darurat         = $request->no_telp_darurat;

        $pelanggan->save();

        return redirect('pelanggan');
    }
    public function hapus($id){
        $pelanggan = Pelanggan::find($id);
        $pelanggan->delete();

        return redirect('pelanggan');
    }
    public function export(){
        $pelanggan = Pelanggan::all();
        view()->share('pelanggan', $pelanggan);
        $pdf = PDF::loadview('export-pelanggan')->setPaper('a4', 'landscape');
        return $pdf->download('pelanggan.pdf');
        $pelanggan = new Pelanggan();
        $pelanggan->set('isRemoteEnabled', true);
        $pdf = new PDF($pelanggan);
    }
}
