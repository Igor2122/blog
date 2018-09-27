



          <div class="blog-post">
            <h2 class="blog-post-title">
            <a href="/blog/{{ $post->id }}"> {{ $post->title }} </a>
            </h2>
            {{-- using carbon we are formatting the timestamp to readable format --}}
            <p class="text-muted">{{ $post->created_at->toFormattedDateString()}} <a href="#">Mark</a></p>

            <img class="mt-5" src="{{$post->image_url}}" alt="{{$post->title}}">
            <p><strong>Short Description:</strong>
               {{$post->body}}
            </p>
            
          </div><!-- /.blog-post -->