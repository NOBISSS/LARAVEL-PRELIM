<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    //
    public function index(){
        $feedbacks=Feedback::all();
        return view('feedbacks.index',compact('feedbacks'));
    }

    public function create(){
        return view('feedbacks.create');
    }

    public function store(Request $request){
        $request->validate([
            'name'=>'required|min:3',
            'email'=>'required|email',
            'message'=>'required|min:5',
        ]);

        Feedback::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'message'=>$request->message,
        ]);

        return redirect()->route('feedbacks.index')->with('success','Feedback SUbmitted');
    }
}
