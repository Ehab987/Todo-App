<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Todo;
use App\Http\Requests\TodoRequest;

class TodoController extends Controller
{
    public function index(){

        $todos = Todo::orderBy('created_at','desc')->get();

        return view('pages.index',compact('todos'));
    }

    public function showTodo($id){
        
        $todo = Todo::find($id);
        return view('pages.show',compact('todo'));
    }
    public function create(){

        return view('pages.create');
    }
    public function store(TodoRequest $request){
        Todo::create([
            'text' => $request ->text,
            'body' => $request -> body,
            'due' =>  $request -> due
        ]);
        return redirect()->route('home')->with(['success'=> 'Todo Created Successfully']);
    }
    public function edit($id){

        $todo = Todo::find($id);
        if(!$todo){
            return redirect()->back();
        }
        return view('pages.edit',compact('todo'));
    }
    public function update(TodoRequest $request,$id){
        $todo = Todo::find($id);
        if(!$todo){
            return redirect()->back();
        }
        $todo->update($request->all());
        return redirect()->route('home')->with(['update'=> 'Todo Updated Successfully']);
    }
    public function delete($id){

        $todo = Todo::find($id);
        if(!$todo){
            return redirect()->back();
        }

        $todo->delete();
        
        return redirect()->route('home')->with(['delete'=> 'Todo deleted Successfully']);
    }
}
