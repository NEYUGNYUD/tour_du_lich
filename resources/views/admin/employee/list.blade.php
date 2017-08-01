@extends('admin.layout.master')
@section('title')
Employee
@endsection

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Employee
                    <small>List</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>STT</th>
                        <th>Họ tên</th>
                        <th>Địa chỉ</th>
                        <th>Số điện thoại</th>
                        <th>Ngày sinh</th>
                        <th>Giới tính</th>
                        <th>Email</th>
                        <th>Chức vụ</th>
                        <th>Ảnh đại diện</th>
                        <th>Ngày khởi tạo</th>
                        <th>Ngày cập nhật</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    @if(isset($employees))
                    <?php $i = 1; ?>
                    @foreach($employees as $employee)
                    <tr align="center">
                        <td>{{$i}}</td>
                        <td>
                            {{$employee->employee_name}}
                        </td>
                        <td>
                            {{$employee->address}}
                        </td>
                        <td>
                            {{$employee->phone_number}}
                        </td>
                        <td>
                            <?php
                            echo date('d-m-Y', strtotime($employee->dob));
                            ?>
                        </td>
                        <td>
                            @if($employee->gender == 1)
                            nam
                            @else
                            nữ
                            @endif
                        </td>
                        <td>
                            {{$employee->email}}
                        </td>
                        <td>
                            @if($employee->level == 1)
                            admin
                            @elseif($employee->level == 0)
                            employee
                            @endif

                        </td>
                        <td>
                            <img src="{{$employee->avatar}}" width="100px" height="85px"/>
                        </td>
                        <td>
                            <?php
                            echo date('d-m-Y H:i:s', strtotime($employee->created_at));
                            ?>
                        </td>
                        <td>
                            <?php
                            echo date('d-m-Y H:i:s', strtotime($employee->updated_at));
                            ?>
                        </td>
                        <td class="center">
                            <a href="#"><span class="fa fa-trash-o  fa-fw"></span></a><br />
                            <a href=
                            "{{asset(route('getEditEmployee', ['id' => $employee->employee_id]))}}"><span class="fa fa-pencil fa-fw"></span></a>
                        </td>
                    </tr>
                    <?php ++$i; ?>
                    @endforeach
                    @endif
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection
