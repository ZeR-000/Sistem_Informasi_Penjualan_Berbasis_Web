@extends('layout.v_tamplate')

@section('content')
    <h1>Tambah Pembeli</h1>
    <form method="post" action="{{ url('data_pembeli/store') }}">
        @csrf
        <form class="row g-3" action="data_pembeli/store" method="post">
        {{ csrf_field() }}
        <div class="form-text"></div>
        <br>
        <div class="col-10">
            <label for="validationDefault01" class="form-label">Nama Pembeli</label>
            <input type="text" name="nama_pembeli" class="form-control" id="validationDefault01" required>
        </div>
        <br>
        <div class="col-10">
            <label for="validationDefault01" class="form-label">Alamat Pembeli</label>
            <input type="text" name="alamat_pembeli" class="form-control" id="validationDefault01" required>
        </div>
        <br>
        <div class="col-10">
            <label for="validationDefault01" class="form-label">No Hp</label>
            <input type="text" name="no_hp" class="form-control" id="validationDefault01" required>
        </div>
        <br>
        <div class="col-10" >
            <button type="submit" class="btn">Simpan</button>
            <button type="button" class="btn"><a href="/data_pembeli">Back</a></button>
        </div>
    </form>
@endsection