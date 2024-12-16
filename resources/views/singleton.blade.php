<html>

<body>

<ul>
    <li><a href="{{ route('home') }}">home</a></li>
    <li><a href="{{ route('page') }}">page</a></li>
    <li><a href="{{ route('blog') }}">blog</a></li>
</ul>


{{ \App\Services\Learn::getMessage() }}

</body>

</html>
