@extends('admin.layout.master')
@section('title')
List service
@endsection

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Dịch Vụ
                    <small>Danh sách</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>STT</th>
                        <th>Tên dịch vụ</th>
                        <th>Chi tiết dịch vụ</th>
                        <th>Ngày tạo</th>
                        <th>Ngày cập nhật</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    @foreach($services as $service)
                    <tr>
                        <td>{{$i}}</td>
                        <td>{{$service->service_name}}</td>
                        <td>{{$service->detail}}</td>
                        <td><?php echo date('d-m-Y h:i:a', strtotime($service->created_at)); ?></td>
                        <td><?php echo date('d-m-Y h:i:a', strtotime($service->updated_at)); ?></td>
                        <td class="actions">
                            <a href="{{asset(route('getEditService', ['id' => $service->service_id]))}}" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
                            <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                        </td>
                        <?php ++$i; ?>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection
