@extends('layouts.lol')

@section('content')
<div class="sidebar">

        <div class="sidebar-background"></div>
        <div class="sidebar-wrapper scrollbar-inner">
            <div class="sidebar-content">
                <div class="user">
                    <div class="info">
                        <div class="clearfix"></div>
                        <div class="collapse in" id="collapseExample">
                        </div>
                    </div>
                </div>
                <ul class="nav">
                    <li class="nav-item active">
                        <a href="{{ route('home') }}">
                            <i class="fas fa-home"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    @if(Auth::user()->role == 'kasir')
                    <li class="nav-item">
                    <a href="{{ route('pelanggan') }}">
                            <i class="fas fa-users"></i>
                            <p>Pelanggan</p>
                        </a>
                    </li>
                    @endif
                    @if(Auth::user()->role == 'admin')
                    <li class="nav-item">
                    <a href="{{ route('pelanggan') }}">
                            <i class="fas fa-users"></i>
                            <p>Pelanggan</p>
                        </a>
                    </li>
                    @endif
                    @if(Auth::user()->role == 'admin')
                    <li class="nav-item">
                        <a href="{{ route('pengguna') }}">
                            <i class="fa-solid fa-user"></i>
                            <p>Pengguna</p>
                        </a>
                    </li>
                    @endif
                    @if(Auth::user()->role == 'admin')
                    <li class="nav-item">
                    <a href="{{ route('outlet') }}">
                            <i class="fa-solid fa-shop"></i>
                            <p>Outlet</p>
                        </a>
                    </li>
                    @endif
                    @if(Auth::user()->role == 'admin')
                    <li class="nav-item">
                    <a href="{{ route('paket') }}">
                            <i class="fa-solid fa-basket-shopping"></i>
                            <p>Paket Cucian</p>
                        </a>
                    </li>
                    @endif
                    @if(Auth::user()->role == 'kasir')
                    <li class="nav-item">
                    <a href="{{ route('transaksi') }}">
                            <i class="fa-solid fa-money-bill-transfer"></i>
                            <p>Transaksi</p>
                        </a>
                    </li>
                    @endif
                    @if(Auth::user()->role == 'admin')
                    <li class="nav-item">
                    <a href="{{ route('transaksi') }}">
                            <i class="fa-solid fa-money-bill-transfer"></i>
                            <p>Transaksi</p>
                        </a>
                    </li>
                    @endif
                    @if(Auth::user()->role == 'kasir')
                    <li class="nav-item">
                        <a data-toggle="collapse" href="#forms">
                            <i class="fa-solid fa-file-invoice"></i>
                            <p>Laporan</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="forms">
                            <ul class="nav nav-collapse">
                                <li>
                                <a href="{{ route('laporan-pelanggan') }}">
                                        <span class="sub-item">Pelanggan</span>
                                    </a>
                                </li>
                                <li>
                                <a href="{{ route('laporan-outlet') }}">
                                        <span class="sub-item">Outlet</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('laporan-transaksi') }}">
                                        <span class="sub-item">Transaksi</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    @endif
                    @if(Auth::user()->role == 'admin')
                    <li class="nav-item">
                        <a data-toggle="collapse" href="#forms">
                            <i class="fa-solid fa-file-invoice"></i>
                            <p>Laporan</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="forms">
                            <ul class="nav nav-collapse">
                                <li>
                                <a href="{{ route('laporan-pelanggan') }}">
                                        <span class="sub-item">Pelanggan</span>
                                    </a>
                                </li>
                                <li>
                                <a href="{{ route('laporan-outlet') }}">
                                        <span class="sub-item">Outlet</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('laporan-transaksi') }}">
                                        <span class="sub-item">Transaksi</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    @endif
                    @if(Auth::user()->role == 'owner')
                    <li class="nav-item">
                        <a data-toggle="collapse" href="#forms">
                            <i class="fa-solid fa-file-invoice"></i>
                            <p>Laporan</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="forms">
                            <ul class="nav nav-collapse">
                                <li>
                                <a href="{{ route('laporan-pelanggan') }}">
                                        <span class="sub-item">Pelanggan</span>
                                    </a>
                                </li>
                                <li>
                                <a href="{{ route('laporan-outlet') }}">
                                        <span class="sub-item">Outlet</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('laporan-transaksi') }}">
                                        <span class="sub-item">Transaksi</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    @endif
                    <li class="nav-item">
							<a data-toggle="collapse" href="#base">
                            <i class="fa-solid fa-gear"></i>
								<p>Option</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="base">
								<ul class="nav nav-collapse">
									<li>
                                    {{-- @guest('admin') --}}
                                        {{-- @else --}}
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                            class="sub-item">Logout</a>
									</li>
								</ul>
							</div>
						</li>
                </ul>
               
            </div>
        </div>
    </div>
    <div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <div class="page-header">
                    <h4 class="page-title">Dashboard</h4>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-md-3">
                        <div class="card card-stats card-round">
                            <div class="card-body ">
                                <div class="row align-items-center">
                                    <div class="col-icon">
                                        <div class="icon-big text-center icon-success bubble-shadow-small">
                                            <i class="fas fa-users"></i>
                                        </div>
                                    </div>
                                    <div class="col col-stats ml-3 ml-sm-0">
                                        <div class="numbers">
                                            <p class="card-category">Jumlah Pelanggan</p>
                                            <h4 class="card-title">{{ $jumlah_pelanggan }}</h4> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="card card-stats card-round">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-icon">
                                        <div class="icon-big text-center icon-info bubble-shadow-small">
                                            <i class="fa-solid fa-money-bill"></i>
                                        </div>
                                    </div>
                                    <div class="col col-stats ml-3 ml-sm-0">
                                        <div class="numbers">
                                            <p class="card-category">Jumlah Transaksi</p>
                                            <h4 class="card-title">{{ $jumlah_transaksi }}</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="card card-stats card-round">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-icon">
                                        <div class="icon-big text-center icon-warning bubble-shadow-small">
                                            <i class="fa-brands fa-sellsy"></i>
                                        </div>
                                    </div>
                                    <div class="col col-stats ml-3 ml-sm-0">
                                        <div class="numbers">
                                            <p class="card-category">Jumlah Penjualan</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="card card-stats card-round">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-icon">
                                        <div class="icon-big text-center icon-success bubble-shadow-small">
                                            <i class="far fa-check-circle"></i>
                                        </div>
                                    </div>
                                    <div class="col col-stats ml-3 ml-sm-0">
                                        <div class="numbers">
                                            <p class="card-category">Jumlah Outlet</p>  
                                            <h4 class="card-title">{{ $jumlah_outlet }}</h4>  
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
