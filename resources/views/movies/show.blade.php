@extends('layouts.master')

@section('content')
<img src="{{$movie->image_url}}" alt="">
    <h1>{!!$movie->body!!}</h1>

@endsection