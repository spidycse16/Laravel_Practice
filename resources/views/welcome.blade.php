<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @include('Pages.header')
    <h2>This is home page</h2>
    <div>
        <a href="{{route('firstPage')}}">First page</a><br><br>
        <a href="/second">Second Page</a>
    </div>
    @include('Pages.footer')
</body>
</html>