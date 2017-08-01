@extends('admin.layout.master')
@section('title')
Add service
@endsection

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form id="summary-form" action="{{asset(route('postAddService'))}}" class="form-horizontal" method="POST"
                enctype="multipart/form-data">
                <input type="hidden" value="{{ csrf_token() }}" name="_token">
                <section class="panel">
                    <header class="panel-heading">
                        <h2 class="panel-title">Thêm dịch vụ mới</h2>
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
                            <label class="col-sm-3 control-label" for="name">Tên dịch vụ: <span
                                class="required">*</span></label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="name" name="name" required/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="detail">Chi tiết dịch vụ:</label>
                                <div class="col-sm-6">
                                    <?php showEditorInput('detail', 'detail', '')?>
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
