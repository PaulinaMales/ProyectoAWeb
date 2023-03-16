<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="shortcut icon" href="{{asset('storage\favicon.svg')}}" type="image/svg">
    <title>Maritozzo | @yield('subtitle')</title>
</head>
<body class="bg-[url({{asset('/storage/font-image.webp')}})] bg-no-repeat bg-center">
    @yield('content')
</body>
</html>