<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    //
    public function index(){
        $courses=Course::all();

        return view('courses.index',compact('courses'));
    }

    public function create(){
        return view('courses.create');
    }

    public function store(Request $request){
        $request->validate([
            'course_name'=>'required|min:5|max:30',
            'duration'=>'required|min:1|max:7',
            'fees'=>'required|numeric|min:300',
        ]);

        Course::create([
            'course_name'=>$request->course_name,
            'duration'=>$request->duration,
            'fees'=>$request->fees,
        ]);

        session()->flash('success','Course Created Successfully');

        return view('courses.create');
    }

    public function show($id)
    {
        try{
            $course=Course::find($id);

            if(!$course){
                abort(404,'Course is not found!!');
            }

            return view('courses.show',compact('course'));
        }catch(\Exception $e){
            dd($e);
        }
    }
}
