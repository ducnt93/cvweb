<!-- begin div Giới thiệu bản thân -->
<div class="panel panel-primary">
    <div class="panel-heading" role="tab" id="headingTwo">
        <h4 class="panel-title">
            <label>
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                   href="#gioi_thieu_ban_than" aria-expanded="false" aria-controls="gioi_thieu_ban_than"
                   style="color:white;">Giới thiệu bản thân</a>
            </label>
        </h4>
    </div>
    <div id="gioi_thieu_ban_than" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
        <div class="panel-body">
            <div class="form-group">
                <label class="col-sm-2 control-label">Bạn là người thuộc tính cách nào?</label>
                <div class="col-sm-10">
                    <div class="well">
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="targettc" name="tinhcachbanthan">
                            <div class="col-lg-12" id="searchKQtc" class="inner2"></div>
                            <div class="col-lg-12" id="sothichtc" class="tinhcach"></div>
                            <div class="col-lg-12" id="dstc" class="tinhcach"></div>
                        </div>

                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Sở thích</label>

                <!---chen them code vao day-->

                <div class="col-sm-10">
                    <input type="text" class="form-control" id="target" name="sothichbanthan">
                    <div class="col-lg-12" id="searchKQ" class="inner"></div>
                    <div class="col-lg-12" id="sothich" class="sothich"></div>
                    <div class="col-lg-12" id="dsst" class="sothich"></div>
                </div>

                <!---ket thuc chen them code vao day-->
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Ước mơ</label>
                <div class="col-sm-10">
                            <span>
                              <div class="form-group">
                                <label for="uoc_mo">Ước mơ lớn nhất của bạn là gì?</label>
                                <textarea name="uocmo" class="form-control" rows="5" id="uoc_mo"
                                          placeholder="Tôi muốn trở thành một full stack developer."></textarea>
                              </div>
                            </span>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Khả năng đặc biệt</label>
                <div class="col-sm-10">
                            <span>
                              <div class="form-group">
                                <textarea name="khanang" class="form-control" rows="5" id=""
                                          placeholder="Tôi có thể chạy marathon."></textarea>
                              </div>
                            </span>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10"></div>
                <div class="col-sm-2">
                    <input type="hidden" id="ratePoint" name="ratePoint" value=""/>
                    <a role="button" data-toggle="collapse" href="#li_do_den_nhat" aria-controls="gioi_thieu_ban_than">Tiếp
                        tục</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end div Giới thiệu bản thân -->
