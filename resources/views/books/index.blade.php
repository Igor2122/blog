@extends('layouts.base')

@section('page')    
  <div class="container">
    <h1>All Books in Store</h1>
  </div>

  <ul>
    @foreach ($books as $book)
    <a href="books/{{$book->id}}">
      <li>
        {{$book->title}}      
      </li>
    </a>
    @endforeach
  </ul>
@endsection


</html>