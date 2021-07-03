@extends('layout.v_tamplate')
@section('content')
    <h1>Edit Stok</h1>
    @foreach($tb_stokbarang as $p)
            <form class="row g-3" action="/updatestok" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $p->kode_barang }}"> <br>
            <div class="col-10">
                <label for="validationDefault01" class="form-label">Nama Barang</label>
                <input type="text" name="nama_barang" value="{{ $p->nama_barang }}" class="form-control" id="validationDefault01" required>
            </div>
            <br>
            <div class="col-10">
                <label for="validationDefault01" class="form-label">Kode Jenis</label>
                <input type="text" name="kode_jenis" value="{{ $p->kode_jenis }}" class="form-control" id="validationDefault01" readonly>
            </div>
            <br>
            <div class="col-10">
                <label for="validationDefault01" class="form-label">Harga</label>
                <input type="text" name="harga" required="required" value="{{ $p->harga }}" class="form-control" id="validationDefault01" required>
            </div>
            <div class="col-10">
                <label for="validationDefault01" class="form-label">Jumlah Stok</label>
                <input type="text" name="jumlah_stok" required="required" value="{{ $p->jumlah_stok }}" class="form-control" id="validationDefault01" required>
            </div>
            <br>
            <div class="col-10" >
                <button type="submit" class="btn">Simpan</button>
                <button type="button" class="btn"><a href="/data_stok_barang">Back</a></button>
            </div>
            </form>
    @endforeach
@endsection