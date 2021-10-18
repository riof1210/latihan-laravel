<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Biodata Saya</h1>
    <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><b>{{ $nama }}</b></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td><b>{{ $tgl_lahir }}</b></td>
        </tr>
        <tr>
            <td>Umur</td>
            <td>:</td>
            <td><b>{{ $umur }} Tahun</b></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><b>{{ $jk }}</b></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><b>{{ $alamat }}</b></td>
        </tr>
</table>
</body>
</html>
