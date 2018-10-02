<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1> Generos</h1>

    <ol>
      <li>
        @foreach ($generos as $genero)
            <li> {{$genero->genero}}</li>
        @endforeach
      </li>
    </ol>

  </body>
</html>
