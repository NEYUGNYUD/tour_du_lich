@extends('admin.layout.master')
@section('title')
List Vehicle
@endsection

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Phương tiện
                    <small>Danh sách</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>STT</th>
                        <th>Tên phương tiện</th>
                        <th>Icon phương tiện</th>
                        <th>Ngày tạo</th>
                        <th>Ngày cập nhật</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    @foreach($vehicles as $vehicle)
                    <tr>
                        <td>{{$i}}</td>
                        <td>{{$vehicle->vehicle_name}}</td>
                        <td>
                            <i class="{{$vehicle->class_name}}"></i>
                        </td>
                        <td><?php echo date('d-m-Y h:i:a', strtotime($vehicle->created_at)); ?></td>
                        <td><?php echo date('d-m-Y h:i:a', strtotime($vehicle->updated_at)); ?></td>
                        <td class="actions">
                            <a href="{{asset(route('getEditVehicle', ['id' => $vehicle->vehicle_id]))}}" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
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
