<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PembelianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pembelian = [
            ['nama_barang' => 'Xiaomi', 'nama_suplier' => 'Agus', 'qty' => 15, 'tgl' => '2021-01-10'],
            ['nama_barang' => 'Samsung', 'nama_suplier' => 'John', 'qty' => 16, 'tgl' => '2021-10-17'],
            ['nama_barang' => 'IPhone', 'nama_suplier' => 'Jeni', 'qty' => 21, 'tgl' => '2021-12-20'],
            ['nama_barang' => 'Oppo', 'nama_suplier' => 'Jajang', 'qty' => 13, 'tgl' => '2021-12-10'],
            ['nama_barang' => 'Vivo', 'nama_suplier' => 'Kidam', 'qty' => 15, 'tgl' => '2021-03-20'],
        ];
        DB::table('pembelians')->insert($pembelian);
    }
}
