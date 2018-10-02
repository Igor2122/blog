{{-- error messages --}}
@if (count($errors) > 0)
    @foreach ($errors->all() as $error)
        <div class="alert aler-danger">
           {{$error}}
        </div>
    @endforeach
@endif

{{-- success messages  --}}
@if(session('success'))
    <div class="alert alert-success">
       {{session('success')}}
    </div>
@endif



{{-- errom message --}}
@if (session('error'))
    <div class="alert alert-danger">
       {{session('error')}}
    </div>
@endif

