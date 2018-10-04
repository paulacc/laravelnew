<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>{{ $genre->name}}</title>
  </head>
  <body>
    <h1> {{$genre->name}}</h1>

    <ol>
      <li>

        @foreach ($genre->movies as $movie)
            <li> {{$movie->title}} </li>
        @endforeach

      </li>
    </ol>

  </body>
</html>
