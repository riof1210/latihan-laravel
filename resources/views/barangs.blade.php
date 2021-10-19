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
@foreach ($barang as $data)
    <table>
        <tr>
            <td>Nama Barang</td>
            <td>:</td>
            <td>{{ $data->nama }}</td>
        </tr>
        <tr>
            <td>Varian Barang</td>
            <td>:</td>
            <td>{{ $data->varian }}</td>
        </tr>
        <tr>
            <td>Harga Jual</td>
            <td>:</td>
            <td>{{ $data->harga_jual }}</td>
        </tr>
        <tr>
            <td>Harga Beli</td>
            <td>:</td>
            <td>{{ $data->harga_beli }}</td>
        </tr>
    </table>
    <hr>
@endforeach
</body>
</html>
