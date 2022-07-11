@extends('layouts.master.index')

@section('title')
Dashboard
@endsection

@section('content')
<!-- style="height:300px;width:500px;position:absolute;top:80px;left:300px;" -->
<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div  class="col-sm-6 col-xl-3">
                        <div   class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <!-- <i class="fa fa-chart-line fa-3x text-primary"></i> -->
                            <svg xmlns="http://www.w3.org/2000/svg" style="color:red" width="35" height="35" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
                                <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
                            </svg>
                            <div class="ms-3" style="">
                                <a href="{{url('/blogs/create')}}"><p style="font-size:20px" class="mb-2">Create A Blog</p></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <svg xmlns="http://www.w3.org/2000/svg" style="color:red" width="35" height="35" fill="currentColor" class="bi bi-book-fill" viewBox="0 0 16 16">
                                <path d="M8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
                            </svg>
                            <div class="ms-3">
                            <a href="{{url('blogs/user')}}"><p style="font-size:20px" class="mb-2">Your Blogs</p></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div  class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <svg xmlns="http://www.w3.org/2000/svg" style="color:red" width="35" height="35" fill="currentColor" class="bi bi-book-half" viewBox="0 0 16 16">
                                <path d="M8.5 2.687c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
                            </svg>
                            <div class="ms-3">
                            <a href="{{route('blogs.index')}}"><p style="font-size:20px" class="mb-2">Browse Blogs</p></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div  class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <svg xmlns="http://www.w3.org/2000/svg" style="color:red" width="35" height="35" fill="currentColor" class="bi bi-folder-minus" viewBox="0 0 16 16">
                                <path d="m.5 3 .04.87a1.99 1.99 0 0 0-.342 1.311l.637 7A2 2 0 0 0 2.826 14H9v-1H2.826a1 1 0 0 1-.995-.91l-.637-7A1 1 0 0 1 2.19 4h11.62a1 1 0 0 1 .996 1.09L14.54 8h1.005l.256-2.819A2 2 0 0 0 13.81 3H9.828a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 6.172 1H2.5a2 2 0 0 0-2 2zm5.672-1a1 1 0 0 1 .707.293L7.586 3H2.19c-.24 0-.47.042-.683.12L1.5 2.98a1 1 0 0 1 1-.98h3.672z"/>
                                <path d="M11 11.5a.5.5 0 0 1 .5-.5h4a.5.5 0 1 1 0 1h-4a.5.5 0 0 1-.5-.5z"/>
                            </svg>
                            <div class="ms-3">
                            <a href="{{url('/Tblogs')}}"><p style="font-size:15px" class="mb-2">Your Deleted Blogs</p></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


<?php

use App\Models\blogs;
$blogs = blogs::latest()->get();
// $blogs = DB::table('blogs')->order_by('upload_time', 'desc')->get();;
?>
            <div class="col-sm-12 col-xl-6" style="position:absolute;left:450px;top:260px">
                    <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Explore Our Culuture</h6>
                            <div class="owl-carousel testimonial-carousel">
                            @foreach ($blogs as $b)
                                <div class="testimonial-item text-center">
                                    <!-- <img class="img-fluid rounded-circle mx-auto mb-4" src="img/testimonial-1.jpg" style="width: 100px; height: 100px;"> -->
                                    <a href="{{route('blogs.show' , $b->id)}}"><h5 class="mb-1">{{$b->title}}</h5></a>
                                    <p>{{$b->user->name}}</p>
                                    <p class="mb-0"><?php echo substr($b->content, 0 , 100) . '.......'; ?></p>
                                </div>
                            @endforeach

                            </div>
                    </div>
                </div>

@if(Session::has('addBlogMessage'))
<div class="alert alert-success" role="alert">
{{Session::get('addBlogMessage')}}
</div>
@endif
@endsection
