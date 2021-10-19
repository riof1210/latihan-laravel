<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // $this->call(PostTableSeeder::class);
        // $this->call(HeroSeeder::class);
        $this->call(BiodataSeeder::class);
        $this->call(BarangSeeder::class);
        $this->call(PesananSeeder::class);
        $this->call(PembelianSeeder::class);
        $this->call(PembeliSeeder::class);
        $this->call(SuplierSeeder::class);
    }
}
