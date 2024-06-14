<!DOCTYPE html>
<html>
<head>
    <title>Search Students</title>
</head>
<body>
    <h1>Search Students</h1>
    <form action="{{ url('/student/search') }}" method="GET">
        <input type="text" name="query" placeholder="Enter student name">
        <button type="submit">Search</button>
    </form>

    @if(isset($students))
        <h2>Search Results</h2>
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
    @endif
</body>
</html>
