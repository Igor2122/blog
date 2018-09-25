@if (count($errors))
    
<div class="alert alert-danger" role="alert">
  <ul>
    <strong>Oh snap!</strong>
    {{-- this var is available for every sinle view --}}
    @foreach ($errors->all() as $error)
    <li>{{$error}}</li> 
    
    @endforeach
  </ul>
</div>
@endif      