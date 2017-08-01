<?php include 'header.php'; ?>

<article class="col-sm-push-3 col-sm-9">
    <div id="bootstrap-touch-slider" class="carousel bs-slider fade  control-round indicators-line" data-ride="carousel" data-pause="hover" data-interval="5000" >
        <ol class="carousel-indicators">
            <li data-target="#bootstrap-touch-slider" data-slide-to="0" class="active"></li>
            <li data-target="#bootstrap-touch-slider" data-slide-to="1"></li>
            <li data-target="#bootstrap-touch-slider" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="item active">
                <img src="images/sl1.jpg" alt=""  class="slide-image"/>
                <div class="bs-slider-overlay"></div>
                <!-- Slide Text Layer -->
                <div class="slide-text slide_style_center">
                    <h3 data-animation="animated flipInX">Hè sôi động, nhân rộng niềm vui</h3>
                    <p data-animation="animated lightSpeedIn">Lựa chọn đúng đắn, giá cả tốt nhất</p>
                    <a href="" target="_blank" class="btn btn_slide" data-animation="animated fadeInUp">Đặt ngay</a>
                </div>
            </div>
            <div class="item">
                <img src="images/sl2.jpg" alt=""  class="slide-image"/>
                <div class="bs-slider-overlay"></div>
                <!-- Slide Text Layer -->
                <div class="slide-text slide_style_center">
                    <h3 data-animation="animated flipInX">Giá sốc bất ngờ</h3>
                    <p data-animation="animated lightSpeedIn">Không lo về giá</p>
                    <a href="" target="_blank" class="btn btn_slide" data-animation="animated fadeInUp">Đặt ngay</a>
                </div>
            </div>
            <div class="item">
                <img src="images/sl3.jpg" alt=""  class="slide-image"/>
                <div class="bs-slider-overlay"></div>
                <!-- Slide Text Layer -->
                <div class="slide-text slide_style_center">
                    <h3 data-animation="animated flipInX">Mua tour Đông Âu, tặng tour Tây Âu</h3>
                    <p data-animation="animated lightSpeedIn">tặng bữa ăn truyền thống Đức</p>
                    <a href="" target="_blank" class="btn btn_slide" data-animation="animated fadeInUp">Đặt ngay</a>
                </div>
            </div>
        </div>

        <a class="left carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="prev">
            <span class="fa fa-angle-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="next">
            <span class="fa fa-angle-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>

    </div>

    <div class="row show_result">
        <div class="col-sm-6">
            <p>Hiển thị <strong>10</strong> trong tổng số <strong>500</strong> tour du lịch</p>
        </div>
        <div class="col-sm-3 col-sm-offset-3">
            <select class="form-control">
                <option>Sắp xếp theo</option>
                <option>Mới nhất</option>
                <option>Giá rẻ nhất</option>
                <option>Đánh giá tốt nhất</option>
            </select>
        </div>
    </div>
    <!-- Danh sách 10 tour du lịch -->
    <div class="hotel_item row">
        <div class="col-sm-3  image_hotel">
            <a href="tourDetail.php"><img src="images/hotel1.jpg" alt="" class="img-responsive"/></a>
        </div>
        <div class="col-sm-6  info_hotel">
            <h3><a href="tourDetail.php">Tên tour du lịch</a> </h3>
            <div class="hotel_position">
                <span class="hotel_star">
                    <img src="images/star_rating.png" alt="" width="12"/>
                    <img src="images/star_rating.png" alt="" width="12"/>
                    <img src="images/star_rating.png" alt="" width="12"/>
                    <img src="images/half_star_rating.png" alt="" width="12"/>
                    <img src="images/no_rating_star.png" alt="" width="12"/>
                </span>
                <span class="hotel_map">
                    <a  href="tourDetail.php">Xem chi tiết</a>
                </span>
            </div>
            <div class="hotel_border">
                <div class="hotel_address">
                    <p><i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;Hà Nội, Hạ Long, Sapa</p>
                    <p><i class="fa fa-table" aria-hidden="true"></i> Ngày khởi hành: Hàng ngày</a></p>
                </div>
                <div class="hotel_ultilities">
                    <ul class="list-inline">
                        <li><i class="fa fa-dashboard" aria-hidden="true"></i>&nbsp; 5 ngày, 4 đêm</li>
                        <li><i class="fa fa-car " aria-hidden="true"></i>&nbsp; Phương tiện</li>
                        <li></li>
                        <li></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-sm-3 col-xs-12">
            <div class="booking">
                <div class="book_hotel">
                    <div class="hotel_price">7.500.000đ</div>
                </div>
                <div class="book_now">
                    <a href="tourOder.php">Đặt tour ngay</a>
                </div>
                <div class="free">
                    <span>Bữa sáng miễn phí</span>
                </div>
            </div>
        </div>
    </div>
    <div class="hotel_item row">
        <div class="col-sm-3  image_hotel">
            <a href="tourDetail.php"><img src="images/hotel1.jpg" alt="" class="img-responsive"/></a>
        </div>
        <div class="col-sm-6  info_hotel">
            <h3><a href="tourDetail.php">Tên tour du lịch</a> </h3>
            <div class="hotel_position">
                <span class="hotel_star">
                    <img src="images/star_rating.png" alt="" width="12"/>
                    <img src="images/star_rating.png" alt="" width="12"/>
                    <img src="images/star_rating.png" alt="" width="12"/>
                    <img src="images/half_star_rating.png" alt="" width="12"/>
                    <img src="images/no_rating_star.png" alt="" width="12"/>
                </span>
                <span class="hotel_map">
                    <a href="tourDetail.php">Xem chi tiết</a>
                </span>
            </div>
            <div class="hotel_border">
                <div class="hotel_address">
                    <p><i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;Hà Nội, Hạ Long, Sapa</p>
                    <p><i class="fa fa-table" aria-hidden="true"></i> Ngày khởi hành: Hàng ngày</a></p>
                </div>
                <div class="hotel_ultilities">
                    <ul class="list-inline">
                        <li><i class="fa fa-dashboard" aria-hidden="true"></i>&nbsp; 5 ngày, 4 đêm</li>
                        <li><i class="fa fa-car " aria-hidden="true"></i>&nbsp; Phương tiện</li>
                        <li></li>
                        <li></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-sm-3 col-xs-12">
            <div class="booking">
                <div class="book_hotel">
                    <div class="hotel_price">7.500.000đ</div>
                </div>
                <div class="book_now">
                    <a href="tourOder.php">Đặt tour ngay</a>
                </div>
                <div class="free">
                    <span>Bữa sáng miễn phí</span>
                </div>
            </div>
        </div>
    </div>
    <div class="hotel_item row">
        <div class="col-sm-3  image_hotel">
            <a href="tourDetail.php"><img src="images/hotel1.jpg" alt="" class="img-responsive"/></a>
        </div>
        <div class="col-sm-6  info_hotel">
            <h3><a href="tourDetail.php">Tên tour du lịch</a> </h3>
            <div class="hotel_position">
                <span class="hotel_star">
                    <img src="images/star_rating.png" alt="" width="12"/>
                    <img src="images/star_rating.png" alt="" width="12"/>
                    <img src="images/star_rating.png" alt="" width="12"/>
                    <img src="images/half_star_rating.png" alt="" width="12"/>
                    <img src="images/no_rating_star.png" alt="" width="12"/>
                </span>
                <span class="hotel_map">
                    <a href="tourDetail.php">Xem chi tiết</a>
                </span>
            </div>
            <div class="hotel_border">
                <div class="hotel_address">
                    <p><i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;Hà Nội, Hạ Long, Sapa</p>
                    <p><i class="fa fa-table" aria-hidden="true"></i> Ngày khởi hành: Hàng ngày</a></p>
                </div>
                <div class="hotel_ultilities">
                    <ul class="list-inline">
                        <li><i class="fa fa-dashboard" aria-hidden="true"></i>&nbsp; 5 ngày, 4 đêm</li>
                        <li><i class="fa fa-car " aria-hidden="true"></i>&nbsp; Phương tiện</li>
                        <li></li>
                        <li></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-sm-3 col-xs-12">
            <div class="booking">
                <div class="book_hotel">
                    <div class="hotel_price">7.500.000đ</div>
                </div>
                <div class="book_now">
                    <a href="tourOder.php">Đặt tour ngay</a>
                </div>
                <div class="free">
                    <span>Bữa sáng miễn phí</span>
                </div>
            </div>
        </div>
    </div>
    <div class="hotel_item row">
        <div class="col-sm-3  image_hotel">
            <a href="tourDetail.php"><img src="images/hotel1.jpg" alt="" class="img-responsive"/></a>
        </div>
        <div class="col-sm-6  info_hotel">
            <h3><a href="tourDetail.php">Tên tour du lịch</a> </h3>
            <div class="hotel_position">
                <span class="hotel_star">
                    <img src="images/star_rating.png" alt="" width="12"/>
                    <img src="images/star_rating.png" alt="" width="12"/>
                    <img src="images/star_rating.png" alt="" width="12"/>
                    <img src="images/half_star_rating.png" alt="" width="12"/>
                    <img src="images/no_rating_star.png" alt="" width="12"/>
                </span>
                <span class="hotel_map">
                    <a href="tourDetail.php">Xem chi tiết</a>
                </span>
            </div>
            <div class="hotel_border">
                <div class="hotel_address">
                    <p><i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;Hà Nội, Hạ Long, Sapa</p>
                    <p><i class="fa fa-table" aria-hidden="true"></i> Ngày khởi hành: Hàng ngày</a></p>
                </div>
                <div class="hotel_ultilities">
                    <ul class="list-inline">
                        <li><i class="fa fa-dashboard" aria-hidden="true"></i>&nbsp; 5 ngày, 4 đêm</li>
                        <li><i class="fa fa-car " aria-hidden="true"></i>&nbsp; Phương tiện</li>
                        <li></li>
                        <li></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-sm-3 col-xs-12">
            <div class="booking">
                <div class="book_hotel">
                    <div class="hotel_price">7.500.000đ</div>
                </div>
                <div class="book_now">
                    <a href="tourOder.php">Đặt tour ngay</a>
                </div>
                <div class="free">
                    <span>Bữa sáng miễn phí</span>
                </div>
            </div>
        </div>
    </div>
    <div class="hotel_item row">
        <div class="col-sm-3  image_hotel">
            <a href="tourDetail.php"><img src="images/hotel1.jpg" alt="" class="img-responsive"/></a>
        </div>
        <div class="col-sm-6  info_hotel">
            <h3><a href="tourDetail.php">Tên tour du lịch</a> </h3>
            <div class="hotel_position">
                <span class="hotel_star">
                    <img src="images/star_rating.png" alt="" width="12"/>
                    <img src="images/star_rating.png" alt="" width="12"/>
                    <img src="images/star_rating.png" alt="" width="12"/>
                    <img src="images/half_star_rating.png" alt="" width="12"/>
                    <img src="images/no_rating_star.png" alt="" width="12"/>
                </span>
                <span class="hotel_map">
                    <a href="tourDetail.php">Xem chi tiết</a>
                </span>
            </div>
            <div class="hotel_border">
                <div class="hotel_address">
                    <p><i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;Hà Nội, Hạ Long, Sapa</p>
                    <p><i class="fa fa-table" aria-hidden="true"></i> Ngày khởi hành: Hàng ngày</a></p>
                </div>
                <div class="hotel_ultilities">
                    <ul class="list-inline">
                        <li><i class="fa fa-dashboard" aria-hidden="true"></i>&nbsp; 5 ngày, 4 đêm</li>
                        <li><i class="fa fa-car " aria-hidden="true"></i>&nbsp; Phương tiện</li>
                        <li></li>
                        <li></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-sm-3 col-xs-12">
            <div class="booking">
                <div class="book_hotel">
                    <div class="hotel_price">7.500.000đ</div>
                </div>
                <div class="book_now">
                    <a href="tourOder.php">Đặt tour ngay</a>
                </div>
                <div class="free">
                    <span>Bữa sáng miễn phí</span>
                </div>
            </div>
        </div>
    </div>
    <div class="hotel_item row">
        <div class="col-sm-3  image_hotel">
            <a href="tourDetail.php"><img src="images/hotel2.png" alt="" class="img-responsive"/></a>
        </div>
        <div class="col-sm-6  info_hotel">
            <h3><a href="tourDetail.php">Tên tour du lịch</a> </h3>
            <div class="hotel_position">
                <span class="hotel_star">
                    <img src="images/star_rating.png" alt="" width="12"/>
                    <img src="images/star_rating.png" alt="" width="12"/>
                    <img src="images/star_rating.png" alt="" width="12"/>
                    <img src="images/half_star_rating.png" alt="" width="12"/>
                    <img src="images/no_rating_star.png" alt="" width="12"/>
                </span>
                <span class="hotel_map">
                    <a href="tourDetail.php">Xem chi tiết</a>
                </span>
            </div>
            <div class="hotel_border">
                <div class="hotel_address">
                    <p><i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;Số 7, Đường Thanh Niên, phường Trường Sơn, Sầm Sơn, Thanh Hóa</p>
                    <p><i class="fa fa-phone" aria-hidden="true"></i> &nbsp;<a href="tel:0373822239" title="Click để gọi tới nhà nghỉ">0373.822.239</a></p>
                </div>
                <div class="hotel_ultilities">
                    <ul class="list-inline">
                        <li><i class="fa fa-wifi" aria-hidden="true"></i>&nbsp; Wifi miễn phí</li>
                        <li><i class="fa fa-car" aria-hidden="true"></i>&nbsp; Chỗ để xe</li>
                        <li></li>
                        <li></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-sm-3 col-xs-12">
            <div class="booking">
                <div class="book_hotel">
                    <div class="hotel_price">75.000đ/h</div>
                </div>
                <div class="book_now">
                    <a href="tourDetail.php">Đặt tour ngày</a>
                </div>
            </div>
        </div>
    </div>
    <div class="hotel_item row">
        <div class="col-sm-3  image_hotel">
            <a href="tourDetail.php"><img src="images/hotel2.png" alt="" class="img-responsive"/></a>
        </div>
        <div class="col-sm-6  info_hotel">
            <h3><a href="tourDetail.php">Tên tour du lịch</a> </h3>
            <div class="hotel_position">
                <span class="hotel_star">
                    <img src="images/star_rating.png" alt="" width="12"/>
                    <img src="images/star_rating.png" alt="" width="12"/>
                    <img src="images/star_rating.png" alt="" width="12"/>
                    <img src="images/half_star_rating.png" alt="" width="12"/>
                    <img src="images/no_rating_star.png" alt="" width="12"/>
                </span>
                <span class="hotel_map">
                    <a href="tourDetail.php">Xem chi tiết</a>
                </span>
            </div>
            <div class="hotel_border">
                <div class="hotel_address">
                    <p><i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;Số 7, Đường Thanh Niên, phường Trường Sơn, Sầm Sơn, Thanh Hóa</p>
                    <p><i class="fa fa-phone" aria-hidden="true"></i> &nbsp;<a href="tel:0373822239" title="Click để gọi tới nhà nghỉ">0373.822.239</a></p>
                </div>
                <div class="hotel_ultilities">
                    <ul class="list-inline">
                        <li><i class="fa fa-wifi" aria-hidden="true"></i>&nbsp; Wifi miễn phí</li>
                        <li><i class="fa fa-car" aria-hidden="true"></i>&nbsp; Chỗ để xe</li>
                        <li></li>
                        <li></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-sm-3 col-xs-12">
            <div class="booking">
                <div class="book_hotel">
                    <div class="hotel_price">75.000đ/h</div>
                </div>
                <div class="book_now">
                    <a href="tourOder.php">Đặt tour ngay</a>
                </div>
            </div>
        </div>
    </div>
    <div class="hotel_item row">
        <div class="col-sm-3  image_hotel">
            <a href="tourDetail.php"><img src="images/hotel2.png" alt="" class="img-responsive"/></a>
        </div>
        <div class="col-sm-6  info_hotel">
            <h3><a href="tourDetail.php">Tên tour du lịch</a> </h3>
            <div class="hotel_position">
                <span class="hotel_star">
                    <img src="images/star_rating.png" alt="" width="12"/>
                    <img src="images/star_rating.png" alt="" width="12"/>
                    <img src="images/star_rating.png" alt="" width="12"/>
                    <img src="images/half_star_rating.png" alt="" width="12"/>
                    <img src="images/no_rating_star.png" alt="" width="12"/>
                </span>
                <span class="hotel_map">
                    <a href="tourDetail.php">Xem chi tiết</a>
                </span>
            </div>
            <div class="hotel_border">
                <div class="hotel_address">
                    <p><i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;Số 7, Đường Thanh Niên, phường Trường Sơn, Sầm Sơn, Thanh Hóa</p>
                    <p><i class="fa fa-phone" aria-hidden="true"></i> &nbsp;<a href="tel:0373822239" title="Click để gọi tới nhà nghỉ">0373.822.239</a></p>
                </div>
                <div class="hotel_ultilities">
                    <ul class="list-inline">
                        <li><i class="fa fa-wifi" aria-hidden="true"></i>&nbsp; Wifi miễn phí</li>
                        <li><i class="fa fa-car" aria-hidden="true"></i>&nbsp; Chỗ để xe</li>
                        <li></li>
                        <li></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-sm-3 col-xs-12">
            <div class="booking">
                <div class="book_hotel">
                    <div class="hotel_price">75.000đ/h</div>
                </div>
                <div class="book_now">
                    <a href="tourDetail.php">Đặt tour ngay</a>
                </div>
                <div class="free">
                    <span>Bữa sáng miễn phí</span>
                </div>
            </div>
        </div>
    </div>
    <div class="hotel_item row">
        <div class="col-sm-3  image_hotel">
            <a href="tourDetail.php"><img src="images/hotel2.png" alt="" class="img-responsive"/></a>
        </div>
        <div class="col-sm-6  info_hotel">
            <h3><a href="tourDetail.php">Tên tour du lịch</a> </h3>
            <div class="hotel_position">
                <span class="hotel_star">
                    <img src="images/star_rating.png" alt="" width="12"/>
                    <img src="images/star_rating.png" alt="" width="12"/>
                    <img src="images/star_rating.png" alt="" width="12"/>
                    <img src="images/half_star_rating.png" alt="" width="12"/>
                    <img src="images/no_rating_star.png" alt="" width="12"/>
                </span>
                <span class="hotel_map">
                    <a href="tourDetail.php">Xem chi tiết</a>
                </span>
            </div>
            <div class="hotel_border">
                <div class="hotel_address">
                    <p><i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;Số 7, Đường Thanh Niên, phường Trường Sơn, Sầm Sơn, Thanh Hóa</p>
                    <p><i class="fa fa-phone" aria-hidden="true"></i> &nbsp;<a href="tel:0373822239" title="Click để gọi tới nhà nghỉ">0373.822.239</a></p>
                </div>
                <div class="hotel_ultilities">
                    <ul class="list-inline">
                        <li><i class="fa fa-wifi" aria-hidden="true"></i>&nbsp; Wifi miễn phí</li>
                        <li><i class="fa fa-car" aria-hidden="true"></i>&nbsp; Chỗ để xe</li>
                        <li></li>
                        <li></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-sm-3 col-xs-12">
            <div class="booking">
                <div class="book_hotel">
                    <div class="hotel_price">75.000đ/h</div>
                </div>
                <div class="book_now">
                    <a href="tourOder.php">Đặt tour ngay</a>
                </div>
            </div>
        </div>
    </div>
    <div class="hotel_item row">
        <div class="col-sm-3  image_hotel">
            <a href="tourDetail.php"><img src="images/hotel2.png" alt="" class="img-responsive"/></a>
        </div>
        <div class="col-sm-6  info_hotel">
            <h3><a href="tourDetail.php">Tên tour du lịch</a> </h3>
            <div class="hotel_position">
                <span class="hotel_star">
                    <img src="images/star_rating.png" alt="" width="12"/>
                    <img src="images/star_rating.png" alt="" width="12"/>
                    <img src="images/star_rating.png" alt="" width="12"/>
                    <img src="images/half_star_rating.png" alt="" width="12"/>
                    <img src="images/no_rating_star.png" alt="" width="12"/>
                </span>
                <span class="hotel_map">
                    <a href="tourDetail.php">Xem chi tiết</a>
                </span>
            </div>
            <div class="hotel_border">
                <div class="hotel_address">
                    <p><i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;Số 7, Đường Thanh Niên, phường Trường Sơn, Sầm Sơn, Thanh Hóa</p>
                    <p><i class="fa fa-phone" aria-hidden="true"></i> &nbsp;<a href="tel:0373822239" title="Click để gọi tới nhà nghỉ">0373.822.239</a></p>
                </div>
                <div class="hotel_ultilities">
                    <ul class="list-inline">
                        <li><i class="fa fa-wifi" aria-hidden="true"></i>&nbsp; Wifi miễn phí</li>
                        <li><i class="fa fa-car" aria-hidden="true"></i>&nbsp; Chỗ để xe</li>
                        <li></li>
                        <li></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-sm-3 col-xs-12">
            <div class="booking">
                <div class="book_hotel">
                    <div class="hotel_price">75.000đ/h</div>
                </div>
                <div class="book_now">
                    <a href="tourDetail.php">Đặt tour ngay</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End: Danh sách 10 tour du lịch -->
    <!-- Đánh số trang -->
    <div class="pager">
        <ul class="page-numbers">
            <li><a class="page-numbers disable">Trước</a></li>
            <li><a class="page-numbers active">1</a></li>
            <li><a class="page-numbers" href="">2</a></li>
            <li><a class="page-numbers" href="">3</a></li>
            <li><a class="page-numbers" href="">4</a></li>
            <li><a class="page-numbers" href="">5</a></li>
            <li><a class="page-numbers" href="">6</a></li>
            <li><a class="page-numbers" href="">Tiếp theo</a></li>
        </ul>
    </div>
    <!-- end: Đánh số trang -->
</article>

<?php include 'sidebar.php'; ?>
<?php include 'footer.php'; ?>
