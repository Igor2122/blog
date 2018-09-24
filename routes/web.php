<?php


// Blog Post home:
Route::get('/blog', 'BlogController@index');


// Create new post 
Route::get('blog/create', 'BlogController@create');

//Blob Post show:
Route::get('blog/{blog}', 'BlogController@show');

// Movies blog:
Route::get('/movies', 'MoviesController@index'); 
Route::get('movies/{movie}', 'MoviesController@show');

// controller => MoviesController - better to be plural
// Eloquent model => Movie better to be singular
// migration = create_movies_table




// hrere at the Taskscontroller we refer to the controller that stores all our query methods that we defined
Route::get('/tasks', 'TasksController@index');

// here we change idex to show to know that we are showing the task later on 
Route::get('/tasks/{task}', 'TasksController@show');


Route::get('/books', 'BooksController@index');
Route::get('/books/{number}', 'BooksController@show');


Route::get('about', function() {
    return view('about');
});

