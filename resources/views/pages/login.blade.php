@extends('layout.master')

@section('title')
    Login User
@endsection

@section('content')
<div class="col-sm-12 login">
    <h2 class="page_title">Đăng nhập tài khoản</h2>
    <div class="contact">
        <!-- thông báo đăng nhập không thành công -->
        @if(session('noti'))
            <div class="alert alert-success">
                {{session('noti')}}
            </div>
        @endif
        <!-- end: thông báo đăng nhập không thành công -->
        <form class="form-horizontal" action="{{asset(route('postLoginUser'))}}" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <label class="col-sm-3" for="email">Email *</label>
                <div class="col-sm-9">
                    <input type="text" name="email" id="email" class="form-control" required/>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3" for="password">Mật khẩu *</label>
                <div class="col-sm-9">
                    <input type="password" name="password" id="password" class="form-control" required/>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3"></label>
                <div class="col-sm-9">
                    <a href="#"><small>Quên mật khẩu?</small></a>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3"></label>
                <div class="col-sm-9">
                    <button type="submit" class="btn btn_submit">Đăng nhập</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
