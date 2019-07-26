<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    @yield('content')
    <header>
        <nav class="nav-page">
            <ul>
            <li><a href=" {{ route('home')}} ">Inicio</a></li>
            <li><a href=" {{ route('contact')}} ">Quienes somos</a></li>
            </ul>
        </nav>
    </header>
</body>
</html>