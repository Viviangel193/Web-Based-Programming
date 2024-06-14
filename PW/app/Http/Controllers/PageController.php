<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function beranda ()
    {
        return view ('beranda');
    }
    public function tentang ()
    {
        $nama = 'Siti';
        $usia = 70;
        $hobi = ['Menyanyi','menari'];
        return view ('tentang', ['nama' => $nama, 'usia' => $usia, 'hobi' => $hobi]);
    }
    public function kontak ()
    {
        return view ('kontak');
    }
}
