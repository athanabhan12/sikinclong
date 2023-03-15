<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class TransaksiController extends Controller
{
    public function index() {
        $transaksi = Transaksi::join('pelanggans','transaksis.id','=','pelanggans.id_transaksi')
                                ->get(['transaksis.*','pelanggans.*']);
        return view('transaksi')->with('transaksi', $transaksi);
    }
    public function create()
    {
        $transaksi = DB::table('pelanggans')->pluck('nama_pelanggan', 'id');
        return view('tambah-transaksi', compact('transaksi'));
    }
    public function store(Request $request)
    {
        $transaksi = Transaksi::join('pelanggans','transaksis.id','=','pelanggans.id_transaksi')
                                ->get(['transaksis.*','pelanggans.*']); 
        $transaksi                          = new Transaksi;
        $transaksi->nama_pelanggan           = $request->nama_pelanggan;
        $transaksi->tgl_transaksi           = $request->tgl_transaksi;
        $transaksi->tgl_bayar               = $request->tgl_bayar;
        $transaksi->batas_waktu             = $request->batas_waktu;
        $transaksi->biaya_tambahan          = $request->biaya_tambahan;
        $transaksi->diskon                  = $request->diskon;
        $transaksi->pajak                   = $request->pajak;
        $transaksi->total_pembayaran        = $request->total_pembayaran;

        $transaksi->save();

        return redirect('transaksi');
    }
    public function detail($id)
    {
        $transaksi = Transaksi::join('pelanggans','transaksis.id','=','pelanggans.id_transaksi')
                                // ->join('pakets','transaksis.id','=','pakets.id_transaksi')
                                ->where('transaksis.id', '=', $id)
                                ->get(['transaksis.*','pelanggans.*']);
        return view('detail')->with('transaksi', $transaksi);
    }
    public function edit($id)
    {
        $transaksi = Transaksi::whereId($id)->first();
        return view('edit-status')->with('transaksi', $transaksi);
    }
    public function update(Request $request, $id)
    {
        $transaksi                             = Transaksi::find($id);
        $transaksi->status                     = $request->status;
        $transaksi->dibayar                    = $request->dibayar;

        $transaksi->save();

        return redirect('transaksi');
    }
}
