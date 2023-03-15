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
                    <li class="nav-item active">
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
                </ul>
            </div>
        </div>
    </div>
    <div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <div class="page-header">
                    <h4 class="page-title">Data Pengguna</h4>
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
                            <a href="{{ route('pengguna') }}">Data Pengguna</a>
                        </li>
                        <li class="separator">
                            <i class="flaticon-right-arrow"></i>
                        </li>
                        <li class="nav-item">
                            <a href="">Tambah Data</a>
                        </li>
                    </ul>
                </div>
                <form action="{{ url('pengguna/store') }}" method="post">
                    @csrf
                    <div class="form-row">
                        <div class="col">
                            <h3 class="ml-2" for="nama">Nama Pengguna</h3>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        </div>
                        <div class="col">
                            <h3 class="ml-2" for="password">Password</h3>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                    </div>
                    <div class="form-row mt-4">
                        <div class="col">
                            <h3 class="ml-2" for="email">Email</h3>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="col">
                            <h3 class="ml-2" for="nama">Role</h3>
                            <select class="form-control">
                                <option value="admin">Admin</option>
                                <option value="kasir">Kasir</option>
                                <option value="owner">Owner</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary rounded-pill mt-3" style="float: right;">SIMPAN</button>
                </form>
                <a href="{{ route('pengguna') }}"><button
                        type="submit"class="btn btn-success rounded-pill mt-3">Kembali</button></a>
            </div>
        </div>
    </div>
@endsection
