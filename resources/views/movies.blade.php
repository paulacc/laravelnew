<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  <h3></h3>
  <ol>
    <li>
      @foreach ($movies as $movie)
          <li> {{$movie->genre}} </li>
      @endforeach
    </li>
  </ol>



  </body>
</html>
