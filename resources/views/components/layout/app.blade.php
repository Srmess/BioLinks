<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

<head>
    @vite('resources/css/app.css')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
</head>

<body class="size-full bg-base-300">
    {{ $slot }}
</body>

</html>
