<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;


class BiodataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bio = [
            ['name' => 'Rio Fadli', 'gender' => 'Male', 'bornDate' => '2004-06-09', 'weight' => 50, 'height' => 175],
            ['name' => 'Rintan', 'gender' => 'Female', 'bornDate' => '2003-07-12', 'weight' => 43, 'height' => 155]
        ];
        DB::table('biodatas')->insert($bio);
    }
}
