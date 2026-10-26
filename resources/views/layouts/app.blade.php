<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css'])
</head>

<body class="bg-[#101B2D] m-0">

    @include('components.header')

    <main>
        <div class="container mx-auto">
            @if (Route::is('home'))
            @endif

            <div class="py-12 text-6xl">
                @yield('content')
            </div>
        </div>
    </main>

    @include('components.footer')
</body>

</html>
