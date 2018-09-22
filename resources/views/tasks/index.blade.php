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
      ul {
          text-decoration: none;
      }
    </style>
</head>
<body>
{{-- <h1>Hello {{ $name }} you are {{$age}}</h1> --}}
<ul>
    
        
    @foreach ($tasks as $task)
    <li>
        <a href="/tasks/{{$task->id}}">
            <h2>
                Taks Name: {{ $task->body }}
            </h2>
        </a>
    </li>
    @endforeach
    
</ul>
</body>
</html>