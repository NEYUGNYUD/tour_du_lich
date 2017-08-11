<aside class="col-sm-pull-9 col-sm-3">
    <div class="find_near">
        <a href="findnear.php"><img src="<?php getUrlThemeActive();?>user_asset/images/findnear.jpg" alt="" class="img-responsive"/></a>
    </div>
    <div class="box">
        <h3>Tìm tour du lịch</h3>
        <!-- form lọc địa điểm -->
        <form class="form-horizontal" action="{{asset(route('postSearchTour'))}}" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <div class="col-sm-12">
                    <label>Bạn muốn du lịch đến</label>
                    @if(isset($places))
                    <select class="form-control" name="destinationPlace">
                        @foreach($places as $place)
                        <option value="{{$place->place_id}}">{{$place->place_name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <label>Khởi hành từ</label>
                    @if(isset($startPlaces))
                    <select class="form-control" name="startPlace">
                        @foreach($startPlaces as $place)
                        <option value="{{$place->start_place}}">{{$place->start_place}}</option>
                        @endforeach
                    </select>
                    @endif
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <label>Ngày khởi hành</label>
                    <select class="form-control" name="startTimeTour">
                        @foreach($startTimeTours as $startTime)
                            <option value="{{$startTime->begin_time}}">{{$startTime->begin_time}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            @endif
            <div class="form-group">
                <div class="col-sm-12 text-right">
                    <input type="submit" class="btn btn_submit" value="Tìm kiếm">
                </div>
            </div>
        </form>
        <!-- end: form lọc địa điểm -->
    </div>
    <div class="find_near">
        <a href="findnear.php"><img src="<?php getUrlThemeActive();?>user_asset/images/quangcao.jpg" alt="" class="img-responsive"/></a>
    </div><div class="find_near">
        <a href="findnear.php"><img src="<?php getUrlThemeActive();?>user_asset/images/quangcao.jpg" alt="" class="img-responsive"/></a>
    </div>
    <div class="find_near">
        <a href="findnear.php"><img src="<?php getUrlThemeActive();?>user_asset/images/quangcao.jpg" alt="" class="img-responsive"/></a>
    </div>
</aside>
