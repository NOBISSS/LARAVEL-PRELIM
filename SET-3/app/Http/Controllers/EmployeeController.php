<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
class EmployeeController extends Controller
{
    //
    public function index(){
        $employees=Employee::all();
        return view('employees.index',compact('employees'));
    }

    public function create(){
        return view('employees.create');
    }

    public function store(Request $request){
        $request->validate([
            'name'=>'required|min:3',
            'designation'=>'required|in:HR,MANAGER,ACCOUNTANT',
            'salary'=>'required|numeric|min:2000',
        ]);

        Employee::create([
            'name'=>$request->name,
            'designation'=>$request->designation,
            'salary'=>$request->salary,
        ]);

        return redirect('/employees')->with('success','Employee Registered Successfully');
    }

    public function show($id){
        $employee=Employee::find($id);

        if(!$employee){
            abort(404,'Student Not Found');
        }

        return view('employees.show',compact('employee'));
    }
}
