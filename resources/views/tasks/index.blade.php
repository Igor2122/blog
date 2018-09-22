<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tasks</title>
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

<ul>
    
        
    @foreach ($tasks as $task)
    <li>
        <a href="tasks/{{$task->id}}">
            <h2>
                Taks Name: {{ $task->body }}
            </h2>
        </a>
    </li>
    @endforeach
    
</ul>
</body>
</html>