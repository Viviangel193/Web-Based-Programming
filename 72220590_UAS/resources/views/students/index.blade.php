<!DOCTYPE html>
<html>
<head>
    <title>Students</title>
</head>
<body>
    <h1>Students</h1>
    <table>
        <tr>
            <th>Student Number</th>
            <th>Name</th>
            <th>Gender</th>
            <th>GPA</th>
        </tr>
        @foreach ($students as $student)
            <tr>
                <td>{{ $student->student_number_590 }}</td>
                <td>{{ $student->student_name_590 }}</td>
                <td>{{ $student->gender_590 }}</td>
                <td>{{ $student->gpa_590 }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>
