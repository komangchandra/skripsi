<?php

namespace Database\Seeders;

use App\Models\Lahan;
use Illuminate\Database\Seeder;

class LahanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Lahan::create([
            'kelas' => 'Sangat Sesuai (S1)',
            'kecamatan_id' => 8,
            'warna' => '#00FF1A',
            'geojson' => 'bandarsribhawono-s1.geojson'
        ]);
    }
}
