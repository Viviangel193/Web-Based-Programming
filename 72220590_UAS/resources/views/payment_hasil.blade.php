<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Result</title>
</head>
<body>
    <h1>Payment Result</h1>
    <p><strong>ID:</strong> {{ $data['id'] }}</p>
    <p><strong>Customer:</strong> {{ $data['customer'] }}</p>
    <p><strong>Grade:</strong> {{ $data['grade'] }}</p>
    <p><strong>Total Belanja:</strong> Rp {{ number_format($data['total_belanja'], 0, ',', '.') }}</p>
    <p><strong>Diskon:</strong> {{ $data['diskon'] }}%</p>
    <p><strong>Member Card:</strong> {{ $data['member_card'] }}</p>
    <p><strong>Potongan Lainnya:</strong> Rp {{ number_format($data['potongan_lainnya'], 0, ',', '.') }}</p>
    <p><strong>Total Bayar:</strong> Rp {{ number_format($total_bayar, 0, ',', '.') }}</p>
</body>
</html>
