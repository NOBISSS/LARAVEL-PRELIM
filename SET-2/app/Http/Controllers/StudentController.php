<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    //
    public function index(){
        $students=Student::all();
        return view('students.index',compact('students'));
    }

    public function create(){
        return view('students.create');
    }

    public function store(Request $request){
        $request->validate([
            'name'=>'required|min:1|max:10',
            'email'=>'required|unique:students,email',
            'course'=>'required|in:BBA,BCA,BSC,BCOM,MCA,MBA',
        ]);

        Student::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'course'=>$request->course,
        ]);

        return redirect('/students')->with('success','Student Registered Successfully');
    }

    public function show($id){
        try{
        $student=Student::find($id);

        if(!$student){
            abort(404,'Student Not Found!');
        }

        return view('students.show',compact('student'));
        }catch(Exception $e){
            dd($e->getMessage());
        }
    }
}
