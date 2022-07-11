<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\blogs;
use App\Models\comments;
use Illuminate\Http\Request;
use App\Models\blogs_category;
use Illuminate\Support\Facades\Auth;

class BlogsController extends Controller
{
    public function userBlogs(){

        $userBlogs = User::find(Auth::user()->id)->blogs;
        $blogsCategory = blogs::get()->where('user_id' , Auth::user()->id)->pluck('blogs_category');
        return view('layouts.website.user.userBlogs' , compact('userBlogs' , 'blogsCategory'));
    }


    public function index()
    {
        $cat = blogs_category::all();
        return view('layouts.blogs.category' , compact('cat'));
    }



    public function create()
    {
        $blogCategory = blogs_category::all();
        // print_r($blogCategory);
        return view('layouts.blogs.create' , compact('blogCategory'));
    }

    public function store(Request $request)
    {

        $validated = $request->validate([
            'title' => 'required',
            'content' => 'required|min:10',
            'blogCategory' => 'required',
        ]);
        // echo $request->title;
        // echo $request->content;
        // echo $request->blogCategory;
        $newBlog = new blogs;
        $newBlog->title = $request->title;
        $newBlog->content = $request->content;
        $newBlog->blog_category = $request->blogCategory;
        $newBlog->user_id = Auth::user()->id;
        $newBlog->save();
        return redirect()->route('dashboard')->with('addBlogMessage' , 'You have Added a new blog');
    }

    public function show($id)
    {
        // $commenters = comments::get()->where('blog_id' , $id)->pluck('user_id');
        // echo $myBlogComments;
        // echo $commenters;
        $myBlog = blogs::findorfail($id);
        $myBlogComments = blogs::findorfail($id)->comments;
        return view('layouts.blogs.blogs' , compact('myBlog' ,'myBlogComments'));
    }

    public function edit($id)
    {
        $UserBlog = blogs::findorfail($id);
        return view('layouts.blogs.update' , compact('UserBlog'));

    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $UpdatedBlog = blogs::findorfail($id);
        $UpdatedBlog->title = $request->title;
        $UpdatedBlog->content = $request->content;
        $UpdatedBlog->save();
        // return redirect()->route('blogs.user')->with('up_ms' , "you've updated your blog");

        return redirect('blogs/user')->with('up_ms' , "you've updated your blog");
    }

    public function destroy($id)
    {
        blogs::destroy($id);
        return redirect('blogs/user')->with('del_ms' , 'your blog has been transfered to trash, you can restore it or delete it permanently from Trashed Blogs');

    }
}
