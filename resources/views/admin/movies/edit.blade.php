<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <title></title>
  </head>
  <body>
        <div class="container">
          @if(count($errors))
             <div class="alert alert-danger">
               @foreach ($errors->all() as $error)
               <li> {{ $error}} </li>
             @endforeach
             </div>
          @endif
          <form action= "/admin/movies/{{$movie->id}}" name="EditarPelicula" method="POST">
            @csrf
            @method
               <div>
                   <label for="titulo">Titulo</label>
                   <input type="text" name="title" id="titulo"  value="{{$movie->title}}"/>
               </div>
               <div>
                   <label for="rating">Rating</label>
                   <input type="text" name="rating" id="rating" value="{{$rating->title}}"/>
               </div>
               <div>
                   <label for="premios">Premios</label>
                   <input type="text" name="awards" id="premios" value="{{$movie->title}}" />
               </div>
               <div>
                   <label for="duracion">Duracion</label>
                   <input type="text" name="length" id="duracion" value="{{old('length')}}"/>
               </div>

               <div>
                   <label for="duracion">Genero</label>
                   <select class="form-control" name="genre_id" id="genre_id">
                     @foreach ($genres as $genre)
                       <option id="{{$genre->id}}">{{$genre->name}}</option>

                     @endforeach

                   </select>
               </div>
               <div>
                   <label>Fecha de Estreno</label>
                    <input type="date" name="release_date" id="fecha" >
               </div>
               <input type="submit" value="Agregar Pelicula" name="submit"/>
           </form>
        </div>
  </body>
</html>
