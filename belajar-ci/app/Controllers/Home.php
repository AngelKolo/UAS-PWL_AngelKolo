<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        // Proteksi login
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/login')->with('error', 'Silakan login dulu!');
        }

        // Tampilkan halaman home custom buatanmu
        return view('home');
    }
}
