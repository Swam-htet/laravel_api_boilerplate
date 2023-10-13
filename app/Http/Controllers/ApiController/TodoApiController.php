<?php

namespace App\Http\Controllers\ApiController;

use App\Http\Controllers\Controller;
use App\Models\Todo;
use Illuminate\Http\Request;

class TodoApiController extends Controller
{

    public function index()
    {
        $todos = Todo::all();
        return $todos;
    }


    public function show($id)
    {

        $todo = Todo::find($id);
        return $todo;
    }


    public function store(Request $request)
    {
        $newTodo = new Todo;
        $newTodo->title = request()->title;
        $newTodo->description = request()->description;
        $newTodo->user_id = request()->user_id;
        $newTodo->completed = request()->completed;


        $newTodo->save();
        return $newTodo;

    }


    public function update(Request $request,$id)
    {
        $todo = Todo::find($id);
        $todo->title = request()->title;
        $todo->description = request()->description;
        $todo->user_id = request()->user_id;
        $todo->completed = request()->completed;
        $todo->save();
    }


    public function destroy($id)
    {
        $todo = Todo::find($id);
        $todo->delete();
        return $todo;
    }
}
