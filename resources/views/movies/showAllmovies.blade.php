
@extends('movies.admin')

@section('moviesSeciton')


<div class="row">
@foreach ($movieEdit as $movie)
       
      <div class="col-md-6">
      <div class="card mb-4 box-shadow">
         <div class="card-title">
         </div>
         <img src="images/gone_with_wind.jpeg" alt="">                  
         <img class="card-img-top" src="{{$movie->image_url}}" alt="Card image cap">
         <h1>{{$movie->title}}</h1>
         <div class="card-body">
         <p class="card-text">{{ $movie->body }}</p>
            <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
               <a href="/movies/{{$movie->id}}"><button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>
               <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
            </div>
            <small class="text-muted">9 mins</small>
            </div>
         </div>
      </div>
      </div>
      @endforeach
   </div>
@endsection