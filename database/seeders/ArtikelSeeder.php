<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Artikel;

class ArtikelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Artikel::create([
            'kategori_id' => 1,
            'judul' => 'Manfaat, Penggunaan, dan Informasi Nutrisi dari Kedelai',
            'slug' => 'manfaat-penggunaan-dan-informasi-nutrisi-dari-kedelai',
            'body' => 'Kedelai adalah salah satu tanaman legum yang memiliki sejarah panjang dalam penggunaannya sebagai sumber makanan dan bahan baku industri. Tanaman kedelai (Glycine max) berasal dari Asia Timur dan telah dibudidayakan selama ribuan tahun. Kedelai merupakan salah satu komoditas utama dalam industri makanan, minuman, dan pakan ternak.

            Artikel ini akan membahas manfaat, penggunaan, dan informasi nutrisi yang terkait dengan kedelai.
            
            Manfaat Kedelai:
            Sumber Protein Nabati: Kedelai merupakan sumber protein nabati yang kaya dan lengkap. Protein dalam kedelai mengandung semua asam amino esensial yang diperlukan oleh tubuh manusia.
            Sumber Serat: Kedelai mengandung serat pangan yang penting untuk menjaga kesehatan pencernaan dan mengatur kadar gula darah. Serat juga membantu meningkatkan kenyang dan menjaga berat badan yang sehat.
            Kaya akan Isoflavon: Kedelai mengandung senyawa yang disebut isoflavonoid, seperti genistein dan daidzein. Isoflavonoid ini memiliki efek antioksidan dan dapat membantu mengurangi risiko penyakit jantung, osteoporosis, dan beberapa jenis kanker.
            Alternatif Susu Nabati: Kedelai sering digunakan sebagai alternatif susu nabati bagi mereka yang tidak dapat mengonsumsi susu hewani. Susu kedelai mengandung nutrisi penting seperti kalsium, vitamin D, dan protein.
            
            Penggunaan Kedelai:
            Makanan: Kedelai digunakan dalam berbagai produk makanan, seperti tahu, tempe, susu kedelai, dan kecap. Produk-produk ini banyak digunakan dalam masakan Asia dan juga menjadi pilihan populer bagi vegetarian dan vegan.
            Minuman: Kedelai juga digunakan sebagai bahan dasar dalam pembuatan minuman seperti smoothie kedelai, susu kedelai, dan minuman olahraga berbasis kedelai.
            Bahan Baku Industri: Kedelai digunakan dalam industri makanan dan minuman sebagai bahan tambahan, seperti pengental, pewarna, dan bahan perasa alami. Selain itu, minyak kedelai juga digunakan dalam produksi biodiesel.
            
            Informasi Nutrisi Kedelai:
            Protein: Kedelai mengandung sekitar 36-40% protein, menjadikannya sumber protein nabati yang baik.
            Lemak: Kedelai mengandung lemak sehat, terutama asam lemak tak jenuh tunggal dan asam lemak tak jenuh ganda.
            Karbohidrat: Kedelai mengandung karbohidrat kompleks, serat, dan rendah gula.
            Vitamin dan Mineral: Kedelai mengandung vitamin B kompleks, vitamin E, zat besi, kalsium, magnesium, dan fosfor.
            
            Dalam menjalani gaya hidup sehat, kedelai dapat menjadi tambahan yang bermanfaat dalam pola makan. Namun, 
            bagi mereka yang memiliki alergi terhadap kedelai, perlu berkonsultasi dengan dokter atau ahli gizi sebelum mengonsumsinya.
            Dengan manfaat yang beragam, kedelai dapat menjadi pilihan yang baik untuk memenuhi kebutuhan nutrisi dan mendukung gaya hidup sehat. Kembangkan variasi dalam konsumsi kedelai, baik dalam bentuk makanan, minuman, atau sebagai bahan baku industri, dan rasakan manfaatnya bagi kesehatan Anda.',
            
            // 'ex' => 'Kedelai adalah salah satu tanaman legum yang memiliki sejarah panjang',

            'foto' => 'null'
        ]);

        Artikel::create([
            'kategori_id' => 1,
            'judul' => 'Benih Kedelai: Informasi dan Panduan',
            'slug' => 'benih-kedelai-informasi-dan-panduan',
            'body' => 'Benih kedelai merupakan komponen penting dalam budidaya tanaman kedelai. Memilih benih yang baik dan berkualitas adalah langkah awal yang krusial untuk mencapai hasil panen yang optimal. Dalam artikel ini, kami akan memberikan informasi dan panduan terkait benih kedelai, termasuk cara memilih benih yang tepat, penyimpanan yang baik, dan faktor-faktor lain yang perlu dipertimbangkan.

            1. Memilih Benih Kedelai yang Baik
            Pilih varietas yang sesuai dengan kondisi tumbuh di lokasi Anda, termasuk iklim, jenis tanah, dan faktor-faktor lingkungan lainnya.
            Pastikan benih berasal dari sumber yang terpercaya dan memiliki sertifikasi yang menjamin kualitas benih.
            Periksa keutuhan benih dan pastikan tidak ada kerusakan fisik, seperti retak, cacat, atau infeksi penyakit.
            Perhatikan tanggal produksi benih untuk memastikan kebaruan benih.
            
            2. Persiapan dan Penyimpanan Benih
            Jika Anda tidak segera menggunakan benih, simpan benih dalam wadah yang tertutup rapat di tempat yang kering dan sejuk.
            Hindari paparan benih terhadap sinar matahari langsung dan kelembapan yang berlebihan, karena dapat mengurangi viabilitas benih.
            Pastikan wadah penyimpanan benih bersih dan bebas dari serangga atau hama yang dapat merusak benih.
            
            3. Pengujian Keberlanjutan Benih
            Sebelum menanam benih kedelai, lakukan pengujian keberlanjutan benih dengan menggunakan metode sederhana seperti uji apung atau uji tetrazolium untuk memeriksa tingkat viabilitas benih.
            Metode pengujian ini akan memberikan gambaran tentang jumlah benih yang layak tanam dan membantu menghindari penanaman benih yang tidak produktif.
            
            4. Persiapan Tanah dan Penanaman
            Persiapkan lahan dengan membersihkan gulma dan mengolah tanah secara menyeluruh.
            Pastikan kondisi tanah ideal untuk pertumbuhan kedelai, termasuk tingkat keasaman (pH) yang sesuai dan tingkat kelembapan yang tepat.
            Lakukan penanaman benih kedelai dengan kedalaman dan jarak tanam yang sesuai untuk varietas yang Anda tanam.
            
            5. Pemeliharaan Tanaman
            Lakukan pemeliharaan tanaman secara teratur, termasuk penyiraman yang cukup, pemupukan yang tepat, serta pencegahan dan pengendalian hama dan penyakit.
            Perhatikan perkembangan tanaman kedelai, termasuk pertumbuhan, pembentukan polong, dan tanda-tanda kesehatan tanaman lainnya.
            
            6. Panen dan Penyimpanan Hasil Panen
            Lakukan panen saat tanaman kedelai sudah matang sesuai dengan varietas yang Anda tanam.
            Keringkan biji kedelai dengan baik sebelum penyimpanan untuk mengurangi kelembaban dan mencegah pertumbuhan jamur.
            Simpan hasil panen dalam wadah yang rapat, di tempat yang sejuk dan kering, untuk menjaga kualitas biji kedelai.
            
            Dengan memahami pentingnya benih kedelai yang berkualitas dan mengikuti panduan di atas, Anda dapat meningkatkan peluang keberhasilan dalam budidaya kedelai. Jangan lupa untuk melakukan riset lebih lanjut, berkonsultasi dengan ahli pertanian setempat, dan mengikuti praktik terbaik dalam budidaya tanaman kedelai.',
            
            // 'ex' => 'Benih kedelai merupakan komponen penting dalam budidaya tanaman kedelai. Memilih',

            'foto' => 'null'
        ]);
    }
}
