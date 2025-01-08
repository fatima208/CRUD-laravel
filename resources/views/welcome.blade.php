<!DOCTYPE html>
<html>
    <head>
        <title>CRUD</title>
        <link rel="stylesheet" href="css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
    <video id="VideoBackground" preload="auto" autoplay loop muted>
        <source src="{{asset('asset/BV.mp4')}}" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <h1 class="h01">Welcome to the CRUD Application</h1>
    <button type="button" class="bton bton1" onclick="window.location.href='{{ route('show') }}'">Lets Begin!</button>
</body>
</html>