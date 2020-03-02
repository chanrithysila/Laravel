<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Profile;
use App\Post;
use Auth;
class UserController extends Controller
{
    public function showUsers(){
       $users = User::all();
        return view('user.user',compact('users'));
    }

    public function formEditUser($id){
        $users = User::find($id);
        return view('user.editUser',compact('users'));
        
    }

    public function UpdateUser($id, Request $request){
        $users = User::find($id);
        $profile = new Profile;
        $users->name = $request->get('name');
        $users->email = $request->get('email');
        $users->profile->phone=$request->get('phone');
        $users->profile->address=$request->get('address');
        $users->profile->user_id = $users->id;
        $users->profile->save();
        $users->save();
        return redirect("users");
    }

    public function deleteUser($id){
        $users = User::find($id);
        $profile = new Profile;
        $users->profile->delete();
        $users->delete();
        return redirect("users");
    }

    public function showAllPost(){
        $posts = User::find(auth::id());
         return view('user.allPost',compact('posts'));
    }

    public function formNewPost(){
        $posts = Post::all();
         return view('user.addPost',compact('posts'));
    }

    public function addNewPost(Request $request){
        $users = User::find(auth::id());
        $post = new Post;
        $post->title= $request->title;
        $post->body= $request->body;
        $post->user_id=  $users->id;
        $post->save();
        return redirect("home");
    }

    public function formEditPost($id){
        $post = Post::find($id);
        return view('user.editPost',compact('post'));
    }

    public function updatePost($id, Request $request){
        $users = User::find(auth::id());
        $post = Post::find($id);
        $post->title= $request->title;
        $post->body= $request->body;
        $post->user_id=  $users->id;
        $post->save();
        return redirect("allPost");
    }
    public function destroyPost($id, Request $request){
        $users = User::find(auth::id());
        $post = Post::find($id);
        $post->delete();
        return redirect("allPost");
    }
}
