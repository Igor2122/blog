<?php

namespace App\Http\Controllers;

use App\Task;

class TasksController extends Controller
{
    // we need to add the index method that we refer to in the routes 
    public function index()
    {
    /* 2 ways of fetching data from DB: - thi is LV queryBuilder 
    after get() we can add conditions on the query to fileter trough the DB
    */ 
    // $tasks = DB::table('tasks')->get();
    $tasks = Task::all();
    
    
    // tasks.index represents the path tasks(folder).index(file) 
    // , compact('tasks'))->with(['name'=>'Igor', 'age' => 32]);
    return view('tasks.index', compact('tasks'));
    }

    public function show(Task $task) // Task::find(wildcard); so we can skip the // $task = Task::find($id);
    {
    
    // tasks.show is directing to the blade file , compact task is returning the task var to use in the Front End
    return view('tasks.show', compact('task'));
    }
 }
