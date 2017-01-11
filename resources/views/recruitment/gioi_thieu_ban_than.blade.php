<!-- begin div Giới thiệu bản thân -->
<div class="panel panel-primary">
    <div class="panel-heading" role="tab" id="headingTwo">
        <h4 class="panel-title">
            <label>
                <a class="accordion-toggle" role="button" data-toggle="collapse" data-parent="#accordion_section2"
                   href="#gioi_thieu_ban_than" aria-expanded="true" aria-controls="gioi_thieu_ban_than"
                   style="color:white;">2.1.Giới thiệu bản thân</a>
                <i class="indicator glyphicon glyphicon-chevron-down  pull-right"></i>
            </label>
        </h4>
    </div>
    <div id="gioi_thieu_ban_than" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
        <div class="panel-body">
            <div class="form-group">
                <label class="col-sm-2 control-label">Bạn là người thuộc tính cách nào?</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control1" id="targettc" name="inputTinhCachBanThan">
                    <div class="col-sm-12" id="searchKQtc" class="inner2"></div>
                    <div class="col-sm-12" id="sothichtc" class="tinhcach"></div>
                    <div class="col-sm-12" id="dstc" class="tinhcach"></div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Sở thích</label>
                <!---chen them code vao day-->
                <div class="col-sm-10">
                    <input type="text" class="form-control1" id="target" name="inputSoThichBanThan">
                    <div class="col-sm-12" id="searchKQ" class="inner"></div>
                    <div class="col-sm-12" id="sothich" class="sothich"></div>
                    <div class="col-sm-12" id="dsst" class="sothich"></div>
                </div>
                <!---ket thuc chen them code vao day-->
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Ước mơ</label>
                <div class="col-sm-10">
                    <label for="inputUocMo">Ước mơ lớn nhất của bạn là gì?</label>
                    <textarea name="inputUocMo" class="form-control" rows="5" id="inputUocMo"
                              placeholder="Tôi muốn trở thành một full stack developer."></textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Khả năng đặc biệt</label>
                <div class="col-sm-10">
                                <textarea name="inputKhaNang" class="form-control" rows="5" id="inputKhaNang"
                                          placeholder="Tôi có thể chạy marathon."></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-9"></div>
                <div class="col-sm-3">
                    <a role="button" data-toggle="collapse" href="#li_do_den_nhat"
                       aria-controls="gioi_thieu_ban_than">Lý do muốn đến Nhật Bản <span aria-hidden="true">»</span></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end div Giới thiệu bản thân -->
