<?php

namespace App\Http\Controllers;
// App/Task indeholder alt data fra databaesen i json.
use App\Task;

class TasksController extends Controller
{
    public function index()
    {
      $tasks = Task::all();
      return view('tasks.index', compact('tasks'));
    }


    public function show (Task $Task)
    {
       return $Task;
       return view('tasks.show', compact('tasks'));
    }
}
