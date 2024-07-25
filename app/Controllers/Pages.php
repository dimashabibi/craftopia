<?php

namespace App\Controllers;

use App\Models\AuthModel;
use App\Models\UserModel;
use CodeIgniter\Controller;

class Pages extends BaseController
{



    public function __construct()
    {
    }
    public function index()
    {
        $data = [
            'title' => 'Home'
        ];

        return view('pages/home', $data);
    }
    public function about()
    {
        $data = [
            'title' => 'About Me'
        ];

        return view('pages/about', $data);
    }
    public function contact()
    {
        $data = [
            'title' => 'Contact',
            'alamat' => [
                [
                    'tipe' => 'Rumah',
                    'alamat' => 'Jl. Agus 123',
                    'kota' => 'Jakarta',

                ],
                [
                    'tipe' => 'Kantor',
                    'alamat' => 'Jl. Salim 123',
                    'kota' => 'Jakarta',

                ],

            ]
        ];

        return view('pages/contact', $data);
    }

    public function ideas()
    {
        $data = [
            'title' => 'How To & Ideas'
        ];

        return view('pages/ideas', $data);
    }

    public function share()
    {
        $data = [
            'title' => 'Share You Project'
        ];

        return view('pages/share', $data);
    }
    public function article_home()
    {
        $data = [
            'title' => 'Article | Teknik Dasar Menyulam'
        ];

        return view('pages/article', $data);
    }
    public function error()
    {
        $data = [
            'title' => 'Error Page'
        ];

        return view('pages/error', $data);
    }
}
