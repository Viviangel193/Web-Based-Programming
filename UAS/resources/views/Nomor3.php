<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perhitungan Pembayaran</title>
</head>

<body>
    <form action="/3" method="POST">
        @csrf
        <table>
            <tr>
                <td>ID</td>
                <td><input type="number" name="id"></td>
            </tr>
            <tr>
                <td>Customer</td>
                <td><input type="text" name="customer"></td>
            </tr>
            <tr>
                <td>Grade</td>
                <td>
                    <select name="grade">
                        <option value="Excellent">Excellent</option>
                        <option value="Very Good">Very Good</option>
                        <option value="Good">Good</option>
                        <option value="Average">Average</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Total Belanja</td>
                <td><input type="number" name="total_belanja"></td>
            </tr>
            <tr>
                <td>Diskon (%)</td>
                <td><input type="number" name="diskon"></td>
            </tr>
            <tr>
                <td>Member Card</td>
                <td>
                    <input type="radio" name="member_card" value="ada"> Ada
                    <input type="radio" name="member_card" value="tidak"> Tidak
                </td>
            </tr>
            <tr>
                <td>Potongan Lainnya</td>
                <td><input type="number" name="potongan_lainnya"></td>
            </tr>
            <tr>
                <td colspan="2"><button type="submit">Hitung</button></td>
            </tr>
        </table>
    </form>
    @if(isset($total_bayar))
    <h2>Total Bayar: {{ $total_bayar }}</h2>
    @endif
</body>

</html>
