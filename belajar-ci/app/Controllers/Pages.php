<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        return view('home');
    }

    public function tentang()
    {
        return view('tentang');
    }

    public function galeri()
    {
        return view('galeri');
    }

    public function login()
    {
        return view('login');
    }
}