<header class="header">

    <!-- Top Bar -->
    <div class="top_bar">
        <div class="top_bar_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
                            <div class="top_bar_phone"><span class="top_bar_title">phone:</span>+44 300 303 0266</div>
                            <div class="top_bar_right ml-auto">

                                <!-- Language -->
                                <div class="top_bar_lang">
                                    <span class="top_bar_title">site language:</span>
                                    <ul class="lang_list">
                                        <li class="hassubs">
                                            <a href="#">English<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                            <ul>
                                                <li><a href="#">Ukrainian</a></li>
                                                <li><a href="#">Japanese</a></li>
                                                <li><a href="#">Lithuanian</a></li>
                                                <li><a href="#">Swedish</a></li>
                                                <li><a href="#">Italian</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Social -->
                                <div class="top_bar_social">
                                    <span class="top_bar_title social_title">follow us</span>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Header Content -->
    <div class="header_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="header_content d-flex flex-row align-items-center justify-content-start">
                        <div class="logo_container mr-auto">
                            <a href="#">
                                <div class="logo_text">Lingua</div>
                            </a>
                        </div>
                        <nav class="main_nav_contaner">
                            <ul class="main_nav">
                                <li class="active"><a href="index.html">Home</a></li>
                                <li><a href="courses.html">Courses</a></li>
                                <li><a href="instructors.html">Instructors</a></li>
                                <li><a href="#">Events</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </nav>
                        <div class="header_content_right ml-auto text-right">
                            <div class="header_search">
                                <div class="search_form_container">
                                    <form action="#" id="search_form" class="search_form trans_400">
                                        <input type="search" class="header_search_input trans_400" placeholder="Type for Search" required="required">
                                        <div class="search_button">
                                            <i class="fa fa-search" aria-hidden="true"></i>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <!-- Hamburger -->
                            @if(\Illuminate\Support\Facades\Auth::check())
                                <div class="user auth " >
{{--                                    <a href=""><i class="fa fa-user" aria-hidden="true"></i>--}}
                                    <a href=""><img style="border-radius: 50%" src="{{asset(\Illuminate\Support\Facades\Auth::user()->avatar)}}" alt="" width="40" height="40">

                                        <ul>
                                            <li><a href="#" data-toggle="modal" data-target="#exampleModal1" class="user-profile" >Tài khoản</a></li>
                                            <li><a href="{{route('logout.action')}}">Đăng xuất</a></li>
                                        </ul>
                                    </a>
                                </div>
                            @else
                            <div class="user  " >
                                <a href="{{route('login')}}"><i class="fa fa-sign-in" aria-hidden="true"></i></a>
                            </div>
                            @endif


                            <div class="hamburger menu_mm">
                                <i class="fa fa-bars menu_mm" aria-hidden="true"></i>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>





</header>

<div class="modal-test">
    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg   " role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row flex-lg-nowrap">


                        <div class="col">
                            <div class="row">
                                <div class="col mb-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="e-profile">
                                                <form action="{{route('update.user')}}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-12 col-sm-auto mb-3">
                                                            <div class="mx-auto" style="width: 140px;">
                                                                <div class="d-flex justify-content-center align-items-center rounded profile-avatar" style="height: 140px; background-color: rgb(233, 236, 239);">
                                                                    <img src="" alt="" class="profile-avatar" width="140" height="140">

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                                                            <div class="text-center text-sm-left mb-2 mb-sm-0">
                                                                <h4 class="pt-sm-2 pb-1 mb-0 text-nowrap">John Smith</h4>
                                                                <p class="mb-0">@johnny.s</p>
                                                                <div class="text-muted"><small>Last seen 2 hours ago</small></div>

                                                                <div class="mt-2 custom-file">
                                                                    <input type="text" hidden name="id" class="profile-id">
                                                                    <input type="file" name="avatar" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="text-center text-sm-right">
                                                                <span class="badge badge-secondary">administrator</span>
                                                                <div class="text-muted"><small>Joined 09 Dec 2017</small></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <ul class="nav nav-tabs">
                                                        <li class="nav-item item-1 underlined"><a href="" class="active nav-link focus option" data-text="1">Thông tin cá nhân</a></li>

                                                        <li class="nav-item item-2"><a href="" class="active nav-link option " data-text="2">Đổi mật khẩu</a></li>
                                                    </ul>
                                                    <div class="tab-content pt-3 menu-1 appear">
                                                        <div class="tab-pane active ">


                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="row">
                                                                        <div class="col">
                                                                            <div class="form-group">
                                                                                <label>Họ và tên</label>
                                                                                <input class="form-control profile-name" type="text" name="name" >
                                                                            </div>
                                                                        </div>
                                                                        <div class="col">
                                                                            <div class="form-group">
                                                                                <label>Nơi làm việc</label>
                                                                                <input class="form-control profile-work_place" type="text" name="work_place"  >
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col">
                                                                            <div class="form-group">
                                                                                <label>Email</label>
                                                                                <input class="form-control profile-email" type="text" name="email">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col mb-3">
                                                                            <div class="form-group">
                                                                                <label>Mô tả</label>
                                                                                <textarea class="form-control profile-about" rows="5" name="about"></textarea>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col d-flex justify-content-end">
                                                                    <button class="btn btn-primary" type="submit">Save Changes</button>
                                                                </div>
                                                            </div>


                                                        </div>
                                                    </div>
                                                    <div class="tab-content pt-3 menu-2 ">
                                                        <div class="tab-pane active ">

                                                            <div class="row" >
                                                                <div class="col-12 col-sm-6 mb-3  " >
                                                                    <div class="mb-2"><b>Change Password</b></div>
                                                                    <div class="row">
                                                                        <div class="col">
                                                                            <div class="form-group">
                                                                                <label>Current Password</label>
                                                                                <input class="form-control" type="password" placeholder="••••••" name="old_password">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col">
                                                                            <div class="form-group">
                                                                                <label>New Password</label>
                                                                                <input class="form-control" type="password" placeholder="••••••" name="new_password">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col">
                                                                            <div class="form-group">
                                                                                <label>Confirm <span class="d-none d-xl-inline">Password</span></label>
                                                                                <input class="form-control" type="password" placeholder="••••••" name="confirm_new_password"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="row">
                                                                <div class="col d-flex justify-content-end">
                                                                    <button class="btn btn-primary" type="submit">Save Changes</button>
                                                                </div>
                                                            </div>







                                                        </div>
                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>


