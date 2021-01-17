@section('title')
    TodoList
@endsection

@extends('layouts.app')
@section('content')
    <h1 class="title">Todos</h1>

                        {{-- message for success --}}
    @if(Session::has('success'))
        <div class="btn btn-success buttonStyle">{{Session::get('success')}}</div>
    @endif

                          {{-- message for update --}}
    @if(Session::has('update'))
    <div class="btn btn-success buttonStyle">{{Session::get('update')}}</div>
    @endif

      {{--                      message for delete      --}}
    @if(Session::has('delete'))
    <div class="btn btn-danger buttonStyle">{{Session::get('delete')}}</div>
    @endif
    @foreach ($todos as $todo)
        <div class="well">

            <div class='styleDiv'>

                <div class="text-center fsizeText"><a href='showTodo/{{$todo->id}}'>{{$todo ->text}}</a></div>

                <div class="alert alert-danger divSt">{{$todo->due}}</div> 

            </div>   

        </div>
            
    @endforeach
@endsection














