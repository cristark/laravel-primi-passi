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
    @foreach ($musicDisk as $disk) 
        <p> {{$disk["title"]}} </p>
    @endforeach
</body>
</html>