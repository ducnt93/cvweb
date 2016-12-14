<!-- begin div Kinh nghiệm làm việc -->
<div class="panel panel-primary">
    <div class="panel-heading" role="tab" id="headingSix">
        <h4 class="panel-title">
            <label>
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                   href="#kinh_nghiem_lam_viec" aria-expanded="false" aria-controls="kinh_nghiem_lam_viec"
                   style="color:white;">Kinh nghiệm làm việc</a>
            </label>
        </h4>
    </div>
    <div id="kinh_nghiem_lam_viec" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
        <div class="panel-body">
                        <span>
                          <ol id="addremoveKinh_nghiem_lam_viec">
                            <li>
                              <br/>
                              <div class="form-group">
                                  <div class="well">
                                      <div class="form-group">
                                        <label for="cong_ty_lam_viec_1">Nơi làm việc: </label>
                                        <input type="text" class="form-control" name="noilamviec[]"
                                               id="cong_ty_lam_viec_1" placeholder="Công ty A"/>
                                      </div>
                                      <div class="form-group">
                                        <label for="vi_tri_lam_viec_1">Vị trí làm việc: </label>
                                        <input type="text" class="form-control" name="vitrilamviec[]"
                                               id="vi_tri_lam_viec_1" placeholder="Thực tập sinh"/>
                                      </div>
                                      <div class="form-group">
                                        <label for="mo_ta_cong_viec_1">Mô tả công việc: </label>
                                        <textarea row="5" class="form-control" id="mo_ta_cong_viec_1"
                                                  name="motacongviec[]"
                                                  placeholder="Training về jQuery và Bootstrap..."></textarea>
                                      </div>
                                      <div class="form-group">
                                          <label for="timeBat_dau_lam_viec_1">Thời gian bắt đầu: </label>
                                          <div class="input-group date">
                                            <input type="text" class="form-control" id="timeBat_dau_lam_viec_1"
                                                   name="thoigianbatdau[]"/>
                                               <span class="input-group-addon" id="btn_thoigianbatdau">
                                         <span class="glyphicon glyphicon-calendar"></span></span>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label for="timeKet_thuc_lam_viec_1">Thời gian kết thúc: </label>
                                          <div class="input-group date">
                                            <input type="month" class="form-control" id="timeKet_thuc_lam_viec_1"
                                                   name="thoigianketthuc[]"/>
                                          </div>
                                      </div>
                                      <div class="clearfix"></div>
                                  </div>
                              </div>
                            </li>
                            
                          </ol>
                          <nav aria-label="...">
                            <ul class="pager">
                              <li><a id="addKinh_nghiem_lam_viec" href="#kinh_nghiem_lam_viec">Thêm</a></li>
                               
                            </ul>
                          </nav>
                        </span>
            <div class="form-group">
                <div class="col-sm-10"></div>
                <div class="col-sm-2">
                    <input type="hidden" id="ratePoint" name="ratePoint" value=""/>
                    <a role="button" data-toggle="collapse" href="#du_an_thuc_te" aria-controls="gioi_thieu_ban_than">Tiếp
                        tục</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end div Kinh nghiệm làm việc -->