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

    <table>
        <tr>
            <td>ID</td>
            <td>:</td>
            <td>{{ $pesanan->id}}</td>
        </tr>
        <tr>
            <td>Nama Pelanggan</td>
            <td>:</td>
            <td>{{ $pesanan->nama_pelanggan }}</td>
        </tr>
        <tr>
            <td>Nama Barang</td>
            <td>:</td>
            <td>{{ $pesanan->nama_barang }}</td>
        </tr>
        <tr>
            <td>Stok</td>
            <td>:</td>
            <td>{{ $pesanan->qty }}</td>
        </tr>
        <tr>
            <td>Tanggal Pesan</td>
            <td>:</td>
            <td>{{ $pesanan->tgl_pesan }}</td>
        </tr>
    </table>
    <hr>

</body>
</html>
