<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Pembayaran</h1>
    <table>
        <tr>
            <td>Id Pembayaran</td>
            <td>:</td>
            <td>{{ $id_pembayaran }}</td>
        </tr>
        <tr>
            <td>Tanggal Bayar</td>
            <td>:</td>
            <td>{{ $tgl_bayar }}</td>
        </tr>
        <tr>
            <td>Total Bayar</td>
            <td>:</td>
            <td>{{ $total_bayar }}</td>
        </tr>
        <tr>
            <td>Id Transaksi</td>
            <td>:</td>
            <td>{{ $id_transaksi }}</td>
        </tr>
    </table>
</body>
</html>
