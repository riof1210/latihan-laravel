<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Biodata;
use App\Models\Barang;
use App\Models\Pesanan;
use App\Models\Pembelian;
use App\Models\Pembeli;
use App\Models\Suplier;

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

    public function barang()
    {
        $barang = Barang::all();
        return view('barangs', compact('barang'));
    }

    public function barang2($id)
    {
        $barang = Barang::findOrFail($id);
        return view('barangs2', compact('barang'));
    }

    public function pesanan()
    {
        $pesanan = Pesanan::all();
        return view('pesanans', compact('pesanan'));
    }
    public function pesanan2($id)
    {
        $pesanan = Pesanan::findOrFail($id);
        return view('pesanans2', compact('pesanan'));
    }

    public function pembelian()
    {
        $pembelian = Pembelian::all();
        return view('pembelians', compact('pembelian'));
    }
    public function pembelian2($id)
    {
        $pembelian = Pembelian::findOrFail($id);
        return view('pembelians2', compact('pembelian'));
    }

    public function pembeli()
    {
        $pembeli = Pembeli::all();
        return view('pembelis', compact('pembeli'));
    }
    public function pembeli2($id)
    {
        $pembeli = Pembeli::findOrFail($id);
        return view('pembelis2', compact('pembeli'));
    }

    public function suplier()
    {
        $suplier = Suplier::all();
        return view('supliers', compact('suplier'));
    }
    public function suplier2($id)
    {
        $suplier = Suplier::findOrFail($id);
        return view('supliers2', compact('suplier'));
    }
}
