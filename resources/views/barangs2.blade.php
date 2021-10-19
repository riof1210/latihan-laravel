<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Data Barang</title>
</head>
<body>
    <center>Data Barang</center>
    <table>
        <tr>
            <td>ID</td>
            <td>:</td>
            <td>{{ $barang->id}}</td>
        </tr>
        <tr>
            <td>Nama Barang</td>
            <td>:</td>
            <td>{{ $barang->nama }}</td>
        </tr>
        <tr>
            <td>Varian Barang</td>
            <td>:</td>
            <td>{{ $barang->varian }}</td>
        </tr>
        <tr>
            <td>Harga Jual</td>
            <td>:</td>
            <td>{{ $barang->harga_jual }}</td>
        </tr>
        <tr>
            <td>Harga Beli</td>
            <td>:</td>
            <td>{{ $barang->harga_beli }}</td>
        </tr>
    </table>
    <hr>
</body>
</html>
