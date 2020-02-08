@extends('layouts.app')
@section('title','todos page')


@section('content')
    <span class="font-weight-bold">Create Todos</span>


    <form action="{{route('todos.store')}}" method="POST" >
        {{csrf_field()}}
        {{method_field('post')}}
                <div class="form-group">
                    <label>Add Title</label>
                    <input type="text" name="text" placeholder="Add Title" class="form-control" value="{{old('text')}}">

                </div>
                <div class="form-group">
                    <label>Add Body</label>
                    <textarea type="text" name="body" placeholder="Add Body" class="form-control" >{{old('body')}}</textarea>

                </div>
                <div class="form-group">
                    <label>Add Due</label>
                    <input type="text" name="due" placeholder="Add Due" class="form-control" value="{{old('due')}}">

                </div>
    
            
                <div class="form-group">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i>Add Todo</button>
                </div>


    
    </form>



@endsection
