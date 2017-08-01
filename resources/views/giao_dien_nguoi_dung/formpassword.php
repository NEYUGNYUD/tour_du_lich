<?php include 'header.php';?>
<div class="col-sm-12 login">
    <h2 class="page_title">Lấy lại tài khoản</h2>
    <div class="contact">
        <form class="form-horizontal" action="" method="POST">
            <h4>Tạo mật khẩu mới!</h4>
            <div class="form-group">
                <label class="col-sm-3">Mật khẩu mới *</label>
                <div class="col-sm-9">
                    <input type="password" name="" class="form-control" required/>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3">Nhập lại mật khẩu *</label>
                <div class="col-sm-9">
                    <input type="password" name="" class="form-control" required/>
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
<?php include 'footer.php';?>