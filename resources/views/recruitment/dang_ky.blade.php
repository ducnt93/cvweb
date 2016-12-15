<!-- begin div đăng ký tài khoản -->
<div class="panel panel-primary">
    <div class="panel-heading" role="tab" id="headingSeven">
        <h4 class="panel-title">
            <label>
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion_section1"
                   href="#thong_tin_tai_khoan" aria-expanded="false"
                   style="color:white;">1.1.Tài
                    khoản</a>
                <i class="indicator glyphicon glyphicon-chevron-down  pull-right"></i>
            </label>
        </h4>
    </div>
    <div id="thong_tin_tai_khoan" class="panel-collapse collapse in">
        <div class="panel-body">
            <div class="form-group">
                <label class="col-sm-3 control-label">Tên đăng nhập<span class="required_input">(*)</span> : </label>
                <div class="col-sm-9">
                    {{Form::text('inputTenDangNhap',null,['id' => 'inputTenDangNhap', 'class' => 'form-control required'])}}
                    <label for="inputTenDangNhap" class="error"></label>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Mật khẩu<span class="required_input">(*)</span> : </label>
                <div class="col-sm-9">
                    {{Form::password('inputMatKhau', ['class' => 'form-control required', 'id' => 'inputMatKhau'])}}
                    <label for="inputMatKhau" class="error"></label>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Xác nhận mật khẩu<span class="required_input">(*)</span> :
                </label>
                <div class="col-sm-9">
                    {{Form::password('inputMatKhauConfirm', ['class' => 'form-control required', 'id' => 'inputMatKhauConfirm'])}}
                    <label for="inputMatKhauConfirm" class="error"></label>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-9"></div>
                <div class="col-sm-3">
                    <a role="button" data-toggle="collapse" href="#thong_tin_ca_nhan"
                       aria-controls="gioi_thieu_ban_than">Thông tin cá nhân <span aria-hidden="true">»</span></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end div đăng ký tài khoản -->