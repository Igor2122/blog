<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    

    // 2 ways of fetching data from DB:
    $tasks = DB::table('tasks_new')->get();

    // return $tasks;s
    
    // here are 2 options how to include var in the view, with compact we can pass the whole array tasks and with key 'with' and spacify the param we want to add 
    return view('welcome', compact('tasks'))->with(['name'=>'Igor', 'age' => 32]);
    
});

Route::get('about', function() {
    return view('about');
});

