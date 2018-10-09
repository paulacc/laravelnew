<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h3>Movies</h3>
    <ol>
      <li>
        @foreach ($movies as $movie)
            <li> {{$movie->title}} </li>
        @endforeach
      </li>
    </ol>

  </body>
</html>
