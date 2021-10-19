<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SuplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $suplier = [
            ['nama' => 'Agus', 'alamat' => 'Bandung', 'kode_pos' => 40191, 'kota' => 'Bandung'],
            ['nama' => 'John', 'alamat' => 'Surabaya', 'kode_pos' => 60111, 'kota' => 'Surabaya'],
            ['nama' => 'Jeni', 'alamat' => 'Yogyakarta', 'kode_pos' => 55111, 'kota' => 'Yogyakarta'],
            ['nama' => 'Jajang', 'alamat' => 'Jakarta Barat', 'kode_pos' => 11110, 'kota' => 'Jakarta Barat'],
            ['nama' => 'Kidam', 'alamat' => 'Jakarta Utara', 'kode_pos' => 14110, 'kota' => 'Jakarta Utara'],
        ];
        DB::table('supliers')->insert($suplier);
    }
}
