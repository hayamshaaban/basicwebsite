@extends('layouts.app')
@section('title','Create album page')
@section('content')
  <h1>Create Album</h1>
        <form action="http://localhost/basicwebsite/public/photos/store" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
            <input type="hidden" name="album_id" value="{{$album_id}}">
            </div>
           
            <div class="form-group">
                <label>Add photo Title</label>
                <input type="text" name="title" placeholder="Add Album Title" class="form-control" value="{{old('title')}}">
            </div>
          
            <div class="form-group">
                <label>Add photo Bio</label>
                <textarea type="text" name="description" placeholder="Add description" class="form-control" >{{old('description')}}</textarea>

            </div>
            <div class="form-group">
                <label>Add Photo</label>
                <input type="file" name="photo"  class="form-control" >
            </div>

        
            <div class="form-group">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i>Add photo</button>
            </div>
   
        </form>
@endsection


