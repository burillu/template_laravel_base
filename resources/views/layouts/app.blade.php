<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Project @yield('title','template' )</title>
    <!-- favicon -->
    {{-- <link rel="shortcut icon" href="{{Vite::asset('resources/img/favicon.ico')}}" type="image/x-icon"> --}}
    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

<body>
    <!-- header -->
    @include('partials.header')
    <!-- main -->
    
    <!-- variable content -->
       @yield('content') 
    </main>
    
    <!-- footer -->
    @include('partials.footer')
    
</body>

</html>