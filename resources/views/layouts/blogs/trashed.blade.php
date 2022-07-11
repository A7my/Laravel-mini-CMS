@extends('layouts.master.index')

@section('title')
Trashed Blogs
@endsection


@section('content')

<table class="table">
<thead>
                                        <tr>
                                            <th scope="col">Id</th>
                                            <th scope="col">Title</th>
                                            <th scope="col">Content</th>
                                            <th scope="col">Blog Category</th>
                                            <th scope="col">Restore</th>
                                            <th scope="col">Delete For Ever</th>
                                        </tr>
                                    </thead>

<tbody>
@forelse($blogs as $blogs)
<tr>
    <th scope="col">{{$blogs->id}}</th>
    <th scope="col">{{$blogs->title}}</th>
    <th scope="col"><?php echo substr($blogs->content, 0 , 100) . '.......'; ?></th>
    <th scope="col">{{$blogs->blogs_category->blog_category}}</th>
    <!-- <th><a href="{{url('Tblogs/restore')}}" class="btn btn-success m-2">Restore</a></th> -->
    <td><a href="{{route('Tblogs.show' , $blogs->id)}}" class="btn btn-warning m-2">Restore</a></td>
    <td><a href="{{route('Tblogs.edit' , $blogs->id)}}" class="btn btn-danger m-2">Delete For Ever</a></td>
    <!-- <th scope="col"><a href="{{route('Tblogs.show' , $blogs->id)}}" class="btn btn-danger m-2">Delete for ever</a></th> -->
</tr>
</tbody>

@empty
<tbody>
    <tr><th style="color:red;font-size:20px;position:absolute;left:750px">Your Trashed Is Empty</th></tr>
</tbody>

@endforelse
</table>

@if(Session::has('pdel'))
<div class="alert alert-success" role="alert">
{{Session::get('pdel')}}
</div>
@endif
@endsection
