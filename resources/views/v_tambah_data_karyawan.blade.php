@extends('layout.v_tamplate')

@section('content')
    <h1>Tambah Karyawan</h1>
    <form method="post" action="{{ url('data_karyawan/store') }}">
        @csrf
        <form class="row g-3" action="data_karyawan/store" method="post">
        {{ csrf_field() }}
        <div class="form-text"></div>
        <br>
        <div class="col-10">
            <label for="validationDefault01" class="form-label">Nama Karyawan</label>
            <input type="text" name="nama_karyawan" class="form-control" id="validationDefault01" required>
        </div>
        <br>
        <div class="col-10">
            <label for="validationDefault01" class="form-label">Alamat</label>
            <input type="text" name="alamat" class="form-control" id="validationDefault01" required>
        </div>
        <br>
        <div class="col-10">
            <label for="validationDefault01" class="form-label">no_hp</label>
            <input type="text" name="no_hp" class="form-control" id="validationDefault01" required>
        </div>
        <div class="col-10">
            <label for="validationDefault01" class="form-label">tanggal_lahir</label>
            <input type="text" name="tanggal_lahir" class="form-control" id="validationDefault01" required>
        </div>
        <br>
        <div class="col-10" >
            <button type="submit" class="btn">Simpan</button>
            <button type="button" class="btn"><a href="/data_karyawan">Back</a></button>
        </div>
    </form>
@endsection