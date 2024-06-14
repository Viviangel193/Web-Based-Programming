<!DOCTYPE html>
<html>
<head>
    <title>Highest GPA Student</title>
</head>
<body>
    <h1>Student with Highest GPA</h1>
    <table>
        <tr>
            <th>Student Number</th>
            <th>Name</th>
            <th>Gender</th>
            <th>GPA</th>
        </tr>
        <tr>
            <td>{{ $student->student_number_590 }}</td>
            <td>{{ $student->student_name_590 }}</td>
            <td>{{ $student->gender_590 }}</td>
            <td>{{ $student->gpa_590 }}</td>
        </tr>
    </table>
</body>
</html>
