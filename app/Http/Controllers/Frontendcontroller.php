<?php

namespace App\Http\Controllers;
use App\Models\kegiatan;
use App\Models\anak_asuh;
use App\Models\pengasuh;
use App\Models\form_donasi;
use Illuminate\Http\Request;

class Frontendcontroller extends Controller
{
public function kegiatann()
{
    $kegiatan = Kegiatan::all();
    return view('pronen.blog', compact('kegiatan'));
}
public function data()
{
    $anak_asuh = anak_asuh::all()->count();
    $pengasuh = pengasuh::all()->count();
    $form_donasi = form_donasi::all()->count();
    return view('pronen.index', compact('anak_asuh','pengasuh','form_donasi'));
}
}
