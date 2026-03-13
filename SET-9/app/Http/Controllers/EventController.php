<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    //
    public function index(){
        $events=Event::all();
        return view('events.index',compact('events'));
    } 

    public function create(){
        return view('events.create');
    }

    public function store(Request $request){
        $request->validate([
            'name'=>'required|min:3|max:10',
            'email'=>'required|email',
            'event_name'=>'required|min:5',
        ]);

        Event::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'event_name'=>$request->event_name,
        ]);

        return redirect()->route('events.index')->with('success','Event Registered Successfully');
    }

    public function show($id){
        $event=Event::find($id);

        return view('events.show',compact('event'));
    }
}
