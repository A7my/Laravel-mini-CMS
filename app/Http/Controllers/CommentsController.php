<?php

namespace App\Http\Controllers;

use App\Models\comments;
use Illuminate\Support\Facades\Request;

class CommentsController extends Controller
{


    public function index()
    {
        echo "afd";
    }

    public function create()
    {

    }

    public function store(Request $request , $id)
    {
        echo $request->t;
        echo $id;
        echo "asdsf";
    }

    public function show(Request $request , $id)
    {
    }
    public function edit(comments $comments)
    {
        //
    }
    public function update(Request $request, comments $comments)
    {

    }
    public function destroy(comments $comments)
    {
        //
    }
}
