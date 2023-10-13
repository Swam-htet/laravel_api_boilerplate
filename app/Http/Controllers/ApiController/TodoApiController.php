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

        if($todo){
            return [$todo];
        }
        return [];
    }


    public function store(Request $request)
    {
        $newTodo = new Todo;
        $newTodo->title = request()->title;
        $newTodo->description = request()->description;
        $newTodo->user_id = request()->user_id;
        $newTodo->completed = request()->completed;


        $newTodo->save();
        return [$newTodo];

    }


    public function update(Request $request,$id)
    {
        $todo = Todo::find($id);

        if ($todo){
            $todo->title = request()->title;
            $todo->description = request()->description;
            $todo->user_id = request()->user_id;
            $todo->completed = request()->completed;
            $todo->save();
            return [$todo];
        }
        return [];

    }


    public function destroy($id)
    {
        $todo = Todo::find($id);
        if($todo){
            $todo->delete();
            return [$todo];
        }
        return [];

    }
}
