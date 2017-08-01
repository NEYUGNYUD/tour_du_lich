
<?php include 'header.php';

?>

    <link rel="stylesheet" type="text/css" href="css/slide_hotel.css" />
    <script id="img-wrapper-tmpl" type="text/x-jquery-tmpl">
    <div class="rg-image-wrapper">
    {{if itemsCount > 1}}
    <div class="rg-image-nav">
    <a href="#" class="rg-image-nav-prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
    <a href="#" class="rg-image-nav-next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
    </div>
    {{/if}}
    <div class="rg-image"></div>
    <div class="rg-loading"></div>
    <div class="rg-caption-wrapper">
    <div class="rg-caption" style="display:none;">
    <p></p>
    </div>
    </div>
    </div>
</script>


    <article class="col-sm-push-3 col-sm-9">

        <!--Thông tin tour + đặt tour-->
        <div class="hotel_name">
            <div class="name_star">
                <h1>Hà Nội - Hạ Long - Sapa</h1>
                <span class="hotel_star">
                <span class="item_star"><svg xmlns="http://www.w3.org/2000/svg" focusable="false" tabindex="-1" width="12" height="12" viewBox="0 0 12 12"><path class="svg-color--primary" fill="#FFD700" d="M11.988 5.21c-.052-.275-.27-.488-.545-.534l-3.604-.6L6.63.455C6.542.184 6.287 0 6 0s-.542.184-.632.456L4.16 4.076l-3.603.6c-.275.046-.493.26-.545.533-.052.273.072.55.312.695L3.2 7.63l-1.165 3.493c-.093.28.01.59.25.758.115.08.25.12.382.12.148 0 .295-.05.416-.146L6 9.52l2.917 2.333c.12.098.27.147.416.147.133 0 .267-.04.38-.12.244-.17.346-.478.252-.758L8.8 7.63l2.876-1.725c.24-.144.364-.422.312-.696z"></path></svg></span>
                <span class="item_star"><svg xmlns="http://www.w3.org/2000/svg" focusable="false" tabindex="-1" width="12" height="12" viewBox="0 0 12 12"><path class="svg-color--primary" fill="#FFD700" d="M11.988 5.21c-.052-.275-.27-.488-.545-.534l-3.604-.6L6.63.455C6.542.184 6.287 0 6 0s-.542.184-.632.456L4.16 4.076l-3.603.6c-.275.046-.493.26-.545.533-.052.273.072.55.312.695L3.2 7.63l-1.165 3.493c-.093.28.01.59.25.758.115.08.25.12.382.12.148 0 .295-.05.416-.146L6 9.52l2.917 2.333c.12.098.27.147.416.147.133 0 .267-.04.38-.12.244-.17.346-.478.252-.758L8.8 7.63l2.876-1.725c.24-.144.364-.422.312-.696z"></path></svg></span>
                <span class="item_star"><svg xmlns="http://www.w3.org/2000/svg" focusable="false" tabindex="-1" width="12" height="12" viewBox="0 0 12 12"><path class="svg-color--primary" fill="#FFD700" d="M11.988 5.21c-.052-.275-.27-.488-.545-.534l-3.604-.6L6.63.455C6.542.184 6.287 0 6 0s-.542.184-.632.456L4.16 4.076l-3.603.6c-.275.046-.493.26-.545.533-.052.273.072.55.312.695L3.2 7.63l-1.165 3.493c-.093.28.01.59.25.758.115.08.25.12.382.12.148 0 .295-.05.416-.146L6 9.52l2.917 2.333c.12.098.27.147.416.147.133 0 .267-.04.38-.12.244-.17.346-.478.252-.758L8.8 7.63l2.876-1.725c.24-.144.364-.422.312-.696z"></path></svg></span>
                <span class="item_star"><svg xmlns="http://www.w3.org/2000/svg" focusable="false" tabindex="-1" width="12" height="12" viewBox="0 0 12 12"><path class="svg-color--primary" fill="rgba(255, 215, 0, 0.24)" d="M11.988 5.21c-.052-.275-.27-.488-.545-.534l-3.604-.6L6.63.455C6.542.184 6.287 0 6 0s-.542.184-.632.456L4.16 4.076l-3.603.6c-.275.046-.493.26-.545.533-.052.273.072.55.312.695L3.2 7.63l-1.165 3.493c-.093.28.01.59.25.758.115.08.25.12.382.12.148 0 .295-.05.416-.146L6 9.52l2.917 2.333c.12.098.27.147.416.147.133 0 .267-.04.38-.12.244-.17.346-.478.252-.758L8.8 7.63l2.876-1.725c.24-.144.364-.422.312-.696z"></path></svg></span>
                <span class="item_star"><svg xmlns="http://www.w3.org/2000/svg" focusable="false" tabindex="-1" width="12" height="12" viewBox="0 0 12 12"><path class="svg-color--primary" fill="rgba(255, 215, 0, 0.24)" d="M11.988 5.21c-.052-.275-.27-.488-.545-.534l-3.604-.6L6.63.455C6.542.184 6.287 0 6 0s-.542.184-.632.456L4.16 4.076l-3.603.6c-.275.046-.493.26-.545.533-.052.273.072.55.312.695L3.2 7.63l-1.165 3.493c-.093.28.01.59.25.758.115.08.25.12.382.12.148 0 .295-.05.416-.146L6 9.52l2.917 2.333c.12.098.27.147.416.147.133 0 .267-.04.38-.12.244-.17.346-.478.252-.758L8.8 7.63l2.876-1.725c.24-.144.364-.422.312-.696z"></path></svg></span>
            </span>
            </div>
        </div>
        <div class="position">
            <i class="fa fa-map-marker" aria-hidden="true"></i><span style="font-size: 130%">Hà Nội - Hạ Long - Sapa</span>
        </div>

        <div class="hotel_item row">
            <div class="col-sm-8  image_hotel">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                        <li data-target="#myCarousel" data-slide-to="3"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="images/halong.jpg" alt="VinhHaLong">
                            <div class="carousel-caption">
                                <h3>Vịnh Hạ Long xinh đẹp *_*</h3>
                            </div>
                        </div>

                        <div class="item">
                            <img src="images/viengcham.jpg" alt="ViengCham">
                            <div class="carousel-caption">
                                <h3>Viêng Chăm cổ kính <3 </h3>
                            </div>
                        </div>

                        <div class="item">
                            <img src="images/hoian.jpg" alt="HoiAn">
                            <div class="carousel-caption">
                                <h3>Hội An yên bình =]]</h3>
                            </div>
                        </div>
                        <div class="item">
                            <img src="images/phongnha.jpg" alt="PhongNha">
                            <div class="carousel-caption">
                                <h3>Phong Nha thần bí ;)</h3>
                            </div>
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-sm-4  info_hotel">
                <h3><a>Thông tin tour</a> </h3>
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
                        <p class="kichThuocChu" style="font-size: 120%"><i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;Hà Nội, Hạ Long, Sapa</p>
                        <p class="kichThuocChu" style="font-size: 120%"><i class="fa fa-table" aria-hidden="true"></i> Ngày khởi hành: Hàng ngày</a></p>
                    </div>
                    <div class="hotel_ultilities">
                        <ul class="list-inline">
                            <li style="font-size: 120%"><i class="fa fa-dashboard" aria-hidden="true"></i>&nbsp; 5 ngày, 4 đêm</li>
                            <li style="font-size: 120%"><i class="fa fa-car " aria-hidden="true"></i>&nbsp; Phương tiện</li>
                        </ul>
                    </div>
                </div>
                <div class="booking">
                    <div class="book_hotel">
                        <div class="hotel_price" style="font-size: 120%">7.500.000đ</div>
                    </div>
                    <div class="free">
                        <span style="font-size: 120%">Bữa sáng miễn phí</span>
                    </div>
                </div>
            </div>
        </div>

        <!--Chi tiết nhà nghỉ-->
        <div class="hotel_Detail">
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#information" aria-controls="information" role="tab" data-toggle="tab">Tổng quan</a></li>
                <li role="presentation"><a href="#price" aria-controls="price" role="tab" data-toggle="tab">Lịch trình</a></li>
                <li role="presentation"><a href="#ultilities" aria-controls="ultilities" role="tab" data-toggle="tab">Dịch vụ</a></li>
                <li role="presentation"><a href="#appraise" aria-controls="appraise" role="tab" data-toggle="tab">Ghi chú</a></li>
            </ul>

            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="information">
                    <p><strong>Hà Nội - Hạ Long - Sapa</strong> là một trong những nhà nghỉ  đi đầu về phong cách phục vụ hiện đại và chuyên nghiệp. Nằm ngay dưới chân núi Trường Lệ – là một địa danh nổi tiếng của Sầm Sơn với nhiều phong cảnh thiên nhiên đẹp mà tạo hóa đã ban tặng. Với diện tích 4000m2, có sân vườn, một không gian yên tĩnh hòa quyện cùng với khung cảnh thiên nhiên chắc chắn sẽ làm cho Qúy khách cảm thấy thực sự thoải mái và có những giây phút thư giãn sau những ngày làm việc mệt mỏi. Khi đến với Phương Đông hotel, Quý khách sẽ có một cảm nhận về sự lựa chọn đúng đắn của mình. Phương Đông hotel luôn mang đến cho bạn dịch vụ tốt nhất.</p>
                    <p>Phương Đông hotel nằm ngay trên trục đường Thanh Niên ở đầu bãi tắm A với 79 phòng nghỉ, có view nhìn ra khung cảnh thiên nhiên, rất đẹp và lãng mạn.</p>
                    <p>Nhà ăn lớn chứa tới 500 khách và khu coffee bar hiện đại và phong cách đáp ứng cho du khách cá nhân, đoàn thể có nhu cầu tổ chức sự kiện, hội họp ngay trong những ngày đi nghỉ tại biển Sầm Sơn. Với vị trí này quý khách cũng chỉ mất 10 phút xe điện là đến tham quan được khu nghỉ dưỡng cao cấp FLC. Khách sạn có dịch vụ xe điện phục vụ du khách 24/24.</p>
                    <p>Ngoài những địa điểm du lịch gần nhà nghỉ , <strong>Nhà nghỉ Thăng Long</strong> còn có các tua du lịch đi thăm quan tới những danh lam thắng cảnh đẹp và nổi tiếng của Xứ Thanh như Thành Nhà Hồ – Di tích Lam Kinh – Suối Cá Thần Cẩm Thủy – Cầu Hàm Rồng – Dòng sông Mã anh hùng….</p>
                    <p>Với đội ngũ nhân viên trẻ, đẹp được đào tạo theo phong cách chuyên nghiệp, hiện đại, <strong>Nhà nghỉ Thăng Long</strong> trân trọng kính mời và rất hân hạnh được đón tiếp, phục vụ Qúy khách!</p>
                    <p>Hãy lựa chọn và đến với <strong>Nhà nghỉ Thăng Long</strong> chúng tôi, chắc chắn các các bạn sẽ hài lòng với quyết định của chính mình!</p>
                    <h3 class="text-center"><em>Rất hân hạnh được đón tiếp và phục vụ quý khách!</em></h3>
                </div>
                <div role="tabpanel" class="tab-pane" id="price">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <th>Loại phòng</th>
                            <th>Tối đa</th>
                            <th>Giá theo giờ</th>
                            <th>Giá qua đêm</th>
                            <th>Giá cuối tuần</th>
                            <th>Giá ngày lễ, tết</th>
                            </thead>
                        </table>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="ultilities">
                    <div class="list_ultilities">
                        <p><i class="fa fa-arrows" aria-hidden="true"></i> Wifi free</p>
                        <p><i class="fa fa-arrows" aria-hidden="true"></i> Giặt là</p>
                        <p><i class="fa fa-arrows" aria-hidden="true"></i> Điều hòa</p>
                        <p><i class="fa fa-arrows" aria-hidden="true"></i> Bình nóng lạnh</p>
                        <p><i class="fa fa-arrows" aria-hidden="true"></i> Máy giặt</p>
                        <p><i class="fa fa-arrows" aria-hidden="true"></i> Máy sấy tóc</p>
                        <p><i class="fa fa-arrows" aria-hidden="true"></i> Ti vi</p>
                        <p><i class="fa fa-arrows" aria-hidden="true"></i> Bể bơi</p>
                        <p><i class="fa fa-arrows" aria-hidden="true"></i> Nước uống miễn phí</p>
                        <p><i class="fa fa-arrows" aria-hidden="true"></i> Truyền hình cáp</p>
                        <p><i class="fa fa-arrows" aria-hidden="true"></i> Tủ lạnh</p>
                        <p><i class="fa fa-arrows" aria-hidden="true"></i> Khăn ướt</p>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="appraise">
                    <form action="" method="POST">
                        <div class="rating_hotel">
                            <p><strong>Tiện nghi:</strong></p>
                            <fieldset class="rating">
                                <input type="radio" id="star5" name="rating1" value="5" />
                                <label class = "full" for="star5" title="5 sao"></label>

                                <input type="radio" id="star4half" name="rating1" value="4.5" />
                                <label class="half" for="star4half" title="4.5 sao"></label>

                                <input type="radio" id="star4" name="rating1" value="4" />
                                <label class = "full" for="star4" title="4 sao"></label>

                                <input type="radio" id="star3half" name="rating1" value="3.5" />
                                <label class="half" for="star3half" title="3.5 sao"></label>

                                <input type="radio" id="star3" name="rating1" value="3" />
                                <label class = "full" for="star3" title="3 sao"></label>

                                <input type="radio" id="star2half" name="rating1" value="2.5" />
                                <label class="half" for="star2half" title="2.5 sao"></label>

                                <input type="radio" id="star2" name="rating1" value="2" />
                                <label class = "full" for="star2" title="2 sao"></label>

                                <input type="radio" id="star1half" name="rating1" value="1.5" />
                                <label class="half" for="star1half" title="1.5 sao"></label>

                                <input type="radio" id="star1" name="rating1" value="1" />
                                <label class = "full" for="star1" title="1 star"></label>

                                <input type="radio" id="starhalf" name="rating1" value="half" />
                                <label class="half" for="starhalf" title="0.5 sao"></label>
                            </fieldset>
                        </div>
                        <div class="rating_hotel">
                            <p><strong>Thái độ phục vụ:</strong></p>
                            <fieldset class="rating">
                                <input type="radio" id="star52" name="rating2" value="5" />
                                <label class = "full" for="star5" title="5 sao"></label>

                                <input type="radio" id="star4half2" name="rating2" value="4.5" />
                                <label class="half" for="star4half" title="4.5 sao"></label>

                                <input type="radio" id="star42" name="rating2" value="4" />
                                <label class = "full" for="star4" title="4 sao"></label>

                                <input type="radio" id="star3half2" name="rating2" value="3.5" />
                                <label class="half" for="star3half" title="3.5 sao"></label>

                                <input type="radio" id="star32" name="rating2" value="3" />
                                <label class = "full" for="star3" title="3 sao"></label>

                                <input type="radio" id="star2half2" name="rating2" value="2.5" />
                                <label class="half" for="star2half" title="2.5 sao"></label>

                                <input type="radio" id="star22" name="rating2" value="2" />
                                <label class = "full" for="star2" title="2 sao"></label>

                                <input type="radio" id="star1half2" name="rating2" value="1.5" />
                                <label class="half" for="star1half" title="1.5 sao"></label>

                                <input type="radio" id="star12" name="rating2" value="1" />
                                <label class = "full" for="star1" title="1 star"></label>

                                <input type="radio" id="starhalf2" name="rating2" value="half" />
                                <label class="half" for="starhalf" title="0.5 sao"></label>
                            </fieldset>
                        </div>
                        <div class="rating_hotel">
                            <p><strong>Sự sạch sẽ:</strong></p>
                            <fieldset class="rating">
                                <input type="radio" id="star53" name="rating3" value="5" />
                                <label class = "full" for="star5" title="5 sao"></label>

                                <input type="radio" id="star4half3" name="rating3" value="4.5" />
                                <label class="half" for="star4half" title="4.5 sao"></label>

                                <input type="radio" id="star43" name="rating3" value="4" />
                                <label class = "full" for="star4" title="4 sao"></label>

                                <input type="radio" id="star3half3" name="rating3" value="3.5" />
                                <label class="half" for="star3half" title="3.5 sao"></label>

                                <input type="radio" id="star33" name="rating3" value="3" />
                                <label class = "full" for="star3" title="3 sao"></label>

                                <input type="radio" id="star2half3" name="rating3" value="2.5" />
                                <label class="half" for="star2half" title="2.5 sao"></label>

                                <input type="radio" id="star23" name="rating3" value="2" />
                                <label class = "full" for="star2" title="2 sao"></label>

                                <input type="radio" id="star1half3" name="rating3" value="1.5" />
                                <label class="half" for="star1half" title="1.5 sao"></label>

                                <input type="radio" id="star13" name="rating3" value="1" />
                                <label class = "full" for="star1" title="1 star"></label>

                                <input type="radio" id="starhalf3" name="rating3" value="half" />
                                <label class="half" for="starhalf" title="0.5 sao"></label>
                            </fieldset>
                        </div>
                        <div class="rating_hotel">
                            <p><strong>Chất lượng phòng:</strong></p>
                            <fieldset class="rating">
                                <input type="radio" id="star5" name="rating" value="5" />
                                <label class = "full" for="star5" title="5 sao"></label>

                                <input type="radio" id="star4half" name="rating" value="4.5" />
                                <label class="half" for="star4half" title="4.5 sao"></label>

                                <input type="radio" id="star4" name="rating" value="4" />
                                <label class = "full" for="star4" title="4 sao"></label>

                                <input type="radio" id="star3half" name="rating" value="3.5" />
                                <label class="half" for="star3half" title="3.5 sao"></label>

                                <input type="radio" id="star3" name="rating" value="3" />
                                <label class = "full" for="star3" title="3 sao"></label>

                                <input type="radio" id="star2half" name="rating" value="2.5" />
                                <label class="half" for="star2half" title="2.5 sao"></label>

                                <input type="radio" id="star2" name="rating" value="2" />
                                <label class = "full" for="star2" title="2 sao"></label>

                                <input type="radio" id="star1half" name="rating" value="1.5" />
                                <label class="half" for="star1half" title="1.5 sao"></label>

                                <input type="radio" id="star1" name="rating" value="1" />
                                <label class = "full" for="star1" title="1 star"></label>

                                <input type="radio" id="starhalf" name="rating" value="half" />
                                <label class="half" for="starhalf" title="0.5 sao"></label>
                            </fieldset>
                        </div>
                        <div class="rating_hotel">
                            <p><strong>Giá cả:</strong></p>
                            <fieldset class="rating">
                                <input type="radio" id="star5" name="rating" value="5" />
                                <label class = "full" for="star5" title="5 sao"></label>

                                <input type="radio" id="star4half" name="rating" value="4.5" />
                                <label class="half" for="star4half" title="4.5 sao"></label>

                                <input type="radio" id="star4" name="rating" value="4" />
                                <label class = "full" for="star4" title="4 sao"></label>

                                <input type="radio" id="star3half" name="rating" value="3.5" />
                                <label class="half" for="star3half" title="3.5 sao"></label>

                                <input type="radio" id="star3" name="rating" value="3" />
                                <label class = "full" for="star3" title="3 sao"></label>

                                <input type="radio" id="star2half" name="rating" value="2.5" />
                                <label class="half" for="star2half" title="2.5 sao"></label>

                                <input type="radio" id="star2" name="rating" value="2" />
                                <label class = "full" for="star2" title="2 sao"></label>

                                <input type="radio" id="star1half" name="rating" value="1.5" />
                                <label class="half" for="star1half" title="1.5 sao"></label>

                                <input type="radio" id="star1" name="rating" value="1" />
                                <label class = "full" for="star1" title="1 star"></label>

                                <input type="radio" id="starhalf" name="rating" value="half" />
                                <label class="half" for="starhalf" title="0.5 sao"></label>
                            </fieldset>
                        </div>
                        <div class="btn btn_submit">Đánh giá</div>
                    </form>
                </div>
            </div>
        </div>

        <form action="/thanh-toan-tour-du-lich" id="booktour-form" method="post" style="background-color: #b2dba1; padding: 10px">
            <div>

                <div class="mda-tilte-3">
                    <span class="mda-tilte-name" style="font-weight: bold; color: red">THÔNG TIN LIÊN HỆ CỦA KHÁCH HÀNG</span>
                </div>
                <div id="mda-guest-b" class="">

                    <div class="form-group col-md-4">
                        <label>HỌ TÊN *:<span id="bookNameError" class="error"></span></label>
                        <input data-error="#bookNameError" type="text" name="Name" id="lname" class="form-control ">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Email*:<span id="bookEmailError" class="error"></span></label>
                        <input data-error="#bookEmailError" type="text" name="Mail" id="email" class="user-email form-control ">
                    </div>


                    <div class="form-group col-md-4">
                        <label>Số điện thoại *:<span id="bookPhoneError" class="error"></span></label>
                        <input data-error="#bookPhoneError" type="text" name="Phone" class="form-control numeric  ">
                    </div>

                    <div class="form-group col-md-4">
                        <label>Địa chỉ *:<span id="bookAddressError" class="error"></span></label>
                        <input data-error="#bookAddressError" type="text" name="AddressShow" class=" form-control ">
                    </div>

                    <div class="form-group col-md-8">
                        <label>Ghi chú:</label>
                        <input type="text" name="Note" id="fname" class="form-control">
                    </div>

                    <div class="form-group col-md-4">
                        <label>Điểm khởi hành bạn muốn</label>
                        <select class="select2 col-md-3 form-control" id="CityId" name="CityId"><option value="1">Hồ Chí Minh</option>
                            <option value="2">Hà Nội</option>
                            <option value="3">An Giang</option>
                            <option value="4">Nghệ An</option>
                            <option value="5">Đà Nẵng</option>

                        </select>
                    </div>

                    <div class="form-group col-md-4">
                        <label>Điểm khởi hành của tour:</label>
                        <select class="select2 col-md-3 form-control" id="TourLocalSearchId" name="TourLocalSearchId"></select>
                    </div>
                    <p class="clearfix"></p>
                    <div class="form-group col-md-4">
                        <label>Người lớn: </label>
                        <input type="number" name="QAdult" class="form-control mda-quantity tour-quantity1 q-adult1" value="1" min="1" max="5" />

                    </div>
                    <div class="form-group col-md-4">
                        <label>Trẻ em(7 - 14 tuổi)	: </label>
                        <input type="number" name="QChild" class="form-control mda-quantity tour-quantity1 q-child1" min="0" value="0" />
                    </div>

                    <div class="form-group col-md-4">
                        <label>Trẻ nhỏ(0 - 7 tuổi)	: </label>
                        <input type="number" name="QBaby" class="form-control mda-quantity tour-quantity1 q-baby1" min="0" value="0" />
                    </div>


                </div>
                <p class="clearfix"></p>
            </div>
            <div class="mda-tilte-3">
                <span class="mda-tilte-name" style="font-weight: bold; color:red">THÔNG TIN KHÁCH HÀNG ĐI TOUR</span>
            </div>
            <div class="mda-tour-customer mda-price-tour-r">
                <table style="width: 100%" class="mda-table table">
                    <thead>
                    <tr class="header">
                        <td class="center"><strong>HỌ TÊN (<span class="price">*</span>)</strong></td>
                        <td class="center"><strong>Ngày sinh (<span class="price">*</span>)</strong></td>
                        <td class="center"><strong>Giới tính</strong></td>
                        <td class="center"><strong>Địa chỉ</strong></td>
                        <td class="center"><strong>Loại khách</strong></td>
                        <td class="center"><strong>Quốc tịch</strong></td>
                        <td class="center passport-header"><strong>Passport (<span class="price">*</span>)</strong></td>
                        <td class="center expassport-header"><strong>Ngày hết hạn </strong></td>
                        <td class="center"> </td>
                    </tr>
                    </thead>
                    <tbody id="customer-infos">
                    <tr>
                        <td><input type="text" style="width: 70px"></td>
                        <td><input type="date" style="width: 70px"></td>
                        <td><select>
                                <option>Nam</option>
                                <option>Nữ </option>
                            </select></td>
                        <td><input type="text" style="width: 70px"></td>
                        <td><select>
                                <option>người lớn</option>
                                <option>trẻ em</option>
                                <option>trẻ nhỏ</option>
                            </select></td>
                        <td><select>
                                <option>Việt Nam</option>
                                <option>Việt Kiều</option>
                                <option>Nước ngoài</option>
                            </select></td>
                        <td><input type="text" style="width: 70px"></td>
                        <td><input type="date" style="width: 70px"></td>

                    </tr>
                    </tbody>
                    <tfoot>
                    <tr>
                        <td class="paddingtable" colspan="4"></td>
                        <td><strong>Mã giảm giá</strong></td>
                        <td colspan="4" class="price right">
                            <div class="clearfix mda-row-f promo-box footer-sumary">

                                <div class="mda-col mda-col-2">
                                                <span style="width:75%; float:left">
                                                    <input name="promocode" style="width:100%;" data-type="1" class="mda-btn mda-promocode" placeholder="Nhập M&#227; Giảm Gi&#225;" />
                                                </span>
                                    <button style="width: 25%; float: right; height: 22px; border-radius: 0px; background: #e30050; border-radius: 0px; line-height: 1px; border-color: #e30050;" class="btn btn-success promo-check update-promo">Check</button>
                                </div>
                            </div>
                        </td>
                        <td><span id="promo-pricediscount"></span></td>
                    </tr>
                    <tr>
                        <td colspan="5"></td>
                        <td colspan="3"><strong>Tổng giá trị tour</strong></td>
                        <td class="price right">
                            <input type="hidden" id="sumary-hidden" value="0" />
                            <span class="mda-money" id="sumary" style="max-width: 80px; text-align:right"></span>đ

                        </td>
                    </tr>
                    <tr>
                        <td colspan="5"></td>
                        <td colspan="3"><strong>Tiền đặt cọc</strong></td>
                        <td class="price right">
                            <input type="hidden" name="holdprice" id="holdprice-hidden" value="0" />
                            <span class="mda-money" id="holdprice" style="max-width: 80px; text-align:right"></span>đ

                        </td>
                    </tr>
                    <tr>
                        <td colspan="5"></td>
                        <td colspan="3"><strong>Phí dịch vụ</strong></td>
                        <td class="price right">
                            <input type="hidden" name="serviceprice" id="serviceprice-hidden" value="0" />
                            <span class="mda-money" id="serviceprice" style="max-width: 80px; text-align:right"></span>đ

                        </td>
                    </tr>

                    <tr>
                        <td colspan="5"></td>
                        <td colspan="3"><strong>Thanh toán</strong></td>
                        <td class="price right">
                            <input type="hidden" id="payprice-hidden" value="0" />
                            <span class="mda-money" id="payprice" style="max-width: 80px; text-align:right"></span>đ

                        </td>
                    </tr>
                    </tfoot>
                </table>
            </div>
            <p class="clearfix"></p>
            <div>
                <div class="mda-tilte-3">
                    <span class="mda-tilte-name" style="font-weight: bold; color: red">Hình thức thanh toán</span>
                </div>
                <label class="radio-inline"><input type="radio" name="paymethod" checked value="dlv" class="payment-method"><strong>Thanh to&#225;n tại Du Lịch Việt</strong></label>

            </div>
            <div class="">
                <input type="checkbox" name="isbilling" class="is-billing" value="1" />Xuất Hóa Đơn
                <textarea name="billinginfo" placeholder="Th&#244;ng Tin C&#244;ng Ty(&#237;t hơn 1000 k&#253; tự)" class="billing-info form-control" style="display:none;"></textarea>

            </div>
            <p class="clearfix"></p>
            <div class="mda-provision">
                <h3>Điều khoản thanh toán</h3>
                <div style="height: 150px; width: 760px; width: auto; overflow: auto; border: 1px solid #ccc;">
                    <h4 style="text-align:justify"> CÁC HÌNH THỨC THANH TOÁN TẠI DU LỊCH SUNSHINE</h4>

                    <p style="text-align:justify"><strong>1, Thanh toán bằng tiền mặt:</strong></p>

                    <p style="text-align:justify">Qúy khách vui lòng đến trụ sở của công ty hoặc các chi nhánh văng phòng của công ty du lịch SUNSHINE để thanh toán</p>

                    <p style="text-align:justify"><strong>2, H&igrave;nh thức chuyển khoản ng&acirc;n h&agrave;ng:</strong></p>

                    <p style="text-align:justify">T&ecirc;n t&agrave;i khoản: C&Ocirc;NG TY CỔ PHẦN TRUYỀN TH&Ocirc;NG DU LỊCH VIỆT</p>

                    <p style="text-align:justify">Ng&acirc;n h&agrave;ng: TECHCOMBANK &ndash; CHI NH&Aacute;NH THẮNG LỢI, TPHCM</p>

                    <p style="text-align:justify">T&agrave;i khoản: VNĐ: 11920662652011</p>

                    <p style="text-align:justify">Qu&yacute; kh&aacute;ch vui l&ograve;ng li&ecirc;n hệ với <span style="color:#FF0000"><strong>HOTLINE:&nbsp;&Acirc;u - &Uacute;c - Mỹ: 0938.30.44.88 | Ch&acirc;u &Aacute;: 0938.346.588 | Trong nước: 0909.189.888 &nbsp;để được hỗ trợ, tư vấn chi tiết </strong></span>về h&igrave;nh thức thanh to&aacute;n chuyển khoản.</p>

                    <p style="text-align:justify">Khi thực hiện việc chuyển khoản, qu&yacute; kh&aacute;ch vui l&ograve;ng ghi r&otilde; họ t&ecirc;n, địa chỉ, điện thoại v&agrave; nội dung chuyến du lịch cụ thể đ&atilde; được qu&yacute; kh&aacute;ch chọn đăng k&yacute;.<br />
                        Sau khi thực hiện việc chuyển khoản, qu&yacute; kh&aacute;ch vui l&ograve;ng Fax Ủy Nhiệm Chi về c&ocirc;ng ty v&agrave; liện hệ nh&acirc;n vi&ecirc;n phụ tr&aacute;ch tuyến để nhận được v&eacute; du lịch ch&iacute;nh thức từ c&ocirc;ng ty Du Lịch Việt.</p>
     </div>

            </div>
            <br />
            <div class="pull-left">
                <label class="radio-inline"><input type="checkbox" id="accept-policy" checked><strong> Tôi đã đọc và chấp nhận điều khoản trên</strong></label>
            </div>
            <input type="hidden" name="codeDay" id="codeDay" value="15-07-2017" />
            <input type="hidden" name="customerlistjson" id="customerlist-json" />
            <input type="hidden" id="valid-customerjson" />
            <input type="hidden" name="type" value="3" />
            <input type="hidden" id="sumary-post" name="sumary" value="0" />
            <input type="hidden" name="scheduleid" value="1cwPgwrvoPI%3d" />
            <div class="panel-body">
                <div class=" clearfix pull-right">

                    <input class="btn btn-success" type="submit" value="HOÀN TẤT ĐẶT TOUR" />


                </div>
            </div>
        </form>



        <div class="hotel_relate">
            <h3>Tour du lịch liên quan</h3>
            <div class="row">
                <div class="col-sm-4">
                    <div class="hr_item">
                        <div class="image_hotel">
                            <a href="tourDetail.php"><img src="images/hotel2.png" alt="" class="img-responsive"></a>
                        </div>
                    </div>
                    <div class="info_hotel">
                        <h3><a href="tourDetail.php">Hà Nội- Mộc Châu- Hà Giang</a> </h3>
                        <span class="hotel_star">
                        <span class="item_star"><svg xmlns="http://www.w3.org/2000/svg" focusable="false" tabindex="-1" width="12" height="12" viewBox="0 0 12 12"><path class="svg-color--primary" fill="#FFD700" d="M11.988 5.21c-.052-.275-.27-.488-.545-.534l-3.604-.6L6.63.455C6.542.184 6.287 0 6 0s-.542.184-.632.456L4.16 4.076l-3.603.6c-.275.046-.493.26-.545.533-.052.273.072.55.312.695L3.2 7.63l-1.165 3.493c-.093.28.01.59.25.758.115.08.25.12.382.12.148 0 .295-.05.416-.146L6 9.52l2.917 2.333c.12.098.27.147.416.147.133 0 .267-.04.38-.12.244-.17.346-.478.252-.758L8.8 7.63l2.876-1.725c.24-.144.364-.422.312-.696z"></path></svg></span>
                        <span class="item_star"><svg xmlns="http://www.w3.org/2000/svg" focusable="false" tabindex="-1" width="12" height="12" viewBox="0 0 12 12"><path class="svg-color--primary" fill="#FFD700" d="M11.988 5.21c-.052-.275-.27-.488-.545-.534l-3.604-.6L6.63.455C6.542.184 6.287 0 6 0s-.542.184-.632.456L4.16 4.076l-3.603.6c-.275.046-.493.26-.545.533-.052.273.072.55.312.695L3.2 7.63l-1.165 3.493c-.093.28.01.59.25.758.115.08.25.12.382.12.148 0 .295-.05.416-.146L6 9.52l2.917 2.333c.12.098.27.147.416.147.133 0 .267-.04.38-.12.244-.17.346-.478.252-.758L8.8 7.63l2.876-1.725c.24-.144.364-.422.312-.696z"></path></svg></span>
                        <span class="item_star"><svg xmlns="http://www.w3.org/2000/svg" focusable="false" tabindex="-1" width="12" height="12" viewBox="0 0 12 12"><path class="svg-color--primary" fill="#FFD700" d="M11.988 5.21c-.052-.275-.27-.488-.545-.534l-3.604-.6L6.63.455C6.542.184 6.287 0 6 0s-.542.184-.632.456L4.16 4.076l-3.603.6c-.275.046-.493.26-.545.533-.052.273.072.55.312.695L3.2 7.63l-1.165 3.493c-.093.28.01.59.25.758.115.08.25.12.382.12.148 0 .295-.05.416-.146L6 9.52l2.917 2.333c.12.098.27.147.416.147.133 0 .267-.04.38-.12.244-.17.346-.478.252-.758L8.8 7.63l2.876-1.725c.24-.144.364-.422.312-.696z"></path></svg></span>
                        <span class="item_star"><svg xmlns="http://www.w3.org/2000/svg" focusable="false" tabindex="-1" width="12" height="12" viewBox="0 0 12 12"><path class="svg-color--primary" fill="rgba(255, 215, 0, 0.24)" d="M11.988 5.21c-.052-.275-.27-.488-.545-.534l-3.604-.6L6.63.455C6.542.184 6.287 0 6 0s-.542.184-.632.456L4.16 4.076l-3.603.6c-.275.046-.493.26-.545.533-.052.273.072.55.312.695L3.2 7.63l-1.165 3.493c-.093.28.01.59.25.758.115.08.25.12.382.12.148 0 .295-.05.416-.146L6 9.52l2.917 2.333c.12.098.27.147.416.147.133 0 .267-.04.38-.12.244-.17.346-.478.252-.758L8.8 7.63l2.876-1.725c.24-.144.364-.422.312-.696z"></path></svg></span>
                        <span class="item_star"><svg xmlns="http://www.w3.org/2000/svg" focusable="false" tabindex="-1" width="12" height="12" viewBox="0 0 12 12"><path class="svg-color--primary" fill="rgba(255, 215, 0, 0.24)" d="M11.988 5.21c-.052-.275-.27-.488-.545-.534l-3.604-.6L6.63.455C6.542.184 6.287 0 6 0s-.542.184-.632.456L4.16 4.076l-3.603.6c-.275.046-.493.26-.545.533-.052.273.072.55.312.695L3.2 7.63l-1.165 3.493c-.093.28.01.59.25.758.115.08.25.12.382.12.148 0 .295-.05.416-.146L6 9.52l2.917 2.333c.12.098.27.147.416.147.133 0 .267-.04.38-.12.244-.17.346-.478.252-.758L8.8 7.63l2.876-1.725c.24-.144.364-.422.312-.696z"></path></svg></span>
                    </span>

                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="hr_item">
                        <div class="image_hotel">
                            <a href="tourDetail.php"><img src="images/hotel2.png" alt="" class="img-responsive"></a>
                        </div>
                    </div>
                    <div class="info_hotel">
                        <h3><a href="tourDetail.php">Tên tour du lịch</a> </h3>
                        <span class="hotel_star">
                        <span class="item_star"><svg xmlns="http://www.w3.org/2000/svg" focusable="false" tabindex="-1" width="12" height="12" viewBox="0 0 12 12"><path class="svg-color--primary" fill="#FFD700" d="M11.988 5.21c-.052-.275-.27-.488-.545-.534l-3.604-.6L6.63.455C6.542.184 6.287 0 6 0s-.542.184-.632.456L4.16 4.076l-3.603.6c-.275.046-.493.26-.545.533-.052.273.072.55.312.695L3.2 7.63l-1.165 3.493c-.093.28.01.59.25.758.115.08.25.12.382.12.148 0 .295-.05.416-.146L6 9.52l2.917 2.333c.12.098.27.147.416.147.133 0 .267-.04.38-.12.244-.17.346-.478.252-.758L8.8 7.63l2.876-1.725c.24-.144.364-.422.312-.696z"></path></svg></span>
                        <span class="item_star"><svg xmlns="http://www.w3.org/2000/svg" focusable="false" tabindex="-1" width="12" height="12" viewBox="0 0 12 12"><path class="svg-color--primary" fill="#FFD700" d="M11.988 5.21c-.052-.275-.27-.488-.545-.534l-3.604-.6L6.63.455C6.542.184 6.287 0 6 0s-.542.184-.632.456L4.16 4.076l-3.603.6c-.275.046-.493.26-.545.533-.052.273.072.55.312.695L3.2 7.63l-1.165 3.493c-.093.28.01.59.25.758.115.08.25.12.382.12.148 0 .295-.05.416-.146L6 9.52l2.917 2.333c.12.098.27.147.416.147.133 0 .267-.04.38-.12.244-.17.346-.478.252-.758L8.8 7.63l2.876-1.725c.24-.144.364-.422.312-.696z"></path></svg></span>
                        <span class="item_star"><svg xmlns="http://www.w3.org/2000/svg" focusable="false" tabindex="-1" width="12" height="12" viewBox="0 0 12 12"><path class="svg-color--primary" fill="#FFD700" d="M11.988 5.21c-.052-.275-.27-.488-.545-.534l-3.604-.6L6.63.455C6.542.184 6.287 0 6 0s-.542.184-.632.456L4.16 4.076l-3.603.6c-.275.046-.493.26-.545.533-.052.273.072.55.312.695L3.2 7.63l-1.165 3.493c-.093.28.01.59.25.758.115.08.25.12.382.12.148 0 .295-.05.416-.146L6 9.52l2.917 2.333c.12.098.27.147.416.147.133 0 .267-.04.38-.12.244-.17.346-.478.252-.758L8.8 7.63l2.876-1.725c.24-.144.364-.422.312-.696z"></path></svg></span>
                        <span class="item_star"><svg xmlns="http://www.w3.org/2000/svg" focusable="false" tabindex="-1" width="12" height="12" viewBox="0 0 12 12"><path class="svg-color--primary" fill="rgba(255, 215, 0, 0.24)" d="M11.988 5.21c-.052-.275-.27-.488-.545-.534l-3.604-.6L6.63.455C6.542.184 6.287 0 6 0s-.542.184-.632.456L4.16 4.076l-3.603.6c-.275.046-.493.26-.545.533-.052.273.072.55.312.695L3.2 7.63l-1.165 3.493c-.093.28.01.59.25.758.115.08.25.12.382.12.148 0 .295-.05.416-.146L6 9.52l2.917 2.333c.12.098.27.147.416.147.133 0 .267-.04.38-.12.244-.17.346-.478.252-.758L8.8 7.63l2.876-1.725c.24-.144.364-.422.312-.696z"></path></svg></span>
                        <span class="item_star"><svg xmlns="http://www.w3.org/2000/svg" focusable="false" tabindex="-1" width="12" height="12" viewBox="0 0 12 12"><path class="svg-color--primary" fill="rgba(255, 215, 0, 0.24)" d="M11.988 5.21c-.052-.275-.27-.488-.545-.534l-3.604-.6L6.63.455C6.542.184 6.287 0 6 0s-.542.184-.632.456L4.16 4.076l-3.603.6c-.275.046-.493.26-.545.533-.052.273.072.55.312.695L3.2 7.63l-1.165 3.493c-.093.28.01.59.25.758.115.08.25.12.382.12.148 0 .295-.05.416-.146L6 9.52l2.917 2.333c.12.098.27.147.416.147.133 0 .267-.04.38-.12.244-.17.346-.478.252-.758L8.8 7.63l2.876-1.725c.24-.144.364-.422.312-.696z"></path></svg></span>
                    </span>

                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="hr_item">
                        <div class="image_hotel">
                            <a href="tourDetail.php"><img src="images/hotel2.png" alt="" class="img-responsive"></a>
                        </div>
                    </div>
                    <div class="info_hotel">
                        <h3><a href="tourDetail.php">Tên tour du lịch</a> </h3>
                        <span class="hotel_star">
                        <span class="item_star"><svg xmlns="http://www.w3.org/2000/svg" focusable="false" tabindex="-1" width="12" height="12" viewBox="0 0 12 12"><path class="svg-color--primary" fill="#FFD700" d="M11.988 5.21c-.052-.275-.27-.488-.545-.534l-3.604-.6L6.63.455C6.542.184 6.287 0 6 0s-.542.184-.632.456L4.16 4.076l-3.603.6c-.275.046-.493.26-.545.533-.052.273.072.55.312.695L3.2 7.63l-1.165 3.493c-.093.28.01.59.25.758.115.08.25.12.382.12.148 0 .295-.05.416-.146L6 9.52l2.917 2.333c.12.098.27.147.416.147.133 0 .267-.04.38-.12.244-.17.346-.478.252-.758L8.8 7.63l2.876-1.725c.24-.144.364-.422.312-.696z"></path></svg></span>
                        <span class="item_star"><svg xmlns="http://www.w3.org/2000/svg" focusable="false" tabindex="-1" width="12" height="12" viewBox="0 0 12 12"><path class="svg-color--primary" fill="#FFD700" d="M11.988 5.21c-.052-.275-.27-.488-.545-.534l-3.604-.6L6.63.455C6.542.184 6.287 0 6 0s-.542.184-.632.456L4.16 4.076l-3.603.6c-.275.046-.493.26-.545.533-.052.273.072.55.312.695L3.2 7.63l-1.165 3.493c-.093.28.01.59.25.758.115.08.25.12.382.12.148 0 .295-.05.416-.146L6 9.52l2.917 2.333c.12.098.27.147.416.147.133 0 .267-.04.38-.12.244-.17.346-.478.252-.758L8.8 7.63l2.876-1.725c.24-.144.364-.422.312-.696z"></path></svg></span>
                        <span class="item_star"><svg xmlns="http://www.w3.org/2000/svg" focusable="false" tabindex="-1" width="12" height="12" viewBox="0 0 12 12"><path class="svg-color--primary" fill="#FFD700" d="M11.988 5.21c-.052-.275-.27-.488-.545-.534l-3.604-.6L6.63.455C6.542.184 6.287 0 6 0s-.542.184-.632.456L4.16 4.076l-3.603.6c-.275.046-.493.26-.545.533-.052.273.072.55.312.695L3.2 7.63l-1.165 3.493c-.093.28.01.59.25.758.115.08.25.12.382.12.148 0 .295-.05.416-.146L6 9.52l2.917 2.333c.12.098.27.147.416.147.133 0 .267-.04.38-.12.244-.17.346-.478.252-.758L8.8 7.63l2.876-1.725c.24-.144.364-.422.312-.696z"></path></svg></span>
                        <span class="item_star"><svg xmlns="http://www.w3.org/2000/svg" focusable="false" tabindex="-1" width="12" height="12" viewBox="0 0 12 12"><path class="svg-color--primary" fill="rgba(255, 215, 0, 0.24)" d="M11.988 5.21c-.052-.275-.27-.488-.545-.534l-3.604-.6L6.63.455C6.542.184 6.287 0 6 0s-.542.184-.632.456L4.16 4.076l-3.603.6c-.275.046-.493.26-.545.533-.052.273.072.55.312.695L3.2 7.63l-1.165 3.493c-.093.28.01.59.25.758.115.08.25.12.382.12.148 0 .295-.05.416-.146L6 9.52l2.917 2.333c.12.098.27.147.416.147.133 0 .267-.04.38-.12.244-.17.346-.478.252-.758L8.8 7.63l2.876-1.725c.24-.144.364-.422.312-.696z"></path></svg></span>
                        <span class="item_star"><svg xmlns="http://www.w3.org/2000/svg" focusable="false" tabindex="-1" width="12" height="12" viewBox="0 0 12 12"><path class="svg-color--primary" fill="rgba(255, 215, 0, 0.24)" d="M11.988 5.21c-.052-.275-.27-.488-.545-.534l-3.604-.6L6.63.455C6.542.184 6.287 0 6 0s-.542.184-.632.456L4.16 4.076l-3.603.6c-.275.046-.493.26-.545.533-.052.273.072.55.312.695L3.2 7.63l-1.165 3.493c-.093.28.01.59.25.758.115.08.25.12.382.12.148 0 .295-.05.416-.146L6 9.52l2.917 2.333c.12.098.27.147.416.147.133 0 .267-.04.38-.12.244-.17.346-.478.252-.758L8.8 7.63l2.876-1.725c.24-.144.364-.422.312-.696z"></path></svg></span>
                    </span>

                    </div>
                </div>
            </div>
        </div>

    </article>
<?php include 'sidebar.php'; ?>

    <script type="text/javascript" src="js/jquery.tmpl.min.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="js/jquery.elastislide.js"></script>
    <script type="text/javascript" src="js/gallery.js"></script>

<?php include 'footer.php'; ?>
