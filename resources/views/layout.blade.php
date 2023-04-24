<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
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
     @include('authors.create_author')
     @include('authors.authorid')
     @include('authors.update_author')
     @include('books.bookid')
     @include('books.create_book')
     @include('books.update_book')
        
    </div>
</body>
</html>
