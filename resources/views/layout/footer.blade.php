
</div>
</div>
</section>
<footer>
    <div class="container">
        <div class="row foot_row1">
            <div class="col-sm-6">
                <h1><strong>ViettravelTour</strong> - Best Choice, Best Price</h1>
                <div class="link_icon">
                    <ul class="list-inline">
                        <li class="fb"><a href="" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li class="twitter"><a href="" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li class="google"><a href="" title="Google Plus"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        <li class="instagram"><a href="" title="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        <li class="youtube"><a href="" title="Youtube"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-4 col-sm-offset-2">
                <h3>Đăng ký nhận ngay ưu đãi!</h3>
                <form class="form-horizontal">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Nhập email đăng ký">
                        <span class="input-group-btn">
                            <button class="btn btn_slide" type="submit">Đăng ký</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <div class="row foot_row2">
            <div class="col-sm-4">
                <ul class="list-unstyled">
                    <li><i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;Phường Dịch Vọng, Cầu Giấy, Hà Nội</li>
                    <li><i class="fa fa-volume-control-phone" aria-hidden="true"></i> &nbsp; 0462.539.549</li>
                    <li><i class="fa fa-envelope-o" aria-hidden="true"></i> &nbsp; duypeo96@gmail.com</li>
                    <li>
                        <dl>
                            <dt style="text-decoration: none;"><i class="fa fa-credit-card" aria-hidden="true"></i> &nbsp;Số tài khoản:</dt>
                            <dd>  &nbsp; &nbsp; &nbsp; &nbsp;Ngân hàng Agribank: 123456782902</dd>
                            <dd>  &nbsp; &nbsp; &nbsp; &nbsp;Ngân hàng MB: 1234567899811</dd>
                            <dd>  &nbsp; &nbsp; &nbsp; &nbsp;Ngân hàng ACB: 123456789872</dd>
                        </dl>
                    </li>
                </ul>
            </div>
            <div class="col-sm-4">
                <h4>Tải phiên bản cho di động</h4>
                <ul class="list-inline">
                    <li><a href=""><img src="<?php getUrlThemeActive()?>user_asset/images/android.png" width="150" alt="Phiên bản Adroid"/></a></li>
                    <li><a href=""><img src="<?php getUrlThemeActive()?>user_asset/images/IOS.png" width="150" alt="Phiên bản IOS"/></a></li>
                </ul>
            </div>
            <div class="col-sm-4">
                <ul class="list-unstyled col-1">
                    <li><a href="">Điều khoản sử dụng</a></li>
                    <li><a href="">Chính sách bảo mật</a></li>
                    <li><a href="">Thông tin pháp lý</a></li>
                    <li><a href="">Hỗ trợ người dùng</a></li>
                </ul>

                <ul class="list-unstyled col-2">
                    <li>
                        <img width="16" height="16" alt="Đang truy cập" src="<?php getUrlThemeActive()?>user_asset/images/users.png">
                        Đang truy cập : <strong>24</strong>
                    </li>
                    <li>
                        <img width="16" height="16" alt="Hôm nay" src="<?php getUrlThemeActive()?>user_asset/images/today.png">
                        Hôm nay : <strong>33</strong>
                    </li>
                    <li>
                        <img width="16" height="16" alt="Tháng hiện tại" src="<?php getUrlThemeActive()?>user_asset/images/month.png">
                        Tháng hiện tại : <strong>2089</strong>
                    </li>
                    <li>
                        <img width="16" height="16" alt="Tổng lượt truy cập" src="<?php getUrlThemeActive()?>user_asset/images/hits.png">
                        Tổng lượt truy cập : <strong>196681</strong>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="author">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <span><small>Copyright 2017 | Bản quyền thuộc Duy Nguyễn</small></span>
                </div>
            </div>
        </div>
    </div>
</footer>

<script type="text/javascript">
    $("#modal_trigger1").leanModal({top: 100, overlay: 0.6, closeButton: ".modal_close"});
    $("#viewmap1").leanModal({top: 100, overlay: 0.6, closeButton: ".modal_close"});
</script>

<script src="<?php getUrlThemeActive()?>user_asset/js/jquery.mCustomScrollbar.concat.min.js" type="text/javascript"></script>
<script src="<?php getUrlThemeActive()?>user_asset/js/slider.min.js" type="text/javascript"></script>
<script src="<?php getUrlThemeActive()?>user_asset/js/pikaday.js"></script>
<script id="scriptToReload" src="<?php getUrlThemeActive()?>user_asset/js/hotel365.js"></script>
<script>
    (function ($) {
        $(window).on("load", function () {
            $("#ultilites").mCustomScrollbar({
                autoHideScrollbar: true,
                theme: "rounded-dots-dark"
            });
        });
    })(jQuery);
    var picker1 = new Pikaday(
            {
                field: document.getElementById('datepicker1'),
                firstDay: 1,
                minDate: new Date(),
                maxDate: new Date(2020, 12, 31),
                yearRange: [2000, 2020]
            });
    var picker2 = new Pikaday(
            {
                field: document.getElementById('datepicker2'),
                firstDay: 1,
                minDate: new Date(),
                maxDate: new Date(2020, 12, 31),
                yearRange: [2000, 2020]
            });
    function refrClock() {
        var d = new Date();
        var s = d.getSeconds();
        var m = d.getMinutes();
        var h = d.getHours();
        var day = d.getDay();
        var date = d.getDate();
        var month = d.getMonth();
        var year = d.getFullYear();
        var days = new Array("Chủ nhật", "Thứ hai", "Thứ 3", "Thứ 4", "Thứ 5", "Thứ 6", "Thứ 7");
        var months = new Array("1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12");
        var am_pm;
        if (s < 10) {
            s = "0" + s
        }
        if (m < 10) {
            m = "0" + m
        }
        if (h > 12)
        {
            h -= 12;
            AM_PM = "PM"
        } else {
            AM_PM = "AM"
        }
        if (h < 10) {
            h = "0" + h
        }
        document.getElementById("clock").innerHTML = days[day] + ", Ngày " + date + "/" + months[month] + "/" + year;
        setTimeout("refrClock()", 1000);
    }
    refrClock();
    ;

    (function (w, d) {
        "use strict";

        var timeout = null,
                scriptEl = d.getElementById('scriptToReload'),
                scriptSrc = scriptEl.src,
                delay = 500;
        w.onresize = function () {
            w.clearTimeout(timeout);

            timeout = w.setTimeout(function () {
                scriptEl.parentElement.removeChild(scriptEl);
                scriptEl = d.createElement('script');
                scriptEl.type = 'text/javascript';
                scriptEl.src = scriptSrc + '?_=' + (new Date().getTime());
                d.getElementsByTagName('head')[0].appendChild(scriptEl);
            }, delay);
        };
    })(window, document);
</script>
</body>
</html>
