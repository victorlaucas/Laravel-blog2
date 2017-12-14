<?php

Route::get('/', function () {
    $tasks = [
      'Do stuff',
      'Go to the store',
      'Finish cast'
    ];

    return view('welcome', compact('tasks'));
});
