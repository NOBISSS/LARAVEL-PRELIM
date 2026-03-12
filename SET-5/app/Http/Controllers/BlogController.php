<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    //
    public function index(){
        $blogs=Blog::all();

        return view('blogs.index',compact('blogs'));
    }

    public function create(){
        return view('blogs.create');
    }

    public function store(Request $request){
        $request->validate([
            'title'=>'required|min:3|max:50',
            'content'=>'required|min:5|max:50',
            'author'=>'required|min:5|max:20',
        ]);

        Blog::create([
            'title'=>$request->title,
            'content'=>$request->content,
            'author'=>$request->author,
        ]);

        return view('blogs.create')->with('session','Blog Created Successfully');
    }

    public function show($id){
        $blog=Blog::find($id);

        if(!$blog){
            abort(404,'Blog Not Found');
        }

        return view('blogs.show',compact('blog'));
    }
}
