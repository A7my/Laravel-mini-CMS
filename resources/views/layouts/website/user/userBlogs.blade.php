@extends('layouts.master.index')

@section('title')
Your Blogs
@endsection


@section('content')
<div class="col-15">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Your Blogs</h6>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Id</th>
                                            <th scope="col">Title</th>
                                            <th scope="col">Content</th>
                                            <th scope="col">Blog Category</th>
                                            <th scope="col">Update</th>
                                            <th scope="col">Delete</th>
                                            <th scope="col">See Blog</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($userBlogs as $ub)
                                        <tr>
                                            <th>{{$ub->id}}</th>
                                            <td>{{$ub->title}}</td>
                                            <td><?php echo substr($ub->content, 0 , 100) . '.......'; ?></td>
                                            <td>{{$ub->blogs_category->blog_category}}</td>
                                            <td><a href="{{route('blogs.edit' , $ub->id)}}" class="btn btn-warning m-2">Update</a></td>
                                            <td><form action="{{route('blogs.destroy' , $ub->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger m-2">Delete</button>
                                            </form>
                                            </td>
                                            <td><a href="{{route('blogs.show' , $ub->id)}}" class="bi bi-eye"></a></td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <th style="color:red;position:absolute;left:700px;font-size:15px">
                                                You have NO blogs , you can start createing <a style="color:blue;" href="{{url('blogs/create')}}">here</a>
                                            </th>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


@if(Session::has('up_ms'))
<div class="alert alert-success" role="alert">
{{Session::get('up_ms')}}
</div>
@endif

@if(Session::has('del_ms'))
<div class="alert alert-danger" role="alert">
{{Session::get('del_ms')}}
</div>
@endif

@endsection
