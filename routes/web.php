<?php


// Blog Post home:
Route::get('/blog', 'BlogController@index');


// Create new post 
Route::get('blog/create', 'BlogController@create');

//Blog show:
Route::get('blog/{post}', 'BlogController@show');

// Blog post a post 
// Route::post('/blog', 'BlogController@store');

Route::post('blog/{blog}/comments', 'CommentsController@store');



Route::get('/register', 'RegistrationsController@create');
Route::get('/login', 'SessionsController@create');




// Movies blog:
Route::get('/movies', 'MoviesController@index'); 
Route::get('movies/admin', 'MoviesController@admin');
Route::get('movies/showAllMovies', 'MoviesController@showAllMovies');
Route::get('movies/addMovie', 'MoviesController@addMovie');

Route::post('/movies', 'MoviesController@store');

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

