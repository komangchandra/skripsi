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
        $this->call(UserSeeder::class);
        $this->call(ArtikelSeeder::class);
        $this->call(KategoriSeeder::class);
        $this->call(KecamatanSeeder::class);
        $this->call(KedelaiSeeder::class);
        // $this->call(LahanSeeder::class);
    }
}
