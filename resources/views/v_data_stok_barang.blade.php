@extends('layout.v_tamplate')

@section('title')
    <h1>Data Stok Barang</h1>
@endsection

@section('content')
    <div class="btn_tambah">
        <table class="">
            <td>
                <a href="inputstok"><button type="button" class="btn btn-block btn-primary btn_tambah">Tambah</button></a>
            </td>
            <td>
                <form action="/caristok" method="GET" class="form-inline ml-3">
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
                <table id="tabel_stok" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                        <th scope="col">Kode Barang</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Kode Jenis</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Jumlah Stok</th>
                        <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($tb_stokbarang as $p)
                    <tr>
                        <td>{{ $p->kode_barang }}</td>
                        <td>{{ $p->nama_barang}}</td>
                        <td>{{ $p->kode_jenis}}</td>
                        <td>{{ $p->harga}}</td>
                        <td>{{ $p->jumlah_stok}}</td>
                        <td>
                            <a href="/editstok/{{ $p->kode_barang }}"><i class="fa fa-edit" style="color:green"></i></a> | 
                            <a href="/deletestok/{{ $p->kode_barang }}"><i class="fa fa-trash" style="color :red"></i></a>
                        </td>
                        @endforeach
                        </tr>
                    </tbody>
                </table>
                <td>
                    <a href="/cetakstok" class="btn btn-default btn-sm ml-3" target="_blank">Cetak Laporan PDF</a>
                </td>
@endsection