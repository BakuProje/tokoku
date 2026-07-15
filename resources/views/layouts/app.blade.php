<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('judul')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/produk.css') }}">
</head>
<body>
    @include('partials.navbar')
    @include('partials.head')
   <main>@yield('konten')</main>
   @include('partials.footer')
</body>
</html>