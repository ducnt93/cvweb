<!-- begin div Giới thiệu bản thân -->
        <div class="panel panel-primary">
            <div class="panel-heading" role="tab" id="headingTwo">
              <h4 class="panel-title">
                  <label>
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#gioi_thieu_ban_than" aria-expanded="false" aria-controls="gioi_thieu_ban_than" style="color:white;">Giới thiệu bản thân</a>
                  </label>
              </h4>
            </div>
            <div id="gioi_thieu_ban_than" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Bạn là người thuộc tính cách nào?</label>
                        <div class="col-sm-10">
                        <div class="well">
                            <div class="form-group">
                              <label for="sel1">Tính cách</label>
                              <select name="tinhcach" class="form-control" id="sel1">
                                <option>Chọn tính cách</option>
                                <option>Tính cách cần cù </option>
                                <option>Tính cách hành động</option>
                                <option>Tính cách dám làm</option>
                                <option>Tính cách kiên cường</option>
                                <option>Tính cách nhạy cảm</option>
                                <option>Tính cách lý trí</option>
                                <option>Tính cách tự tin</option>
                                <option>Tính cách kiên trì</option>
                                <option>Tính cách ổn định chắc chắn</option>
                                <option>Tính cách tỉ mỉ</option>
                                <option>Tính cách cẩn thận</option>
                                <option>Tính cách suy xét</option>
                                <option>Tính cách mơ mộng</option>
                              </select>
                            </div>
                             
                            <div class="clearfix"></div>
                        </div>
                        </div>
                    </div>
                    <div class="form-group">
                          <label class="col-sm-2 control-label">Sở thích về thể thao</label>
                          <div class="col-sm-10">
                            <label data-toggle="collapse" data-target="#collapseTheThao" aria-expanded="false" aria-controls="collapseTheThao">
                              <input name="sothich[]" value="thethao" type="checkbox"/> Yêu thích thể thao
                            </label>
                            <div id="collapseTheThao" aria-expanded="false" class="collapse">
                              <div class="well">
                                <?php foreach ($sothich as $key): ?>
                                  <?php if ($key->danhmucsothich=="Yêu thích thể thao"): ?>
                                    <div class="col-sm-4">
                                      <input type="checkbox" name="thethao[]" value="{{$key->tensothich}}" /> {{$key->tensothich}} <br>
                                    </div>
                                
                                  <?php endif ?>
                                <?php endforeach ?>
                                 
                                <div class="clearfix"></div>
                              </div>
                            </div>
                          </div>
                    </div>
                    <div class="form-group">
                          <label class="col-sm-2 control-label">Sở thích đọc sách</label>
                          <div class="col-sm-10">
                            <label data-toggle="collapse" data-target="#collapseSach" aria-expanded="false" aria-controls="collapseSach">
                              <input name="sothich[]" value="docsach" type="checkbox"/> Yêu thích đọc sách
                            </label>
                            <div id="collapseSach" aria-expanded="false" class="collapse">
                              <div class="well">
                                <?php foreach ($sothich as $key): ?>
                                  <?php if ($key->danhmucsothich=="đọc sách"): ?>
                                    <div class="col-sm-4">
                                      <input type="checkbox" name="docsach[]" value="{{$key->tensothich}}" /> {{$key->tensothich}} <br>
                                    </div>
                                
                                  <?php endif ?>
                                <?php endforeach ?>
                                <div class="clearfix"></div>
                              </div>
                            </div>
                          </div>
                    </div>
                    <div class="form-group">
                          <label class="col-sm-2 control-label">Sở thích về âm nhạc</label>
                          <div class="col-sm-10">
                            <label data-toggle="collapse" data-target="#collapseNhac" aria-expanded="false" aria-controls="collapseNhac">
                              <input name="sothich[]" value="amnhac" type="checkbox"/> Yêu thích âm nhạc
                            </label>
                            <div id="collapseNhac" aria-expanded="false" class="collapse">
                              <div class="well">
                                <?php foreach ($sothich as $key): ?>
                                  <?php if ($key->danhmucsothich=="âm nhạc"): ?>
                                    <div class="col-sm-4">
                                      <input type="checkbox" name="amnhac[]" value="{{$key->tensothich}}" /> {{$key->tensothich}} <br>
                                    </div>
                                
                                  <?php endif ?>
                                <?php endforeach ?>
                                <div class="clearfix"></div>
                              </div>
                            </div>
                          </div>
                    </div>
                    <div class="form-group">
                          <label class="col-sm-2 control-label">Sở thích về phim ảnh</label>
                          <div class="col-sm-10">
                            <label data-toggle="collapse" data-target="#collapsePhim" aria-expanded="false" aria-controls="collapsePhim">
                              <input name="sothich[]" value="phimanh" type="checkbox"/> Yêu thích phim ảnh
                            </label>
                            <div id="collapsePhim" aria-expanded="false" class="collapse">
                              <div class="well">
                                <?php foreach ($sothich as $key): ?>
                                  <?php if ($key->danhmucsothich=="phim ảnh"): ?>
                                    <div class="col-sm-4">
                                      <input type="checkbox" name="phimanh[]" value="{{$key->tensothich}}" /> {{$key->tensothich}} <br>
                                    </div>
                                
                                  <?php endif ?>
                                <?php endforeach ?>
                                <div class="clearfix"></div>
                              </div>
                            </div>
                          </div>
                    </div>
                    <div class="form-group">
                          <label class="col-sm-2 control-label">Sở thích khác</label>
                          <div class="col-sm-10">
                            <label data-toggle="collapse" data-target="#collapseKhac" aria-expanded="false" aria-controls="collapseKhac">
                              <input name="sothich[]" value="bosung" type="checkbox"/> Bổ sung thêm sở thích
                            </label>
                            <div id="collapseKhac" aria-expanded="false" class="collapse">
                              <div class="well">
                                <?php foreach ($sothich as $key): ?>
                                  <?php if ($key->danhmucsothich=="Bổ sung thêm sở thích"): ?>
                                    <div class="col-sm-4">
                                      <input type="checkbox" name="bosung[]" value="{{$key->tensothich}}" /> {{$key->tensothich}} <br>
                                    </div>
                                
                                  <?php endif ?>
                                <?php endforeach ?>
                                 
                                <div class="clearfix"></div>
                              </div>
                            </div>
                          </div>
                    </div>
                    <div class="form-group">
                          <label class="col-sm-2 control-label">Ước mơ</label>
                          <div class="col-sm-10">
                            <span>
                              <div class="form-group">
                                <label for="uoc_mo">Ước mơ lớn nhất của bạn là gì?</label>
                                <textarea name="uocmo" class="form-control" rows="5" id="uoc_mo" placeholder="Tôi muốn trở thành một full stack developer."></textarea>
                              </div>
                            </span>
                          </div>
                    </div>
                    <div class="form-group">
                          <label class="col-sm-2 control-label">Khả năng đặc biệt</label>
                          <div class="col-sm-10">
                            <span>
                              <div class="form-group">
                                <textarea name="khanang" class="form-control" rows="5" id="" placeholder="Tôi có thể chạy marathon."></textarea>
                              </div>
                            </span>
                          </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-10"></div>
                        <div class="col-sm-2">
                            <input type="hidden" id="ratePoint" name="ratePoint" value=""/>
                             <a role="button" data-toggle="collapse"  href="#li_do_den_nhat"  aria-controls="gioi_thieu_ban_than" ">Tiếp tục</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      <!-- end div Giới thiệu bản thân -->