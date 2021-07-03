<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    public function index()
    {
        $jpembeli = DB::table('tb_datapembeli')->count();
        $jkaryawan = DB::table('tb_datakaryawan')->count();
        $jjenis = DB::table('tb_datajenis')->count();
        $jstok = DB::table('tb_stokbarang')->count();
        $jadmin = DB::table('tb_dataadmin')->count();
        $jpenjualan = DB::table('tb_datapenjualan')->count();
        return view('v_dashboard',compact('jpembeli','jkaryawan','jjenis','jstok','jadmin','jpenjualan'));
    }
}
