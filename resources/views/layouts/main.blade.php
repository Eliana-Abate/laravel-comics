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
    <header>
        @include('includes.dc_upper_links')
        @include('includes.header')
    </header>
    
    <main>
        @include('includes.hero')
        @yield('content')
    </main>

    <footer>
        @include('includes.footer')
        @include('includes.social')
    </footer>

    
    
    
</body>
</html>