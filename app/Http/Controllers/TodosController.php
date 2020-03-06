<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function index(){
        return view('todos.index')->with('todos', Todo::all());
    }
    public function show($todoId){
        return view('todos.show')->with('todo', Todo::find($todoId));
    }
    public function edit($todoId){
        return view('todos.edit')->with('todo', Todo::find($todoId));
    }
}
