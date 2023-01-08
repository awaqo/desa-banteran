<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AdminTest extends TestCase
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

    public function testLogout()
    {
        $this->testLogin();
        $this->click('Logout');
        $this->seePageIs('/admin/login');
    }
}
