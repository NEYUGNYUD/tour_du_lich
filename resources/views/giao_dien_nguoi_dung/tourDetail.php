<?php include 'header.php'; ?>

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

    <!--Thông tin nhà nghỉ + đặt phòng-->
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
        <div class="book_roomDetail">
            <a href="tourOder.php" class="btn btn_slide">Đặt tour ngay</a>
        </div>
    </div>
    <div class="position">
        <i class="fa fa-map-marker" aria-hidden="true"></i> Hà Nội - Hạ Long - Sapa
    </div>

    <!--Slide ảnh nhà nghỉ-->
    <div id="rg-gallery" class="rg-gallery">
        <div class="rg-thumbs">
            <div class="es-carousel-wrapper">
                <div class="es-nav">
                    <span class="es-nav-prev"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
                    <span class="es-nav-next"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                </div>
                <div class="es-carousel">
                    <ul>
                        <li><a href="#"><img src="images/hotel1.jpg" data-large="images/hotel1.jpg" alt="" data-description="Nhà nghỉ Thăng Long" /></a></li>
                        <li><a href="#"><img src="images/nt1.jpg" data-large="images/nt1.jpg" alt="" data-description="Nhà nghỉ Thăng Long" /></a></li>
                        <li><a href="#"><img src="images/nt2.jpg" data-large="images/nt2.jpg" alt="" data-description="Nhà nghỉ Thăng Long" /></a></li>
                        <li><a href="#"><img src="images/nt3.jpg" data-large="images/nt3.jpg" alt="" data-description="Nhà nghỉ Thăng Long" /></a></li>
                        <li><a href="#"><img src="images/nt4.jpg" data-large="images/nt4.jpg" alt="" data-description="Nhà nghỉ Thăng Long" /></a></li>
                        <li><a href="#"><img src="images/nt5.jpg" data-large="images/nt5.jpg" alt="" data-description="Nhà nghỉ Thăng Long" /></a></li>
                        <li><a href="#"><img src="images/nt6.jpg" data-large="images/nt6.jpg" alt="" data-description="Nhà nghỉ Thăng Long" /></a></li>
                    </ul>
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
                        <tbody>
                            <tr>
                                <td>Phòng 25m<sup>2</sup> 2 giường 1m5 </td>
                                <td>4 người</td>
                                <td>70.000đ</td>
                                <td>250.000đ</td>
                                <td>300.000đ</td>
                                <td>300.000đ</td>
                            </tr>
                            <tr>
                                <td>Phòng 35m<sup>2</sup> 2 giường 1m6 </td>
                                <td>4 người</td>
                                <td>75.000đ</td>
                                <td>250.000đ</td>
                                <td>300.000đ</td>
                                <td>300.000đ</td>
                            </tr>
                            <tr>
                                <td>Phòng 35m<sup>2</sup> 1m6 + 1m8 </td>
                                <td>5 người</td>
                                <td>80.000đ</td>
                                <td>270.000đ</td>
                                <td>300.000đ</td>
                                <td>350.000đ</td>
                            </tr>
                            <tr>
                                <td>VIP 1 giường </td>
                                <td>2 người</td>
                                <td>80.000đ</td>
                                <td>280.000đ</td>
                                <td>300.000đ</td>
                                <td>300.000đ</td>
                            </tr>
                            <tr>
                                <td>VIP 2 giường </td>
                                <td>4 người</td>
                                <td>80.000đ</td>
                                <td>280.000đ</td>
                                <td>300.000đ</td>
                                <td>350.000đ</td>
                            </tr>
                            <tr>
                                <td>VIP 3 giường </td>
                                <td>6 người</td>
                                <td>75.000đ</td>
                                <td>250.000đ</td>
                                <td>300.000đ</td>
                                <td>300.000đ</td>
                            </tr>
                            <tr>
                                <td>Dịch vụ </td>
                                <td>8 người</td>
                                <td>75.000đ</td>
                                <td>250.000đ</td>
                                <td>300.000đ</td>
                                <td>300.000đ</td>
                            </tr>
                        </tbody>
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
