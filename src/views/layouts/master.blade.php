<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>APP CARS: @yield('title')</title>
  <style>
    nav {
      background-color: lightcoral;
    }

    footer {
      background-color: lightblue;
    }
  </style>
</head>

<body>
  <nav>Menu</nav>
  <header>
    <h1>Titulo de la applicación</h1>
    <h2>@yield('subtitle')</h2>
  </header>
  <hr>
  <main>
    @section('container')
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum asperiores quos, in numquam expedita, iusto laboriosam saepe, est quidem delectus eaque? Nemo modi numquam, provident atque doloremque impedit molestiae autem!</p>
    @show
  </main>
  <footer><small>David Álvarez</small></footer>
</body>

</html>