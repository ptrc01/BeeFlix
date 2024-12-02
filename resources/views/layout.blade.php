<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BeeFlix</title>
    <link href="{{ asset('logo.svg') }}" rel="icon" type="image/svg+xml">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
    <h3>BeeFlix</h3>

    @yield('content')

</body>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</html>
