<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <h1> Actores</h1>

    <ol>
      <li>
        @foreach ($actores as $actor)
            <li> {{$actor->getNombreCompleto()}}</li>
        @endforeach
      </li>
    </ol>
         <h2>buscar por id</h2>
         

  </body>
</html>
