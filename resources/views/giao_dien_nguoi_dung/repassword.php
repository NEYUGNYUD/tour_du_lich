<?php include 'header.php'; ?>
<div class="col-sm-12 login">
    <h2 class="page_title">Lấy lại tài khoản</h2>
    <div class="contact">
        <form class="form-horizontal" action="formpassword.php" method="POST">
            <h4>Hãy nhập địa chỉ email của bạn và chúng tôi sẽ gửi tới bạn đường dẫn để thiết lập lại mật khẩu của bạn!</h4>
            <div class="form-group">
                <label class="col-sm-3">Địa chỉ email *</label>
                <div class="col-sm-9">
                    <input type="email" name="mail" class="form-control" required/>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3"></label>
                <div class="col-sm-9">
                    <button type="submit" class="btn btn_submit">Gửi</button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php include 'footer.php'; ?>