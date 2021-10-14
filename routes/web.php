<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route Basic
//Macam-macam method yaitu ada : get, post, put, delete, option
Route::get('about', function () {
    return view('tentang');
});

Route::get('profile', function () {
    $nama = "Rio Fadli";
    return view('profile', compact('nama'));
});

//Route Parameter

Route::get('post/{id?}', function ($a = 1) {
    return view('post', ['posting' => $a]);
});

Route::get('bio/{nama}/{umur}/{alamat}', function ($nama, $umur, $alamat) {
    return "<h1>Halaman Biodata</h1>"
        . "Nama : <b>$nama</b><br>"
        . "Umur : <b>$umur Tahun</b><br>"
        . "Alamat : <b>$alamat</b><br>";
});

//Route Optional Parameter

Route::get('hal/{halaman?}', function ($a = 1) {
    return "Halaman Post ke - <b>$a</b>";
});

Route::get('book', function () {
    $books = [
        ['id' => 1, 'title' => 'Belajar Laravel itu Mudah'],
        ['id' => 2, 'title' => 'Belajar Baca Huruf Hijayyah'],
        ['id' => 3, 'title' => 'Belajar Baca Aksara Sunda'],
    ];
    return view('book', compact('books'));
});

Route::get('film', function () {
    $film = [
        ['id' => 1, 'judul' => 'Naruto', 'sinopsis' => 'Unknown', 'penulis' => 'Unknown', 'bahasa' => 'Jepang', 'aktor' => ['aktor1' => 'Naruto', 'aktor2' => 'Sasuke', 'aktor3' => 'Sakura', 'aktor4' => 'Kakashi', 'aktor5' => 'Tsunade']],
        ['id' => 2, 'judul' => 'Interstellar', 'sinopsis' => 'Unknown', 'penulis' => 'Unknown', 'bahasa' => 'Inggris', 'aktor' => ['aktor1' => 'Cooper', 'aktor2' => 'Amelia Brand', 'aktor3' => 'Murphy Cooper', 'aktor4' => 'Profesor Brand', 'aktor5' => 'Tom']],
        ['id' => 3, 'judul' => 'Joker', 'sinopsis' => 'Unknown', 'penulis' => 'Unknown', 'bahasa' => 'Inggris', 'aktor' => ['aktor1' => 'Joker', 'aktor2' => 'Murray Franklin', 'aktor3' => 'Penny Fleck', 'aktor4' => 'Alfred Pennyworth', 'aktor5' => 'Randall']],
        ['id' => 4, 'judul' => 'Justice League', 'sinopsis' => 'Unknown', 'penulis' => 'Unknown', 'bahasa' => 'Inggris', 'aktor' => ['aktor1' => 'Wonder Woman', 'aktor2' => 'Superman', 'aktor3' => 'Bruce Wayne', 'aktor4' => 'Aquaman', 'aktor5' => 'Flash']],
        ['id' => 5, 'judul' => 'The Avengers', 'sinopsis' => 'Unknown', 'penulis' => 'Unknown', 'bahasa' => 'Inggris', 'aktor' => ['aktor1' => 'Iron Man', 'aktor2' => 'Captain America', 'aktor3' => 'Thor', 'aktor4' => 'Spider-man', 'aktor5' => 'Loki']],
    ];
    return view('film', compact('film'));
});

Route::get('pesan/{makanan?}/{minuman?}/{cemilan?}', function ($a = 0, $b = 0, $c = 0) {
    if ($a == 0 && $b == 0 && $c == 0) {
        $pesanan = "Anda Tidak Memesan, Silahkan Pulang";
    } elseif ($a > 1 && $b == 0 && $c == 0) {
        $pesanan = "Anda Memesan <br>"
            . "Makan : $a <br>";
    } elseif ($a > 1 && $b > 1 && $c == 0) {
        $pesanan = "Anda Memesan <br>"
            . "Makan : $a<br>"
            . "Minum : $b<br>";
    } elseif ($a > 1 && $b > 1 && $c > 1) {
        $pesanan = "Anda Memesan <br>"
            . "Makan : $a<br>"
            . "Minum : $b<br>"
            . "Cemilan : $c<br>";
    }
    return $pesanan;
});

// Route::get('pesan/{makanan?}/{minuman?}/{cemilan?}', function ($a = null, $b = null, $c = null) {
//     if ($a == null && $b == null && $c == null) {
//         $pesanan = "Anda Tidak Memesan, Silahkan Pulang";
//     } if ($a != null) {
//         $pesanan = "Anda Memesan <br>"
//             . "Makan : $a <br>";
//     } if ($a != null && $b != null) {
//         $pesanan = "Anda Memesan <br>"
//             . "Makan : $a<br>"
//             . "Minum : $b<br>";
//     } if ($a != null && $b != null && $c != null) {
//         $pesanan = "Anda Memesan <br>"
//             . "Makan : $a<br>"
//             . "Minum : $b<br>"
//             . "Cemilan : $c<br>";
//     }
//     return $pesanan;
// });

Route::get('biodata', function () {
    $nama = "Rio Fadli";
    $umur = 17;
    $alamat = "Kp. Cangkuang";
    $cita_cita = "Programmer yang sukses";
    $hobi = "Membaca buku komik";
    return view('biodata', compact('nama', 'umur', 'alamat', 'cita_cita', 'hobi'));
});

Route::get('barang', function () {
    $id_barang = 01;
    $nama_barang = "Pulpen";
    $harga = 5000;
    $stok = 4;
    $id_supplier = "Dani";
    return view('barang', compact('id_barang', 'nama_barang', 'harga', 'stok', 'id_supplier'));
});
Route::get('supplier', function () {
    $id_supplier = 101;
    $nama_supplier = "Dani";
    $no_telp = "089237629812";
    $alamat = "Cibiru";
    return view('supplier', compact('id_supplier', 'nama_supplier', 'no_telp', 'alamat'));
});
Route::get('pembayaran', function () {
    $id_pembayaran = 001;
    $tgl_bayar = "13 Februari 2021";
    $total_bayar = 20000;
    $id_transaksi = 122;
    return view('pembayaran', compact('id_pembayaran', 'tgl_bayar', 'total_bayar', 'id_transaksi'));
});
Route::get('pembeli', function () {
    $id_pembeli = 10;
    $nama_pembeli = "Dimas";
    $jk = "Laki-laki";
    $no_telp = "089123456789";
    $alamat = "Cimahi";
    return view('pembeli', compact('id_pembeli', 'nama_pembeli', 'jk', 'no_telp', 'alamat'));
});
Route::get('transaksi', function () {
    $id_transaksi = 122;
    $id_barang = "Pulpen";
    $id_pembeli = "Dimas";
    $tanggal = "13 Februari 2021";
    $keterangan = "Lunas";
    return view('transaksi', compact('id_transaksi', 'id_barang', 'id_pembeli', 'tanggal', 'keterangan'));
});
