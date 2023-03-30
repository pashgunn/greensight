<!doctype html>
<html class="antialiased" lang="ru">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

    <x-panels.styles/>
    <x-panels.scripts/>

    <title>@yield('page.title', 'Тестовое задание Greensight')</title>
</head>

<body class="bg-white text-gray-600 font-sans leading-normal text-base tracking-normal flex min-h-screen flex-col">
<div class="wrapper flex flex-1 flex-col">
    @include('layouts.header')

    <main class="flex-1 container mx-auto bg-white">
        @yield('content')
    </main>

    @include('layouts.footer')
</div>
</body>

</html>
