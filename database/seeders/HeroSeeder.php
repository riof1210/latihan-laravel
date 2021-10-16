<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
// use DB;
use Illuminate\Database\Seeder;

class HeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hero = [
            ['realName' => 'Peter Parker', 'heroName' => 'Spider-Man', 'kindofpower' => 'Dapat Bergelayun Menggunakan Jaring Laba-laba', 'gender' => 'Laki-laki', 'height' => '173', 'weight' => '70', 'bornDate' => '1975-06-27'],
            ['realName' => 'Steve Rogers', 'heroName' => 'Captain Amerika', 'kindofpower' => 'Memiliki Ketahanan Tubuh Yang Kuat', 'gender' => 'Laki-laki', 'height' => '185', 'weight' => '87', 'bornDate' => '1918-07-04'],
            ['realName' => 'Thor', 'heroName' => 'Thor', 'kindofpower' => 'Dapat Mengendalikan Petir dengan Palunya', 'gender' => 'Laki-laki', 'height' => '190', 'weight' => '80', 'bornDate' => '1983-08-11'],
            ['realName' => 'Bruce Banner', 'heroName' => 'Hulk', 'kindofpower' => 'Dapat Berubah Menjadi Makhluk Raksasa Hijau Besar Dan Mempunyai Keuatan Yang Dahsyat', 'gender' => 'Laki-laki', 'height' => '187', 'weight' => '82', 'bornDate' => '1969-12-18'],
            ['realName' => 'TChalla', 'heroName' => 'Black Panther', 'kindofpower' => 'Memiliki Kemampuan Daya Tahan Tubuh Yang Kuat', 'gender' => 'Laki-laki', 'height' => '187', 'weight' => '87', 'bornDate' => '1976-11-29'],
            ['realName' => 'Tony Stark', 'heroName' => 'Iron Man', 'kindofpower' => 'Jenius dan Dapat Membuat Armor Baja', 'gender' => 'laki-laki', 'height' => '180', 'weight' => '87', 'bornDate' => '1970-09-29'],
            ['realName' => 'Natasha Romanoff', 'heroName' => 'Black Widow', 'kindofpower' => 'Tidak Memiliki Kekuatan', 'gender' => 'Perempuan', 'height' => '176', 'weight' => '80', 'bornDate' => '1984-11-22'],
            ['realName' => 'Vision', 'heroName' => 'Vision', 'kindofpower' => 'Memiliki Kemampuan Luar Biasa Dari Batu Mind Stone', 'gender' => 'Laki-laki', 'height' => '180', 'weight' => '87', 'bornDate' => '1971-05-27'],
            ['realName' => 'Wanda Maximoff', 'heroName' => 'Scarlet Witch', 'kindofpower' => 'Dapat Mengendalikan Sihir', 'gender' => 'Perempuan', 'height' => '187', 'weight' => '87', 'bornDate' => '1989-02-19'],
            ['realName' => 'Clinton Barton', 'heroName' => 'Hawkeye', 'kindofpower' => 'Dapat Memanah Dengan Sangat Akurat', 'gender' => 'Laki-laki', 'height' => '181', 'weight' => '88', 'bornDate' => '1971-01-07'],
        ];
        // masukkan data ke database
        DB::table('hero')->insert($hero);
        $this->command->info('Data Post  has been filled!');
    }
}
