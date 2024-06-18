<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Wisata;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        Wisata::create(
            [
                'nama' => 'Gunung Gambir',
                'lat' => '-12',
                'lang' => '-21',
                'desc' => 'Kebun teh seluas 183 hektar yang terletak di Desa Gelang, Kecamatan Sumberbaru, Kabupaten Jember, Jawa Timur. Kebun teh ini tepatnya terletak di lereng Gunung Argopuro[1] yang berjarak ± 60 km dari pusat kota Jember dan terletak pada ketinggian 900 meter di atas permukaan laut. Kebun teh ini telah ada sejak masa pendudukan Belanda di Indonesia dan kini dikelola oleh Perkebunan Nusantara XII',
                'alamat' => 'Desa Gelang, Kecamatan Sumber Baru, Kabupaten Jember, Jawa Timur'
            ]
        );
        Wisata::create(
            [
                'nama' => 'Pantai Papuma',
                'lat' => '-2323',
                'lang' => '-31231',
                'desc' => 'Pantai papuma berada di Desa Lojejer, Kecamatan Wuluhan, Kabupaten Jember. Pantai papuma adalah salah satu pantai yang cukup populer dan terkenal di Jember. Walaupun jarak sekitar 40 kilometer cukup jauh dari pusat kota Jember. Namun, keindahan pasir putih Malikan ini cukup eksotis dan mampu menarik perhatian wisatawan lokal hingga mancanegara untuk datang kesana.',
                'alamat' => 'Jalan Tj. Papuma Area Kebun Lojejer Wuluhan 68172 Jember Jawa Timur '
            ]
        );
        Wisata::create(
            [
                'nama' => 'Pantai Payangan',
                'lat' => '-2323',
                'lang' => '-31231',
                'desc' => 'Pantai Payangan terletak di di Dusun Payangan, Desa Sumberrejo, Kecamatan Ambulu, Jember, Jawa Timur. Butuh waktu sekitar satu jam dari Kota Jember.

Pantai berpasir hitam itu disebut memiliki keindahan yang memesona bagai khayangan. Panoramanya diperindah dengan bukit yang menjadi latar belakang pantai tersebut yang bernama Bukit Syarat.
Bukit Syarat diapit oleh dua bukit lainnya, yakni Samboja dan Suroyo. Salah satu bukit di atasnya terdapat makam tua yang dikenal oleh warga sekitar dengan sebutan Pati Ulung.
Warga yang tinggal di luar Jember, Jawa Timur,  mempercayai bahwa di bukit tersebut dapat membawa pada kekayaan. Karena itu, tak jarang banyak masyarakat luar Jember yang datang untuk menggelar sejumlah ritual yang sering dikaitkan dengan hal-hal berbau mistis.',
                'alamat' => 'Dusun Payangan, Desa Sumberrejo, Kecamatan Ambulu'
            ]
        );

        Wisata::create(
            [
                'nama' => 'Rembangan',
                'lat' => '-2322133',
                'lang' => '-31297231',
                'desc' => 'Puncak Wisata Rembangan Jember sendiri lokasinya berada di Desa Kemuning Lor, Kecamatan Arjasa, Kabupaten Jember, Provinsi Jawa Timur. Apa saja sebenarnya yang akan pengunjung dapatkan jika berlibur di tempat wisata ini? 
Wisata Rembangan ini biasa disebut dengan Puncak Rembang yang mana tempat ini merupakan tempat wisata yang berada di dataran tinggi Jember. 
Jika membahas tentang pemandangan, di sini pengunjung akan disuguhkan dengan pemandangan gunung-gunung di Jember yang menakjubkan.
Saat malam, dari atas puncak pengunjung akan dapat melihat ribuan cahaya yang datang dari rumah-rumah warga yang berada di bawah puncaknya. 
      ',
                'alamat' => 'Desa Kemuning Lor, Kecamatan Arjasa, Jember, Jawa Timur'
            ]
        );

        Wisata::create(
            [
                'nama' => 'Pantai Watu Ulo',
                'lat' => '-2329083',
                'lang' => '-31293217931',
                'desc' => 'Pantai ini berada di gugusan Samudera Indonesia dengan panorama alam yang indah. Menariknya di Pantai
                    ini
                    terdapat sebuah batu panjang yang berbentuk seperti ular (Jw.Ulo) yang penuh dengan sisik. Menurut
                    cerita
                    rakyat pada jaman dahulu kala ada seekor Ular yang sedang bertapa di pantai itu. Setelah permohonannnya
                    dikabulkan oleh Yang Maha Kuasa maka wujudnya berubah menjadi batu dengan bagian kepala menjulur ke laut
                    dan
                    badan berada di daratan. Tempat ini juga memiliki nilai sejarah karena pada jaman dulu dijadikan sebagai
                    benteng pertahanan serdadu tentara Jepang. Ada lima buah benteng pertahanan yang dibangun sehinggga
                    masyarakat
                    setempat menyebutnya Goa Jepang. Tidak kalah menariknya di samping Goa Jepang terdapat Goa Lawa (Goa
                    Kalelawar) yang dihuni ratusan ribu Kalelawar.Pengunjung bisa melihat dengan melewati dan menyusuri
                    pantai
                    berpasir.Goa ini mempunyai kedalaman 100 meter yang biasanya dijadikan sebagai tempat bermeditasi karena
                    letaknya yang jauh dari keramaian. Pada saat saat tertentu seperti menjelang Tahun Baru masehi dan Hari
                    Raya
                    Idul Fitri digelar event event special seperti Lomba Layang Layang Pantai dan panggung hiburan rakyat.
                    Dan
                    yang tak kalah menarik setiap Tahun Baru Hijriyah diadakan Festival Pegon, Pegon adalah kendaraan angkut
                    tradisional dengan tenaga sapi serta tasyakuran sebagai wujud terimakasih atas semua rizki yang telah
                    diterima
                    di sepanjang tahun dan harapan untuk tetap diberikan kemudahan dan limpahan rahmat dari Yang Maha Kuasa.',
                'alamat' => 'Desa Sumberejo, kecamatan Ambulu, Jember'
            ]
        );
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
