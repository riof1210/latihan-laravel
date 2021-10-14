<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Barang</h1>
    <table>
        <tr>
            <td>Id Barang</td>
            <td>:</td>
            <td>{{ $id_barang }}</td>
        </tr>
        <tr>
            <td>Nama Barang</td>
            <td>:</td>
            <td>{{ $nama_barang }}</td>
        </tr>
        <tr>
            <td>Harga</td>
            <td>:</td>
            <td>{{ $harga }}</td>
        </tr>
        <tr>
            <td>Stok</td>
            <td>:</td>
            <td>{{ $stok }}</td>
        </tr>
        <tr>
            <td>Nama Supplier</td>
            <td>:</td>
            <td>{{ $id_supplier }}</td>
        </tr>
    </table>
</body>
</html>
