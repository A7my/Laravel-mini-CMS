@extends('layouts.master.index')

@section('title')
Me
@endsection


@section('content')

<!-- <form action="{{route('user.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    {{ csrf_field() }}
    {{ method_field('put') }}
    <input type="text" name="t">
    <input type="submit">
</form> -->


<!-- <div class="CircleBadge CircleBadge--large" style="position:absolute;left:1000px">
  <img src="https://github.com/travis-ci.png"  alt="Travis CI" class="CircleBadge-icon" />
</div> -->

<div class="col-sm-12 col-xl-6" style="position:absolute;left:450px;top:80px">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4" style="margin-left:270px">Personal Info</h6>
                            <form>
                            <img style="max-width:150px;max-height:150px;margin-left:250px" src="https://www.kindpng.com/picc/m/78-785827_user-profile-avatar-login-account-male-user-icon.png" alt="">

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Name</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" value="{{$name}}" disabled >
                                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" value="{{$mail}}" disabled >
                                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1"  class="form-label">Password</label>
                                    <input type="password" value="{{$password}}"class="form-control" disabled id="exampleInputPassword1">
                                    <div id="emailHelp" class="form-text">We'll never share your Password with anyone else.
                                    </div>
                                </div>
                                <label for="exampleInputEmail1" class="form-label">Number Of Blogs</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" value="{{$blogsNum}}" disabled >
                            </form>
                        </div>
                    </div>
@endsection
