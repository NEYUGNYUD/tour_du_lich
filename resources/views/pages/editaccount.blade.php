@extends('layout.master')

@section('title')
    Edit Account
@endsection

@section('content')
    <div class="col-sm-12 login">
        <h2 class="page_title">Chỉnh sửa thông tin tài khoản: <u>{{$customerInfor->email}}</u></h2>
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
            @if (session('noti'))
                <div class="alert alert-success">
                    <ul>
                       <li>{{session('noti')}}</li>
                    </ul>
                </div>
        @endif
        <!--end: thông báo lỗi-->
            <form class="form-horizontal" action="{{asset(route('postEditAccountCustomer'))}}" method="POST">
                <input type="hidden" value="{{ csrf_token() }}" name="_token"/>
                <input type="hidden" value="{{$customerInfor->employee_id}}" name="id">
                <div class="form-group">
                    <label class="col-sm-3" for="name">Họ và tên *</label>
                    <div class="col-sm-9">
                        <input type="text" name="fullname" id="fullname" class="form-control" value="{{$customerInfor->employee_name}}" required/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3" for="address">Địa chỉ *</label>
                    <div class="col-sm-9">
                        <input type="text" name="address" id="address" class="form-control" value="{{$customerInfor->address}}" required/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3" for="dob">Ngày sinh *</label>
                    <div class="col-sm-9">
                        <input type="date" name="dob" id="dob" class="form-control" value="{{$customerInfor->dob}}" required/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3">Giới tính *</label>
                    @if($customerInfor->gender == 1)
                        <div class="col-sm-9">
                            <input type="radio" name="gender" id="male" value="1" checked/> Nam&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="radio" name="gender" id="female" value="0"/> Nữ
                        </div>
                        @else
                        <div class="col-sm-9">
                            <input type="radio" name="gender" id="male" value="1" /> Nam&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="radio" name="gender" id="female" value="0" checked/> Nữ
                        </div>
                        @endif

                </div>
                <div class="form-group">
                    <label class="col-sm-3" for="dob">Số điện thoại *</label>
                    <div class="col-sm-9">
                        <input type="number" name="phone" id="phone" class="form-control" value="{{$customerInfor->phone_number}}" required/>
                    </div>
                </div>

                <div class="form-group">
                    <label for="changePassword" class="col-sm-3">Đổi mật khẩu:</label>
                    <div class="col-sm-9">
                        <input type="checkbox" name="changePassword" id="changePassword" value="on">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3" for="password">Mật khẩu *</label>
                    <div class="col-sm-9">
                        <input type="password" name="password" id="password" class="form-control password" disabled required/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3" for="re-password">Nhập lại mật khẩu *</label>
                    <div class="col-sm-9">
                        <input type="password" name="re-password" id="re-password" class="form-control password" disabled required/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3"></label>
                    <div class="col-sm-9">
                        <button type="submit" class="btn btn_submit">Chỉnh sửa</button>
                    </div>
                </div>
            </form>
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