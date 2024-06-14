<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class No3PaymentController extends Controller
{
    public function tampilForm()
    {
        return view('payment_form');
    }

    public function hitungPembayaran(Request $request)
    {
        // Validasi dan ambil data dari request
        $data = $request->validate([
            'id' => 'required|numeric',
            'customer' => 'required|string',
            'grade' => 'required|string',
            'total_belanja' => 'required|numeric|min:0',
            'diskon' => 'required|numeric|min:0|max:100',
            'member_card' => 'required|string',
            'potongan_lainnya' => 'required|numeric|min:0',
        ]);

        // Hitung total bayar
        $total_belanja = $data['total_belanja'];
        $diskon = $data['diskon'] / 100; // Ubah diskon dari persen ke desimal
        $member_card = $data['member_card'] === 'ada' ? 0.10 * $total_belanja : 0;
        $potongan_lainnya = $data['potongan_lainnya'];

        $total_bayar = $total_belanja - ($diskon * $total_belanja) - $member_card - $potongan_lainnya;

        // Kirim data dan total bayar ke view hasil
        return view('payment_hasil', ['data' => $data, 'total_bayar' => $total_bayar]);
    }
}
