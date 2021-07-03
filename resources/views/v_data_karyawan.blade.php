@extends('layout.v_tamplate')

@section('title')
    <h1>Data Karyawan</h1>
@endsection

@section('content')
    <div class="btn_tambah">
        <table class="">
            <td>
                <a href="inputkaryawan"><button type="button" class="btn btn-block btn-primary btn_tambah">Tambah</button></a>
            </td>
            <td>
                <form action="/carikaryawan" method="GET" class="form-inline ml-3">
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
                <table id="tabel_karyawan" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                        <th scope="col">Id Karyawan</th>
                        <th scope="col">Nama Karyawan</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">No Hp</th>
                        <th scope="col">Tanggal Lahir</th>
                        <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($tb_datakaryawan as $p)
                    <tr>
                        <td>{{ $p->id_karyawan }}</td>
                        <td>{{ $p->nama_karyawan}}</td>
                        <td>{{ $p->alamat}}</td>
                        <td>{{ $p->no_hp}}</td>
                        <td>{{ $p->tanggal_lahir}}</td>
                        <td>
                            <a href="/editkaryawan/{{ $p->id_karyawan }}"><i class="fa fa-edit" style="color:green"></i></a> | 
                            <a href="/deletekaryawan/{{ $p->id_karyawan }}"><i class="fa fa-trash" style="color :red"></i></a>
                        </td>
                        @endforeach
                        </tr>
                    </tbody>
                </table>
                {{ $tb_datakaryawan->links() }}
                <td>
                    <a href="/cetakkaryawan" class="btn btn-default btn-sm ml-3" target="_blank">Cetak Laporan PDF</a>
                </td>
@endsection