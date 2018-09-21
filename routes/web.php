<?php

// here we fetch all tasks
Route::get('/tasks_new', function () {
    

    /* 2 ways of fetching data from DB: - thi is LV queryBuilder 
        after get() we can add conditions on the query to fileter trough the DB
     */ 
    $tasks_new = DB::table('tasks_new')->get();
    // $tasks = App\Task::all();

    

    // return $tasks;
    
    // here are 2 options how to include var in the view, with compact we can pass the whole array tasks and with key 'with' and spacify the param we want to add 
    return view('tasks.index', compact('tasks_new'))->with(['name'=>'Igor', 'age' => 32]);
    
});


// here we fetch 
Route::get('/tasks/{task}', function($id) {

    
    $task = DB::table('tasks_new')->find($id);

    // tasks.show is directing to the blasde file , compact task is returning the task var to use in the Front End
    return view('tasks.show', compact('task'));
});



Route::get('about', function() {
    return view('about');
});

