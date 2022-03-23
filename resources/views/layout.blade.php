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
    <footer class="text-center text-white" style="background-color: #f1f1f1; position: absolute; bottom: 0; width: 100%;">
        <!-- Grid container -->
        <div class="container pt-4">
          <!-- Section: Social media -->
          <section class="mb-4">
            <!-- Facebook -->
            <a
              class="btn btn-link btn-floating btn-lg text-dark m-1 text-decoration-none"
              href="https://gitlab.com/users/urioleh/projects"
              role="button"
              data-mdb-ripple-color="dark"
              target="_blank"
              > Gitlab
            </a>

            <!-- Twitter -->
            <a
              class="btn btn-link btn-floating btn-lg text-dark m-1 text-decoration-none"
              href="https://linkedin.com/in/oriol-arias"
              role="button"
              data-mdb-ripple-color="dark"
              target="_blank"
              > Linkedin</a>


          </section>
          <!-- Section: Social media -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center text-dark p-1" style="background-color: rgba(0, 0, 0, 0.2);">

        </div>
        <!-- Copyright -->
      </footer>

</body>
</html>
