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
            ['nama' => 'Mamat', 'jns_kelamin' => 'Laki-laki', 'kode_pos' => 420365, 'kota' => 'Bandung', 'tgl_lahir' => '1987-09-17'],
            ['nama' => 'Dinda', 'jns_kelamin' => 'Perempuan', 'kode_pos' => 420365, 'kota' => 'Surabaya', 'tgl_lahir' => '1990-10-27'],
            ['nama' => 'Jaka', 'jns_kelamin' => 'Laki-laki', 'kode_pos' => 420365, 'kota' => 'Yogyakarta', 'tgl_lahir' => '1997-08-12'],
            ['nama' => 'Rio', 'jns_kelamin' => 'Laki-laki', 'kode_pos' => 420365, 'kota' => 'Jakarta', 'tgl_lahir' => '1999-10-10'],
            ['nama' => 'Firman', 'jns_kelamin' => 'Laki-laki', 'kode_pos' => 420365, 'kota' => 'Sukabumi', 'tgl_lahir' => '1990-12-01'],
        ];
        DB::table('pembelis')->insert($pembeli);
    }
}
