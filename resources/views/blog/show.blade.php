@extends('layouts.master')


@section('content')
   <div class="mt-5">
      <h1>{{ $post->title }}</h1>
      <p>{{ $post->body }}</p>
      <img src="{{$post->image_url}}" alt="{{$post->title}}">


      <hr>
      <div class="comments mt-5">
         @foreach ($post->comments as $comment)
             <ul class="list-group">
                <li class="list-group-item">
                   <strong>
                      {{ $comment->created_at->diffForHumans() }}
                   </strong>
                   <p>{{$comment->body}}</p>
                </li>
             </ul>
             
         @endforeach
      </div>
        <hr>
      {{-- add a comment --}}
      <div class="card">
          <div class="card-block">
          <form action="POST" action="/blog/{{$post->id}}">
            {{ csrf_field() }}
                <div class="form-group">
                    <textarea name="body" class="form-cotrol" cols="80" rows="5" placeholder="Your Commnet here"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Add Comment</button>
                </div>
            </form>
          </div>
      </div>
   </div>
@endsection

