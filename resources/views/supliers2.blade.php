<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Data Suplier</title>
</head>
<body>
    <center>Data Suplier</center>

    <table>
        <tr>
            <td>ID</td>
            <td>:</td>
            <td>{{ $suplier->id}}</td>
        </tr>
        <tr>
            <td>Nama Suplier</td>
            <td>:</td>
            <td>{{ $suplier->nama }}</td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td>{{ $suplier->alamat }}</td>
        </tr>
        <tr>
            <td>Kode Pos</td>
            <td>:</td>
            <td>{{ $suplier->kode_pos }}</td>
        </tr>
        <tr>
            <td>Kota</td>
            <td>:</td>
            <td>{{ $suplier->kota }}</td>
        </tr>
    </table>
    <hr>
</body>
</html>
