<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Form</title>
    <style>
        .currency-input {
            position: relative;
        }
        .currency-input input {
            padding-left: 30px;
        }
        .currency-input::before {
            content: 'Rp';
            position: absolute;
            left: 10px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 14px;
            color: #555;
        }
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <h1>Payment Form</h1>
    @if ($errors->any())
        <div class="error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('hitungPembayaran') }}" method="POST">
        @csrf
        <label for="id">ID:</label>
        <input type="number" id="id" name="id" required placeholder="Masukkan ID Anda">
        <br><br>

        <label for="customer">Customer:</label>
        <input type="text" id="customer" name="customer" required placeholder="Masukkan Nama Anda">
        <br><br>

        <label for="grade">Grade:</label>
        <select id="grade" name="grade" required>
            <option value="">--Pilih Grade--</option>
            <option value="Excellent">Excellent</option>
            <option value="Very Good">Very Good</option>
            <option value="Good">Good</option>
            <option value="Average">Average</option>
        </select>
        <br><br>

        <label for="total_belanja">Total Belanja:</label>
        <div class="currency-input">
            <input type="number" id="total_belanja" name="total_belanja" required placeholder="Masukkan Total Belanja" min="0">
        </div>
        <br><br>

        <label for="diskon">Diskon (%):</label>
        <input type="number" id="diskon" name="diskon" required placeholder="Masukkan Diskon" min="0" max="100">
        <br><br>

        <label>Member Card:</label>
        <input type="radio" id="ada" name="member_card" value="ada" required>
        <label for="ada">Ada</label>
        <input type="radio" id="tidak" name="member_card" value="tidak">
        <label for="tidak">Tidak</label>
        <br><br>

        <label for="potongan_lainnya">Potongan Lainnya:</label>
        <div class="currency-input">
            <input type="number" id="potongan_lainnya" name="potongan_lainnya" required placeholder="Masukkan Potongan Lainnya" min="0">
        </div>
        <br><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
