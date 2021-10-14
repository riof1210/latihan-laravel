<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Transaksi</h1>
    <table>
        <tr>
            <td>Id Transaksi</td>
            <td>:</td>
            <td>{{ $id_transaksi }}</td>
        </tr>
        <tr>
            <td>Nama Barang</td>
            <td>:</td>
            <td>{{ $id_barang }}</td>
        </tr>
        <tr>
            <td>Nama Pembeli</td>
            <td>:</td>
            <td>{{ $id_pembeli }}</td>
        </tr>
        <tr>
            <td>Tanggal</td>
            <td>:</td>
            <td>{{ $tanggal }}</td>
        </tr>
        <tr>
            <td>Keterangan</td>
            <td>:</td>
            <td>{{ $keterangan }}</td>
        </tr>
    </table>
</body>
</html>
