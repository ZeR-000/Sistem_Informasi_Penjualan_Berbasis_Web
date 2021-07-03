@extends('layout.v_tamplate')
@section('content')
    <h1>Edit Karyawan</h1>
    @foreach($tb_datakaryawan as $p)
            <form class="row g-3" action="/updatekaryawan" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $p->id_karyawan }}"> <br>
            <div class="col-10">
                <label for="validationDefault01" class="form-label">Nama Karyawan</label>
                <input type="text" name="nama_karyawan" value="{{ $p->nama_karyawan }}" class="form-control" id="validationDefault01" required>
            </div>
            <br>
            <div class="col-10">
                <label for="validationDefault01" class="form-label">Alamat</label>
                <input type="text" name="alamat" value="{{ $p->alamat }}" class="form-control" id="validationDefault01" required>
            </div>
            <br>
            <div class="col-10">
                <label for="validationDefault01" class="form-label">No Hp</label>
                <input type="text" name="no_hp" required="required" value="{{ $p->no_hp }}" class="form-control" id="validationDefault01" required>
            </div>
            <div class="col-10">
                <label for="validationDefault01" class="form-label">Tanggal Lahir</label>
                <input type="text" name="tanggal_lahir" required="required" value="{{ $p->tanggal_lahir }}" class="form-control" id="validationDefault01" required>
            </div>
            <br>
            <div class="col-10" >
                <button type="submit" class="btn">Simpan</button>
                <button type="button" class="btn"><a href="/data_karyawan">Back</a></button>
            </div>
            </form>
    @endforeach
@endsection