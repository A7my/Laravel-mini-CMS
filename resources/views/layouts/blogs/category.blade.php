@extends('layouts.master.index')

@section('title')
Browse Blogs
@endsection


@section('content')
<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
@foreach($cat as $c)

                    <div  class="col-sm-6 col-xl-3">
                        <div   class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="31" height="31" style="color:red" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                        </svg>
                            <div class="ms-3" style="">
                                <a href="{{route('category.show' , $c->id)}}"><p style="font-size:20px" class="mb-2">{{$c->blog_category}}</p></a>
                            </div>
                        </div>
                    </div>


@endforeach

</div>
</div>




<!-- <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">

                            <div class="ms-3">
                            <a href="{{url('blogs/user')}}"><p style="font-size:20px" class="mb-2">Your Blogs</p></a>
                            </div>
                        </div>
</div> -->




@endsection
