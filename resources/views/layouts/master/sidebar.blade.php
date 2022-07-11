<div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="{{url('dashboard')}}" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>mini-CMS</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <!-- <img class="rounded-circle" src="http://127.0.0.1:8000/assets/img/user.jpg" alt="" style="width: 40px; height: 40px;"> -->
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0"><?php
                            use App\Models\User;
                            use App\Models\blogs_category;
                            $user = User::find(Auth::user()->id);
                            echo $user->name;
                            ?></h6>
                        <!-- <span>Admin</span> -->
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="{{url('dashboard')}}" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Browse Blogs</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <?php
                                $BlogsCat = blogs_category::all();
                            ?>
                            @foreach($BlogsCat as $BC)
                            <a href="{{route('category.show' , $BC->id)}}" class="dropdown-item">{{$BC->blog_category}}</a>
                            @endforeach
                        </div>
                    </div>
                    <a href="{{url('blogs/create')}}" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Create A Blog</a>
                    <a href="{{url('blogs/user')}}" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Your Blogs</a>
                    <a href="{{url('Tblogs')}}" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Deleted Blogs</a>
                    <a href="{{url('usersetting')}}" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Me</a>
                    <!-- <form action="{{ route('logout') }}" method="POST" class="nav-item nav-link">
                            @csrf
                            <button style="background:black" class="nav-item nav-link" type="submit" ><i class="fa fa-chart-bar me-2"></i>Log Out</button>
                    </form> -->

                    <!-- <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Pages</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="signin.html" class="dropdown-item">Sign In</a>
                            <a href="signup.html" class="dropdown-item">Sign Up</a>
                            <a href="404.html" class="dropdown-item">404 Error</a>
                            <a href="blank.html" class="dropdown-item active">Blank Page</a>
                        </div> -->
                    </div>
                </div>
            </nav>
        </div>
