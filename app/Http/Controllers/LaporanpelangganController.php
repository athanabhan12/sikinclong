<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LaporanpelangganController extends Controller
{
    public function index() {
        $lapor_pelanggan = Pelanggan::all();
        return view('laporan-pelanggan')->with('lapor_pelanggan', $lapor_pelanggan);
    }
}
