<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return redirect('admin/dashboard');
        }
        return redirect('admin/login')->with('success', 'Login terlebih dahulu untuk masuk ke halaman Dashboard');
    }

    public function login()
    {
        return view('admin.login');
    }

    public function registration()
    {
        return view('admin.register');
    }

    public function validate_registration(Request $request)
    {
        $request->validate([
            'name'      =>  'required',
            'username'  =>  'required|unique:users',
            'password'  =>  [
                'required',
                'min:6',
                'regex:/[a-z]/',
                'regex:/[A-Z]/',
                'regex:/[0-9]/',
            ],
        ]);

        $data = $request->all();

        User::create([
            'name'      => $data['name'],
            'username'  => $data['username'],
            'password'  => Hash::make($data['password'])
        ]);

        if (Auth::check()) {
            return redirect('admin/akun')->with('success', 'Akun admin telah berhasil dibuat');
        }
        return redirect('admin/login')->with('success', 'Akun admin telah berhasil dibuat');
    }

    public function validate_login(Request $request)
    {
        $request->validate([
            'username'  =>  'required',
            'password'  =>  'required'
        ]);

        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            return redirect('admin/dashboard');
        }

        return redirect('admin/login')->with('gagal', 'Login gagal, username atau password salah');
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect('admin/login');
    }
}
