<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Biodata;

class MyController extends Controller
{
    public function latihan()
    {
        $result = "Latihan Controller";
        return view('latihan', compact('result'));
    }

    public function biodata()
    {
        $nama = "Rio Fadli";
        $tgl_lahir = "09 Juni 2004";
        $umur = 17;
        $jk = "Laki-laki";
        $alamat = "Kp. Cangkuang";
        return view('biodata-saya', compact('nama', 'tgl_lahir', 'umur', 'jk', 'alamat'));
    }

    public function bio()
    {
        $bio = Biodata::all();
        return view('biodata2', compact('bio'));
    }
}
