<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Halaman Beranda'
        ];
        return view('pages/home', $data);
    }
}
