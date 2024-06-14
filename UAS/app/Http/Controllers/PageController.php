<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student72220590;

class PageController extends Controller
{
    public function no1()
    {
        $data = [1, 2, 3, 4, 5, 6, 7, 8];
        return view('Nomor1', ["key" => $data]);
    }

    public function no2()
    {
        return view('Nomor2');
    }

    public function o2kirim(Request $request)
    {
        $t = $request->input('t');
        $r = $request->input('r');
        $s = $request->input('s');

        return redirect('/2a')->with(['t' => $t, 'r' => $r, 's' => $s]);
    }

    public function o2tampil(Request $request)
    {
        $t = $request->session()->get('t');
        $r = $request->session()->get('r');
        $s = $request->session()->get('s');

        return view('Nomor2a', compact('t', 'r', 's'));
    }

    public function no3()
    {
        return view('Nomor3');
    }

    public function calculateTotal(Request $request)
    {
        $total_belanja = $request->input('total_belanja');
        $diskon = $request->input('diskon') / 100;
        $member_card = $request->input('member_card') === 'ada' ? 0.1 : 0;
        $potongan_lainnya = $request->input('potongan_lainnya');

        $total_bayar = $total_belanja - ($diskon * $total_belanja) - ($member_card * $total_belanja) - $potongan_lainnya;

        return view('Nomor3', [
            'total_bayar' => $total_bayar
        ]);

    }
    public function no4()
    {
        $students = Student72220590::orderBy('student_number_590', 'asc')->take(10)->get();
        $highest_gpa_student = Student72220590::orderBy('gpa_590', 'desc')->first();
        return view('Nomor4', compact('students', 'highest_gpa_student'));
    }

    public function searchByName(Request $request)
    {
        $name = $request->input('name');
        $students = Student72220590::where('student_name_590', 'like', '%' . $name . '%')->get();
        return view('Nomor4', compact('students'));
    }
}
