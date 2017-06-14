<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TasksController extends Controller
{
    public function index()
    {
    	$tasks = Task::all(); 
		$name='World';

    	return view('tasks.index', compact('tasks', 'name'));
    }

    public function show(Task $task)
    {
    	return $task;
		$name='World';

    	return view('tasks.show', compact('task'));
    }
}
