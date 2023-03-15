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
                            <a href="">Tambah Data</a>
                        </li>
                    </ul>
                </div>
                <form action="{{ url('transaksi/store') }}" method="post">
                    @csrf
                    <div class="form-row mt-3">
                    <h3 class="ml-2" for="nama">Nama Pelanggan</h3>
        <select class="form-control" id="option" name="option">
                        <option readonly>--Pilih Nama Pelanggan--</option>
                    @foreach($transaksi as $datas => $name)
                        <option>{{ $name }}</option>
                    @endforeach
        </select>
                    </div>
                    <!-- <div class="form-row mt-3">
                        <div class="col">
                            <h3 class="ml-2" for="nama">Tanggal Transaksi</h3>
                            <input type="date" class="form-control" placeholder="Tanggal Transaksi" name="tgl_transaksi">
                        </div>
                        <div class="col">
                            <h3 class="ml-2" for="nama">Batas Waktu</h3>
                            <input type="date" class="form-control" placeholder="Batas Waktu" name="batas_waktu">
                        </div>
                    </div> -->
                    <div class="form-row mt-3">
                        <div class="col">
                            <h3 class="ml-2" for="nama">Tanggal Transaksi</h3>
                            <input type="date" class="form-control" placeholder="Tanggal Transaksi" name="tgl_transaksi">
                        </div>
                        <div class="col">
                            <h3 class="ml-2" for="nama">Batas Waktu</h3>
                            <input type="date" class="form-control" placeholder="Batas Waktu" name="batas_waktu">
                        </div>
                    </div>
                    <div class="form-row mt-3">
                        <div class="col">
                            <h3 class="ml-2" for="nama">Tanggal Bayar</h3>
                            <input type="date" class="form-control" placeholder="Tangga Bayar" name="tgl_bayar">
                        </div>
                        <div class="col">
                            <h3 class="ml-2" for="nama">Diskon</h3>
                            <input type="text" class="form-control" placeholder="Diskon" name="diskon">
                        </div>
                    </div>
                    <div class="form-row mt-3">
                        <div class="col">
                            <h3 class="ml-2" for="nama">Pajak</h3>
                            <input type="number" class="form-control" id="jual" placeholder="Pajak" name="pajak" onkeyup="sum();">
                        </div>
                        <div class="col">
                            <h3 class="ml-2" for="nama">Biaya Tambahan</h3>
                            <input type="number" class="form-control" id="beli" placeholder="Biaya Tambahan"
                                name="biaya_tambahan" onkeyup="sum();">
                        </div>
                    </div>
                    <div class="form-row mt-3">
                        <div class="col">
                            <h3 class="ml-2" for="nama">Status Cucian</h3>
                            <select class="form-control">
                                <option value="baru">Baru</option>
                                <option value="proses">Proses</option>
                                <option value="selesai">Selsai</option>
                                <option value="diambil">Di ambil</option>
                            </select>
                        </div>
                        <div class="col">
                            <h3 class="ml-2" for="nama">Status Transaksi</h3>
                            <select class="form-control">
                                <option value="belum bayar">Belum Bayar</option>
                                <option value="dibayar">Dibayar</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row mt-3">
                    <h3 class="ml-2" for="nama">Total Pembayaran</h3>
                    <input type="number" class="form-control" placeholder="Total Pembayaran"
                                name="total_pembayaran" id="hasil" onkeyup="sum();" readonly>
                    </div>
                    <button type="submit" class="btn btn-primary rounded-pill mt-3"
                        style="float: right;">SIMPAN</button>
                </form>
                <a href="{{ route('pelanggan') }}"><button type="submit"
                        class="btn btn-success rounded-pill mt-3">Kembali</button></a>
            </div>
        </div>
    </div>
    <script>
        function sum() {
            var txtFirstNumberValue = document.getElementById('jual').value;
            var txtSecondNumberValue = document.getElementById('beli').value;
            var result = parseInt(txtFirstNumberValue) + parseInt(txtSecondNumberValue);
            if (!isNaN(result)){
                document.getElementById('hasil').value=result;
            }
        }
    </script>
@endsection
