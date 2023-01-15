<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Models\Berita;

class BeritaTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testLogin()
    {
        $this->visit('/admin/login');
        $this->see('Admin Login');
        $this->submitForm('Login', [
            'username' => 'banteran1',
            'password' => 'banteran1'
        ]);
        $this->seePageIs('/admin/dashboard');
    }

    public function testRead()
    {
        $this->testLogin();
        $this->click('Berita');
        $this->seePageIs('/admin/berita');

        $berita = Berita::all();
        foreach ($berita as $data) {
            $this->see($data->judul);
            $this->see($data->isi);
        }
    }

    public function testCreate()
    {
        $this->testRead();
        $this->click('posting-berita');
        $this->seePageIs('/admin/berita/post-berita');

        $file = public_path('img.jpg');
        $this->submitForm('Posting', [
            'author' => 'Author1',
            'gambar' => $file,
            'judul' => 'Test Judul',
            'konten' => 'Test test test test'
        ]);

        $this->seePageIs('/admin/berita');
        $this->seeInDatabase('beritas', [
            'judul' => 'Test Judul',
            'author' => 'Author1',
            'konten' => 'Test test test test'
        ]);
    }

    public function testDelete()
    {
        $this->testRead();

        $berita = Berita::all();

        if (count($berita) == 0) {
            $this->markTestSkipped('No data to delete');
        } else {
            $latestIndex = count($berita) - 1;
            $id = $berita[$latestIndex]->id;

            $this->submitForm('hapus-berita', [
                'deleted_id' => $id
            ]);
            $this->seePageIs('/admin/berita');
        }
    }
}
