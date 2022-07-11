@extends('layouts.master.index')

@section('title')
Update Your Blog
@endsection


@section('content')
<form action="{{route('blogs.update' , $UserBlog->id)}}" method="POST">
    @csrf
    @method('PUT')
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Update Your Blog</h6>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput"
                                placeholder="Blog Title" name="title" value="{{$UserBlog->title}}">
                                <label for="floatingInput">Blog Title</label>
                            </div>
                            @error('title')
                                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                <i class="fa fa-exclamation-circle me-2"></i>{{$message}}
                                </div>
                            @enderror
                            <div>
                            <textarea name="content" class="form-control" placeholder="Blog Content"
                                    id="floatingTextarea" style="height: 150px;">{{$UserBlog->content}}</textarea>
                            </div>
                            @error('content')
                                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                <i class="fa fa-exclamation-circle me-2"></i>{{$message}}
                                </div>
                            @enderror
                        <button class="btn btn-outline-primary w-100 m-2" type="submit">Update</button>
                        </div>
</form>

@endsection
