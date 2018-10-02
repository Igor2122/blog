@extends('layouts.master')

@section('content')
<div class="container mt-2">

    <h2>{{$movie->title}}</h2>
    <img src="{{$movie->image_url}}" alt="">
    <h1>{!!$movie->body!!}</h1>

</div>
@endsection