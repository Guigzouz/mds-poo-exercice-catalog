<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>genres</title>
</head>
<body>
    <h1>genres</h1>
    @foreach ($genres as $genre)
    <div style="display: flex">
        <h2>{{$genre->label}}</h2>
    </div>
    @endforeach
</body>
</html>