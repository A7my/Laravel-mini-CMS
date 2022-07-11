@extends('layouts.master.index')

@section('title')
{{$user->name}}
@endsection


@section('content')


<div class="col-sm-12 col-xl-6" style="position:absolute;left:450px;top:80px">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4" style="margin-left:270px">Personal Info</h6>
                            <form>
                            <img style="max-width:150px;max-height:150px;margin-left:250px" src="https://www.kindpng.com/picc/m/78-785827_user-profile-avatar-login-account-male-user-icon.png" alt="">

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Name</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" value="{{$user->name}}" disabled >
                                <label for="exampleInputEmail1" class="form-label">Number Of Blogs</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" value="{{$UserBlogs}}" disabled >
                            </form>
                        </div>
                    </div>
@endsection
