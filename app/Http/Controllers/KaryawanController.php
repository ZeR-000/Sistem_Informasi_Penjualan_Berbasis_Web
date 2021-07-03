<?php
    
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class KaryawanController extends Controller
{
    public function tampil(){
        $karyawan = DB::table('tb_datakaryawan')->simplePaginate(5);
        return view('v_data_karyawan',['tb_datakaryawan'=>$karyawan]);
    }

    public function tambah()
    {
        return view('v_tambah_data_karyawan');
    }
    
    public function cari(Request $request)
    {
        $cari = $request->cari;
        $karyawan = DB::table('tb_datakaryawan')->where('nama_karyawan','like',"%".$cari."%")->simplePaginate(5);
        return view('v_data_karyawan',['tb_datakaryawan' => $karyawan]);
    }

    public function cetak()
    {
        $karyawan = DB::table('tb_datakaryawan')->get();
        $pdf = PDF::loadview('v_cetak_data_karyawan',['tb_datakaryawan'=>$karyawan]);
        return $pdf->download('Data-Karyawan.pdf');
    }

    public function store(Request $request)
    {
        
        DB::table('tb_datakaryawan')->insert
        (
            [
                'nama_karyawan' => $request->nama_karyawan,
                'alamat' => $request->alamat,
                'no_hp' => $request->no_hp,
                'tanggal_lahir' => $request->tanggal_lahir,
            ]
        );
        
        return redirect('data_karyawan');
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

        $karyawan = DB::table('tb_datakaryawan')->where('id_karyawan',$id)->simplePaginate(5);

        return view('v_edit_data_karyawan',['tb_datakaryawan' => $karyawan]);
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
        
        DB::table('tb_datakaryawan')->where('id_karyawan',$request->id)->update(
        [
            'nama_karyawan' => $request->nama_karyawan,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'tanggal_lahir' => $request->tanggal_lahir,
        ]);

        return redirect('data_karyawan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('tb_datakaryawan')->where('id_karyawan',$id)->delete();
        return redirect('/data_karyawan');
    }
}