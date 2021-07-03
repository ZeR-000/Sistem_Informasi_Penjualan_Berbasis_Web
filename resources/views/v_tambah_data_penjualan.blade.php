@extends('layout.v_tamplate')

@section('content')
    <h1>Tambah Penjualan</h1>
    <form method="post" action="{{ url('data_penjualan/store') }}">
        @csrf
        <form class="row g-3" action="data_penjualan/store" method="post">
        {{ csrf_field() }}
        <div class="form-text"></div>
        <br>
        <div class="col-10">
            <label for="validationDefault01" class="form-label">Nama Karyawan</label>
            <select class="form-control" name="id_karyawan">
                @foreach($karyawan as $p)
                <option value="{{$p->id_karyawan}}">{{$p->nama_karyawan}}</option>
                @endforeach
            </select>
        </div>
        <br>
        <div class="col-10">
            <label for="validationDefault01" class="form-label">Nama Barang</label>
            <select class="form-control" name="kode_barang">
                @foreach($barang as $p)
                <option value="{{$p->kode_barang}}">{{$p->nama_barang}}</option>
                @endforeach
            </select>
        </div>
        <br>
        <div class="col-10">
            <label for="validationDefault01" class="form-label">Nama Pembeli</label>
            <select class="form-control" name="kode_pembeli">
                @foreach($pembeli as $p)
                <option value="{{$p->kode_pembeli}}">{{$p->nama_pembeli}}</option>
                @endforeach
            </select>
        </div>
        <br>
        <div class="col-10">
            <label for="validationDefault01" class="form-label">Nama Jenis</label>
            <select class="form-control" name="kode_jenis">
                @foreach($jenis as $p)
                <option value="{{$p->kode_jenis}}">{{$p->nama_jenis}}</option>
                @endforeach
            </select>
        </div>
        <br>
        <div class="col-10">
            <label for="validationDefault01" class="form-label">Jumlah Barang</label>
            <input type="text" name="jumlah_barang" class="form-control" id="validationDefault01" required>
        </div>
        <div class="col-10">
            <label for="validationDefault01" class="form-label">Total</label>
            <input type="text" name="total" class="form-control" id="validationDefault01" required>
        </div>
        <br>
        <div class="col-10">
            <label for="validationDefault01" class="form-label">Bayar</label>
            <input type="text" name="bayar" class="form-control" id="validationDefault01" required>
        </div>
        <br>
        <div class="col-10">
            <label for="validationDefault01" class="form-label">Kembalian</label>
            <input type="text" name="kembalian" class="form-control" id="validationDefault01" required>
        </div>
        <br>
        <div class="col-10">
            <label for="validationDefault01" class="form-label">Tanggal</label>
            <input type="text" name="tanggal" class="form-control" id="validationDefault01" required>
        </div>
        <br>
        <div class="col-10" >
            <button type="submit" class="btn">Simpan</button>
            <button type="button" class="btn"><a href="/data_penjualan">Back</a></button>
        </div>
    </form>
@endsection