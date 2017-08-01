@extends('admin.layout.master')

@section('title')
List discount
@endsection

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form id="summary-form" action="{{asset(route('postAddDiscount'))}}" class="form-horizontal" method="POST"
                enctype="multipart/form-data">
                <input type="hidden" value="{{ csrf_token() }}" name="_token">
                <section class="panel">
                    <header class="panel-heading">
                        <h2 class="panel-title">Thêm mới mã giảm giá</h2>
                    </header>
                    <!-- thông báo lỗi-->
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
                        <ul>
                            <li>
                                {{session('noti')}}
                            </li>
                        </ul>
                    </div>
                    @endif
                    <!--                    end: thông báo lỗi-->
                    <div class="panel-body">
                        <div class="col-md-6">
                            <label class="error" for="room"></label>

                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="name">Mã giảm giá:</label>
                                <div class="col-sm-8">
                                    <input type="text" name="name" id="name" class="form-control" required>
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="start_time">Giờ bắt đầu:</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-clock-o"></i>
                                        </span>
                                        <input type="text" data-plugin-timepicker class="form-control" name="start_time"
                                        id="start_time" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="start_date">Ngày bắt đầu:</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </span>
                                        <input type="text" data-plugin-datepicker class="form-control" name="start_date"
                                        id="start_date" required/>
                                    </div>

                                </div>
                            </div>
                            <label class="error" for="room"></label>

                        </div>
                        <div class="col-md-6">
                            <label class="error" for="room"></label>

                            <div class="form-group">
                                <lable class="col-sm-4 control-label" for="money">Trị giá khuyến mại:</lable>
                                <div class="col-sm-8">
                                    <input type="number" name="money" id="money" class="form-control" required/>
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="end_time">Giờ kết thúc:</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-clock-o"></i>
                                        </span>
                                        <input type="text" data-plugin-timepicker class="form-control" name="end_time"
                                        id="end_time" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="end_date">Ngày kết thúc:</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </span>
                                        <input type="text" data-plugin-datepicker class="form-control" name="end_date"
                                        id="end_date" required/>
                                    </div>
                                </div>
                            </div>
                            <label class="error" for="room"></label>

                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="description">Nội dung mã giảm giá:</label>
                                <div class="col-sm-10">
                                    <textarea rows="5" class="form-control"
                                    placeholder="Nội dung khuyến mại" id="description"
                                    name="description"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Thêm</button>
                                <button type="reset" class="btn btn-default">Hủy</button>
                            </div>
                        </div>
                    </div>
                </section>
            </form>
        </div>
    </div>
</div>
</div>
@endsection
