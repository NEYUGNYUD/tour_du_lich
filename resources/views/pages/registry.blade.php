@extends('layout.master')

@section('title')
    Registry user
@endsection

@section('content')
<div class="col-sm-12 login">
    <h2 class="page_title">Đăng ký tài khoản</h2>
    <div class="contact">
        <!--  thông báo lỗi-->
        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    &nbsp;&nbsp;&nbsp;<li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <!--end: thông báo lỗi-->
        <form class="form-horizontal" action="{{asset(route('postRegistryUser'))}}" method="POST">
            <input type="hidden" value="{{ csrf_token() }}" name="_token"/>
            <div class="form-group">
                <label class="col-sm-3" for="name">Họ và tên *</label>
                <div class="col-sm-9">
                    <input type="text" name="name" id="name" class="form-control" value="{{old('name')}}" required/>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3" for="address">Địa chỉ *</label>
                <div class="col-sm-9">
                    <input type="text" name="address" id="address" class="form-control" value="{{old('address')}}" required/>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3" for="dob">Ngày sinh *</label>
                <div class="col-sm-9">
                    <input type="date" name="dob" id="dob" class="form-control" value="{{old('dob')}}" required/>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3">Giới tính *</label>
                <div class="col-sm-9">
                    <input type="radio" name="gender" id="male" value="1" checked/> Nam&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="gender" id="female" value="0"/> Nữ
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3" for="passport" >Số CMT *</label>
                <div class="col-sm-9">
                    <input type="number" name="passport" id="passport" class="form-control" value="{{old('passport')}}" required/>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3" for="email" >Email *</label>
                <div class="col-sm-9">
                    <input type="text" name="email" id="email" class="form-control" value="{{old('email')}}" required/>
                </div>
            </div>
            <!-- <div class="form-group">
                <label class="col-sm-3" for="phone">Số điện thoại *</label>
                <div class="col-sm-9">
                    <input type="number" name="phone" id="phone" class="form-control"/>
                </div>
            </div> -->
            <div class="form-group">
                <label class="col-sm-3" for="password">Mật khẩu *</label>
                <div class="col-sm-9">
                    <input type="password" name="password" id="password" class="form-control" required/>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3" for="re-password">Nhập lại mật khẩu *</label>
                <div class="col-sm-9">
                    <input type="password" name="re-password" id="re-password" class="form-control" required/>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3"></label>
                <div class="col-sm-9">
                    <button type="submit" class="btn btn_submit">Đăng ký</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
