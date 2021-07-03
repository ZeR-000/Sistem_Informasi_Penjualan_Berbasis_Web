<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class StokController extends Controller
{
    public function tampil(){
        $pembeli = DB::table('tb_stokbarang')->get();
        return view('v_data_stok_barang',['tb_stokbarang'=>$pembeli]);
    }

    public function tambah()
    {
        $jenis =DB::table('tb_datajenis')->get();
        return view('v_tambah_data_stok_barang',['jenis'=>$jenis]);
        // return view('v_tambah_data_stok_barang');
    }

    public function cari(Request $request)
    {
        $cari = $request->cari;
        $stok = DB::table('tb_stokbarang')->where('nama_barang','like',"%".$cari."%")->simplePaginate(5);
        return view('v_data_stok_barang',['tb_stokbarang' => $stok]);
    }

    public function cetak()
    {
        $stok = DB::table('tb_stokbarang')->get();
        $pdf = PDF::loadview('v_cetak_data_stok',['tb_stokbarang'=>$stok]);
        return $pdf->download('Data-StokBarang.pdf');
    }

    public function store(Request $request)
    {
        
        DB::table('tb_stokbarang')->insert
        (
            [
                'nama_barang' => $request->nama_barang,
                'kode_jenis' => $request->kode_jenis,
                'harga' => $request->harga,
                'jumlah_stok' => $request->jumlah_stok,
            ]
        );
        
        return redirect('data_stok_barang');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $pembeli = DB::table('tb_stokbarang')->where('kode_barang',$id)->get();

        return view('v_edit_data_stok_barang',['tb_stokbarang' => $pembeli]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        
        DB::table('tb_stokbarang')->where('kode_barang',$request->id)->update([
                'nama_barang' => $request->nama_barang,
                'kode_jenis' => $request->kode_jenis,
                'harga' => $request->harga,
                'jumlah_stok' => $request->jumlah_stok,
        ]);

        return redirect('data_stok_barang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('tb_stokbarang')->where('kode_barang',$id)->delete();
        return redirect('/data_stok_barang');
    }
}
