<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//use App\Http\Requests\TaskRequest;
use App\Task;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index',compact('tasks',$tasks));
    }

    public function create()
    {
        return view('/tasks/create');
    }

    public function store(Request $request)
    {
        $task = Task::create($request->all());
        return redirect('/tasks'.$tasks->id);
    }

    public function show(Task $tasks)
    {
        return view('/tasks/show',compact('tasks',$tasks));
    }

    public function edit(Task $tasks)
    {
        return view('/tasks/edit',compact('tasks',$tasks));
    }

    public function update(Request $request, Task $task)
    {
        $task = Task::findOrFail($id);
        $task->update($request->all());
        $task->save();
        $request->session()->flash('message', 'Successfully updated!');
        return redirect('/tasks/index');
    }

    public function destroy(Request $request, Task $task)
    {
        $task->delete();
        $request->session()->flash('message', 'Successfully deleted!');
        return redirect('/tasks/index');
    }
}