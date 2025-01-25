<?php

namespace App\Http\Controllers;
use App\Models\taskmodel;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function destroy($task)
    {
        $task = taskmodel::where('task_id', $task)->firstOrFail();
        $task->delete();

        return redirect()->route('usedpages.todolist.index')->with('message', 'Task deleted successfully!');
    }
    public function index(){
        $tasks = taskmodel::all(); 
        return view('usedpages.todolist', compact('tasks'));
    }
}
