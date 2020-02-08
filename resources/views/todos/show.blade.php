@extends('layouts.app')
@section('title','todos page')
@section('content')
<h1>Todos</h1>
<div class="border p-4 m-3 rounded">
<h3>{{$todo->text}}</h3>
<div class="badge badge-danger badge-rounded ">{{$todo->due}}</div>
<hr>
<p>{{$todo->body}}</p>
</div>

    

@endsection


