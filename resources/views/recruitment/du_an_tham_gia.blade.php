<!-- begin div Các dự án thực tế đã tham gia -->
<div class="panel panel-primary">
    <div class="panel-heading" role="tab" id="headingSeven">
        <h4 class="panel-title">

            <label>
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#du_an_thuc_te"
                   aria-expanded="false" aria-controls="du_an_thuc_te" style="color:white;">Các dự án thực tế đã tham
                    gia</a>
            </label>
        </h4>
    </div>
    <div id="du_an_thuc_te" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
        <div class="panel-body">
            <ol id="addremoveDu_an_thuc_te">
                <li>
                    <br/>
                    <div class="well">
                        <span class="form-horizontal">                                                                                    
                              <div class="form-group">
                                  <label for="inputTen_du_an_1" class="col-sm-3 control-label">Tên dự án</label>
                                  <div class="col-sm-9">
                                      <input type="text" class="form-control" id="inputTen_du_an_1"
                                             name="inputTen_du_an[]" point="">
                                  </div>
                              </div> 
                              <div class="form-group">
                                  <label for="inputTom_tat_du_an_1" class="col-sm-3 control-label">Tóm tắt dự án</label>
                                  <div class="col-sm-9">
                                      <input type="text" class="form-control" id="inputTom_tat_du_an_1"
                                             name="inputTom_tat_du_an[]" point="">
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label for="inputTime_begin_du_an_1"
                                         class="col-sm-3 control-label">Ngày bắt đầu dự án</label>
                                  <div class="col-sm-9">
                                      <input type="date" class="form-control" id="inputTime_begin_du_an_1"
                                             name="inputTime_begin_du_an[]" point="">
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label for="inputTime_end_du_an_1"
                                         class="col-sm-3 control-label">Ngày kết thúc dự án</label>
                                  <div class="col-sm-9">
                                      <input type="date" class="form-control" id="inputTime_end_du_an_1"
                                             name="inputTime_end_du_an[]" point="">
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label for="inputSo_nguoi_du_an_1" class="col-sm-3 control-label">Số người tham gia dự án</label>
                                  <div class="col-sm-9">
                                      <input type="number" min="1" class="form-control" id="inputSo_nguoi_du_an_1"
                                             name="inputSo_nguoi_du_an[]" point="">
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label for="inputChi_tiet_du_an_1" class="col-sm-3 control-label">Mô tả chi tiết về dự án</label>
                                  <div class="col-sm-9">
                                      <textarea row="5" class="form-control" id="inputChi_tiet_du_an_1"
                                                name="inputChi_tiet_du_an[]" point=""></textarea>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label for="inputVai_tro_trong_du_an_1" class="col-sm-3 control-label">Vai trò trong dự án</label>
                                  <div class="col-sm-9">
                                      <textarea row="5" class="form-control" id="inputVai_tro_trong_du_an_1"
                                                name="inputVai_tro_trong_du_an[]" point=""></textarea>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label for="inputCongviec_cuthe_du_an_1" class="col-sm-3 control-label">Công việc cụ thể</label>
                                  <div class="col-sm-9">
                                      <textarea row="5" class="form-control" id="inputCongviec_cuthe_du_an_1"
                                                name="inputCongviec_cuthe_du_an[]" point=""></textarea>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label for="inputEnviroment_du_an_1" class="col-sm-3 control-label">Môi trường phát triển</label>
                                  <div class="col-sm-9">
                                      <input type="text" class="form-control" id="inputEnviroment_du_an_1"
                                             name="inputEnviroment_du_an[]" point="">
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label for="inputNgonngu_trong_du_an_1" class="col-sm-3 control-label">Ngôn ngữ được sử dụng</label>
                                  <div class="col-sm-9">
                                      <input type="text" class="form-control" id="inputNgonngu_trong_du_an_1"
                                             name="inputNgonngu_trong_du_an[]" point="">
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
            <div class="form-group">
                <div class="col-sm-10"></div>
                <div class="col-sm-2">

                    <button type="submit" class="btn btn-primary">Tiếp tục</button>
                    <button type="button" class="btn btn-default">Hủy bỏ</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end div Các dự án thực tế đã tham gia -->