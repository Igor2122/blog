@extends('layouts.master')



@section('content')
    <ul>
        @foreach ($tasks as $task)
            <li>
                <a href="tasks/{{$task->id}}">
                    <h2>
                        Tasks Name: {{ $task->body }}
                    </h2>
                </a>
            </li>
        @endforeach
    </ul>

@endsection
