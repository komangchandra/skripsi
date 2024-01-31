<?php

namespace Database\Seeders;

use App\Models\Kedelai;
use Illuminate\Database\Seeder;

class KedelaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Bandar Sribhawono
        Kedelai::create([
            'kelas' => 'Sangat Sesuai (S1)',
            'kecamatan_id' => 8,
            'warna' => '#00FF1A',
            'geojson' => 'bandarsribhawono-s1.geojson'
        ]);

        Kedelai::create([
            'kelas' => 'Cukup Sesuai (S2)',
            'kecamatan_id' => 8,
            'warna' => '#FFF500',
            'geojson' => 'bandarsribhawono-s2.geojson'
        ]);

        Kedelai::create([
            'kelas' => 'Sesuai Marginal (S3)',
            'kecamatan_id' => 8,
            'warna' => '#F16500',
            'geojson' => 'bandarsribhawono-s3.geojson'
        ]);

        Kedelai::create([
            'kelas' => 'Tidak Sesuai (N)',
            'kecamatan_id' => 8,
            'warna' => '#FF0000',
            'geojson' => 'bandarsribhawono-n.geojson'
        ]);

        // Batang Hari
        Kedelai::create([
            'kelas' => 'Cukup Sesuai (S2)',
            'kecamatan_id' => 15,
            'warna' => '#FFF500',
            'geojson' => 'batanghari-s2.geojson'
        ]);

        Kedelai::create([
            'kelas' => 'Sesuai Marginal (S3)',
            'kecamatan_id' => 15,
            'warna' => '#F16500',
            'geojson' => 'batanghari-s3.geojson'
        ]);

        Kedelai::create([
            'kelas' => 'Tidak Sesuai (N)',
            'kecamatan_id' => 15,
            'warna' => '#FF0000',
            'geojson' => 'batanghari-n.geojson'
        ]);

        // Barang Hari Nuban
        Kedelai::create([
            'kelas' => 'Sangat Sesuai (S1)',
            'kecamatan_id' => 20,
            'warna' => '#00FF1A',
            'geojson' => 'batangharinuban-s1.geojson'
        ]);

        Kedelai::create([
            'kelas' => 'Cukup Sesuai (S2)',
            'kecamatan_id' => 20,
            'warna' => '#FFF500',
            'geojson' => 'batangharinuban-s2.geojson'
        ]);

        Kedelai::create([
            'kelas' => 'Sesuai Marginal (S3)',
            'kecamatan_id' => 20,
            'warna' => '#F16500',
            'geojson' => 'batangharinuban-s3.geojson'
        ]);

        Kedelai::create([
            'kelas' => 'Tidak Sesuai (N)',
            'kecamatan_id' => 20,
            'warna' => '#FF0000',
            'geojson' => 'batangharinuban-n.geojson'
        ]);

        // Beraja Selebah
        Kedelai::create([
            'kelas' => 'Sangat Sesuai (S1)',
            'kecamatan_id' => 12,
            'warna' => '#00FF1A',
            'geojson' => 'berajaselebah-s1.geojson'
        ]);

        Kedelai::create([
            'kelas' => 'Cukup Sesuai (S2)',
            'kecamatan_id' => 12,
            'warna' => '#FFF500',
            'geojson' => 'berajaselebah-s2.geojson'
        ]);

        // Bumi Agung
        Kedelai::create([
            'kelas' => 'Sangat Sesuai (S1)',
            'kecamatan_id' => 16,
            'warna' => '#00FF1A',
            'geojson' => 'bumiagung-s1.geojson'
        ]);

        Kedelai::create([
            'kelas' => 'Cukup Sesuai (S2)',
            'kecamatan_id' => 16,
            'warna' => '#FFF500',
            'geojson' => 'bumiagung-s2.geojson'
        ]);

        Kedelai::create([
            'kelas' => 'Sesuai Marginal (S3)',
            'kecamatan_id' => 16,
            'warna' => '#F16500',
            'geojson' => 'bumiagung-s3.geojson'
        ]);

        Kedelai::create([
            'kelas' => 'Tidak Sesuai (N)',
            'kecamatan_id' => 16,
            'warna' => '#FF0000',
            'geojson' => 'bumiagung-n.geojson'
        ]);

        // Gunung Pelindung
        Kedelai::create([
            'kelas' => 'Sangat Sesuai (S1)',
            'kecamatan_id' => 2,
            'warna' => '#00FF1A',
            'geojson' => 'gunungpelindung-s1.geojson'
        ]);

        Kedelai::create([
            'kelas' => 'Cukup Sesuai (S2)',
            'kecamatan_id' => 2,
            'warna' => '#FFF500',
            'geojson' => 'gunungpelindung-s2.geojson'
        ]);

        Kedelai::create([
            'kelas' => 'Sesuai Marginal (S3)',
            'kecamatan_id' => 2,
            'warna' => '#F16500',
            'geojson' => 'gunungpelindung-s3.geojson'
        ]);

        // Jabung
        Kedelai::create([
            'kelas' => 'Sangat Sesuai (S1)',
            'kecamatan_id' => 3,
            'warna' => '#00FF1A',
            'geojson' => 'jabung-s1.geojson'
        ]);

        Kedelai::create([
            'kelas' => 'Cukup Sesuai (S2)',
            'kecamatan_id' => 3,
            'warna' => '#FFF500',
            'geojson' => 'jabung-s2.geojson'
        ]);

        Kedelai::create([
            'kelas' => 'Sesuai Marginal (S3)',
            'kecamatan_id' => 3,
            'warna' => '#F16500',
            'geojson' => 'jabung-s3.geojson'
        ]);

      // Labuhdan Maringgai
        Kedelai::create([
            'kelas' => 'Sangat Sesuai (S1)',
            'kecamatan_id' => 24,
            'warna' => '#00FF1A',
            'geojson' => 'labuhanmaringgai-s1.geojson'
        ]);

        Kedelai::create([
            'kelas' => 'Cukup Sesuai (S2)',
            'kecamatan_id' => 24,
            'warna' => '#FFF500',
            'geojson' => 'labuhanmaringgai-s2.geojson'
        ]);

        Kedelai::create([
            'kelas' => 'Sesuai Marginal (S3)',
            'kecamatan_id' => 24,
            'warna' => '#F16500',
            'geojson' => 'labuhanmaringgai-s3.geojson'
        ]);

        // Labuhdan Ratu

        Kedelai::create([
            'kelas' => 'Sangat Sesuai (S1)',
            'kecamatan_id' => 19,
            'warna' => '#00FF1A',
            'geojson' => 'labuhanratu-s1.geojson'
        ]);

        Kedelai::create([
            'kelas' => 'Cukup Sesuai (S2)',
            'kecamatan_id' => 19,
            'warna' => '#FFF500',
            'geojson' => 'labuhanratu-s2.geojson'
        ]);

        Kedelai::create([
            'kelas' => 'Sesuai Marginal (S3)',
            'kecamatan_id' => 19,
            'warna' => '#F16500',
            'geojson' => 'labuhanratu-s3.geojson'
        ]);

        Kedelai::create([
            'kelas' => 'Tidak Sesuai (N)',
            'kecamatan_id' => 19,
            'warna' => '#FF0000',
            'geojson' => 'labuhanratu-n.geojson'
        ]);

        // Labuhan Ratu Way Kambas
        Kedelai::create([
            'kelas' => 'Sangat Sesuai (S1)',
            'kecamatan_id' => 25,
            'warna' => '#00FF1A',
            'geojson' => 'labuhanratuwaykambas-s1.geojson'
        ]);

        Kedelai::create([
            'kelas' => 'Cukup Sesuai (S2)',
            'kecamatan_id' => 25,
            'warna' => '#FFF500',
            'geojson' => 'labuhanratuwaykambas-s2.geojson'
        ]);

        Kedelai::create([
            'kelas' => 'Sesuai Marginal (S3)',
            'kecamatan_id' => 25,
            'warna' => '#F16500',
            'geojson' => 'labuhanratuwaykambas-s3.geojson'
        ]);

        Kedelai::create([
            'kelas' => 'Tidak Sesuai (N)',
            'kecamatan_id' => 25,
            'warna' => '#FF0000',
            'geojson' => 'labuhanratuwaykambas-n.geojson'
        ]);

        // Marga Sekampung
        Kedelai::create([
            'kelas' => 'Sangat Sesuai (S1)',
            'kecamatan_id' => 6,
            'warna' => '#00FF1A',
            'geojson' => 'margasekampung-s1.geojson'
        ]);

        Kedelai::create([
            'kelas' => 'Cukup Sesuai (S2)',
            'kecamatan_id' => 6,
            'warna' => '#FFF500',
            'geojson' => 'margasekampung-s2.geojson'
        ]);

        Kedelai::create([
            'kelas' => 'Sesuai Marginal (S3)',
            'kecamatan_id' => 6,
            'warna' => '#F16500',
            'geojson' => 'margasekampung-s3.geojson'
        ]);

        Kedelai::create([
            'kelas' => 'Tidak Sesuai (N)',
            'kecamatan_id' => 6,
            'warna' => '#FF0000',
            'geojson' => 'margasekampung-n.geojson'
        ]);

        // Marga Tiga
        Kedelai::create([
            'kelas' => 'Sangat Sesuai (S1)',
            'kecamatan_id' => 13,
            'warna' => '#00FF1A',
            'geojson' => 'margatiga-s1.geojson'
        ]);

        Kedelai::create([
            'kelas' => 'Cukup Sesuai (S2)',
            'kecamatan_id' => 13,
            'warna' => '#FFF500',
            'geojson' => 'margatiga-s2.geojson'
        ]);

        Kedelai::create([
            'kelas' => 'Sesuai Marginal (S3)',
            'kecamatan_id' => 13,
            'warna' => '#F16500',
            'geojson' => 'margatiga-s3.geojson'
        ]);

        Kedelai::create([
            'kelas' => 'Tidak Sesuai (N)',
            'kecamatan_id' => 13,
            'warna' => '#FF0000',
            'geojson' => 'margatiga-n.geojson'
        ]);

        // Mataram Baru
        Kedelai::create([
            'kelas' => 'Sangat Sesuai (S1)',
            'kecamatan_id' => 7,
            'warna' => '#00FF1A',
            'geojson' => 'matarambaru-s1.geojson'
        ]);

        Kedelai::create([
            'kelas' => 'Cukup Sesuai (S2)',
            'kecamatan_id' => 7,
            'warna' => '#FFF500',
            'geojson' => 'matarambaru-s2.geojson'
        ]);

        // Melinting
        Kedelai::create([
            'kelas' => 'Sangat Sesuai (S1)',
            'kecamatan_id' => 5,
            'warna' => '#00FF1A',
            'geojson' => 'melinting-s1.geojson'
        ]);

        Kedelai::create([
            'kelas' => 'Cukup Sesuai (S2)',
            'kecamatan_id' => 5,
            'warna' => '#FFF500',
            'geojson' => 'melinting-s2.geojson'
        ]);

        Kedelai::create([
            'kelas' => 'Sesuai Marginal (S3)',
            'kecamatan_id' => 5,
            'warna' => '#F16500',
            'geojson' => 'melinting-s3.geojson'
        ]);

        // Metro Kibang
        Kedelai::create([
            'kelas' => 'Sesuai Marginal (S3)',
            'kecamatan_id' => 10,
            'warna' => '#F16500',
            'geojson' => 'metrokibang-s3.geojson'
        ]);

        Kedelai::create([
            'kelas' => 'Tidak Sesuai (N)',
            'kecamatan_id' => 10,
            'warna' => '#FF0000',
            'geojson' => 'metrokibang-n.geojson'
        ]);

        // Pasir Sakti
        Kedelai::create([
            'kelas' => 'Sangat Sesuai (S1)',
            'kecamatan_id' => 1,
            'warna' => '#00FF1A',
            'geojson' => 'pasirsakti-s1.geojson'
        ]);

        Kedelai::create([
            'kelas' => 'Cukup Sesuai (S2)',
            'kecamatan_id' => 1,
            'warna' => '#FFF500',
            'geojson' => 'pasirsakti-s2.geojson'
        ]);

        Kedelai::create([
            'kelas' => 'Sesuai Marginal (S3)',
            'kecamatan_id' => 1,
            'warna' => '#F16500',
            'geojson' => 'pasirsakti-s3.geojson'
        ]);

        // Pekalongan
        Kedelai::create([
            'kelas' => 'Sesuai Marginal (S3)',
            'kecamatan_id' => 17,
            'warna' => '#F16500',
            'geojson' => 'pekalongan-s3.geojson'
        ]);

        Kedelai::create([
            'kelas' => 'Tidak Sesuai (N)',
            'kecamatan_id' => 17,
            'warna' => '#FF0000',
            'geojson' => 'pekalongan-n.geojson'
        ]);
        
        // Purbolinggo
        Kedelai::create([
            'kelas' => 'Sesuai Marginal (S3)',
            'kecamatan_id' => 21,
            'warna' => '#F16500',
            'geojson' => 'purbolinggo-s3.geojson'
        ]);

        Kedelai::create([
            'kelas' => 'Tidak Sesuai (N)',
            'kecamatan_id' => 21,
            'warna' => '#FF0000',
            'geojson' => 'purbolinggo-n.geojson'
        ]);

        // Raman Utara
        Kedelai::create([
            'kelas' => 'Sesuai Marginal (S3)',
            'kecamatan_id' => 22,
            'warna' => '#F16500',
            'geojson' => 'ramanutara-s3.geojson'
        ]);

        Kedelai::create([
            'kelas' => 'Tidak Sesuai (N)',
            'kecamatan_id' => 22,
            'warna' => '#FF0000',
            'geojson' => 'ramanutara-n.geojson'
        ]);

        // Sekampung
        Kedelai::create([
            'kelas' => 'Sangat Sesuai (S1)',
            'kecamatan_id' => 14,
            'warna' => '#00FF1A',
            'geojson' => 'sekampung-s1.geojson'
        ]);

        Kedelai::create([
            'kelas' => 'Cukup Sesuai (S2)',
            'kecamatan_id' => 14,
            'warna' => '#FFF500',
            'geojson' => 'sekampung-s2.geojson'
        ]);

        Kedelai::create([
            'kelas' => 'Sesuai Marginal (S3)',
            'kecamatan_id' => 14,
            'warna' => '#F16500',
            'geojson' => 'sekampung-s3.geojson'
        ]);

        Kedelai::create([
            'kelas' => 'Tidak Sesuai (N)',
            'kecamatan_id' => 14,
            'warna' => '#FF0000',
            'geojson' => 'sekampung-n.geojson'
        ]);

        // Sekampung Udik
        Kedelai::create([
            'kelas' => 'Sangat Sesuai (S1)',
            'kecamatan_id' => 9,
            'warna' => '#00FF1A',
            'geojson' => 'sekampungudik-s1.geojson'
        ]);

        Kedelai::create([
            'kelas' => 'Cukup Sesuai (S2)',
            'kecamatan_id' => 9,
            'warna' => '#FFF500',
            'geojson' => 'sekampungudik-s2.geojson'
        ]);

        Kedelai::create([
            'kelas' => 'Sesuai Marginal (S3)',
            'kecamatan_id' => 9,
            'warna' => '#F16500',
            'geojson' => 'sekampungudik-s3.geojson'
        ]);

        Kedelai::create([
            'kelas' => 'Tidak Sesuai (N)',
            'kecamatan_id' => 9,
            'warna' => '#FF0000',
            'geojson' => 'sekampungudik-n.geojson'
        ]);

        // Sukadana
        Kedelai::create([
            'kelas' => 'Sangat Sesuai (S1)',
            'kecamatan_id' => 18,
            'warna' => '#00FF1A',
            'geojson' => 'sukadana-s1.geojson'
        ]);

        Kedelai::create([
            'kelas' => 'Cukup Sesuai (S2)',
            'kecamatan_id' => 18,
            'warna' => '#FFF500',
            'geojson' => 'sukadana-s2.geojson'
        ]);

        Kedelai::create([
            'kelas' => 'Sesuai Marginal (S3)',
            'kecamatan_id' => 18,
            'warna' => '#F16500',
            'geojson' => 'sukadana-s3.geojson'
        ]);

        Kedelai::create([
            'kelas' => 'Tidak Sesuai (N)',
            'kecamatan_id' => 18,
            'warna' => '#FF0000',
            'geojson' => 'sukadana-n.geojson'
        ]);

        // Waway Karya
        Kedelai::create([
            'kelas' => 'Sangat Sesuai (S1)',
            'kecamatan_id' => 4,
            'warna' => '#00FF1A',
            'geojson' => 'wawaykarya-s1.geojson'
        ]);

        Kedelai::create([
            'kelas' => 'Cukup Sesuai (S2)',
            'kecamatan_id' => 4,
            'warna' => '#FFF500',
            'geojson' => 'wawaykarya-s2.geojson'
        ]);

        Kedelai::create([
            'kelas' => 'Sesuai Marginal (S3)',
            'kecamatan_id' => 4,
            'warna' => '#F16500',
            'geojson' => 'wawaykarya-s3.geojson'
        ]);

        Kedelai::create([
            'kelas' => 'Tidak Sesuai (N)',
            'kecamatan_id' => 4,
            'warna' => '#FF0000',
            'geojson' => 'wawaykarya-n.geojson'
        ]);

        // Way Bungur
        Kedelai::create([
            'kelas' => 'Sesuai Marginal (S3)',
            'kecamatan_id' => 23,
            'warna' => '#F16500',
            'geojson' => 'waybungur-s3.geojson'
        ]);

        Kedelai::create([
            'kelas' => 'Tidak Sesuai (N)',
            'kecamatan_id' => 23,
            'warna' => '#FF0000',
            'geojson' => 'waybungur-n.geojson'
        ]);

        // Way Jepara
        Kedelai::create([
            'kelas' => 'Sangat Sesuai (S1)',
            'kecamatan_id' => 11,
            'warna' => '#00FF1A',
            'geojson' => 'wayjepara-s1.geojson'
        ]);

        Kedelai::create([
            'kelas' => 'Cukup Sesuai (S2)',
            'kecamatan_id' => 11,
            'warna' => '#FFF500',
            'geojson' => 'wayjepara-s2.geojson'
        ]);

        Kedelai::create([
            'kelas' => 'Sesuai Marginal (S3)',
            'kecamatan_id' => 11,
            'warna' => '#F16500',
            'geojson' => 'wayjepara-s3.geojson'
        ]);
    }
}
