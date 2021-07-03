@extends('layout.v_tamplate')
@section('content')
    <h1>Edit Jenis</h1>
    @foreach($tb_datajenis as $p)
            <form class="row g-3" action="/updatejenis" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $p->kode_jenis }}"> <br>
            <div class="col-10">
                <label for="validationDefault01" class="form-label">Nama Jenis</label>
                <input type="text" name="nama_jenis" value="{{ $p->nama_jenis }}" class="form-control" id="validationDefault01" required>
            </div>
            <br>
            <div class="col-10" >
                <button type="submit" class="btn">Simpan</button>
                <button type="button" class="btn"><a href="/data_jenis">Back</a></button>
            </div>
            </form>
    @endforeach
@endsection