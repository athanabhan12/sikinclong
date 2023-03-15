<?php

namespace App\Http\Controllers;

use App\Models\Outlet;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LaporanoutletController extends Controller
{
    public function index() {
        $lapor_outlet = Outlet::all();
        return view('laporan-outlet')->with('lapor_outlet', $lapor_outlet);
    }
}
