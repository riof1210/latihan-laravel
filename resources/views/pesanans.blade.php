<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Data Pesanan</title>
</head>
<body>
    <center>Data Pesanan</center>
@foreach ($pesanan as $data)
    <table>
        <tr>
            <td>Nama Pelanggan</td>
            <td>:</td>
            <td>{{ $data->nama_pelanggan }}</td>
        </tr>
        <tr>
            <td>Nama Barang</td>
            <td>:</td>
            <td>{{ $data->nama_barang }}</td>
        </tr>
        <tr>
            <td>Stok</td>
            <td>:</td>
            <td>{{ $data->qty }}</td>
        </tr>
        <tr>
            <td>Tanggal Pesan</td>
            <td>:</td>
            <td>{{ $data->tgl_pesan }}</td>
        </tr>
    </table>
    <hr>
@endforeach
</body>
</html>
