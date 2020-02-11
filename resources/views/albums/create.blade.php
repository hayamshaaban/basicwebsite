@extends('layouts.app')
@section('title','Create album page')
@section('content')
  <h1>Create Album</h1>
        <form action="{{route('albums.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Add Album Title</label>
                <input type="text" name="name" placeholder="Add Album Title" class="form-control" value="{{old('name')}}">

            </div>
            <div class="form-group">
                <label>Add Bio</label>
                <textarea type="text" name="description" placeholder="Add description" class="form-control" >{{old('description')}}</textarea>

            </div>
            <div class="form-group">
                <label>Add Image</label>
                <input type="file" name="cover_image"  class="form-control" >

            </div>

        
            <div class="form-group">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i>Add Image</button>
            </div>
   
        </form>
@endsection


