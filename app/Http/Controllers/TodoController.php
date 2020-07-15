<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;
class TodoController extends Controller
{
    public function index()
    {


        return view('todo.index');
    }
    public function update(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|min:3'
        ]);
        $todo = Todo::create($validated);
        return redirect('todo');
        // $todo = new Todo();
        // $todo->title = $request->title;
        // $todo->save();

        // $todo = Todo::create([
        //     'title' => $request->title,
        // ]);

    }
}
