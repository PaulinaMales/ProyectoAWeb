<!DOCTYPE html>
<html lang="en" class="scroll-smooth" data-theme="bumblebee">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{asset('storage\favicon.svg')}}" type="image/svg">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.46.0/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Maritozzo | @yield('subtitle')</title>
</head>
<body class="font-mono">
    @include('partials.navbar')
    <main>
        @yield('content')
    </main>
    @include('partials.footer')
</body>
</html>