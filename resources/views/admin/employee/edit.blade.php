@extends('admin.layout.master')
@section('title')
Edit employee
@endsection

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">

        <div class="col-md-12">
            <form id="summary-form" action="{{asset(route('postEditEmployee'))}}" class="form-horizontal"
            method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">﻿
            <!-- trương lấy id của tham số employee-->
            <input type="hidden" name="id" value="{{$employee->employee_id}}">
            <section class="panel">
                <!--    thông báo lỗi-->
                @if(count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>

                @endif
                @if(session('noti'))
                <div class="alert alert-success">
                    <ul>
                        <li>{{session('noti')}}</li>
                    </ul>
                </div>
                @endif
                <!--end: thông báo lỗi-->
                <div class="panel-body">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Tên nhân viên <span
                                class="required">*</span></label>
                                <div class="col-sm-8">
                                    <input type="text" name="fullname" class="form-control" placeholder="Nhập họ tên."
                                    title="Nhập họ tên" value="{{$employee->employee_name}}" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Địa chỉ <span class="required">*</span></label>
                                <div class="col-sm-8">
                                    <textarea name="address" rows="2" class="form-control" placeholder="Nhập địa chỉ."
                                    title="Nhập địa chỉ" required>{{$employee->address}}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Số điện thoại <span
                                    class="required">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" name="phone" placeholder="Nhập số điện thoại."
                                        title="Nhập số điện thoại." value="{{$employee->phone_number}}"
                                        class="form-control" required/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Ngày sinh <span class="required">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="date" name="dob" id="dob" title="Nhập ngày sinh." class="form-control"
                                        value = "<?php echo date('Y-m-d', strtotime($employee->dob));?>"
                                        placeholder="DD-MM-YYYY" title="Nhập ngày sinh" required/>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Giới tính:</label>
                                    <div class="col-sm-8">
                                        @if($employee->gender == 1)
                                        <span class="radio-custom radio-primary">
                                            <input id="nam" name="gender" type="radio" value="1" title="nam" checked>
                                            <label for="nam">Nam</label>
                                        </span>&nbsp; &nbsp;
                                        <span class="radio-custom radio-primary">
                                            <input id="nu" name="gender" type="radio" value="0" title="nữ">
                                            <label for="nu">Nữ</label>
                                        </span>
                                        @elseif($employee->gender == 0)
                                        <span class="radio-custom radio-primary">
                                            <input id="nam" name="gender" type="radio" value="1" title="nam">
                                            <label for="nam">Nam</label>
                                        </span>&nbsp; &nbsp;
                                        <span class="radio-custom radio-primary">
                                            <input id="nu" name="gender" type="radio" value="0" title="nữ" checked>
                                            <label for="nu">Nữ</label>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Email <span class="required">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="email" name="email" title="Nhập email." class="form-control"
                                        value="{{$employee->email}}" readonly
                                        placeholder="Nhập email." required/>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Đổi mật khẩu
                                        <input type="checkbox" name="changePassword" id="changePassword" value="on">
                                        <span class="required">*</span></label>
                                        <div class="col-sm-8">
                                            <input type="password" name="password" id="password" title="Nhập mật khẩu."
                                            placeholder="Nhập mật khẩu." disabled
                                            class="form-control password" required/>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Xác nhận mật khẩu <span class="required">*</span></label>
                                        <div class="col-sm-8">
                                            <input type="password" name="re-password" id="re-password"
                                            placeholder="Xác nhận mật khẩu." disabled
                                            title="Xác nhận mật khẩu." class="form-control password" required/>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Quyền<span class="required">*</span></label>
                                        <div class="col-sm-8">
                                            <select id="level" class="form-control" name="level" title="Quyền người dùng"
                                            required>
                                            @if($employee->level == 1)
                                            <option value='0'>Employee</option>
                                            <option value='1' selected>Admin</option>
                                            @elseif($employee->level == 0)
                                            <option value='0' selected>Employee</option>
                                            <option value='1'>Admin</option>
                                            @endif
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label">Hình đại diện</label>
                                    <div class="col-md-8">
                                        <?php
                                        showUploadFile('avatar', 'avatar', $employee->avatar, 0);
                                        //showEditorInput('content','content','');
                                        ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary">Edit</button>
                                        <button type="reset" class="btn btn-default">Hủy</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </form>
            </div>
        </div>
    </div>
    @endsection

    @section('script')
    <script type="text/javascript">
    $(document).ready(function () {
        $('#changePassword').change(function () {
            if ($(this).is(":checked")) {
                $('.password').removeAttr('disabled');
            } else {
                $('.password').attr('disabled', '');
            }
        });
    });
    </script>
    @endsection
