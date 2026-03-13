<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    //
    public function index(){
        $contacts=Contact::all();
        return view('contacts.index',compact('contacts'));
    }

    public function create(){
        return view('contacts.create');
    }

    public function store(Request $request){
        $request->validate([
            'name'=>'required|min:3',
            'email'=>'required|email',
            'message'=>'required|min:10'
        ]);

        Contact::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'message'=>$request->message,
        ]);

        return redirect()->route('contacts.index')->with('success','Message sent Successfully');
    }

    public function show($id){
        $contactData=Contact::find($id);
        if(!$contactData){
            abort(404,'Not Found');
        }

        return view('contacts.show',compact('contactData'));
    }
}
