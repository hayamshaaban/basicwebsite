@extends('layouts.app')
@section('title','Album page')
@section('content')
<div><a class="btn btn-primary float-right" href="{{route('albums.create')}}"><i class="fa fa-plus"></i>Create Album</a></div>
<h2>All Albums</h2>

@if (count($albums)>0)
<?php 
$colcount=count($albums);
$i=1;
?>


<div class="text-center">
    <div class="row">
            @foreach ($albums as $album )
            @if ($i==$colcount)
         <div class="col-md-4 mb-3">
            <a href="{{route('albums.show',$album->id)}}"><img src="{{asset('storage/'.$album->cover_image)}}" class="img-fluid"></a>   
            <h3 class="pb-5">{{$album->name}}</h3>
            @else 
           <div class="col-md-4 mb-3">
            <a href="{{route('albums.show',$album->id)}}"><img src="{{asset('storage/'.$album->cover_image)}}" class="img-fluid"></a>   
            <h3 class="pb-5">{{$album->name}}</h3>

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
<p>No Albums yet</p>
@endif
@endsection



