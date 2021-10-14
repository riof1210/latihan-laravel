<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Biodata</h1>
    <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><b>{{ $nama }}</b></td>
        </tr>
        <tr>
            <td>Umur</td>
            <td>:</td>
            <td><b>{{ $umur }} Tahun</b></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><b>{{ $alamat }}</b></td>
        </tr>
        <tr>
            <td>Cita-cita</td>
            <td>:</td>
            <td><b>{{ $cita_cita }}</b></td>
        </tr>
        <tr>
            <td>Hobi</td>
            <td>:</td>
            <td><b>{{ $hobi }}</b></td>
        </tr>
</table>
</body>
</html>
