<!-- resources/views/halaman-a.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Page</title>
</head>
<body>
    <h1>Form Page</h1>
    <form action="{{ route('submitForm') }}" method="POST">
        @csrf
        <label for="textbox">Text Box:</label>
        <input type="text" id="textbox" name="textbox" required>
        <br><br>

        <label>Radio Button:</label>
        <input type="radio" id="option1" name="radio" value="Option 1" required>
        <label for="option1">Option 1</label>
        <input type="radio" id="option2" name="radio" value="Option 2">
        <label for="option2">Option 2</label>
        <br><br>

        <label for="select">Select Option:</label>
        <select id="select" name="select" required>
            <option value="Choice 1">Choice 1</option>
            <option value="Choice 2">Choice 2</option>
            <option value="Choice 3">Choice 3</option>
        </select>
        <br><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
