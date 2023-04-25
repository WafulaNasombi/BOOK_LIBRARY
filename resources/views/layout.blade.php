<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    
</head>
<body>
    <nav>
        <ul>
            <li><a href="/authors">Authors</a></li>
            <li><a href="/books">Books</a></li>
        </ul>
    </nav>
    <div>
        @yield('content')
    
        
    </div>
</body>
</html>
