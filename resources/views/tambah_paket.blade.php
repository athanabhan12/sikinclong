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
                    <li class="nav-item active">
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
                                <li class="nav-home">
                                    <a href="{{ route('home') }}">
                                        <i class="flaticon-home"></i>
                                    </a>
                                </li>
                                <li class="separator">
                                    <i class="flaticon-right-arrow"></i>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('paket') }}">Data Paket</a>
                                </li>
                                <li class="separator">
                                    <i class="flaticon-right-arrow"></i>
                                </li>
                                <li class="nav-item">
                                    <a href="#">Tambah Data</a>
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
                    <h4 class="page-title">Data Paket</h4>
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
                            <a href="{{ route('paket') }}">Data Paket</a>
                        </li>
                        <li class="separator">
                            <i class="flaticon-right-arrow"></i>
                        </li>
                        <li class="nav-item">
                            <a href="#">Tambah Data</a>
                        </li>
                    </ul>
                </div>
                <form action="{{ url('paket/store') }}" method="post">
                    @csrf
                    <div class="form-row">
                        <div class="col">
                            <h3 class="ml-2" for="nama">Nama Paket</h3>
                            <input type="text" class="form-control" placeholder="Nama Paket" name="nama_paket" required>
                        </div>
                        <div class="col">
                            <h3 class="ml-2" for="no_telepon_darurat">Harga</h3>
                            <input type="text" class="form-control" placeholder="Harga" name="harga" required>
                        </div>
                    </div>
                    <div class="form-row mt-5">
                        <div class="col">
                            <h3 class="ml-2" for="jenis_paket">Jenis Paket</h3>
                            <select class="form-control" id="option" name="option">
                        <option readonly>--Pilih Nama Pelanggan--</option>
                    @foreach($paket as $datas => $name)
                        <option>{{ $name }}</option>
                    @endforeach
        </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary rounded-pill mt-3" style="float: right;">SIMPAN</button>
                </form>
                <a href="{{ route('paket') }}"><button type="submit"
                        class="btn btn-success rounded-pill mt-3">Kembali</button></a>
            </div>
        </div>
    </div>
@endsection
