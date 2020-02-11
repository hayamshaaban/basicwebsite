@extends('layouts.app')
@section('content')
<a href="http://localhost/basicwebsite/public/albums/{{$photo->album_id}}" class="btn btn-primary">Go back to Gallery</a>
<h3>{{$photo->id}}</h3>
<p>{{$photo->description}}</p>
<hr>
<div class="col-md-2 mb-5">
    <form action="http://localhost/basicwebsite/public/photos/{{$photo->id}}" method="POST">
        @csrf
        @method('DELETE')
      <button class="btn btn-danger btn-sm float-right "><i class="fa fa-trash text-light">Delete</i></button>
    </form>

</div> 
<img src="{{asset('storage/'.$photo->photo)}}">


@endsection
