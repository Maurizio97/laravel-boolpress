<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
    <title>Boolpress</title>
</head>
<body>
    <div id="app">
        {{-- <example-component></example-component> --}}
        <a href="{{ route('home') }}" class="btn btn-primary">HOME</a>
        <a href="{{ route('view') }}" class="btn btn-primary">VIEW</a>
        <a href="{{ route('create') }}" class="btn btn-primary">CREATE</a>

        @yield('content')
    </div>
</body>
</html>