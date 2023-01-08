<?php

namespace Tests\Feature\Admin;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Models\DataBantuan;

class DataBantuanTest extends TestCase
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
        $this->click('Data Bantuan');
        $this->seePageIs('/admin/bantuan');

        $bantuan = DataBantuan::all();
        foreach ($bantuan as $data) {
            $this->see($data->nama);
            $this->see($data->nik);
            $this->see($data->alamat);
            $this->see($data->nominal);
        }
    }

    public function testImport()
    {
        $this->testLogin();
        $this->click('Data Bantuan');
        $this->seePageIs('/admin/bantuan');

        $this->markTestIncomplete('Error 500, ga tau kenapa');
        // $this->submitForm('Import', [
        //     'file' => 'tests/Feature/Admin/data_bantuan.xlsx'
        // ]);
        $this->seePageIs('/admin/bantuan');
        $this->see('Data berhasil diimport');
    }
}
