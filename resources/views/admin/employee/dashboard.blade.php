@extends('admin.layout.master')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Dashboard
                    <small>Trang quản trị</small>
                </h1>
            </div>
        </div>
        <!-- end: .row -->
    </div>
    <!-- end: .container-fluid -->
    <div class="col-md-12">
        <div class="">
            <h3>Tour du lịch</h3>
        </div>

        <div class="">
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <th>Tổng số tour</th>
                    <th>Số tour khách đã đặt</th>
                    <th></th>
                </thead>

                <tbody>

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
