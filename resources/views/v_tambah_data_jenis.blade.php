@extends('layout.v_tamplate')

@section('content')
    <h1>Tambah Jenis</h1>
    <form method="post" action="{{ url('data_jenis/store') }}">
        @csrf
        <form class="row g-3" action="data_jenis/store" method="post">
        {{ csrf_field() }}
        <div class="form-text"></div>
        <br>
        <div class="col-10">
            <label for="validationDefault01" class="form-label">Nama Jenis</label>
            <input type="text" name="nama_jenis" class="form-control" id="validationDefault01" required>
        </div>
        <br>
        <div class="col-10" >
            <button type="submit" class="btn">Simpan</button>
            <button type="button" class="btn"><a href="/data_jenis">Back</a></button>
        </div>
    </form>
@endsection