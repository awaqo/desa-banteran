<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataBantuan;

class MainController extends Controller
{
    public function index() {
        return view('layouts.home', [
            "title" => 'Beranda'
        ]);
    }

    public function informasi() {
        return view('layouts.informasi', [
            "title" => 'Informasi'
        ]);
    }

    public function layanan() {
        $title = 'Layanan';
        $dataBantuan = DataBantuan::all();
        return view('layouts.layanan', compact('title', 'dataBantuan'));
    }

    public function profil() {
        return view('layouts.profil', [
            "title" => 'Profil',
        ]);
    }

    public function gambaran_umum() {
        return view('layouts.gambaran_umum', [
            "title" => 'Profil - Gambaran Umum',
        ]);
    }
}
