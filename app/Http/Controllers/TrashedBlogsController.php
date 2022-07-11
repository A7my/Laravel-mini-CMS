<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\blogs;
use App\Models\comments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TrashedBlogsController extends Controller
{

    public function index()
    {
        $id = Auth::user()->id;
        $blogs = blogs::onlyTrashed()->where('user_id' , $id)->get();
        return view('layouts.blogs.trashed' , compact('blogs'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id) // Resotore
    {
        $Post = blogs::withTrashed()->where('id',$id)->restore();
        return redirect('/Tblogs')->with('pdel' , 'you have restored a blog ');
    }

    public function edit($id)
    {
        // $blog = blogs::findorfail($id);
        // $blog->forceDelete();
        $Post = blogs::withTrashed()->where('id',$id)->forceDelete();
        echo $Post;
        return redirect('/Tblogs')->with('pdel' , 'you have Deleted the blog For Ever');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'comment' => 'required',
        ]);
        $comment = new comments;
        $comment->comment = $request->comment;
        $comment->blog_id = $id;
        $comment->user_id = Auth::user()->id;
        $comment->save();
        return redirect()->back()->with('comment' , 'you add a comment');
    }


    public function destroy($id)
    {
    }
}
