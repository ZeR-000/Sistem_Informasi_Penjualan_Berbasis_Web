@extends('layout.v_tamplate')

@section('title')
    <h1>Data Penjualan</h1>
@endsection

@section('content')
    <div class="btn_tambah">
        <table class="">
            <td>
                <a href="inputpenjualan"><button type="button" class="btn btn-block btn-primary btn_tambah">Tambah</button></a>
            </td>
            <td>
                <form action="/caripenjualan" method="GET" class="form-inline ml-3">
                    <div class="input-group input-group-sm">
                        <input name="cari" placeholder="Cari Nama" value="{{ old('cari') }}" type="text" class="form-control">
                        <span class="input-group-append">
                        <button type="submit" class="btn btn-primary btn-flat">Cari</button>
                        </span>
                    </div>
                </form>
            </td>
            <td></td>
            <td></td>
        </table>
        </div>
        
            <div class="card-body">
                <table id="tabel_penjualan" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                        <th scope="col">Kode Penjualan</th>
                        <th scope="col">Id Karyawan</th>
                        <th scope="col">Kode Barang</th>
                        <th scope="col">Kode Pembeli</th>
                        <th scope="col">Kode Jenis</th>
                        <th scope="col">Jumlah Barang</th>
                        <th scope="col">Total</th>
                        <th scope="col">Bayar</th>
                        <th scope="col">Kembalian</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($tb_datapenjualan as $p)
                    <tr>
                        <td>{{ $p->kode_penjualan}}</td>
                        <td>{{ $p->id_karyawan}}</td>
                        <td>{{ $p->kode_barang}}</td>
                        <td>{{ $p->kode_pembeli}}</td>
                        <td>{{ $p->kode_jenis}}</td>
                        <td>{{ $p->jumlah_barang}}</td>
                        <td>{{ $p->total}}</td>
                        <td>{{ $p->bayar}}</td>
                        <td>{{ $p->kembalian}}</td>
                        <td>{{ $p->tanggal}}</td>
                        <td>
                            <a href="/editpenjualan/{{ $p->kode_penjualan }}"><i class="fa fa-edit" style="color:green"></i></a> | 
                            <a href="/deletepenjualan/{{ $p->kode_penjualan }}"><i class="fa fa-trash" style="color :red"></i></a>
                        </td>
                        @endforeach
                        </tr>
                    </tbody>
                </table>
                <td>
                    <a href="/cetakpenjualan" class="btn btn-default btn-sm ml-3" target="_blank">Cetak Laporan PDF</a>
                </td>
@endsection