@section('title')
    Show Todos
@endsection

@extends('layouts.app')
@section('content')
    <a href="/" class="btn btn-defult buttonGo">Go Back</a>
   
    <h1 class="">{{$todo ->text}}</h1>
    <div class="alert alert-danger " style="font-size:20px">{{$todo->due}}</div> 
    <hr>
    <p style="font-size:20px">{{$todo -> body}}</p>
    <br>
    <a href="{{route('Todo.edit',$todo ->id)}}" class="btn btn-primary">Edit</a>
    <a href="{{route('Todo.delete',$todo ->id)}}" class="btn btn-danger pull-right">Delete </a>
@endsection














