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
        $pembeli = [
            ['nama' => 'Mamat', 'jns_kelamin' => 'Laki-laki', 'kode_pos' => 420365, 'kota' => 'Bandung'],
            ['nama' => 'Dinda', 'jns_kelamin' => 'Perempuan', 'kode_pos' => 420365, 'kota' => 'Surabaya'],
            ['nama' => 'Jaka', 'jns_kelamin' => 'Laki-laki', 'kode_pos' => 420365, 'kota' => 'Yogyakarta'],
            ['nama' => 'Rio', 'jns_kelamin' => 'Laki-laki', 'kode_pos' => 420365, 'kota' => 'Jakarta'],
            ['nama' => 'Firman', 'jns_kelamin' => 'Laki-laki', 'kode_pos' => 420365, 'kota' => 'Sukabumi'],
        ];
        DB::table('pesanans')->insert($pembeli);
    }
}
