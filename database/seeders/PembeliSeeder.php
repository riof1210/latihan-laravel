<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PembeliSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pembeli = [
            ['nama' => 'Mamat', 'jns_kelamin' => 'Laki-laki', 'alamat' => 'Bandung', 'kode_pos' => 40191, 'kota' => 'Bandung', 'tgl_lahir' => '1987-10-12'],
            ['nama' => 'Dinda', 'jns_kelamin' => 'Perempuan', 'alamat' => 'Surabaya', 'kode_pos' => 60111, 'kota' => 'Surabaya', 'tgl_lahir' => '1990-10-27'],
            ['nama' => 'Jaka', 'jns_kelamin' => 'Laki-laki', 'alamat' => 'Yogyakarta', 'kode_pos' => 55111, 'kota' => 'Yogyakarta', 'tgl_lahir' => '1997-11-12'],
            ['nama' => 'Rio', 'jns_kelamin' => 'Laki-laki', 'alamat' => 'Jakarta Barat', 'kode_pos' => 11110, 'kota' => 'Jakarta Barat', 'tgl_lahir' => '1999-10-10'],
            ['nama' => 'Firman', 'jns_kelamin' => 'Laki-laki', 'alamat' => 'Jakarta Utara', 'kode_pos' => 14110, 'kota' => 'Jakarta Utara', 'tgl_lahir' => '1990-12-01'],
        ];
        DB::table('pembelis')->insert($pembeli);
    }
}
