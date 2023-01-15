<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataBantuan;
use App\Models\Berita;

class MainController extends Controller
{
    public function index()
    {
        return view('layouts.home', [
            "title" => 'Beranda'
        ]);
    }

    public function informasi()
    {
        $title = 'Informasi';
        $dataBerita = Berita::latest()->paginate(5);
        return view('layouts.informasi.informasi', compact('title', 'dataBerita'));
    }

    public function beritaBySlug($slug)
    {
        $title = 'Informasi';
        $dataBerita = Berita::where('slug', $slug)->get();
        return view('layouts.informasi.berita_by_slug', compact('title', 'dataBerita'));
    }

    public function layanan()
    {
        $title = 'Layanan';
        $dataBantuan = DataBantuan::all();
        return view('layouts.layanan', compact('title', 'dataBantuan'));
    }

    public function profil()
    {
        return view('layouts.profil', [
            "title" => 'Profil',
        ]);
    }

    public function gambaran_umum()
    {
        return view('layouts.gambaran_umum', [
            "title" => 'Profil - Gambaran Umum',
        ]);
    }

    public function cek_bantuan()
    {
        $nama = request('nama');
        $nik = request('nik');
        $dataBantuan = DataBantuan::where('nama', $nama)->where('nik', $nik)->get();
        // dd($dataBantuan);
        return view('layouts.bantuan-detail', [
            "title" => 'Cek Bantuan',
            "dataBantuan" => $dataBantuan
        ]);
    }
}
