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
                    <li class="nav-item">
                        <a href="{{ route('pelanggan') }}">
                            <i class="fas fa-users"></i>
                            <p>Pelanggan</p>
                        </a>
                    </li>
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
                        <a href="{{ route('home') }}">
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
                            <a href="{{ route('transaksi') }}">Transaksi</a>
                        </li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="">
                                    <div class="row align-items-start">
                                        <div class="col">
                                            <a href="{{ url('/transaksi/create') }}" class="btn btn-success mb-3"><i
                                                    class="flaticon-add" style="margin-right: 8px;"></i>TAMBAH
                                                DATA</a>
                                        </div>
                                        <form action="/kendaraan/cari" method="GET" class=" mx-auto offset-lg-3">
                                            <div class="row mr-4">
                                                <input class="col form-control" type="text" name="cari"
                                                    placeholder="Search" value="{{ old('cari') }}">
                                                <button class="btn btn-primary ml-1"><i
                                                        class="fa-solid fa-magnifying-glass"></i></button>
                                                <button class="btn btn-success ml-1"><i
                                                        class="col fa-solid fa-arrows-rotate"></i></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped" border="2">
                                        <thead style="background-color: rgb(255, 255, 255);">
                                            <tr>
                                                <th style="text-align: center">No</th>
                                                <th style="text-align: center">Nama Member</th>
                                                <th style="text-align: center">Tanggal Bayar</th>
                                                <th style="text-align: center">Batas Waktu</th>
                                                <th style="text-align: center">Status Transaksi</th>
                                                <th style="text-align: center;">ACTION</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($transaksi as $datas)
                                                <tr>
                                                    <td style="text-align: center;">{{ $loop->iteration }}</td>
                                                    <td style="text-align: center;">{{ $datas->nama_pelanggan }}</td>
                                                    <td style="text-align: center;">{{ $datas->tgl_bayar }}</td>
                                                    <td style="text-align: center;">{{ $datas->batas_waktu }}</td>
                                                    <td style="text-align: center;">{{ $datas->status_transaksi }}</td>
                                                    <td style="text-align: center;">
                                                        <a href="{{ url('/transaksi/detail') }}/{{ $datas->id }}"
                                                            class="btn btn-primary mb-3"><i class="fa-solid fa-file-invoice"
                                                                style="margin-right: 8px"></i>DETAIL</a>
                                                        <a href="{{ url('/transaksi/edit-status') }}/{{ $datas->id }}"
                                                            class="btn btn-success mb-3"><i
                                                                class="fa-solid fa-file-invoice"
                                                                style="margin-right: 8px"></i>UBAH STATUS</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
