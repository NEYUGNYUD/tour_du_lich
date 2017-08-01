@extends('admin.layout.master')
@section('title')
Edit place
@endsection

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form id="summary-form" action="{{asset(route('postEditPlace'))}}" class="form-horizontal" method="POST" enctype="multipart/form-data">
                    <input type="hidden" value="{{$place->place_id}}" name="id" id="id">
                    <input type="hidden" value="{{ csrf_token() }}" name="_token">
                    <section class="panel">
                        <header class="panel-heading">
                            <h2 class="panel-title">Chỉnh sửa thông tin địa điểm</h2>
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
                                <label class="col-sm-3 control-label" for="name">Tên địa điểm: <span
                                    class="required">*</span></label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" required name="name" id="name"
                                        value="{{$place->place_name}}"/>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="parentplace">Thuộc khu vực: <span
                                        class="required">*</span></label>
                                        <div class="col-sm-6">
                                            <select id="parentplace" class="form-control" name="parentplace" required>
                                                @if($place->place_id == 0)
                                                <option value="0" selected>None</option>
                                                @else
                                                <option value="0" >None</option>
                                                @endif

                                                @foreach($placeParent as $places)
                                                @if($place->parent_id == $places->place_id)
                                                <option value="{{$places->place_id}}" selected>{{$places->place_name}}</option>
                                                @else
                                                <option value="{{$places->place_id}}">{{$places->place_name}}</option>
                                                @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="description">Mô tả địa điểm: <span
                                            class="required">*</span></label>
                                            <div class="col-sm-6">
                                                <?php showEditorInput('description', 'description', $place->description); ?>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="image">Hình ảnh:</label>
                                            <div class="col-sm-6">
                                                <?php showUploadFile('image', 'image', $place->image, 0); ?>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-primary">Sửa</button>
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
