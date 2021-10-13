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
    return '<h1>Hello</h1>'
        . "<br> Selamat Datang Di Webapp Saya"
        . "<br> Laravel Emang Keren";
});

Route::get('profile', function () {
    $nama = "Rio Fadli";
    return "Nama Saya <b>$nama</b>";
});

Route::get('post', function () {
    return "Halaman Post 1";
});

//Route Parameter

Route::get('post/{id}', function ($a) {
    return "Halaman Post Ke - <b>$a</b>";
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
