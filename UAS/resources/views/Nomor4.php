@extends('layouts.app')

@section('content')
<h1>Data Students</h1>
<h2>10 Data Pertama (Ascending)</h2>
<table>
    <tr>
        <th>ID</th>
        <th>Student Number</th>
        <th>Name</th>
        <th>Gender</th>
        <th>GPA</th>
    </tr>
    @foreach($students as $student)
    <tr>
        <td>{{ $student->id }}</td>
        <td>{{ $student->student_number_590 }}</td>
        <td>{{ $student->student_name_590 }}</td>
        <td>{{ $student->gender_590 }}</td>
        <td>{{ $student->gpa_590 }}</td>
    </tr>
    @endforeach
</table>

<h2>Student dengan GPA Tertinggi</h2>
<p>ID: {{ $highest_gpa_student->id }}</p>
<p>Student Number: {{ $highest_gpa_student->student_number_590 }}</p>
<p>Name: {{ $highest_gpa_student->student_name_590 }}</p>
<p>Gender: {{ $highest_gpa_student->gender_590 }}</p>
<p>GPA: {{ $highest_gpa_student->gpa_590 }}</p>

<h2>Cari Berdasarkan Nama</h2>
<form action="/search" method="GET">
    <input type="text" name="name">
    <button type="submit">Cari</button>
</form>
@if(isset($students))
<table>
    <tr>
        <th>ID</th>
        <th>Student Number</th>
        <th>Name</th>
        <th>Gender</th>
        <th>GPA</th>
    </tr>
    @foreach($students as $student)
    <tr>
        <td>{{ $student->id }}</td>
        <td>{{ $student->student_number_590 }}</td>
        <td>{{ $student->student_name_590 }}</td>
        <td>{{ $student->gender_590 }}</td>
        <td>{{ $student->gpa_590 }}</td>
    </tr>
    @endforeach
</table>
@endif
@endsection
