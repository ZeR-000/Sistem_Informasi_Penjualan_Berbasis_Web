@extends('layout.v_tamplate')

@section('title')
    <h1>Data Pembeli</h1>
@endsection

@section('content')
    <div class="btn_tambah">
        <table class="">
            <td>
                <a href="inputpembeli"><button type="button" class="btn btn-block btn-primary btn_tambah">Tambah</button></a>
            </td>
            <td>
                <form action="/caripembeli" method="GET" class="form-inline ml-3">
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
                <table id="tabel_pembeli" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                        <th scope="col">Kode Pembeli</th>
                        <th scope="col">Nama Pembeli</th>
                        <th scope="col">Alamat Pembeli</th>
                        <th scope="col">No Hp</th>
                        <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($tb_datapembeli as $p)
                    <tr>
                        <td>{{ $p->kode_pembeli }}</td>
                        <td>{{ $p->nama_pembeli}}</td>
                        <td>{{ $p->alamat_pembeli}}</td>
                        <td>{{ $p->no_hp}}</td>
                        <td>
                            <a href="/editpembeli/{{ $p->kode_pembeli }}"><i class="fa fa-edit" style="color:green"></i></a> | 
                            <a href="/deletepembeli/{{ $p->kode_pembeli }}"><i class="fa fa-trash" style="color :red"></i></a>
                        </td>
                        @endforeach
                        </tr>
                    </tbody>
                </table>
                {{ $tb_datapembeli->links() }}
                <td>
                    <a href="/cetakpembeli" class="btn btn-default btn-sm ml-3" target="_blank">Cetak Laporan PDF</a>
                </td>
                
@endsection