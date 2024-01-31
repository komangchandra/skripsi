<?php

namespace Database\Seeders;

use App\Models\Kecamatan;
use Illuminate\Database\Seeder;

class KecamatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kecamatan::create([
            'idkc' => '6',
            'namakecamatan' => 'Pasir Sakti',
            'warna' => '#800026',
            'geojson' => 'pasirsakti.geojson'
        ]);

        Kecamatan::create([
            'idkc' => '7',
            'namakecamatan' => 'Gunung Pelindung',
            'warna' => '#BD0026',
            'geojson' => 'gunungpelindung.geojson'
        ]);

        Kecamatan::create([
            'idkc' => '8',
            'namakecamatan' => 'Jabung',
            'warna' => '#800026',
            'geojson' => 'jabung.geojson'
        ]);

        Kecamatan::create([
            'idkc' => '9',
            'namakecamatan' => 'Waway Karya',
            'warna' => '#800026',
            'geojson' => 'wawaykarya.geojson'
        ]);

        Kecamatan::create([
            'idkc' => '10',
            'namakecamatan' => 'Melinting',
            'warna' => '#BD0026',
            'geojson' => 'melinting.geojson'
        ]);

        Kecamatan::create([
            'idkc' => '11',
            'namakecamatan' => 'Marga Sekampung',
            'warna' => '#800026',
            'geojson' => 'margasekampung.geojson'
        ]);

        Kecamatan::create([
            'idkc' => '12',
            'namakecamatan' => 'Mataram Baru',
            'warna' => '#FEB24C',
            'geojson' => 'matarambaru.geojson'
        ]);

        Kecamatan::create([
            'idkc' => '13',
            'namakecamatan' => 'Bandar Sribhawono',
            'warna' => '#800026',
            'geojson' => 'bandarsribhawono.geojson'
        ]);

        Kecamatan::create([
            'idkc' => '14',
            'namakecamatan' => 'Sekampung Udik',
            'warna' => '#FEB24C',
            'geojson' => 'sekampungudik.geojson'
        ]);

        Kecamatan::create([
            'idkc' => '15',
            'namakecamatan' => 'Metro Kibang',
            'warna' => '#BD0026',
            'geojson' => 'metrokibang.geojson'
        ]);

        Kecamatan::create([
            'idkc' => '17',
            'namakecamatan' => 'Way Jepara',
            'warna' => '#FED976',
            'geojson' => 'wayjepara.geojson'
        ]);

        Kecamatan::create([
            'idkc' => '18',
            'namakecamatan' => 'Beraja Selebah',
            'warna' => '#FEB24C',
            'geojson' => 'berajaselebah.geojson'
        ]);

        Kecamatan::create([
            'idkc' => '19',
            'namakecamatan' => 'Marga Tiga',
            'warna' => '#FEB24C',
            'geojson' => 'margatiga.geojson'
        ]);

        Kecamatan::create([
            'idkc' => '20',
            'namakecamatan' => 'Sekampung',
            'warna' => '#BD0026',
            'geojson' => 'sekampung.geojson'
        ]);

        Kecamatan::create([
            'idkc' => '21',
            'namakecamatan' => 'Batang Hari',
            'warna' => '#BD0026',
            'geojson' => 'batanghari.geojson'
        ]);

        Kecamatan::create([
            'idkc' => '22',
            'namakecamatan' => 'Bumi Agung',
            'warna' => '#800026',
            'geojson' => 'bumiagung.geojson'
        ]);

        Kecamatan::create([
            'idkc' => '23',
            'namakecamatan' => 'Pekalongan',
            'warna' => '#800026',
            'geojson' => 'pekalongan.geojson'
        ]);

        Kecamatan::create([
            'idkc' => '24',
            'namakecamatan' => 'Sukadana',
            'warna' => '#FEB24C',
            'geojson' => 'sukadana.geojson'
        ]);

        Kecamatan::create([
            'idkc' => '25',
            'namakecamatan' => 'Labuhan Ratu',
            'warna' => '#800026',
            'geojson' => 'labuhanratu.geojson'
        ]);

        Kecamatan::create([
            'idkc' => '26',
            'namakecamatan' => 'Batang Hari Nuban',
            'warna' => '#BD0026',
            'geojson' => 'batangharinuban.geojson'
        ]);

        Kecamatan::create([
            'idkc' => '27',
            'namakecamatan' => 'Purbolinggo',
            'warna' => '#BD0026',
            'geojson' => 'purbolinggo.geojson'
        ]);

        Kecamatan::create([
            'idkc' => '28',
            'namakecamatan' => 'Raman Utara',
            'warna' => '#800026',
            'geojson' => 'ramanutara.geojson'
        ]);

        Kecamatan::create([
            'idkc' => '29',
            'namakecamatan' => 'Way Bungur',
            'warna' => '#800026',
            'geojson' => 'waybungur.geojson'
        ]);

        Kecamatan::create([
            'idkc' => '30',
            'namakecamatan' => 'Labuhan Maringgai',
            'warna' => '#BD0026',
            'geojson' => 'labuhanmaringgai2.geojson'
        ]);

        Kecamatan::create([
          'idkc' => '31',
          'namakecamatan' => 'Labuhan Ratu - Way Kambas',
          'warna' => '#16FF00',
          'geojson' => 'labuhanratuwaykambas.geojson'
        ]);

        // Kecamatan::create([
        //     'idkc' => '31',
        //     'namakecamatan' => 'Labuhan Ratu - Way Kambas',
        //     'warna' => '#16FF00',
        //     'geojson' => 's3.geojson'
        // ]);
    }
}
