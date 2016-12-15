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
                                      {{Form::text('ten',null,['class' => 'form-control', 'name' => 'ten[]'])}}
                                  </div>
                              </div> 
                              <div class="form-group">
                                  <label for="inputTom_tat_du_an" class="col-sm-3 control-label">Tóm tắt dự án</label>
                                  <div class="col-sm-9">
                                      {{Form::text('tomtat',null,['class' => 'form-control', 'name' => 'tomtat[]'])}}
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label for="inputTime_begin_du_an"
                                         class="col-sm-3 control-label">Ngày bắt đầu dự án</label>
                                  <div class="col-sm-9">
                                      <div class='input-group date'>
                                          {{Form::text('ngaybatdau',null,['class' => 'form-control', 'name' => 'ngaybatdau[]'])}}
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
                                          {{Form::text('ngayketthuc',null,['class' => 'form-control', 'name' => 'ngayketthuc[]'])}}
                                          <span class="input-group-addon" id="btn_inputTime_end_du_an">
                                         <span class="glyphicon glyphicon-calendar"></span>
                                     </span>
                                          </div>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label for="inputSo_nguoi_du_an" class="col-sm-3 control-label">Số người tham gia dự án</label>
                                  <div class="col-sm-9">
                                      {{Form::number('songuoi',null,['class' => 'form-control', 'name' => 'songuoi[]'])}}
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label for="inputChi_tiet_du_an" class="col-sm-3 control-label">Mô tả chi tiết về dự án</label>
                                  <div class="col-sm-9">
                                      {{Form::textarea('chitiet',null,['class' => 'form-control', 'name' => 'chitiet[]', 'row' => '5'])}}
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label for="inputVai_tro_trong_du_an" class="col-sm-3 control-label">Vai trò trong dự án</label>
                                  <div class="col-sm-9">
                                      {{Form::textarea('vaitro',null,['class' => 'form-control', 'name' => 'vaitro[]', 'row' => '5'])}}
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label for="inputCongviec_cuthe_du_an"
                                         class="col-sm-3 control-label">Công việc cụ thể</label>
                                  <div class="col-sm-9">
                                      {{Form::textarea('congvieccuthe',null,['class' => 'form-control', 'name' => 'congvieccuthe[]', 'row' => '5'])}}
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label for="inputEnviroment_du_an" class="col-sm-3 control-label">Môi trường phát triển</label>
                                  <div class="col-sm-9">
                                      {{Form::text('moitruongpt',null,['class' => 'form-control', 'name' => 'moitruongpt[]'])}}
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label for="inputNgonngu_trong_du_an" class="col-sm-3 control-label">Ngôn ngữ được sử dụng</label>
                                  <div class="col-sm-9">
                                      {{Form::text('ngonngusd',null,['class' => 'form-control', 'name' => 'ngonngusd[]'])}}
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