<?php

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
