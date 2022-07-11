@extends('layouts.master.index')

@section('title')
Create A Blog
@endsection

@section('content')
<form action="{{route('blogs.store')}}" method="POST">
    @csrf
                <div class="">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Create New Post</h6>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput"
                                    placeholder="Blog Title" name="title">
                                <label for="floatingInput">Blog Title</label>
                                @error('title')
                                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                <i class="fa fa-exclamation-circle me-2"></i>{{$message}}
                                </div>
                                @enderror
</div>
                            <div class="form-floating mb-3">
                                <select class="form-select" id="floatingSelect"
                                    aria-label="Floating label select example" name="blogCategory">
                                    <option disabled selected>-- Choose Blog Category -- </option>
                                    @foreach($blogCategory as $bc)
                                    <option value="{{$bc->id}}" >{{$bc->blog_category}}</option>
                                    @endforeach
                                </select>
                                <label for="floatingSelect">Blog Category</label>
                                @error('blogCategory')
                                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                <i class="fa fa-exclamation-circle me-2"></i>{{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="form-floating">
                                <textarea name="content" class="form-control" placeholder="Blog Content"
                                    id="floatingTextarea" style="height: 150px;"></textarea>
                                <label for="floatingTextarea">Blog Content</label>
                                @error('content')
                                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                <i class="fa fa-exclamation-circle me-2"></i>{{$message}}
                                </div>
                                @enderror
                            </div>
                            <button class="btn btn-outline-primary w-100 m-2" type="submit">Create</button>
</div>
</div>
</form
@endsection
