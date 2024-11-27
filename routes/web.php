<?php

use App\Models\taskmodel;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/usedpages/todolist', function () {
    return view('usedpages.todolist');
});

Route::get('/usedpages/signin', function () {
    return view('usedpages.signin');
});

Route::get('/usedpages/register', function () {
    return view('usedpages.register');
});

Route::post('/usedpages/todolist',function () {
    $taskmodel = new taskmodel();
    $taskmodel->task_name = request('taskname');
    $taskmodel->task_description = request('taskdescription');
    $date_due = \Carbon\Carbon::createFromFormat('d/m/Y', request('date-picker'))->format('Y-m-d');
    $taskmodel->task_date_due = $date_due;
    $taskmodel->task_urgency = request('selecttaskurgency');
    $taskmodel->task_complete = false; 
    $taskmodel->task_date_assigned = now();
    $taskmodel->save();
    return redirect()->back()->with('message', 'Task added successfully!');
}); 