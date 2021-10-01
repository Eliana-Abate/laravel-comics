<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DC Comics | @yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    @include('includes.dc_upper_links')
    @include('includes.header')
    @include('includes.hero')
    <main>
        @yield('content')
    </main>

    
    @include('includes.footer')
    @include('includes.social')
    
</body>
</html>