<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($film as $data)
    id: {{ $data['id'] }}<br>
    Judul: {{ $data['judul'] }}<br>
    Sinopsis: {{ $data['sinopsis'] }}<br>
    Penulis: {{ $data['penulis'] }}<br>
    Bahasa: {{ $data['bahasa'] }}<br>
        @foreach ($data['aktor'] as $hasil)
        Aktor: {{ $hasil }}<br>
        @endforeach
        <hr>
        @endforeach
</body>
</html>
