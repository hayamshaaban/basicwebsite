@extends('layouts.app')
@section('title','todos page')
@section('content')
<div>
<span class="font-weight-bold">Todos</span>
<a class="btn btn-primary float-right" href="{{route('todos.create')}}"><i class="fa fa-plus"></i>Add Todo</a>
</div>

@if (count($todos)>0)
@foreach ($todos as $todo)


<div class="border p-4 m-3 rounded">
    <div class="row">
        <div class="col-md-8">
        <h3><a href="{{route('todos.show',$todo->id)}}">{{$todo->text}}</a><span class="badge badge-danger badge-rounded ml-2">{{$todo->due}}</span></h3>
        </div>
    <div class="col-md-4">
        <a href="{{route('todos.edit',$todo->id)}}" class="btn btn-success btn-sm float-right ml-2"><i class="fa fa-edit text-light">Edit</i></a>
        <form action="{{route('todos.destroy',$todo->id)}}" method="POST">
            @csrf
            @method('DELETE')
          <button class="btn btn-danger btn-sm float-right "><i class="fa fa-trash text-light">Delete</i></button>
        </form>

    </div> 
    </div><!--end of row div-->
        
</div>

@endforeach
    
@endif
@endsection


