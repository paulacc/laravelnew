<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
    	return Movie::whereNotNull('genre_id')
			->with('genre')
			->orderBy('title')
			->paginate(request()->input('limit'))
		;
    }

    public function destroy($id)
    {
    	$movie = Movie::find($id);

    	$response = ['success' => false];

    	if (request()->user()->id == $movie->owner_id) {
    		$movie->delete();
    		$response = ['success' => true];
    	}

    	return $response;


    }
}
