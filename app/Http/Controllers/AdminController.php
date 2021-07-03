<?php
    
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class AdminController extends Controller
{
    public function tampil(){
        $admin = DB::table('tb_dataadmin')->simplePaginate(5);
        return view('v_data_admin',['tb_dataadmin'=>$admin]);
    }

    public function cari(Request $request)
    {
        $cari = $request->cari;
        $username = DB::table('tb_dataadmin')->where('username','like',"%".$cari."%")->simplePaginate(5);
        return view('v_data_admin',['tb_dataadmin' => $username]);
    }

    public function tambah()
    {
        return view('v_tambah_data_admin');
    }

    public function cetak()
    {
        $admin = DB::table('tb_dataadmin')->get();
        $pdf = PDF::loadview('v_cetak_data_admin',['tb_dataadmin'=>$admin]);
        return $pdf->download('Data-Admin.pdf');
    }

    public function store(Request $request)
    {
        
        DB::table('tb_dataadmin')->insert
        (
            [
                'id_admin' => $request->id_admin,
                'username' => $request->username,
                'password' => $request->password,
                'level' => $request->level,
            ]
        );
        
        return redirect('data_admin');
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

        $admin = DB::table('tb_dataadmin')->where('id_admin',$id)->get();

        return view('v_edit_data_admin',['tb_dataadmin' => $admin]);
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
        
        DB::table('tb_dataadmin')->where('id_admin',$request->id)->update(
            [
                'username' => $request->username,
                'password' => $request->password,
                'level' => $request->level,
            ]);
    
            return redirect('data_admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('tb_dataadmin')->where('id_admin',$id)->delete();
        return redirect('/data_admin');
    }
}