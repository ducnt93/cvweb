<!-- begin div Các dự án thực tế đã tham gia -->
<div class="panel panel-primary">
    <div class="panel-heading" role="tab" id="headingSeven">
        <h4 class="panel-title">
            <label>
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion_section4"
                   href="#du_an_thuc_te" aria-controls="du_an_thuc_te" style="color:white;">4.2.Các dự án thực tế đã
                    tham
                    gia</a>
                <i class="indicator glyphicon glyphicon-chevron-down  pull-right"></i>
            </label>
        </h4>
    </div>
    <div id="du_an_thuc_te" class="panel-collapse collapse">
        <div class="panel-body">
            <ol id="addremoveDu_an_thuc_te">
                <li>
                    <br/>
                    <div class="well">
                        <span class="form-horizontal">                                                                                    
                              <div class="form-group">
                                  <label for="inputTen_du_an" class="col-sm-3 control-label">Tên dự án</label>
                                  <div class="col-sm-9">
                                      <input type="text" class="form-control"
                                             name="ten[]" point=""/>
                                  </div>
                              </div> 
                              <div class="form-group">
                                  <label for="inputTom_tat_du_an" class="col-sm-3 control-label">Tóm tắt dự án</label>
                                  <div class="col-sm-9">
                                      <input type="text" class="form-control"
                                             name="tomtat[]" point=""/>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label for="inputTime_begin_du_an"
                                         class="col-sm-3 control-label">Ngày bắt đầu dự án</label>
                                  <div class="col-sm-9">
                                      <div class='input-group date'>
                                      <input type="text" class="form-control"
                                             name="ngaybatdau[]" point=""/>
                                           <span class="input-group-addon" id="btn_inputTime_begin_du_an">
                                         <span class="glyphicon glyphicon-calendar"></span>
                                     </span>
                                          </div>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label for="inputTime_end_du_an"
                                         class="col-sm-3 control-label">Ngày kết thúc dự án</label>
                                  <div class="col-sm-9">
                                      <div class='input-group date'>
                                      <input type="text" class="form-control"
                                             name="ngayketthuc[]" point=""/>
                                             <span class="input-group-addon" id="btn_inputTime_end_du_an">
                                         <span class="glyphicon glyphicon-calendar"></span>
                                     </span>
                                          </div>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label for="inputSo_nguoi_du_an" class="col-sm-3 control-label">Số người tham gia dự án</label>
                                  <div class="col-sm-9">
                                      <input type="number" min="1" class="form-control"
                                             name="songuoi[]" point=""/>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label for="inputChi_tiet_du_an" class="col-sm-3 control-label">Mô tả chi tiết về dự án</label>
                                  <div class="col-sm-9">
                                      <textarea row="5" class="form-control"
                                                name="chitiet[]" point=""></textarea>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label for="inputVai_tro_trong_du_an" class="col-sm-3 control-label">Vai trò trong dự án</label>
                                  <div class="col-sm-9">
                                      <textarea row="5" class="form-control"
                                                name="vaitro[]" point=""></textarea>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label for="inputCongviec_cuthe_du_an"
                                         class="col-sm-3 control-label">Công việc cụ thể</label>
                                  <div class="col-sm-9">
                                      <textarea row="5" class="form-control"
                                                name="congvieccuthe[]" point=""></textarea>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label for="inputEnviroment_du_an" class="col-sm-3 control-label">Môi trường phát triển</label>
                                  <div class="col-sm-9">
                                      <input type="text" class="form-control"
                                             name="moitruongpt[]" point=""/>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label for="inputNgonngu_trong_du_an" class="col-sm-3 control-label">Ngôn ngữ được sử dụng</label>
                                  <div class="col-sm-9">
                                      <input type="text" class="form-control"
                                             name="ngonngusd[]" point=""/>
                                  </div>
                              </div>                                                                                             
                        </span>
                    </div>
                </li>

            </ol>
            <nav aria-label="...">
                <ul class="pager">
                    <li><a id="addDu_an_thuc_te" href="#addremoveDu_an_thuc_te">Thêm</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<!-- end div Các dự án thực tế đã tham gia -->