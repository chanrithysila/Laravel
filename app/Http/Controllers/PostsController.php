<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
class PostsController extends Controller
{
    public function getPosts(){
        $posts = \App\Student::all();
        return view('students',compact('posts'));
        dd($posts);
    }
    public function insertsPost(){
        // $posts = new Posts;

        // $posts->Firstname = "";
        // $posts->Lastname = "";
        // $posts->Age = "";

        // $posts->save();
    }
}
