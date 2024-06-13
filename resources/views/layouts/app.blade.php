<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title') - PG</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
</head>

<body>
  <div class="d-flex">
    <nav class="bg-light" style="width: 250px; height:100vh;">
      <header class="text-center mt-4">
        <div class="image-text">
          <img src="logo.png" alt="" class="rounded">
          <div class="text logo-text ml-3">
            <span class="name">Olá {{ auth()->user()->nome }}</span>
          </div>
        </div>
      </header>
      <div class="menu-bar p-3 ">
        <div class="menu">
          <ul class="menu-links list-unstyled">
            <li class="nav-link">
              <a href="#">
                <i class="bx bx-home-alt icon"></i>
                <span class="text nav-text ml-3">Dashboard</span>
              </a>
            </li>
            <li class="nav-link">
              <a href="#">
                <i class="bx bx-box icon"></i>
                <span class="text nav-text ml-3">Produtos</span>
              </a>
            </li>
            <li class="nav-link">
              <a href="#">
                <i class="bx bx-archive icon"></i>
                <span class="text nav-text ml-3">Estoque</span>
              </a>
            </li>
            <li class="nav-link">
              <a href="{{ route('usuarios-index') }}">
                <i class="bx bx-user icon"></i>
                <span class="text nav-text ml-3">Usuários</span>
              </a>
            </li>
          </ul>
        </div>
        <footer class="mt-20">
          <a href="{{ route('login.logout') }}">
            <i class="bx bx-log-out icon"></i>
            <span class="text nav-text ml-3">Logout</span>
          </a>
        </footer>
      </div>
    </nav>

    @yield('content')

    <script src=" https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</body>

</html>