@extends('layout.v_tamplate')

@section('content')
    <h1>Tambah Stok</h1>
    <form method="post" action="{{ url('data_stok_barang/store') }}">
        @csrf
        <form class="row g-3" action="data_stok_barang/store" method="post">
        {{ csrf_field() }}
        <div class="form-text"></div>
        <br>
        <div class="col-10">
            <label for="validationDefault01" class="form-label">Nama Barang</label>
            <input type="text" name="nama_barang" class="form-control" id="validationDefault01" required>
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
        <div class="col-10">
            <label for="validationDefault01" class="form-label">Harga</label>
            <input type="text" name="harga" class="form-control" id="validationDefault01" required>
        </div>
        <div class="col-10">
            <label for="validationDefault01" class="form-label">Jumlah Stok</label>
            <input type="text" name="jumlah_stok" class="form-control" id="validationDefault01" required>
        </div>
        <br>
        <div class="col-10" >
            <button type="submit" class="btn">Simpan</button>
            <button type="button" class="btn"><a href="/data_stok_barang">Back</a></button>
        </div>
    </form>
@endsection