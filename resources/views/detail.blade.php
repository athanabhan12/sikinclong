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
                    <li class="nav-item">
                        <a href="{{ route('home') }}">
                            <i class="fas fa-home"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    @if(Auth::user()->role=='kasir'')
                    <li class="nav-item">
                        <a href="{{ route('pelanggan') }}">
                            <i class="fas fa-users"></i>
                            <p>Pelanggan</p>
                        </a>
                    </li>
                    @endif
                    <li class="nav-item">
                        <a href="{{ route('pengguna') }}">
                            <i class="fa-solid fa-user"></i>
                            <p>Pengguna</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('outlet') }}">
                            <i class="fa-solid fa-shop"></i>
                            <p>Outlet</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('paket') }}">
                            <i class="fa-solid fa-basket-shopping"></i>
                            <p>Paket Cucian</p>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a href="{{ route('transaksi') }}">
                            <i class="fa-solid fa-money-bill-transfer"></i>
                            <p>Transaksi</p>
                        </a>
                    </li>
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
                </ul>
            </div>
        </div>
    </div>
    <div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <div class="page-header">
                    <h4 class="page-title">Data Transaksi</h4>
                    <ul class="breadcrumbs">
                        <li class="nav-home">
                            <a href="{{ route('home') }}">
                                <i class="flaticon-home"></i>
                            </a>
                        </li>
                        <li class="separator">
                            <i class="flaticon-right-arrow"></i>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('transaksi') }}">Data Transaksi</a>
                        </li>
                        <li class="separator">
                            <i class="flaticon-right-arrow"></i>
                        </li>
                        <li class="nav-item">
                            <a href="">Detail Data Transaksi</a>
                        </li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            @foreach ($transaksi as $data)
                                <div class="card-body">
                                    <div class="form-row">
                                        <div class="col">
                                            <h3 class="ml-2" for="nama">Nama Pelanggan</h3>
                                            <p class="form-control">{{ $data->nama_pelanggan }}</p>
                                        </div>
                                        <div class="col">
                                            <h3 class="ml-2" for="nama">Estimasi Pemberian</h3>
                                            <p class="form-control">{{ $data->estimasi_pemberian }}</p>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col">
                                            <h3 class="ml-2" for="nama">Nomor Telepon</h3>
                                            <p class="form-control">{{ $data->no_telp }}</p>
                                        </div>
                                        <div class="col">
                                            <h3 class="ml-2" for="nama">Tanggal Bayar</h3>
                                            <p class="form-control">{{ $data->tgl_bayar }}</p>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col">
                                            <h3 class="ml-2" for="nama">Alamat</h3>
                                            <p class="form-control">{{ $data->alamat }}</p>
                                        </div>
                                        <div class="col">
                                            <h3 class="ml-2" for="nama">Batas Waktu Pembayaran</h3>
                                            <p class="form-control">{{ $data->batas_waktu }}</p>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col">
                                            <h3 class="ml-2" for="nama">Status Cucian</h3>
                                            <p class="form-control">{{ $data->status_cucian }}</p>
                                        </div>
                                        <div class="col">
                                            <h3 class="ml-2" for="nama">Status Pembayaran</h3>
                                            <p class="form-control">{{ $data->status_transaksi }}</p>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col">
                                            <h3 class="ml-2" for="nama">Nama Paket</h3>
                                            <p class="form-control">{{ $data->nama_paket }}</p>
                                        </div>
                                        <div class="col">
                                            <h3 class="ml-2" for="nama">Jenis Paket</h3>
                                            <p class="form-control">{{ $data->jenis_paket }}</p>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col">
                                            <h3 class="ml-2" for="nama">Harga Paket</h3>
                                            <p class="form-control">{{ $data->harga }}</p>
                                        </div>
                                    </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <a href="{{ route('transaksi') }}"><button type="submit"
                    class="btn btn-success rounded-pill mt-3">Kembali</button></a>
        </div>
    </div>
    </div>
@endsection
