<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;    

use App\Movie;

class MoviesController extends Controller
{
    public function index() 
    {
        $movies = Movie::all();

        return view ('movies.index', compact('movies'));

    }

    public function show (Movie $movie) 
    {
        return view ('movies.show', compact('movie'));
    }

    public function admin () 
    {
        $allMovies = Movie::all();
        return view ('movies.admin', compact('allMovies'));
    }
    
    public function showAllMovies () 
    {   
        $allMovies = Movie::all();
        return view ('movies.showAllmovies', compact('allMovies'));
    }

    public function addMovie () 
    {
        $allMovies = Movie::all();
        return view ('movies.addMovie', compact('allMovies'));
    }

    
    
    public function store () 
    {   
        // $this -> validate($request, [
        //     'title' => 'required', 
        //     'body' => 'requrired',
        //     'image_url' => 'required',
        // ]);

        Movie::create([
            'title'=>request('title'),
            'image_url'=>request('image_url'),
            'body'=>request('body'),
        ]);
            // will add the success message from the partials files
        return redirect('movies/showAllMovies')->with('success', 'Movie Added');
    }

    public function editMovie ($id)
    {
        
        $movie = Movie::find($id);

        return view('movies.editMovie')->with('movie', $movie);
    }

    public function edit (Request $request, $id)
    {
        $movie = Movie::find($id);
        $movie -> title = $request->input('title');
        $movie -> image_url = $request->input('image_url');
        $movie -> body = $request->input('body');
        // Movie::create([
        //     'title'=>request('title'),
        //     'image_url'=>request('image_url'),
        //     'body'=>request('body'),
        // ]);
            // will add the success message from the partials files
        return redirect('movies/showAllMovies')->with('success', 'Movie Updated');        
    }
}
