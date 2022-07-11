<?php

namespace App\Http\Controllers;

use App\Models\blogs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CatController extends Controller
{
    public function index()
    {
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        // $blogs = DB::table('blogs')->where('blog_category' , $id)->get();
        $blogs = blogs::where('blog_category' , $id)->get();
        // echo $blogs;
        return view('layouts.blogs.catblogs' , compact('blogs'));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
