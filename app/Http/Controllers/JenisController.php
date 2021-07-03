<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class JenisController extends Controller
{
    public function tampil(){
        $jenis = DB::table('tb_datajenis')->get();
        return view('v_data_jenis',['tb_datajenis'=>$jenis]);
    }

    public function tambah()
    {
        return view('v_tambah_data_jenis');
    }

    public function cari(Request $request)
    {
        $cari = $request->cari;
        $jenis = DB::table('tb_datajenis')->where('nama_jenis','like',"%".$cari."%")->simplePaginate(5);
        return view('v_data_jenis',['tb_datajenis' => $jenis]);
    }

    public function cetak()
    {
        $jenis = DB::table('tb_datajenis')->get();
        $pdf = PDF::loadview('v_cetak_data_jenis',['tb_datajenis'=>$jenis]);
        return $pdf->download('Data-Jenis.pdf');
    }

    public function store(Request $request)
    {
        
        DB::table('tb_datajenis')->insert
        (
            [
                'nama_jenis' => $request->nama_jenis,
            ]
        );
        
        return redirect('data_jenis');
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

        $jenis = DB::table('tb_datajenis')->where('kode_jenis',$id)->get();

        return view('v_edit_data_jenis',['tb_datajenis' => $jenis]);
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
        
        DB::table('tb_datajenis')->where('kode_jenis',$request->id)->update([
                'nama_jenis' => $request->nama_jenis,
        ]);

        return redirect('data_jenis');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('tb_datajenis')->where('kode_jenis',$id)->delete();
        return redirect('/data_jenis');
    }
}
