<?php

namespace App\Http\Controllers;

// use App\MsPerusahaan;
use Illuminate\Http\Request;
use Session;

class MsPerusahaanController extends Controller
{
  public function index()
  {
      $MsPerush = "1";

      return view('ms_perusahaan.index', compact('MsPerush'));
  }
}