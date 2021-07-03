@extends('layout.v_tamplate')
@section('content')
    <h1>Edit Penjualan</h1>
    @foreach($tb_datapenjualan as $p)
            <form class="row g-3" action="/updatepenjualan" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $p->kode_penjualan }}">
            <br>
            <div class="col-10">
                <label for="validationDefault01" class="form-label">ID Karyawan</label>
                <input type="text" name="id_karyawan" value="{{ $p->id_karyawan}}" class="form-control" id="validationDefault01" readonly>
            </div>
            <br>
            <div class="col-10">
                <label for="validationDefault01" class="form-label">Kode Barang</label>
                <input type="text" name="kode_barang" value="{{ $p->kode_barang}}" class="form-control" id="validationDefault01" readonly>
            </div>
            <br>
            <div class="col-10">
                <label for="validationDefault01" class="form-label">Kode Pembeli</label>
                <input type="text" name="kode_pembeli" value="{{ $p->kode_pembeli}}" class="form-control" id="validationDefault01" readonly>
            </div>
            <br>
            <div class="col-10">
                <label for="validationDefault01" class="form-label">Kode Jenis</label>
                <input type="text" name="kode_jenis" value="{{ $p->kode_jenis}}" class="form-control" id="validationDefault01" readonly>
            </div>
            <br>
            <div class="col-10">
                <label for="validationDefault01" class="form-label">Jumlah Barang</label>
                <input type="text" name="jumlah_barang" value="{{ $p->jumlah_barang}}" class="form-control" id="validationDefault01" required>
            </div>
            <br>
            <div class="col-10">
                <label for="validationDefault01" class="form-label">Total</label>
                <input type="text" name="total" value="{{ $p->total}}" class="form-control" id="validationDefault01" required>
            </div>
            <br>
            <div class="col-10">
                <label for="validationDefault01" class="form-label">Bayar</label>
                <input type="text" name="bayar" value="{{ $p->bayar }}" class="form-control" id="validationDefault01" required>
            </div>
            <br>
            <div class="col-10">
                <label for="validationDefault01" class="form-label">Kembalian</label>
                <input type="text" name="kembalian" required="required" value="{{ $p->kembalian }}" class="form-control" id="validationDefault01" required>
            </div>
            <div class="col-10">
                <label for="validationDefault01" class="form-label">Tanggal</label>
                <input type="text" name="tanggal" required="required" value="{{ $p->tanggal }}" class="form-control" id="validationDefault01" required>
            </div>
            <br>
            <div class="col-10" >
                <button type="submit" class="btn">Simpan</button>
                <button type="button" class="btn"><a href="/data_karyawan">Back</a></button>
            </div>
            </form>
    @endforeach
@endsection