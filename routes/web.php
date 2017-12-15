<?php

Route::get('/tasks', function () {
  $tasks = DB::table('tasks')->get();

  return view('tasks.index', compact('tasks'));
});

Route::get('/tasks/{task}', function ($id) {
  $task = DB::table('tasks')->find($id);

  dd($task);

  return view('tasks.show', compact('tasks'));
});
