@extends('admin.layout.master')

@section('title')
    List tour coupon
@endsection

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Phiếu tour
                    <small>Danh sách</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>STT</th>
                        <th>Tên địa điểm</th>
                        <th>Tên không dấu</th>
                        <th>Mô tả</th>
                        <th>Thuộc khu vực</th>
                        <th>Hình ảnh</th>
                        <th>Ngày khởi tạo</th>
                        <th>Ngày cập nhật</th>
                        <th>Thao Tác</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1;?>
                    @foreach($places as $placeChild)
                    <tr align="center">
                        <td>{{$i}}</td>
                        <td>{{$placeChild->place_name}}</td>
                        <td>{{$placeChild->slug_name}}</td>
                        <td>{{$placeChild->description}}</td>
                        <td>
                            @if($placeChild->parent_id == 0)
                            <div class="alert-warning alert">
                                <span>None</span>
                            </div>
                            @else
                            @foreach($places as $placeParent)
                            @if(($placeChild->parent_id == $placeParent->place_id ))
                            {{$placeParent->place_name}}
                            @endif
                            @endforeach
                            @endif
                        </td>
                        <td width="auto">
                            <img src="{!!$placeChild->image!!}" width="100px" height="85px">
                        </td>
                        <td><?php echo date('d-m-Y H:i:sa', strtotime($placeChild->created_at)); ?></td>
                        <td><?php echo date('d-m-Y H:i:sa', strtotime($placeChild->updated_at)); ?></td>
                        <td class="center">
                            <a href=""><i class="fa fa-trash-o  fa-fw"></i></a><br />
                            <a href="{{asset(route('getEditPlace', ['id' => $placeChild->place_id]))}}"><i class="fa fa-pencil fa-fw"></i></a>
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
