<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use App\Models\Outlet;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $jumlah_pelanggan   = Pelanggan::count();
        $jumlah_outlet      = Outlet::count();
        $jumlah_transaksi   = Transaksi::count();

        $masuk_jan      =Pelanggan::whereMonth('tgl_register', '01')->count();
        $masuk_feb      =Pelanggan::whereMonth('tgl_register', '02')->count();
        $masuk_mar      =Pelanggan::whereMonth('tgl_register', '03')->count();
        $masuk_apr      =Pelanggan::whereMonth('tgl_register', '04')->count();
        $masuk_mei      =Pelanggan::whereMonth('tgl_register', '05')->count();
        $masuk_jun      =Pelanggan::whereMonth('tgl_register', '06')->count();
        $masuk_jul      =Pelanggan::whereMonth('tgl_register', '07')->count();
        $masuk_agu      =Pelanggan::whereMonth('tgl_register', '08')->count();
        $masuk_sep      =Pelanggan::whereMonth('tgl_register', '09')->count();
        $masuk_okt      =Pelanggan::whereMonth('tgl_register', '10')->count();
        $masuk_nov      =Pelanggan::whereMonth('tgl_register', '11')->count();
        $masuk_des      =Pelanggan::whereMonth('tgl_register', '12')->count();

        // $masuk_jan      =Transaksi::whereMonth('tgl_transaksi', '01')->count();
        // $masuk_feb      =Transaksi::whereMonth('tgl_transaksi', '02')->count();
        // $masuk_mar      =Transaksi::whereMonth('tgl_transaksi', '03')->count();
        // $masuk_apr      =Transaksi::whereMonth('tgl_transaksi', '04')->count();
        // $masuk_mei      =Transaksi::whereMonth('tgl_transaksi', '05')->count();
        // $masuk_jun      =Transaksi::whereMonth('tgl_transaksi', '06')->count();
        // $masuk_jul      =Transaksi::whereMonth('tgl_transaksi', '07')->count();
        // $masuk_agu      =Transaksi::whereMonth('tgl_transaksi', '08')->count();
        // $masuk_sep      =Transaksi::whereMonth('tgl_transaksi', '09')->count();
        // $masuk_okt      =Transaksi::whereMonth('tgl_transaksi', '10')->count();
        // $masuk_nov      =Transaksi::whereMonth('tgl_transaksi', '11')->count();
        // $masuk_des      =Transaksi::whereMonth('tgl_transaksi', '12')->count();

        return view('home',
        compact('jumlah_pelanggan',
                'jumlah_outlet',
                'jumlah_transaksi',
                'masuk_jan',
                'masuk_feb',
                'masuk_mar',
                'masuk_apr',
                'masuk_mei',
                'masuk_jun',
                'masuk_jul',
                'masuk_agu',
                'masuk_sep',
                'masuk_okt',
                'masuk_nov',
                'masuk_des'
    ));


    }
}
