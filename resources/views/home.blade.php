<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home | Benvenuto nella prima esercitazione su Laravel</title>
</head>
<body>
    <h1>Prova dischi</h1>
    @foreach($musicDisk as $disk)
        <img src="{{$disk["poster"]}}" alt="{{ $disk["title"] }}">
        <h2> {{ $disk["title"] }} </h2>
        <h3> {{ $disk["author"] }} </h3>
        <h4> {{ $disk["genre"] }} </h4>
        <h5> {{ $disk["year"] }} </h5>
    @endforeach
</body>
</html>