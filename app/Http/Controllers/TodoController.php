<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index(Request $request) {
        $todos = Todo::all();
        return view('todos.index', ['todos' => $todos]);
    }

    public function store(Request $request) {
        $request->validate(['title' => 'required', 'description' => 'required']);
        $todo = new Todo;
        $todo->title = $request->title;
        $todo->description = $request->description;
        $todo->save();

        return redirect()->route('todos')->with('succes:', 'A new task has been created');
    }

    public function show($id) {
        $todo = Todo::find($id);
        return view('todos.show', ['todo' => $todo]);
    }

    public function update(Request $request, $id) {
        $todo = Todo::find($id);
        $request->validate(['title' => 'required', 'description' => 'required']);

        $todo->title = $request->title;
        $todo->description = $request->description;
        $todo->save();

        return redirect()->route('todos')->with('succes:', 'Task wiht id {$id} has been updated');
    }

    public function destroy($id) {
        $todo = Todo::find($id);
        $todo->delete();

        return redirect()->route('todos')->with('succes:', 'Task wiht id {$id} has been deleted');
    }
}
