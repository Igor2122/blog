@extends('layouts.master')

@section('content')
   <main role="main">

         <section class="jumbotron text-center">
           <div class="container">
             <h1 class="jumbotron-heading">Movies to Watch</h1>
             
             <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don't simply skip over it entirely.</p>
             <p>
               <a href="#" class="btn btn-primary my-2">Main call to action</a>
               <a href="#" class="btn btn-secondary my-2">Secondary action</a>
             </p>
           </div>
         </section>
   
         <div class="album py-5 bg-light">
           <div class="container">
            

             <div class="row">
               
              @foreach ($movies as $movie)
                  
              <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                  <div class="card-title">
                  </div>
                  <img src="images/gone_with_wind.jpeg" alt="">                  
                  <img class="card-img-top" src="{{$movie->image_url}}" alt="Card image cap">
                  <h1>{{$movie->title}}</h1>
                  <div class="card-body">
                  <p class="card-text">{!! $movie->body !!}</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        <a href="movies/{{$movie->id}}"><button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>
                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                      </div>
                      <small class="text-muted">9 mins</small>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
   
       </main>
@endsection