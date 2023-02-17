<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('js/app.css') }}">
    {{--
    <link rel="stylesheet" href="{{ asset('js/app.css') }}"> --}}
    <title>HomePage {{ $title }}</title>
</head>

<body class="flex flex-col relative max-w-screen bg-white">
    @include('partials.navbar')
    <div class="container flex flex-col space-y-4 mx-auto my-4">
        @yield('container')
    </div>
    @include('partials.footer')
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>