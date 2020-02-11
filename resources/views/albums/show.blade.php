@extends('layouts.app')
@section('title','Album page')
@section('content')
<div><a class="btn btn-primary float-right" href="http://localhost/basicwebsite/public/photos/create/{{$album->id}}"><i class="fa fa-plus"></i>Add photos to Album</a></div>

<h1>{{$album->name}}</h1>
<hr>

    @if (count($album->photos)>0)
    <?php 
    $colcount=count($album->photos);
    $i=1;
    ?>


<div class="text-center">
    <div class="row">
            @foreach ($album->photos as $photo )
            @if ($i==$colcount)
         <div class="col-md-4 mb-3">
         <a href="http://localhost/basicwebsite/public/photos/{{$photo->id}}"><img src="{{asset('storage/'.$photo->photo)}}" class="img-fluid"></a>   
            <h3 class="pb-5">{{$photo->title}}</h3>
            @else 
           <div class="col-md-4 mb-3">
            <a href="http://localhost/basicwebsite/public/photos/{{$photo->id}}"><img src="{{asset('storage/'.$photo->photo)}}" class="img-fluid"></a>   
            <h3 class="pb-5">{{$photo->title}}</h3>

            @endif
            @if ($i % 3 ==0)
        </div>
        </div>
        <div class="text-center">
            @else 
        </div>  
            @endif
            <?php  $i++; ?>
        @endforeach
     
    </div>
</div>
@else 
<p>No photos yet</p>
@endif
@endsection