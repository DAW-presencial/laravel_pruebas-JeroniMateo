<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>@yield('title','Aprendible')</title>
</head>

<body>
    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/portafolio">Portafolio</a></li>
            <li><a href="/contacto">Contacto</a></li>
            <li><a href="/formtraslate">Formtraslate</a></li>


        </ul>


    </nav>
    @yield('content')
</body>

</html>