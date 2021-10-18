<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barang = [
            ['nama' => 'Xiaomi', 'varian' => 'Xiaomi Redmi Note 8', 'harga_beli' => 1500000, 'harga_jual' => 1800000],
            ['nama' => 'Samsung', 'varian' => 'Samsung Galaxy Note 10', 'harga_beli' => 16000000, 'harga_jual' => 19000000],
            ['nama' => 'IPhone', 'varian' => 'IPhone 13 Pro Max', 'harga_beli' => 2000000, 'harga_jual' => 2800000],
            ['nama' => 'Oppo', 'varian' => 'Oppo F9', 'harga_beli' => 1300000, 'harga_jual' => 1500000],
            ['nama' => 'Vivo', 'varian' => 'Vivo V15', 'harga_beli' => 1500000, 'harga_jual' => 1800000],
        ];
        DB::table('barangs')->insert($barang);
    }
}
