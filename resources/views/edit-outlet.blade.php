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
                    <li class="nav-item active">
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
                    <h4 class="page-title">Data Outlet</h4>
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
                            <a href="{{ route('outlet') }}">Data Outlet</a>
                        </li>
                        <li class="separator">
                            <i class="flaticon-right-arrow"></i>
                        </li>
                        <li class="nav-item">
                            <a href="#">Ubah Data</a>
                        </li>
                    </ul>
                </div>
                <form action="{{ url('outlet/update') }}/{{ $outlet->id }}" method="post">
                    @csrf
                    <div class="form-row">
                        <div class="col">
                            <h3 class="ml-2" for="nama">Nama Outlet</h3>
                            <input type="text" class="form-control" placeholder="Nama Outlet" name="nama"
                                value="{{ $outlet->nama_outlet }}">
                        </div>
                        <div class="col">
                            <h3 class="ml-2" for="no_telepon_darurat">No.Telepon</h3>
                            <input type="text" class="form-control" placeholder="No.Telepon" name="no_telp_outlet"
                                value="{{ $outlet->no_telp_outlet }}">
                        </div>
                    </div>
                    <div class="form-row mt-4">
                        <div class="col">
                            <h3 for="Jenis Kelamin" for="jenis_kelamin">Alamat</h3><br>
                            <textarea class="form-control" cols="30" rows="10" aria-label="With textarea" name="alamat_outlet"
                                value="{{ $outlet->alamat_outlet }}"></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary rounded-pill mt-3" style="float: right;">SIMPAN</button>
                </form>
                <a href="{{ route('outlet') }}"><button type="submit"
                        class="btn btn-success rounded-pill mt-3">Kembali</button></a>
            </div>
        </div>
    </div>
@endsection
