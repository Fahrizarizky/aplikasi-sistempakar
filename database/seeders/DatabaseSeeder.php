<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Aturan;
use App\Models\Bobot;
use App\Models\Gejala;
use App\Models\Kondisi;
use App\Models\Solusi;
use App\Models\Tingkatstres;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       Gejala::create([
        'nama_gejala' => 'Mudah tersinggung',
        'kode_gejala' => 'G01',
        'deskripsi' => 'Sensitif terhadap kritik atau komentar, mudah marah atau tersinggung'
       ]);
       Gejala::create([
        'nama_gejala' => 'Frustasi',
        'kode_gejala' => 'G02',
        'deskripsi' => 'Merasa tidak mampu mencapai tujuan, merasa putus asa'
       ]);
       Gejala::create([
        'nama_gejala' => 'Perubahan suasana hati',
        'kode_gejala' => 'G03',
        'deskripsi' => 'Emosi yang tidak stabil, bisa tiba-tiba merasa sedih, marah, atau senang'
       ]);
       Gejala::create([
        'nama_gejala' => 'Sulit untuk tenang',
        'kode_gejala' => 'G04',
        'deskripsi' => 'Pikiran terus berkecamuk, sulit untuk rileks'
       ]);
       Gejala::create([
        'nama_gejala' => 'Bingung',
        'kode_gejala' => 'G05',
        'deskripsi' => 'Sulit untuk berkonsentrasi dan mengambil keputusan'
       ]);
       Gejala::create([
        'nama_gejala' => 'Merasa tidak berguna',
        'kode_gejala' => 'G06',
        'deskripsi' => 'Merasa tidak berharga atau tidak mampu'
       ]);
       Gejala::create([
        'nama_gejala' => 'Cenderung menghindari orang lain',
        'kode_gejala' => 'G07',
        'deskripsi' => 'Menarik diri dari pergaulan, merasa tidak ingin berinteraksi dengan orang lain'
       ]);
       Gejala::create([
        'nama_gejala' => 'Depresi',
        'kode_gejala' => 'G08',
        'deskripsi' => 'Merasa sedih berkepanjangan, kehilangan minat pada aktivitas yang biasanya disukai'
       ]);
       Gejala::create([
        'nama_gejala' => 'Menenggelamkan',
        'kode_gejala' => 'G09',
        'deskripsi' => 'upaya tidak sehat untuk menghindari atau mengatasi stres'
       ]);
       Gejala::create([
        'nama_gejala' => 'Penurunan berat badan/sebaliknya',
        'kode_gejala' => 'G010',
        'deskripsi' => 'Perubahan nafsu makan yang signifikan'
       ]);
       Gejala::create([
        'nama_gejala' => 'Berbelok',
        'kode_gejala' => 'G011',
        'deskripsi' => 'perubahan perilaku yang tiba-tiba atau tidak terduga'
       ]);
       Gejala::create([
        'nama_gejala' => 'Mual',
        'kode_gejala' => 'G012',
        'deskripsi' => 'Perasaan tidak nyaman di perut, sering ingin muntah'
       ]);
       Gejala::create([
        'nama_gejala' => 'Diare',
        'kode_gejala' => 'G013',
        'deskripsi' => 'Buang air besar lebih sering dari biasanya, tinja encer'
       ]);
       Gejala::create([
        'nama_gejala' => 'Sembelit',
        'kode_gejala' => 'G014',
        'deskripsi' => 'Susah buang air besar'
       ]);
       Gejala::create([
        'nama_gejala' => 'Nyeri otot',
        'kode_gejala' => 'G015',
        'deskripsi' => 'Rasa sakit atau nyeri pada otot-otot tubuh'
       ]);
       Gejala::create([
        'nama_gejala' => 'Jantung berdebar kencang',
        'kode_gejala' => 'G016',
        'deskripsi' => 'Detak jantung terasa lebih cepat dari biasanya'
       ]);
       Gejala::create([
        'nama_gejala' => 'Gangguan tidur',
        'kode_gejala' => 'G017',
        'deskripsi' => 'Sulit tidur, sering terbangun di tengah malam, atau tidur terlalu banyak'
       ]);
       Gejala::create([
        'nama_gejala' => 'Penurunan hasrat seksual',
        'kode_gejala' => 'G018',
        'deskripsi' => 'Minat pada aktivitas seksual menurun'
       ]);
       Gejala::create([
        'nama_gejala' => 'tubuh gemetar',
        'kode_gejala' => 'G019',
        'deskripsi' => 'Otot-otot tubuh bergetar tanpa alasan yang jelas'
       ]);
       Gejala::create([
        'nama_gejala' => 'Telinga berdenging',
        'kode_gejala' => 'G020',
        'deskripsi' => 'Mendengar suara berdenging di telinga'
       ]);
       Gejala::create([
        'nama_gejala' => 'Kaki/tangan dingin dan berkeringat',
        'kode_gejala' => 'G021',
        'deskripsi' => 'Kelenjar keringat bekerja lebih aktif'
       ]);
       Gejala::create([
        'nama_gejala' => 'Mulut kering',
        'kode_gejala' => 'G022',
        'deskripsi' => 'Produksi air liur berkurang'
       ]);
       Gejala::create([
        'nama_gejala' => 'Kesulitan menelan',
        'kode_gejala' => 'G023',
        'deskripsi' => 'Merasa kesulitan saat menelan makanan atau minuman'
       ]);
       Gejala::create([
        'nama_gejala' => 'Sulit untuk fokus',
        'kode_gejala' => 'G024',
        'deskripsi' => 'Sulit berkonsentrasi pada tugas atau aktivitas'
       ]);
       Gejala::create([
        'nama_gejala' => 'Sering lupa',
        'kode_gejala' => 'G025',
        'deskripsi' => 'Mudah lupa hal-hal kecil'
       ]);
       Gejala::create([
        'nama_gejala' => 'Pesimistis',
        'kode_gejala' => 'G026',
        'deskripsi' => 'Selalu melihat sisi negatif dari suatu situasi'
       ]);
       Gejala::create([
        'nama_gejala' => 'Cenderung negatif',
        'kode_gejala' => 'G027',
        'deskripsi' => 'Memiliki pikiran-pikiran negatif tentang diri sendiri atau orang lain'
       ]);
       Gejala::create([
        'nama_gejala' => 'Sering membuat keputusan yang buruk',
        'kode_gejala' => 'G028',
        'deskripsi' => 'Sulit mengambil keputusan yang tepat'
       ]);
       Gejala::create([
        'nama_gejala' => 'Perubahan pola makan',
        'kode_gejala' => 'G029',
        'deskripsi' => 'Makan terlalu banyak atau terlalu sedikit'
       ]);
       Gejala::create([
        'nama_gejala' => 'Kebiasaan menghindari tanggung jawab',
        'kode_gejala' => 'G030',
        'deskripsi' => 'Menunda-nunda tugas atau menghindari tanggung jawab'
       ]);
       Gejala::create([
        'nama_gejala' => 'Gugup sampai menggigit kuku',
        'kode_gejala' => 'G031',
        'deskripsi' => 'Tanda-tanda kecemasan atau kegelisahan'
       ]);
       Gejala::create([
        'nama_gejala' => 'Berjalan maju mundur',
        'kode_gejala' => 'G032',
        'deskripsi' => 'Gerakan tubuh yang tidak menentu sebagai tanda kegelisahan'
       ]);
       Gejala::create([
        'nama_gejala' => 'Kebiasaan merokok/mengonsumsi minuman beralkohol secara berlebihan',
        'kode_gejala' => 'G033',
        'deskripsi' => 'Cara untuk mengatasi stres yang tidak sehat'
       ]);
       

       Tingkatstres::create([
        'nama_tingkatstres' => 'Stres ringan',
        'kode_tingkatstres' => 'T02',
        'solusi_stres' => 'Lakukan teknik relaksasi seperti meditasi, yoga, atau pernapasan dalam selama 10-15 menit setiap hari, Tidurlah 7-8 jam setiap malam untuk membantu tubuh dan pikiran beristirahat, tetap menjaga pola makan dengan teratur, membiasakan untuk selalu berfikir positif, belajar untuk menerima diri apa adanya'
       ]);
       Tingkatstres::create([
        'nama_tingkatstres' => 'Stres sedang',
        'kode_tingkatstres' => 'T03',
        'solusi_stres' => 'Jika stres yang di alami telah berlangsung lama dan tidak kunjung membaik, carilah bantuan profesional dari psikolog atau konselor, Bergabunglah dengan kelompok pendukung untuk bertemu dengan orang lain yang mengalami stres dan mendapatkan dukungan dari mereka, Hindari kafein dan alkohol karena dapat memperburuk stres, mendekatkan diri kepada tuhan sesuai dengan kepercayaannya masing-masing'
       ]);
       Tingkatstres::create([
        'nama_tingkatstres' => 'Stres berat',
        'kode_tingkatstres' => 'T04',
        'solusi_stres' => 'Jika Anda mengalami stres berat, segera cari bantuan profesional dari psikolog atau psikiater, Jika perlu, ambillah cuti sekolah untuk sementara waktu untuk fokus pada pemulihan diri'
       ]);


       Aturan::create([
        'gejala_id' => 1,
        'tingkatstres_id' => 1,
        'bobot' => 0.1
       ]);
       Aturan::create([
        'gejala_id' => 2,
        'tingkatstres_id' => 1,
        'bobot' => 0.1
       ]);
       Aturan::create([
        'gejala_id' => 3,
        'tingkatstres_id' => 1,
        'bobot' => 0.1
       ]);
       Aturan::create([
        'gejala_id' => 4,
        'tingkatstres_id' => 2,
        'bobot' => 0.5
       ]);
       Aturan::create([
        'gejala_id' => 5,
        'tingkatstres_id' => 2,
        'bobot' => 0.5
       ]);
       Aturan::create([
        'gejala_id' => 6,
        'tingkatstres_id' => 1,
        'bobot' => 0.1
       ]);
       Aturan::create([
        'gejala_id' => 7,
        'tingkatstres_id' => 1,
        'bobot' => 0.1
       ]);
       Aturan::create([
        'gejala_id' => 8,
        'tingkatstres_id' => 1,
        'bobot' => 0.1
       ]);

       Aturan::create([
        'gejala_id' => 9,
        'tingkatstres_id' => 1,
        'bobot' => 0.1
       ]);
       Aturan::create([
        'gejala_id' => 10,
        'tingkatstres_id' => 1,
        'bobot' => 0.1
       ]);
       Aturan::create([
        'gejala_id' => 11,
        'tingkatstres_id' => 1,
        'bobot' => 0.1
       ]);
       Aturan::create([
        'gejala_id' => 12,
        'tingkatstres_id' => 2,
        'bobot' => 0.5
       ]);
       Aturan::create([
        'gejala_id' => 13,
        'tingkatstres_id' => 1,
        'bobot' => 0.3
       ]);
       Aturan::create([
        'gejala_id' => 14,
        'tingkatstres_id' => 2,
        'bobot' => 0.5
       ]);
       Aturan::create([
        'gejala_id' => 15,
        'tingkatstres_id' => 1,
        'bobot' => 0.1
       ]);
       Aturan::create([
        'gejala_id' => 16,
        'tingkatstres_id' => 3,
        'bobot' => 0.8
       ]);
       Aturan::create([
        'gejala_id' => 17,
        'tingkatstres_id' => 2,
        'bobot' => 0.5
       ]);
       Aturan::create([
        'gejala_id' => 18,
        'tingkatstres_id' => 1,
        'bobot' => 0.1
       ]);
       Aturan::create([
        'gejala_id' => 19,
        'tingkatstres_id' => 2,
        'bobot' => 0.5
       ]);
       Aturan::create([
        'gejala_id' => 20,
        'tingkatstres_id' => 1,
        'bobot' => 0.4
       ]);
       Aturan::create([
        'gejala_id' => 21,
        'tingkatstres_id' => 2,
        'bobot' => 0.5
       ]);
       Aturan::create([
        'gejala_id' => 22,
        'tingkatstres_id' => 1,
        'bobot' => 0.1
       ]);
       Aturan::create([
        'gejala_id' => 23,
        'tingkatstres_id' => 2,
        'bobot' => 0.5
       ]);

       Aturan::create([
        'gejala_id' => 24,
        'tingkatstres_id' => 2,
        'bobot' => 0.5
       ]);
       Aturan::create([
        'gejala_id' => 25,
        'tingkatstres_id' => 1,
        'bobot' => 0.3
       ]);
       Aturan::create([
        'gejala_id' => 26,
        'tingkatstres_id' => 2,
        'bobot' => 0.5
       ]);
       Aturan::create([
        'gejala_id' => 27,
        'tingkatstres_id' => 2,
        'bobot' => 0.5
       ]);
       Aturan::create([
        'gejala_id' => 28,
        'tingkatstres_id' => 1,
        'bobot' => 0.1
       ]);

       Aturan::create([
        'gejala_id' => 29,
        'tingkatstres_id' => 2,
        'bobot' => 0.5
       ]);
       Aturan::create([
        'gejala_id' => 30,
        'tingkatstres_id' => 1,
        'bobot' => 0.1
       ]);
       Aturan::create([
        'gejala_id' => 31,
        'tingkatstres_id' => 1,
        'bobot' => 0.2
       ]);
       Aturan::create([
        'gejala_id' => 32,
        'tingkatstres_id' => 1,
        'bobot' => 0.2
       ]);
       Aturan::create([
        'gejala_id' => 33,
        'tingkatstres_id' => 1,
        'bobot' => 0.0
       ]);
    }
}
