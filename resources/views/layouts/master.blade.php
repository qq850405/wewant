<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    @section('head')
        @include('partials.head')
    @show

    @yield('heads')
    
</head>

<body>
    @include('partials.nav')

    @yield('content')
    
    @include('partials.footer')

</body>
</html>