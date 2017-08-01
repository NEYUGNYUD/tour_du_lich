@extends('admin.layout.master')

@section('title')
List discount
@endsection

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Mã giảm giá
                    <small>Danh sách</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>STT</th>
                        <th>Tên mã giảm giá</th>
                        <th>Trị giá mã giảm giá(đồng)</th>
                        <th>Mô tả</th>
                        <th>Ngày bắt đầu</th>
                        <th>Ngày kết thúc</th>
                        <th>Nhân viên khởi tạo</th>
                        <th>Ngày khởi tạo</th>
                        <th>Ngày cập nhật</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    @foreach($discounts as $discountCode)
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td>{{$discountCode->discount_code_name}}</td>
                        <td>{{$discountCode->money}}</td>
                        <td>{{$discountCode->description}}</td>
                        <td>{{$discountCode->start_date}}</td>
                        <td>{{$discountCode->end_date}}</td>
                        <td>{{$discountCode->employee_id}}</td>
                        <td><?php echo date('d-m-Y h:i:s', strtotime($discountCode->created_at)); ?></td>
                        <td><?php echo date('d-m-Y h:i:s', strtotime($discountCode->updated_at)); ?></td>
                        <td>
                            <!--                                <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>-->
                            <!--                                <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>-->
                            <a href="{{asset(route('getEditDiscount', ['id' => $discountCode->discount_code_id]))}}"
                                class="on-default edit-row"><i class="fa fa-pencil"></i></a>
                                <a href="admin/discountcode/delete/{{$discountCode->discount_code_id}}"
                                    class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
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
