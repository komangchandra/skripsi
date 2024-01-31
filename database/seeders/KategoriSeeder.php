<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kategori;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kategori::create([
            'namakategori' => 'Kedelai Berkualitas',
            'slug' => 'kedelai-berkualitas',
        ]);

        Kategori::create([
            'namakategori' => 'Perawatan Kedelai',
            'slug' => 'perawatan-kedelai',
        ]);
    }
}
