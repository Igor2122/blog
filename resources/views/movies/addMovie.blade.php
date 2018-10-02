@extends('movies.admin')

@section('moviesSeciton')


@section('moviesSeciton')
<h2>Add New Movie</h2>



{!! Form::open(['action' => 'MoviesController@store', 'method' => 'POST', 'class' => 'w-75 mx-auto mt-5']) !!}
    
  {{-- <form class="w-50 mx-auto mt-5" method="POST" action="/movies"> --}}
    {{ csrf_field() }}

        <div class="form-group">
          <label for="title">Movie Title: </label>
          <input type="text" class="form-control" id="title" name="title">
        </div>

        <div class="form-group">
          <label for="image_url">Image URL:</label>
          <textarea class="form-control" id="image_url" cols="1" rows="1" name="image_url"></textarea>
        </div>

        <div class="form-group">
          <label for="exampleInputPassword1">Description</label>
          <textarea class="form-control" id="article-ckeditor" cols="30" rows="10" name="body"></textarea>
        </div>


        <button type="submit" class="btn btn-primary">Publish</button>
  </form>
{!! Form::close() !!}
@endsection