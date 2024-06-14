<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::orderBy('student_number_590', 'asc')->take(10)->get();
        return view('students.index', compact('students'));
    }

    public function GpaTertinggi()
    {
        $student = Student::orderBy('gpa_590', 'desc')->first();
        return view('students.gpa_tertinggi', compact('student'));
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $students = Student::where('student_name_590', 'like', '%' . $query . '%')->get();
        return view('students.search', compact('students'));
    }
}
