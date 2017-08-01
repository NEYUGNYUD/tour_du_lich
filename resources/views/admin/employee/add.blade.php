@extends('admin.layout.master')
@section('title')
Add employee
@endsection

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="col-md-12">
            <form id="summary-form" action="{{asset(route('postAddEmployee'))}}" class="form-horizontal" method="POST"
            enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">﻿
            <section class="panel">
                <header class="panel-heading">
                    <h2 class="panel-title">Thêm nhân viên mới</h2>
                </header>
                <!--  thông báo lỗi-->
                @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                @if(session('noti'))
                <div class="alert alert-success">
                    {{session("noti")}}
                </div>
                @endif

                <!--end: thông báo lỗi-->
                <div class="panel-body">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Tên nhân viên <span
                                class="required">*</span></label>
                                <div class="col-sm-8">
                                    <input type="text" name="fullname" class="form-control" placeholder="Nhập họ tên." title="Nhập họ tên"
                                    required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Địa chỉ <span class="required">*</span></label>
                                <div class="col-sm-8">
                                    <textarea name="address" rows="2" class="form-control" placeholder="Nhập địa chỉ." title="Nhập địa chỉ"
                                    required></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Số điện thoại <span
                                    class="required">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" name="phone" placeholder="Nhập số điện thoại." title="Nhập số điện thoại."
                                        class="form-control" required/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Ngày sinh <span class="required">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="date" name="dob" id="dob" title="Nhập ngày sinh." class="form-control" placeholder="DD-MM-YYYY" title="Nhập ngày sinh" required/>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Giới tính:</label>
                                    <div class="col-sm-8">
                                        <span class="radio-custom radio-primary">
                                            <input id="nam" name="gender" type="radio" value="1" title="nam" checked>
                                            <label for="nam">Nam</label>
                                        </span>&nbsp; &nbsp;
                                        <span class="radio-custom radio-primary">
                                            <input id="nu" name="gender" type="radio" value="0" title="nữ">
                                            <label for="nu">Nữ</label>
                                        </span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Email <span class="required">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="email" name="email" title="Nhập email." class="form-control" placeholder="Nhập email." required/>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Mật khẩu <span class="required">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="password" name="password" id="password" title="Nhập mật khẩu." placeholder="Nhập mật khẩu."
                                        class="form-control" required/>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Xác nhận mật khẩu <span class="required">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="password" name="re-password" id="re-password" placeholder="Xác nhận mật khẩu."
                                        title="Xác nhận mật khẩu." class="form-control" required/>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Quyền<span class="required">*</span></label>
                                    <div class="col-sm-8">
                                        <select id="level" class="form-control" name="level" title="Quyền người dùng" required>
                                            <option value='0'>Employee</option>
                                            <option value='1'>Admin</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label">Hình đại diện</label>
                                    <div class="col-md-8">
                                        <?php
                                        showUploadFile('avatar', 'avatar', '', 0);
                                        ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary">Thêm</button>
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
