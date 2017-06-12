<?php

namespace App\Http\Controllers;
use App\Commentblog;

use Illuminate\Http\Request;
use App\Postblog;

class PostblogController extends Controller
{
    public function savePostblog(Request $request){
        $p = new Postblog([
            'title' => $request->input('title'),
            'content' => $request->input('content')
        ]);
        $p->save();
        return redirect()->back()->with('post-blog', 'Post added successfully!');
    }

    public function showBlog(){

        $posts = Postblog::orderBy('created_at', 'desc')->get();

        return view('others.blog', ['posts' => $posts]);
    }

    public function setComment(Request $request){
        $post = Postblog::find($request->input('id'));
        $comment = new Commentblog([
            'title' => $request->input('title'),
            'content' => $request->input('answer')
        ]);
        $post->commentblogs()->save($comment);
        return redirect()->back();

    }

    public function deletePostblog($id){
        $post = Postblog::find($id);
        $post->commentblogs()->delete();
        $post->delete();
        return redirect()->back();
    }
}
