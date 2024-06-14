<!DOCTYPE html>
<html>
<head>
    <title>Form Halaman A</title>
</head>
<body>
    <div class="card-body">
        <form action="/2kirim" method="POST">
            @csrf
            <div class="form-group">
                <label>Text</label>
                <input type="text" name="t" class="form-control">
            </div>
            <div class="form-group">
                <label>Radio Button</label>
                <br>
                <input type="radio" name="r" value="option1"> Option 1<br>
                <input type="radio" name="r" value="option2"> Option 2<br>
            </div>
            <div class="form-group">
                <label>Select option</label>
                <select name="s" class="form-control">
                    <option value="0">0</option>
                    <option value="2">2</option>
                    <option value="4">4</option>
                </select>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>
