<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{asset('style.css')}}"/>
    <title>@yield('title')</title>
</head>
<body>
    <center>
        {{-- header --}}
        <div>
            <h2>@yield('page_title')</h2>
        </div>

        {{-- nav bar --}}
        @yield('navbar')


        {{-- main content --}}
        @yield('main_content')


        {{-- footer --}}
        <div>
            copyright@2021
        </div>
    </center>
</body>
</html>