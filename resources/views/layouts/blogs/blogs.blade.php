@extends('layouts.master.index')

@section('title')
{{$myBlog->title}} Blog
@endsection


@section('content')

<div class="p-2 mb-2 bg-success text-white" style="text-align:center;font-size:25px">{{$myBlog->title}}</div>
<div class="table-responsive" >
<div class="bg-secondary rounded h-100 p-4">
{{$myBlog->content}}
</div>
</div>

<div class="text-light bg-dark">Comments</div>
@forelse($myBlogComments as $comment)
<div class="p-2 mb-2 bg-light text-dark">{{$comment->comment}}
    <p>Written By <a href="{{route('usersetting.show' , $comment->user_id)}}" style="color:#B8CDC1">{{$comment->user->name}}</a></p>
</div>

@empty
<p style="color:red;position:absolute;left:700px">There's No comments yet, Be The First Commenter</p>

<!-- <div class="alert alert-secondary d-flex align-items-center" role="alert">
  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
  </svg>
  <div>
  There's No comments yet
  </div>
</div> -->


<!-- , $myBlog->id -->
@endforelse
<form action="{{route('Tblogs.update' , $myBlog->id)}}" method="POST">
    @csrf
    @method('PUT')
<div class="bg-secondary rounded h-100 p-4" style="">
<div class="form-floating">
<textarea class="form-control" placeholder="Leave a comment here" name="comment" id="floatingTextarea" style="height: 150px;"></textarea>
    <label for="floatingTextarea">Publish your Comment</label>
<button type="submit" class="btn btn-primary">Publish ur comment</button>
</div>
</div>
</form>


@error('comment')
<div class="alert alert-primary alert-dismissible fade show" role="alert">
<i class="fa fa-exclamation-circle me-2"></i>{{$message}}
</div>
@enderror

@if(Session::has('comment'))
<div class="alert alert-success" role="alert">
{{Session::get('comment')}}
</div>
@endif

<!-- <form action="{{url('comments.update' , $myBlog->id)}}" method="POST">
    @csrf
    @method("PUT")
    <input type="text" name="t">
    <input type="submit">
</form> -->



@endsection
