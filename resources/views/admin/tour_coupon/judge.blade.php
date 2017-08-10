@extends('admin.layout.master')

@section('title')
    List new tour coupon
@endsection

@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Phiếu tour
                        <small>Danh sách tour mới đặt</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                    <tr align="center">
                        <th>STT</th>
                        <th>Khách hàng</th>
                        <th>Tour du lịch</th>
                        <th>Ngày bắt đầu</th>
                        <th>Số trẻ em</th>
                        <th>Số người lớn</th>
                        <th>Giá cả</th>
                        <th>Phương thức thanh toán</th>
                        <th>Ngày khởi tạo</th>
                        <th>Ngày cập nhật</th>
                        <th>Thao Tác</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i = 1;?>
                    @foreach($newTourCoupons as $newCoupon)
                        @if($newCoupon->locked == NULL)
                            <tr align="center">
                        @else
                            <tr align="center" style="background-color: #FF8A80;">
                        @endif
                            <td>{{$i}}</td>
                            <td>
                                {{$newCoupon->email}}
                            </td>
                            <td>{{$newCoupon->tour_name}}</td>
                            <td>{{$newCoupon->begin_time}}</td>
                            <td>{{$newCoupon->children_number}}</td>
                            <td>{{$newCoupon->adult_number}}</td>
                            <td>
                                {{number_format($newCoupon->price)}}
                            </td>
                            <td>
                                @if($newCoupon->payment == 0)
                                    Trực tiếp
                                @else
                                    Ngân hàng
                                @endif
                            </td>
                            <td><?php echo date('d-m-Y H:i:sa', strtotime($newCoupon->created_at)); ?></td>
                            <td><?php echo date('d-m-Y H:i:sa', strtotime($newCoupon->updated_at)); ?></td>
                            <td class="center">
                                <a href="{{asset(route('deleteTourCoupon', ['tourCouponId'=>($newCoupon->tour_coupon_id)]))}}"><i class="fa fa-trash-o  fa-fw"></i></a><br />
                                <a href="{{asset(route('deleteTourCoupon', ['tourCouponId'=>($newCoupon->tour_coupon_id)]))}}"><i class="fa fa-pencil fa-fw"></i></a>
                            </td>
                        </tr>
                        <?php ++$i; ?>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
@endsection
