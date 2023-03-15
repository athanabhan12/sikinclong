<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LaporantransaksiController extends Controller
{
    public function index() {
        $lapor_transaksi = Transaksi::join('pelanggans','transaksis.id','=','pelanggans.id_transaksi')
                                    ->get(['transaksis.*','pelanggans.*']);
        return view('laporan-transaksi')->with('lapor_transaksi', $lapor_transaksi);
    }
}
