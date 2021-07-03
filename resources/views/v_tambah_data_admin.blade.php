@extends('layout.v_tamplate')

@section('content')
    <h1>Tambah Admin</h1>
    <form method="post" action="{{ url('data_admin/store') }}">
        @csrf
        <form class="row g-3" action="data_admin/store" method="post">
        {{ csrf_field() }}
        <div class="form-text"></div>
        <br>
        <div class="col-10">
            <label for="validationDefault01" class="form-label">Username</label>
            <input type="text" name="username" class="form-control" id="validationDefault01" required>
        </div>
        <br>
        <div class="col-10">
            <label for="validationDefault01" class="form-label">Password</label>
            <input type="text" name="password" class="form-control" id="validationDefault01" required>
        </div>
        <br>
        <div class="col-10">
            <label for="validationDefault01" class="form-label">Level</label>
            <input type="text" name="level" class="form-control" id="validationDefault01" required>
        </div>
        <br>
        <div class="col-10" >
            <button type="submit" class="btn">Simpan</button>
            <button type="button" class="btn"><a href="/data_admin">Back</a></button>
        </div>
    </form>
@endsection