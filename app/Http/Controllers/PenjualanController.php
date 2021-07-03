<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class PenjualanController extends Controller
{
    public function tampil(){
        $penjualan = DB::table('tb_datapenjualan')->get();
        return view('v_data_penjualan',['tb_datapenjualan'=>$penjualan]);
    }

    public function tambah()
    {
        $karyawan =DB::table('tb_datakaryawan')->get();
        $barang =DB::table('tb_stokbarang')->get();
        $pembeli =DB::table('tb_datapembeli')->get();
        $jenis =DB::table('tb_datajenis')->get();
        return view('v_tambah_data_penjualan',['karyawan'=>$karyawan,'barang'=>$barang,'pembeli'=>$pembeli,'jenis'=>$jenis]);
        // return view('v_tambah_data_stok_barang');
    }

    public function cari(Request $request)
    {
        $cari = $request->cari;
        $penjualan = DB::table('tb_datapenjualan')->where('kode_penjualan','like',"%".$cari."%")->simplePaginate(5);
        return view('v_data_penjualan',['tb_datapenjualan' => $penjualan]);
    }

    public function cetak()
    {
        $penjualan = DB::table('tb_datapenjualan')->get();
        $pdf = PDF::loadview('v_cetak_data_penjualan',['tb_datapenjualan'=>$penjualan]);
        return $pdf->download('Data-Penjualan.pdf');
    }

    public function store(Request $request)
    {
        
        DB::table('tb_datapenjualan')->insert
        (
            [
                'id_karyawan' => $request->id_karyawan,
                'kode_barang' => $request->kode_barang,
                'kode_pembeli' => $request->kode_pembeli,
                'kode_jenis' => $request->kode_jenis,
                'jumlah_barang' => $request->jumlah_barang,
                'total' => $request->total,
                'bayar' => $request->bayar,
                'kembalian' => $request->kembalian,
                'tanggal' => $request->tanggal,
            ]
        );
        
        return redirect('data_penjualan');
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

        $penjualan = DB::table('tb_datapenjualan')->where('kode_penjualan',$id)->get();
        return view('v_edit_data_penjualan',['tb_datapenjualan' => $penjualan]);
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
        
        DB::table('tb_datapenjualan')->where('kode_penjualan',$request->id)->update([
            'id_karyawan' => $request->id_karyawan,
            'kode_barang' => $request->kode_barang,
            'kode_pembeli' => $request->kode_pembeli,
            'kode_jenis' => $request->kode_jenis,
            'jumlah_barang' => $request->jumlah_barang,
            'total' => $request->total,
            'bayar' => $request->bayar,
            'kembalian' => $request->kembalian,
            'tanggal' => $request->tanggal,
        ]);

        return redirect('data_penjualan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('tb_datapenjualan')->where('kode_penjualan',$id)->delete();
        return redirect('/data_penjualan');
    }
}
