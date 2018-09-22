<?php



// hrere at the Taskscontroller we refer to the controller that stores all our query methods that we defined
Route::get('/tasks', 'TasksController@index');

// here we change idex to show to know that we are showing the task later on 
Route::get('/tasks/{task}', 'TasksController@show');


Route::get('/books', 'BooksController@index');
Route::get('/books/{number}', 'BooksController@show');


Route::get('about', function() {
    return view('about');
});

