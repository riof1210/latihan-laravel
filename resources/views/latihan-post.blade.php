<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center><h1>Data Post</h1></center>
    @foreach ($query as $data)
    <table>
        <tr>
            <td>Nama Asli</td>
            <td>:</td>
            <td>{{$data->realName}}</td>
        </tr>
        <tr>
            <td>Nama Pahlawan</td>
            <td>:</td>
            <td>{{$data->heroName}}</td>
        </tr>
        <tr>
            <td>Kekuatan Super</td>
            <td>:</td>
            <td>{{$data->kindofpower}}</td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td>{{$data->gender}}</td>
        </tr>
        <tr>
            <td>Tinggi Badan</td>
            <td>:</td>
            <td>{{$data->height}} cm</td>
        </tr>
        <tr>
            <td>Berat Badan</td>
            <td>:</td>
            <td>{{$data->weight}} kg</td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td>{{$data->bornDate}}</td>
        </tr>
    </table>
        <hr>
    @endforeach
</body>
</html>
