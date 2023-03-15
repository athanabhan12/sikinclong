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
                    <li class="nav-item active">
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
                    <li class="nav-item">
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
                    <h4 class="page-title">Data Pelanggan</h4>
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
                            <a href="{{ route('pelanggan') }}">Data Pelanggan</a>
                        </li>
                        <li class="separator">
                            <i class="flaticon-right-arrow"></i>
                        </li>
                        <li class="nav-item">
                            <a href="#">Ubah Data</a>
                        </li>
                    </ul>
                </div>
                <form action="{{ url('pelanggan/update') }}/{{ $pelanggan->id }}" method="post">
                    @csrf
                    <div class="form-row">
                        <div class="col">
                            <h3 class="ml-2" for="nama">Nama</h3>
                            <input type="text" class="form-control" placeholder="Name" name="nama_pelanggan"
                                value="{{ $pelanggan->nama_pelanggan }}">
                        </div>
                        <div class="col">
                            <h3 class="ml-2" for="no_telp">Umur</h3>
                            <input type="text" class="form-control" placeholder="Umur" name="umur"
                                value="{{ $pelanggan->umur }}">
                        </div>
                    </div>
                    <div class="form-row mt-5">
                        <div class="col">
                            <h3 class="ml-2" for="nama">Jenis Kelamin</h3>
                            <input type="text" class="form-control" placeholder="Umur" name="umur"
                                value="{{ $pelanggan->jenis_kelamin }}" readonly>
                        </div>
                        <div class="col">
                            <h3 class="ml-2" for="no_telepon">No.Telepon</h3>
                            <input type="text" class="form-control" placeholder="No.Telepon" name="no_telp"  value="{{ $pelanggan->no_telp }}">
                        </div>
                        <div class="col">
                            <h3 class="ml-2" for="no_telepon_darurat">No.Telepon Darurat</h3>
                            <input type="text" class="form-control" placeholder="No.Telepon Darurat"
                                name="no_telp_darurat"  value="{{ $pelanggan->no_telp_darurat }}">
                        </div>
                    </div>
                    <div class="form-row mt-5">
                        <div class="col">
                            <h3 for="Jenis Kelamin" for="jenis_kelamin">Alamat</h3><br>
                            <input type="text" class="form-control" placeholder="Umur" name="alamat"
                                value="{{ $pelanggan->alamat }}">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary rounded-pill mt-3"
                        style="float: right;">SIMPAN</button>
                </form>
                <a href="{{ route('pelanggan') }}"><button type="submit"
                        class="btn btn-success rounded-pill mt-3">Kembali</button></a>
            </div>
        </div>
    </div>
@endsection
