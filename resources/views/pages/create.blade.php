@section('title')
    Create Todos
@endsection

@extends('layouts.app')
@section('content')
<h2 class="text-center mt-4">Create New Todo</h2>
    <form method="POST" action="{{route('Todo.save')}}">

    
        @csrf
                
        {{--                text     --}}
        <div class="form-group">

        <label class="la">text</label>
        <input type="text" class="form-control" name="text" />

        @error('text')                   {{--  error message   --}}
        <div class="alert alert-danger">{{$message}}</div>
            @enderror
    
        </div>
        <div class="form-group">
            <label class="la">body</label>
            <textarea type="text" class="form-control" name="body"></textarea>
            @error('body')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>

        <div class="form-group">

        <label class="la">due</label>
            <input type="text" class="form-control" name="due"/>
            @error('due')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>

       
        <button type="submit" class="btn btn-primary">Save</button>
    </form>

   
@endsection














