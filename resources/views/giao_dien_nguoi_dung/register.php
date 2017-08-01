<?php include 'header.php';?>
<div class="col-sm-12 login">
    <h2 class="page_title">Đăng ký tài khoản</h2>
    <div class="contact">
        <form class="form-horizontal" action="" method="POST">
            <div class="form-group">
                <label class="col-sm-3">Họ và tên *</label>
                <div class="col-sm-9">
                    <input type="text" name="fullName" class="form-control" required/>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3">Tên đăng nhập *</label>
                <div class="col-sm-9">
                    <input type="text" name="username" class="form-control" required/>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3">Email *</label>
                <div class="col-sm-9">
                    <input type="text" name="email" class="form-control" required/>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3">Số điện thoại *</label>
                <div class="col-sm-9">
                    <input type="text" name="phoneNumber" class="form-control" required/>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3">Mật khẩu *</label>
                <div class="col-sm-9">
                    <input type="password" name="password" class="form-control" required/>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3">Nhập lại mật khẩu *</label>
                <div class="col-sm-9">
                    <input type="password" name="password" class="form-control" required/>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3"></label>
                <div class="col-sm-9">
                    <button type="submit" class="btn btn_submit">Đăng ký</button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php include 'footer.php';?>