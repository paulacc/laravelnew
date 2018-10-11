<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Crear película</title>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<style type="text/css">
		body {
			padding: 40px
		}
	</style>
</head>
<body>
	<h1>Crear película</h1>

	<div class="container">

		@if (count($errors))
			<div class="alert alert-danger">
				@foreach ($errors->all() as $error)
					<p>{{ $error }}</p>
				@endforeach
			</div>
		@endif

		<form action="/admin/movies/{{$movie->id}}" method="POST">
			@csrf
			@method('put')
			<div class="form-group">
				<label for="title">Títulos</label>
				<input class="form-control" type="text" name="title" id="title" value="{{$movie->title}}">
			</div>
			<div class="form-group">
				<label for="rating">Rating</label>
				<input class="form-control" type="text" name="rating" id="rating" value="{{$movie->rating}}">
			</div>
			<div class="form-group">
				<label for="rating_confirmation">Rating</label>
				<input class="form-control" type="text" name="rating_confirmation" id="rating_confirmation" value="{{$movie->rating}}">
			</div>
			<div class="form-group">
				<label for="awards">Premios</label>
				<input class="form-control" type="text" name="awards" id="awards" value="{{$movie->awards}}">
			</div>
			<div class="form-group">
				<label for="release_date">Fecha de estreno</label>
				<input class="form-control" type="date" name="release_date" id="release_date" value="{{$movie->release_date->format('Y-m-d')}}">
			</div>
			<div class="form-group">
				<label for="length">Duración</label>
				<input class="form-control" type="text" name="length" id="length" value="{{$movie->length}}">
			</div>
			<div class="form-group">
				<label for="genre_id">Género</label>
				<select class="form-control" name="genre_id" id="genre_id">
					@foreach ($genres as $genre)
						@php
							$selected = ($genre->id == $movie->genre_id) ? 'selected' : '';
						@endphp

						<option value="{{$genre->id}}" {{$selected}}>{{ $genre->name }}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<button class="btn btn-primary" type="submit" name="enviador">Enviar</button>
			</div>
		</form>
	</div>

</body>
</html>
