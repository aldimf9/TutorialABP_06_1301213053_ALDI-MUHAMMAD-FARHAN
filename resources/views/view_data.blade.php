<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{ asset('css/test.css') }}">
</head>
<body>
    <h1>{{ $title }}</h1>
    <ul>
    @foreach( $data as $d )
        <li>{{ $d }}</li>
    @endforeach
    </ul>
</body>
</html>