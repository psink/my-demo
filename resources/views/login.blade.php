<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>
    @foreach($name as $names)
    {{$names->firstname}}<br>
    @endforeach    
    </body>
</html>