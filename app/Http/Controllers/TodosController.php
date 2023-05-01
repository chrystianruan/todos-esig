<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodosController extends Controller
{
    public function index() {

        $allTodos = Todo::where('user_id', auth()->user()->id)->orderBy('created_at')->get();
        $todosRealized = Todo::where('user_id', auth()->user()->id)->where('realized', true)->get();
        $todosNotRealized = Todo::where('user_id', auth()->user()->id)->where('realized', false)->get();
        
        return view('/todos', compact(['allTodos', 'todosRealized', 'todosNotRealized']));
    }

    public function showTodo($id) {
        $todo = Todo::findOrFail($id);

        return $todo;
    }

    public function newTodo(Request $request) {
        $todo = new Todo;
        $todo->name = $request->name;
        $todo->realized = 0;
        $todo->user_id = auth()->user()->id;
        $todo->save();

        return redirect()->back();

    }

    public function updateRealizedTodo($id) {
        $todo = Todo::findOrFail($id);
        if ($todo->realized == 0) {
            $todo->realized = 1;
        } else { 
            $todo->realized = 0;
        }
        $todo->save();

        return redirect()->back();

    }

    public function updateTodo($id, Request $request) {
        $todo = Todo::findOrFail($id);
        $todo->name = $request->name;
        $todo->save();

        return redirect()->back();
    }

    public function deleteTodo($id) {
        Todo::findOrFail($id)->delete();

        return redirect()->back();
    }
}
