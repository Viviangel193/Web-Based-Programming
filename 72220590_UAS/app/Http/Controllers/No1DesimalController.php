<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class No1DesimalController extends Controller
{
    public function tampilDesimal()
    {
        // Buat array decimal
        $decimals = [1.23, 4.56, 7.89, 10.11, 12.13];

        // Kirim array ke view
        return view('soal_nomor_1', ['decimals' => $decimals]);
    }
}
