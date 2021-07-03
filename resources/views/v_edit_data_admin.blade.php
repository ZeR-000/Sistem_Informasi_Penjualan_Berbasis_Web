@extends('layout.v_tamplate')
@section('content')
    <h1>Edit Admin</h1>
    @foreach($tb_dataadmin as $p)
            <form class="row g-3" action="/updateadmin" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $p->id_admin }}"> <br>
            <div class="col-10">
                <label for="validationDefault01" class="form-label">Username</label>
                <input type="text" name="username" value="{{ $p->username }}" class="form-control" id="validationDefault01" required>
            </div>
            <br>
            <div class="col-10">
                <label for="validationDefault01" class="form-label">Password</label>
                <input type="text" name="password" value="{{ $p->password }}" class="form-control" id="validationDefault01" required>
            </div>
            <br>
            <div class="col-10">
                <label for="validationDefault01" class="form-label">Level</label>
                <input type="text" name="level" required="required" value="{{ $p->level }}" class="form-control" id="validationDefault01" required>
            </div>
            <br>
            <div class="col-10" >
                <button type="submit" class="btn">Simpan</button>
                <button type="button" class="btn"><a href="/data_admin">Back</a></button>
            </div>
            </form>
    @endforeach
@endsection