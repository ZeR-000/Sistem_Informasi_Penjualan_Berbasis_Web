<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class PembeliController extends Controller
{
    public function tampil(){
        $pembeli = DB::table('tb_datapembeli')->simplePaginate(5);
        return view('v_data_pembeli',['tb_datapembeli'=>$pembeli]);
    }

    public function tambah()
    {
        return view('v_tambah_data_pembeli');
    }

    public function cari(Request $request)
    {
        $cari = $request->cari;
        $pembeli = DB::table('tb_datapembeli')->where('nama_pembeli','like',"%".$cari."%")->simplePaginate(5);
        return view('v_data_pembeli',['tb_datapembeli' => $pembeli]);
    }

    public function cetak()
    {
        $pembeli = DB::table('tb_datapembeli')->get();
        $pdf = PDF::loadview('v_cetak_data_pembeli',['tb_datapembeli'=>$pembeli]);
        return $pdf->download('Data-Pembeli.pdf');
    }

    public function store(Request $request)
    {
        
        DB::table('tb_datapembeli')->insert
        (
            [
                'nama_pembeli' => $request->nama_pembeli,
                'alamat_pembeli' => $request->alamat_pembeli,
                'no_hp' => $request->no_hp,
            ]
        );
        
        return redirect('data_pembeli');
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

        $pembeli = DB::table('tb_datapembeli')->where('kode_pembeli',$id)->simplePaginate(5);

        return view('v_edit_data_pembeli',['tb_datapembeli' => $pembeli]);
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
        
        DB::table('tb_datapembeli')->where('kode_pembeli',$request->id)->update([
            'nama_pembeli' => $request->nama_pembeli,
            'alamat_pembeli' => $request->alamat_pembeli,
            'no_hp' => $request->no_hp,
        ]);

        return redirect('data_pembeli');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('tb_datapembeli')->where('kode_pembeli',$id)->delete();
        return redirect('/data_pembeli');
    }
}
