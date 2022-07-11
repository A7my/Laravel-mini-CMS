@extends('layouts.master.index')

<?php
foreach($blogs as $b){
    $myCat =$b->blogs_category->blog_category;
};
    ?>

@section('title')
Browse Category
@endsection


@section('content')

<div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Your Blogs</h6>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Id</th>
                                            <th scope="col">Title</th>
                                            <th scope="col">Content</th>
                                            <th scope="col">See Blog</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($blogs as $b)
                                        <tr>
                                            <th>{{$b->id}}</th>
                                            <td>{{$b->title}}</td>
                                            <td><?php echo substr($b->content, 0 , 100) . '.......'; ?></td>
                                            <td><a href="{{route('blogs.show' , $b->id)}}" class="bi bi-eye"></a></td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <th style="color:red;position:absolute;left:550px;font-size:15px">
                                                There's No Blogs for this category , you can be the first writter of this category <a style="color:blue;" href="{{url('blogs/create')}}">here</a>
                                            </th>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

@endsection
