<!DOCTYPE html>
<html>
    <head>
        <title>CRUD</title>
        <link rel="stylesheet" href="css/style.css">
        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css'>
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