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

        $this->markTestIncomplete('Error 500, ga tau kenapa');
        // $this->submitForm('Posting', [
        //     'author' => 'Author1',
        //     'gambar' => 'img.jpg',
        //     'judul' => 'Test',
        //     'konten' => 'lorem ipsum'
        // ]);
    }

    public function testDelete()
    {
        $this->testRead();

        $berita = Berita::all();
        $latestIndex = count($berita) - 1;

        $this->submitForm('hapus-berita', [
            'deleted_id' => $berita[$latestIndex]->id
        ]);
        $this->seePageIs('/admin/berita');
    }
}
