<!-- resources/views/halaman-b.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result Page</title>
</head>
<body>
    <h1>Result Page</h1>
    <p><strong>Text Box:</strong> {{ $data['textbox'] }}</p>
    <p><strong>Radio Button:</strong> {{ $data['radio'] }}</p>
    <p><strong>Select Option:</strong> {{ $data['select'] }}</p>
</body>
</html>
