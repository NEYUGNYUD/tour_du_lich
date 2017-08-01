@extends('layout.master')

@section('title')
    Detail tour
@endsection

@section('content')
<article class="col-sm-push-3 col-sm-9">

    <!--Thông tin tour + đặt tour-->
    <div class="hotel_name">
        <div class="name_star">
            <h1>{{$tour->tour_name}}</h1>
        </div>
        <div class="book_roomDetail">
            <a href="{{asset(route('getBookTour', ['tourId' => $tour->tour_id]))}}" class="btn btn_slide">Đặt tour ngay</a>
        </div>

        <div class="book_roomDetail ">
            <strong class="btn btn-primary"><?php echo number_format((float)$tour->sale_price); ?> Đ</strong>
        </div>

        <div class="book_roomDetail ">
            <strong class="btn btn-warning"><del><?php echo number_format((float)$tour->base_price); ?> Đ</del></strong>
        </div>
    </div>
    <!-- hành trình tour -->
    <div class="position">
        <i class="fa fa-map-marker" aria-hidden="true"></i>
        <strong>
            <?php
                $journey = $tour->journey;//có dạng list các id của các place
                $placeList = explode('-', $journey);
                $journeyTour = "";
                foreach($placeList as $placeId) {
                    foreach($places as $place) {
                        if($place->place_id == $placeId) {
                            $journeyTour .= $place->place_name.' - ';
                        }
                    }
                }
                //loại bỏ ký tự ', ' cuối cùng trong chuỗi
                echo substr($journeyTour,0,-2);
            ?>
        </strong>
    </div>
    <!-- end: hành trình tour -->

    <!--Slide ảnh tour-->
    <div id="rg-gallery" class="rg-gallery">
        <div class="rg-thumbs">
            <div class="es-carousel-wrapper">
                <!-- <div class="es-nav">
                    <span class="es-nav-prev"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
                    <span class="es-nav-next"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                </div> -->
                <br>
                <div class="es-carousel">
                    <ul style="list-style-type: none">
                        @foreach($tourImages as $img)
                            @if($img->tour_id == $tour->tour_id)
                                <li><a><img src="{{$img->image}}" height="65%" width="100%" alt="" data-description="tour image" /></a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- end: Slide tour -->

    <!--Chi tiết tour-->
    <div class="hotel_Detail">
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#information" aria-controls="information" role="tab" data-toggle="tab">Tổng quan</a></li>
            <li role="presentation"><a href="#price" aria-controls="price" role="tab" data-toggle="tab">Lịch trình</a></li>
            <li role="presentation"><a href="#ultilities" aria-controls="ultilities" role="tab" data-toggle="tab">Dịch vụ</a></li>
            <li role="presentation"><a href="#appraise" aria-controls="appraise" role="tab" data-toggle="tab">Ghi chú</a></li>
        </ul>

        <div class="tab-content">
            <!-- tổng quan tour -->
            <div role="tabpanel" class="tab-pane active" id="information">
                {!!$tour->overview!!}
                <h3 class="text-center"><em>Rất hân hạnh được đón tiếp và phục vụ quý khách!</em></h3>
            </div>
            <!-- end: tổng quan tour -->

            <!-- lịch trình -->
            <div role="tabpanel" class="tab-pane" id="price">
                    {!!$tour->schedule!!}
            </div>
            <!-- end: lịch trình -->

            <!-- dịch vụ -->
            <div role="tabpanel" class="tab-pane" id="ultilities">
                <div class="list_ultilities">
                    <!-- <p><i class="fa fa-arrows" aria-hidden="true"></i> Wifi free</p> -->
                    <?php
                        $serviceList = $tour->services;
                        $serviceList = explode('-', $serviceList);
                        foreach($serviceList as $serviceId) {
                            foreach($tourServices as $sv) {
                                if($sv->service_id == $serviceId) {
                                    ?>
                                    <p><i class="fa fa-arrows" aria-hidden="true"></i> <?php echo $sv->service_name; ?></p>

                                    <?php
                                    break;
                                }
                            }
                        }
                    ?>
                </div>
            </div>
            <!-- end: dịch vụ -->

            <!-- ghi chú -->
            <div role="tabpanel" class="tab-pane" id="appraise">
                {!!$tour->note!!}
            </div>
            <!-- end: ghi chú -->
        </div>
    </div>

    <!-- tour du lịch liên quan -->
    <div class="hotel_relate">
        <h3>Tour du lịch liên quan</h3>
        <div class="row">

            @foreach($relativeTours as $relativeTour)
                <div class="col-sm-4">
                    <div class="hr_item">
                        <!-- giá tour liên quan -->
                        <div class="">
                            <strong class="btn btn-primary"><?php echo number_format((float)$relativeTour->sale_price); ?> Đ</strong>

                            <a href="{{asset(route('getBookTour', ['tourId' => $relativeTour->tour_id]))}}" class="btn btn_slide">Đặt tour ngay</a>
                        </div> <br>
                        <!-- end: giá tour liên quan -->

                        <div class="image_hotel">
                            @foreach($tourImages as $img)
                                @if($img->tour_id == $relativeTour->tour_id)
                                    <a href="{{asset(route('getDetailTour', ['idTour' => $relativeTour->tour_id]))}}"><img src="{{$img->image}}" alt="tour_image" class="img-responsive"></a>
                                    <?php break; ?>
                                @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="info_hotel">
                        <h3><a href="{{asset(route('getDetailTour', ['idTour' => $relativeTour->tour_id]))}}">{{$relativeTour->tour_name}}</a> </h3>
                        <!-- giá vé tour -->

                        <!-- end: giá vé tour -->
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!-- end: tour du lịch liên quan -->
</article>
@endsection
@section('sidebar')
    @include('layout.sidebar')
@endsection
<script type="text/javascript" src="user_asset/js/jquery.tmpl.min.js"></script>
<script type="text/javascript" src="user_asset/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="user_asset/js/jquery.elastislide.js"></script>
<script type="text/javascript" src="user_asset/js/gallery.js"></script>
