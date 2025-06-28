<?php

namespace App\Controllers;

class LoginController extends BaseController
{
    public function index()
    {
        return view('login');
    }

    public function proses()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Validasi sederhana
        if ($username === 'admin' && $password === '123456') {
            return redirect()->to('/')->with('success', 'Berhasil login!');
        } else {
            return redirect()->back()->with('error', 'Username atau password salah.');
        }
    }

    public function logout()
    {
    session()->destroy(); // Hapus semua session
    return redirect()->to('/login')->with('success', 'Berhasil logout!');
    }

}
