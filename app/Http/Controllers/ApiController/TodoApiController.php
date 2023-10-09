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


    public function store()
    {
        $newTodo = new Todo;
        $newTodo->title = request()->title;
        $newTodo->description = request()->description;
        $newTodo->user_id = request()->user_id;

        $newTodo->save();
        return $newTodo;

    }


    public function update($id)
    {
        $todo = Todo::find($id);
        $todo->title = request()->title;
        $todo->description = request()->description;
        $todo->save();
        return $todo;
    }


    public function destroy($id)
    {
        $todo = Todo::find($id);
        $todo->delete();
        return $todo;
    }
}
