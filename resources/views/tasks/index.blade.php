<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
      body {
        background: #3d3d3d; 
        color: #fff;
      }  
      a {
          color: antiquewhite;
      }
    </style>
</head>
<body>
{{-- <h1>Hello {{ $name }} you are {{$age}}</h1> --}}
<ul>
    @if ($tasks)    
        @foreach ($tasks as $task)
            <li>
            <a href="/tasks/{{$task->id}}">
                    <h1>
                        Taks Name {{ $task->title }}
                    </h1>
                    <p>
                    </p>
                </a>
            </li>
        @endforeach
    @endif
</ul>
</body>
</html>