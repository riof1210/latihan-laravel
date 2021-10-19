<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PesananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pesanan = [
            ['nama_pelanggan' => 'Mamat', 'nama_barang' => 'Xiaomi', 'qty' => 10, 'tgl_pesan' => '2021-10-12'],
            ['nama_pelanggan' => 'Dinda', 'nama_barang' => 'Samsung', 'qty' => 12, 'tgl_pesan' => '2021-01-19'],
            ['nama_pelanggan' => 'Jaka', 'nama_barang' => 'IPhone', 'qty' => 11, 'tgl_pesan' => '2021-11-29'],
            ['nama_pelanggan' => 'Rio', 'nama_barang' => 'Vivo', 'qty' => 17, 'tgl_pesan' => '2021-12-10'],
            ['nama_pelanggan' => 'Firman', 'nama_barang' => 'Oppo', 'qty' => 20, 'tgl_pesan' => '2021-11-18'],
        ];
        DB::table('pesanans')->insert($pesanan);
    }
}
