<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
  use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
  public function index()
  {
    $Anggota = DB::select('select count(*) as jml_agt from ms_anggota');
    $JmlAnggota = [];
    foreach ($Anggota as $n) {
      $JmlAnggota = $n->jml_agt;
    }


    $Simpanan = DB::select("select sum(saldo_akhir) as jml_simp from simp_rekening where status_aktif='Y'");
    $JmlSimp = [];
    foreach ($Simpanan as $s) {
      $JmlSimp = $s->jml_simp;
    }

    $Pinjaman = DB::select("select sum(saldo_akhir) as jml_pby from pby_rekening where status='Aktif'");
    $JmlPby = [];
    foreach ($Pinjaman as $s) {
      $JmlPby = $s->jml_pby;
    }
    
    return view('index', compact('JmlAnggota', 'JmlSimp', 'JmlPby',));
  }
}
