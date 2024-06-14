<!-- resources/views/soal_nomor_1.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Decimals</title>
</head>
<body>
    <h1>Array of Decimals</h1>
    <ul>
        @foreach ($decimals as $decimal)
            <li>{{ $decimal }}</li>
        @endforeach
    </ul>
</body>
</html>
