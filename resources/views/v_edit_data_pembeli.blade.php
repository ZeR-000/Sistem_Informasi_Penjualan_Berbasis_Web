@extends('layout.v_tamplate')
@section('content')
    <h1>Edit Pembeli</h1>
    @foreach($tb_datapembeli as $p)
            <form class="row g-3" action="/updatepembeli" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $p->kode_pembeli }}"> <br>
            <div class="col-10">
                <label for="validationDefault01" class="form-label">Nama Pembeli</label>
                <input type="text" name="nama_pembeli" value="{{ $p->nama_pembeli }}" class="form-control" id="validationDefault01" required>
            </div>
            <br>
            <div class="col-10">
                <label for="validationDefault01" class="form-label">Alamat Pembeli</label>
                <input type="text" name="alamat_pembeli" value="{{ $p->alamat_pembeli }}" class="form-control" id="validationDefault01" required>
            </div>
            <br>
            <div class="col-10">
                <label for="validationDefault01" class="form-label">No Hp</label>
                <input type="text" name="no_hp" required="required" value="{{ $p->no_hp }}" class="form-control" id="validationDefault01" required>
            </div>
            <br>
            <div class="col-10" >
                <button type="submit" class="btn">Simpan</button>
                <button type="button" class="btn"><a href="/data_pembeli">Back</a></button>
            </div>
            </form>
    @endforeach
@endsection