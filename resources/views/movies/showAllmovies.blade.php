
@extends('movies.admin')

@section('allMovieSeciton')


<div class="row">
@foreach ($allMovies as $movie)
       
      <div class="col-md-3">
      <div class="card mb-4 box-shadow">
         <div class="card-title">
         </div>
         {{-- <img src="images/gone_with_wind.jpeg" alt="">                   --}}
         <img class="card-img-top" src="{{$movie->image_url}}" alt="Card image cap">
         <h1>{{$movie->title}}</h1>
         <div class="card-body">
         {{-- <p class="card-text">{!! $movie->body !!}</p> --}}
            <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
               <a href="/movies/{{$movie->id}}"><button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>
               <a href="/movies/{{$movie->id}}/editMovie">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
               </a>
            </div>
            <small class="text-muted">9 mins</small>
            </div>
         </div>
      </div>
      </div>
      @endforeach
   </div>
@endsection