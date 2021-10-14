<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Pembeli</h1>
    <table>
        <tr>
            <td>Id Pembeli</td>
            <td>:</td>
            <td>{{ $id_pembeli }}</td>
        </tr>
        <tr>
            <td>Nama Pembeli</td>
            <td>:</td>
            <td>{{ $nama_pembeli }}</td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td>{{ $jk }}</td>
        </tr>
        <tr>
            <td>No. Telp</td>
            <td>:</td>
            <td>{{ $no_telp }}</td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td>{{ $alamat }}</td>
        </tr>
    </table>
</body>
</html>
