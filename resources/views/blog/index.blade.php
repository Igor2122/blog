
@extends('layouts.master')


@include('partials._blog-header')


<div class="nav-scroller py-1 mb-2">
  <nav class="nav d-flex justify-content-between">
    <a class="p-2 text-muted" href="#">World</a>
    <a class="p-2 text-muted" href="#">U.S.</a>
    <a class="p-2 text-muted" href="#">Technology</a>
    <a class="p-2 text-muted" href="#">Design</a>
    <a class="p-2 text-muted" href="#">Culture</a>
    <a class="p-2 text-muted" href="#">Business</a>
    <a class="p-2 text-muted" href="#">Politics</a>
    <a class="p-2 text-muted" href="#">Opinion</a>
    <a class="p-2 text-muted" href="#">Science</a>
    <a class="p-2 text-muted" href="#">Health</a>
    <a class="p-2 text-muted" href="#">Style</a>
    <a class="p-2 text-muted" href="#">Travel</a>
  </nav>
</div>

@include('partials._blog-jumbotron')

@section('content-no-container')

    <main role="main" >
        <div class="blog-main">
          <h3 class="pb-3 mb-4 font-italic border-bottom">
            Latest Blog Posts
          </h3>


          @foreach ($posts as $post)
            @include('blog.article')
          @endforeach
          

          <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="#">Older</a>
            <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
          </nav>

        </div><!-- /.blog-main -->

        
      
   
    </main><!-- /.container -->
   
@endsection

{{-- for some reason can't see the section to find out  --}}
@section('aside')
  @include('partials._blog-side-bar')
@endsection