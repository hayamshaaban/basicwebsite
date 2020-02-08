@extends('layouts.app')
@section('title','messages page')
@section('content')
<h1>Messages</h1>
@if (count($messages)>0)
<table class="table table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Message</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($messages as $message ) 
        <tr> 
        <td>{{$message->id}}</td>
        <td>{{$message->name}}</td>
        <td>{{$message->email}}</td>
        <td>{{$message->message}}</td>
        </tr>
        @endforeach
    </tbody>
</table>

{{$messages->links()}}
@else
<h3>no messages </h3>
@endif
@endsection





@section('sidebar')
@parent
<p>this is sidebare for home page</p>   
@endsection



