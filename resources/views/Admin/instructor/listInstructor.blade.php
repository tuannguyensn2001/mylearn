

<?php
$course=$course->chunk(4);



?>
@extends('Admin.layouts.main')
@section('title')
    Danh sách mentor
@endsection
@section('css')
    <style>
        img{
            width: 200px;
            height: 200px;
        }
        .focus{
            color: #00413b !important;
            font-weight: 500;

        }
        .underlined{
            border-bottom: 1px solid #022f21;
        }
        .appear{
            display: block !important;
        }

        .tab-content{
            display: none;
        }
        .profile-avatar{
            border-radius: 50%;
            width: 140px;
            height: 140px;
        }
        table{
            width: 100%;
        }

    </style>
@endsection

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Danh sách mentor</h1>

                </div>

                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/admin">Trang chính</a></li>
                        <li class="breadcrumb-item active">Danh sách mentor</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div>
    </div>

    <section class="content">
        @if(session('create.done'))
            <div class="alert alert-success" role="alert">
                {{session('create.done')}}
            </div>
        @endif
        @if(session('create.failed'))
            <div class="alert alert-danger" role="alert">
                {{session('create.failed')}}
            </div>
        @endif
            @if(session('edit.done'))
                <div class="alert alert-success" role="alert">
                    {{session('edit.done')}}
                </div>
            @endif
            @if(session('edit.failed'))
                <div class="alert alert-danger" role="alert">
                    {{session('edit.failed')}}
                </div>
            @endif
        <table class="table ">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Tên mentor</th>
                <th scope="col">Tên đăng nhập</th>
                <th scope="col"><a href="" class="btn btn-success" data-toggle="modal" data-target="#createInstructor">Thêm mới</a></th>


            </tr>
            </thead>
            <tbody>
            @foreach($instructor as $index)
                <tr>
                    <th scope="row">{{$index->id}}</th>
                    <td>{{$index->name}}</td>
                    <td>{{$index->username}}</td>

                    <td>
                        <a href="" class="btn btn-primary edit" data-toggle="modal" data-target="#exampleModal" user-id="{{$index->id}}">SỬA</a>
                        <a href="" class="btn btn-danger">XÓA</a>

                    </td>
                </tr>
            @endforeach
            </tbody>

        </table>
            <div class="modal fade" id="createInstructor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Thêm mới mentor</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="{{route('create.mentor')}}" method="post">
                            @csrf
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="">Tên mentor</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Tên đăng nhập</label>
                                <input type="text" name="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Mật khẩu</label>
                                <input type="password" name="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Nhập lại mật khẩu</label>
                                <input type="password" name="confirm_password" class="form-control">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                            <button type="submit" class="btn btn-primary">Lưu</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>

        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg   " role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Chỉnh sửa mentor</h5>
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
                                                    <form action="{{route('edit.mentor')}}" method="post" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col-12 col-sm-auto mb-3">
                                                                <div class="mx-auto" style="width: 140px;">
                                                                    <div class="d-flex justify-content-center align-items-center rounded profile-avatar" style="height: 140px; background-color: rgb(233, 236, 239);">
                                                                        <img src="" alt="" class="profile-avatar" >

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                                                                <div class="text-center text-sm-left mb-2 mb-sm-0">
                                                                    <h4 class="pt-sm-2 pb-1 mb-0 text-nowrap"></h4>
                                                                    <p class="mb-0"></p>



                                                                    <div class="custom-file">
                                                                        <input type="text" hidden name="id" class="profile-id">
                                                                        <input type="file" class="custom-file-input" id="validatedCustomFile"  name="avatar">
                                                                        <label class="custom-file-label" for="validatedCustomFile">Tải ảnh lên</label>

                                                                    </div>
                                                                </div>
                                                                <div class="text-center text-sm-right">
                                                                    <span class="badge badge-secondary">administrator</span>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <ul class="nav nav-tabs">
                                                            <li class="nav-item item-1 underlined"><a href="" class="active nav-link focus option" data-text="1">Thông tin cá nhân</a></li>

                                                            <li class="nav-item item-2"><a href="" class="active nav-link option " data-text="2">Đổi mật khẩu</a></li>
                                                            <li class="nav-item item-3"><a href="" class="active nav-link option " data-text="3">Cập nhật khóa học</a></li>

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
                                                                        <button class="btn btn-primary" type="submit">Lưu thay đổi</button>
                                                                    </div>
                                                                </div>


                                                            </div>
                                                        </div>
                                                        <div class="tab-content pt-3 menu-2 ">
                                                            <div class="tab-pane active ">

                                                                <div class="row" >
                                                                    <div class="col-12 col-sm-6 mb-3  " >
                                                                        <div class="mb-2"><b>Đổi mật khẩu</b></div>
                                                                        <div class="row">
                                                                            <div class="col">
                                                                                <div class="form-group">
                                                                                    <label>Current Password</label>
                                                                                    <input class="form-control" type="password" name="old_password">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col">
                                                                                <div class="form-group">
                                                                                    <label>New Password</label>
                                                                                    <input class="form-control" type="password" name="new_password">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col">
                                                                                <div class="form-group">
                                                                                    <label>Confirm <span class="d-none d-xl-inline">Password</span></label>
                                                                                    <input class="form-control" type="password" name="confirm_new_password"></div>
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
                                                        <div class="tab-content pt-3 menu-3 ">
                                                            <div class="tab-pane active ">
                                                                <div class="row">
                                                                    <table>
                                                                        @foreach($course as $item)
                                                                            <tr>

                                                                                @foreach($item as $index)
                                                                                    <td>
                                                                                        <div class="custom-control custom-checkbox">
                                                                                            {{ csrf_field() }}
                                                                                            <input type="checkbox" class="custom-control-input checkbox" id="course-{{$index->id}}" course={{$index->id}}>
                                                                                            <label class="custom-control-label" for="course-{{$index->id}}">{{$index->name}}</label>
                                                                                        </div>
                                                                                    </td>
                                                                                @endforeach

                                                                            </tr>
                                                                        @endforeach
                                                                    </table>
                                                                </div>
                                                                <div class="row">

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
        </div


    </section>

@endsection


@section('js')
    <script>

        $(document).ready(function () {
            $.ajaxSetup({
                headers: {

                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

                }
            });
            $(".option").click(function(event){
                event.preventDefault();

                $(".tab-content").removeClass("appear");
                $(".nav-item").removeClass("underlined");
                $(".option").removeClass("focus");
                $(".menu-"+$(this).attr('data-text')).addClass('appear');
                $(".item-"+$(this).attr('data-text')).addClass('underlined');
                $(this).addClass("focus");
            });
            $('.edit').click(function () {
                $(".checkbox").attr("checked",false);
                let id=$(this).attr('user-id');
                $.ajax({
                    type:'POST',
                    url: '{{route('show.mentor')}}',
                    data:{
                        id,
                    },
                    dataType:'json',

                    success: function(response){
                        let data=response[0];
                        let course=[];
                        for(let i in response[1]){
                            course.push(response[1][i]['course_id']);
                        }

                        document.querySelectorAll('.checkbox').forEach(index=>{
                            if (course.includes(parseInt(index.getAttribute("course")))){
                                index.setAttribute("checked","checked");

                            }

                        })

                        $(".profile-id").val(data['id']);
                        $(".profile-name").val(data['name']);
                        $(".profile-work_place").val(data['work_place']);
                        $(".profile-email").val(data['email']);
                        $(".profile-about").val(data['about']);



                        $(".profile-avatar").attr('src',data['avatar']);
                    }
                })

            })
            $('.checkbox').click(function(){
                let check=$(this).prop('checked');
                let course_id=$(this).attr('course');
                let user_id=$(".profile-id").val();

                $.ajax({
                    url: '{{route('set.course.mentor')}}',
                    type: 'post',
                    data:{
                        check,course_id,user_id
                    },
                    dataType: 'json',
                    success:data=>{
                        console.log(data);
                    }
                })

            })
        })
    </script>
@endsection

