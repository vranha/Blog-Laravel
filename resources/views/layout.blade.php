<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/app.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mi sitio</title>
</head>
<body>
    <header>
        {{-- <?php function activeMenu($url) {
            return request()->is($url) ? 'active' : '';
        } ?>
 --}}

    </header>
    @yield('contenido')
    <footer>Copyright</footer>
</body>
</html>
