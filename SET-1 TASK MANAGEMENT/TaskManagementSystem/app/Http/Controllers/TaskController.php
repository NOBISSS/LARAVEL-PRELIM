<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
class TaskController extends Controller
{
    //
    public function index(){
        $tasks=Task::all();
        return view('tasks',compact('tasks'));
    }

    public function create(){
        return view('TaskAddForm');
    }

    public function store(Request $request){
        $request->validate([
            'title'=>'required|min:3|max:10',
            'description'=>'required|min:5|max:10',
            'status'=>'required|in:pending,completed',
        ]);

        Task::create([
            'title'=>$request->title,
            'description'=>$request->description,
            'status'=>$request->status,
        ]);
        session()->flash('success','Task Created Successfully');
        return view('TaskAddForm');
    }

    public function taskdet($id){

        $task=Task::find($id);

        if(!$task){
            abort('404','Task Not Found');
        }
        return view('TaskDetail',compact('task'))->with('success','Task Fetched {{$request->id}}');
    }
}
