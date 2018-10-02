<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    @foreach ($peliculas as  $pelicula)
      <li>{{ $pelicula->title}}</li>
    @endforeach



  </body>
</html>
