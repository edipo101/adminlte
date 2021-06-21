<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use DataTables;

class TaskController extends Controller
{
    public function index(){
    	return view('tasks.index');
    }

    public function tasks(){
    	$tasks = Task::get();
    	return DataTables::of($tasks)->toJson();
    }
}
