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
   </div>
@endsection

