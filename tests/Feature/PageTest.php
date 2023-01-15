<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Models\DataBantuan;
use App\Models\Berita;

class PageTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testHomePage()
    {
        $this->visit('/');
        $this->see('Pengecekan data penerima bantuan');
        $this->click('Cek Penerima Bantuan');
        $this->seePageIs('/layanan');
    }

    public function testLayananPage()
    {
        $dataBantuan = DataBantuan::all();
        $this->visit('/layanan');
        $this->see('Data Penerima Bantuan');

        foreach ($dataBantuan as $data) {
            $this->see($data->nama);
            $this->see($data->nik);
            $this->see($data->alamat);
            $this->see($data->nominal);
        }
    }

    public function testInformasiPage()
    {
        $berita = Berita::all();
        $this->visit('/informasi');

        if (count($berita) == 0) {
            $this->markTestSkipped('No data to view');
        } else {
            foreach ($berita as $data) {
                $this->see($data->judul);
                $this->see($data->author);
            }

            $this->click('Selengkapnya');
            $latestIndex = count($berita) - 1;
            $this->seePageIs('/informasi/berita/' . $berita[$latestIndex]->slug);
            $this->see($berita[$latestIndex]->judul);
            $this->see($berita[$latestIndex]->author);
            $this->see($berita[$latestIndex]->isi);
        }
    }

    public function testProfilePage()
    {
        $this->visit('/profil');

        $this->see('Sejarah Desa');
        $this->see('Merupakan salah satu desa besar yang terletak di kecamatan Sumbang, kabupaten Banyumas, dengan infrastruktur desa yang lengkap, didukung oleh sumber daya alam yang subur, sumber air yang cukup dengan lahan pertanian lebih dari 60 % dari total wilayah desa Banteran. Sumber daya manusia yang cukup berkualitas dengan tingkat pendidikan yang berangsur-angsur membaik, hal ini didukung oleh sarana prasarana pendidikan yang makin lengkap, mulai dari PAUD, TK, SD dan SLTP baik negeri maupun swasta yang ada di desa Banteran. Mungkin pendidikan lanjutan berupa SLTA saat ini sudah menjadi kebutuhan mendesak, dan sangat diharapkan oleh semua masyarakat Banteran, umumnya kecamatan Sumbang.Desa Banteran telah siap menyediakan lokasi strategis untuk SLTA dengan harapan tanah banda desa yang akan digunakan sekolahan dapat tanah penggantinya. Dibanding desa-desa lain di kecamatan Sumbang, desa Banteran tidak terlalu ketinggalan dan secara umum mampu mengikuti semua program pemerintah baik dari kecamatan atau tingkat kabupaten. Semua program pembangunan di desa Banteran, diharapkan untuk dapat mendudkung kemajuan dan kemakmuran masyarakat, dan mendorong kemandirian usaha perekonomian yang terpadu dan terukur dengan parameter yang jelas, sehingga desa dan masyarakat memahami apa yang akan dilakukan secara bersama,menuju desa Banteran menjadi lebih baik di masa depan.');

        $this->see('Visi & Misi');

        $this->see('Visi');
        $this->see('Adalah langkah kerja pemerintahan desa yang dapat dirasakan hasilnya oleh masyarakat secara umum, mengandung makna bahwa penyelenggaraan pemerintahan dilaksanakan dengan prinsip-prinsip tata pemerintahan yang baik (good governance) ditandai pemerintahan yang bebeas dari praktek Korupsi, Kolusi dan Nepotisme (KKN), sumber daya Perangkat Desa yang berkualitas dan profesional, menedepankan pelayanan publik secara optimal, adanya jaminan kebebasan berpendapat. Berperan aktif dalam upaya meningkatkan pendapatan asli desa guna mendukung terselanggaranya pelayanan public yang semakin baik juga peningkatan ekonomi masyarakat desa baik secara kelompok maupun individu sebagai faktor penting dalam mewujudkan masyarakat yang adil, makmur, sehat jasmani rohani dan sejahtera');

        $this->see('Misi');
        $this->see('Misi Desa Banteran');

        $this->see('Struktur Organisasi');
    }
}
