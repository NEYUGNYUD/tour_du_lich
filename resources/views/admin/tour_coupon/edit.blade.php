@extends('admin.layout.master')

@section('title')
    Chỉnh sửa phiếu tour
@endsection

@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form id="summary-form" action="{{asset(route('postEditTourCoupon'))}}" class="form-horizontal" method="POST">
                        <input type="hidden" value="{{ csrf_token() }}" name="_token">
                        <input type="hidden" value="{{$tourCoupon[0]->tour_coupon_id}}" name="id" id="id">
                        <input type="hidden" value="{{$tourCoupon[0]->employee_id}}" name="customerId">
                        <input type="hidden" value="{{$tourCoupon[0]->tour_id}}" name="tourId">
                        <input type="hidden" value="{{$adminInfor->employee_id}}" name="employeeId">
                        <section class="panel">
                            <header class="panel-heading">
                                <h2 class="panel-title">Sửa phiếu tour mới</h2>
                            </header>
                            <!-- thông báo lỗi-->
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
                        <!-- end: thông báo lỗi-->
                            <div class="panel-body">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Tên tour: <span
                                            class="required">*</span></label>
                                    <div class="col-sm-6">
                                        <select name="tourName" id="" class="form-control">
                                            @foreach($tourList as $tr)
                                                @if($tr->tour_id == $tourCoupon[0]->tour_id)
                                                    <option value="{{$tr->tour_id}} selected">{{$tr->tour_name}}</option>

                                                @else
                                                    <option value="{{$tr->tour_id}}">{{$tr->tour_name}}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="child">Số trẻ em: <span
                                            class="required">*</span></label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="child" name="child" value="{{$tourCoupon[0]->children_number}}" required/>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="adult">Số người lớn: <span
                                            class="required">*</span></label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="adult" name="adult" value="{{$tourCoupon[0]->adult_number}}" required/>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="payment">Thanh toán: <span
                                            class="required">*</span></label>
                                    <div class="col-sm-6">
                                        <select name="payment" class="form-control">
                                            @if($tourCoupon[0]->payment == 0)
                                                <option value="0" selected>Trực tiếp</option>
                                                <option value="1">Ngân hàng</option>
                                                @else
                                                <option value="0">Trực tiếp</option>
                                                <option value="1" selected>Ngân hàng</option>
                                            @endif
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="payment">Trạng thái phiếu tour: <span class="required">*</span></label>
                                    <div class="col-sm-6">
                                        <select name="status" class="form-control">
                                            @if($tourCoupon[0]->status == NULL)
                                                <option value="NULL" selected>Chưa xác nhận</option>
                                                <option value="1">Đã xác nhận đơn hàng</option>
                                            @else
                                                <option value="NULL">Chưa xác nhận</option>
                                                <option value="1" selected>Đã xác nhận đơn hàng</option>
                                            @endif
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="payment">Mô tả thay đổi: <span class="required">*</span></label>
                                    <div class="col-sm-6">
                                        <textarea name="note" id="" class="form-control" rows="10"></textarea>
                                    </div>
                                </div>
                            </div>

                            <footer class="panel-footer">
                                <div class="row">
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary">
                                            Sửa
                                        </button>
                                        <button type="reset" class="btn btn-default">Hủy</button>
                                    </div>
                                </div>
                            </footer>
                        </section>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
