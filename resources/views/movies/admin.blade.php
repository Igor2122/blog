@extends('layouts.master')

@section('no-container')
<div class="container-fluid">
   <div class="row">
     {{-- sidebar for admin navigation --}}
     @include('partials._admin-nav')

     <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
       <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
         <h1 class="h2">Dashboard</h1>
         <div class="btn-toolbar mb-2 mb-md-0">
           <div class="btn-group mr-2">
             <button class="btn btn-sm btn-outline-secondary">Share</button>
             <button class="btn btn-sm btn-outline-secondary">Export</button>
           </div>
           <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
             <span data-feather="calendar"></span>
             This week
           </button>
         </div>
       </div>

       {{-- canvas to be added with the grap --}}
       {{-- <canvas class="my-4" id="myChart" width="900" height="380"></canvas> --}}


       <div class="row">
          @foreach ($movieEdit as $movie)
            <div class="col-md-3">
              <div class="card mb-4 box-shadow">
                  <div class="card-title">
                  </div>
                  <img src="images/gone_with_wind.jpeg" alt="">                  
                  <img class="card-img-top" src="{{$movie->image_url}}" alt="Card image cap">
                  <h1>{{$movie->title}}</h1>
                  <div class="card-body">
                  {{-- hidden to save space <p class="card-text">{!! $movie->body !!}</p> --}}
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

     </main>
   </div>
 </div>

@endsection