@extends('movies.admin')

@section('moviesSeciton')


@section('moviesSeciton')
<form class="w-50 mx-auto mt-5" method="POST" action="/blog">

   {{ csrf_field() }}

      <div class="form-group">
        <label for="title">Movie Title: </label>
        <input type="text" class="form-control" id="title" name="title">
      </div>

      <div class="form-group">
        <label for="exampleInputPassword1">Description</label>
        <textarea name="body" class="form-control" id="body" cols="30" rows="10"></textarea>
      </div>

      <div class="form-group">
        <label for="exampleInputPassword1">Image URL:</label>
        <textarea name="image_url" class="form-control" id="image_url" cols="1" rows="1"></textarea>
      </div>

      <button type="submit" class="btn btn-primary">Publish</button>
</form>
@endsection