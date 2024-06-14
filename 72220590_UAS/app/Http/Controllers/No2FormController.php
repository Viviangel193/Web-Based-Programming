<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class No2FormController extends Controller
{
    public function tampilForm()
    {
        return view('halaman-a');
    }

    public function submitForm(Request $request)
    {
        // Validasi dan ambil data dari request
        $data = $request->validate([
            'textbox' => 'required|string',
            'radio' => 'required|string',
            'select' => 'required|string',
        ]);

        // Kirim data ke view hasil
        return view('halaman-b', ['data' => $data]);
    }
}
