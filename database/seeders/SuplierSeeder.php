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
            ['nama' => 'Agus', 'alamat' => 'Bandung', 'kode_pos' => 420356, 'kota' => 'Bandung'],
            ['nama' => 'John', 'alamat' => 'Surabaya', 'kode_pos' => 420356, 'kota' => 'Surabaya'],
            ['nama' => 'Jeni', 'alamat' => 'Yogyakarta', 'kode_pos' => 420356, 'kota' => 'Yogyakarta'],
            ['nama' => 'Jajang', 'alamat' => 'Jakarta', 'kode_pos' => 420356, 'kota' => 'Jakarta'],
            ['nama' => 'Kidam', 'alamat' => 'Sukabumi', 'kode_pos' => 420356, 'kota' => 'Sukabumi'],
        ];
        DB::table('supliers')->insert($suplier);
    }
}
