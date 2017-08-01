@extends('layout.master')
@section('title')
Trang chủ
@endsection
@section('content')
<article class="col-sm-push-3 col-sm-9">
    <h2 class="page_title">Thông tin liên hệ:</h2>
    <div class="contact">
        <h2 style="text-align: center;"><u>Công ty cổ phần du lịch Việt Travel</u></h2>
        <br />
        <div class="form-group">
            <address class="" style="font-size: 1.5em;">
                <u>Địa chỉ:</u> Số 5, phường Dịch Vọng, quận Cầu Giấy, Hà Nội.
            </address>
        </div><br>
        <div class="form-group">
            <address class="" style="font-size: 1.5em;">
                <u>Email:</u> Duypeo96@gmail.com.
            </address>
        </div><br>
        <div class="form-group">
            <address class="" style="font-size: 1.5em;">
                <u>Số điện thoại:</u> 098.345.3455.
            </address>
        </div><br>
        <div class="" style="text-align: center;">
            <i style="font-size: 1.5em;">Xin chân thành cảm ơn quý khách đã ghé thăm website!</i>
        </div>
    </div>
</article>
@endsection

<!-- chèn phần tìm kiếm -->
@section('sidebar')
    @include('layout.sidebar')
@endsection
