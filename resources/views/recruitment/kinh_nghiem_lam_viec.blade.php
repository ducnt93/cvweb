<!-- begin div Kinh nghiệm làm việc -->
<div class="panel panel-primary">
    <div class="panel-heading" role="tab" id="headingSix">
        <h4 class="panel-title">
            <label>
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion_section4"
                   href="#kinh_nghiem_lam_viec" aria-expanded="true" aria-controls="kinh_nghiem_lam_viec"
                   style="color:white;">4.1.Kinh nghiệm làm việc</a>
                <i class="indicator glyphicon glyphicon-chevron-down  pull-right"></i>
            </label>
        </h4>
    </div>
    <div id="kinh_nghiem_lam_viec" class="panel-collapse collapse in">
        <div class="panel-body">
            <ol id="addremoveKinh_nghiem_lam_viec">
                <li>
                    <br/>
                    <div class="well">
                        <span class="form-horizontal">
                            <div class="form-group">
                                <label for="inputNoiLamViec">Nơi làm việc: </label>
                                {{Form::text('inputNoiLamViec',null,['class' => 'form-control', 'name' => 'inputNoiLamViec[]', 'placeholder' => 'Công ty A'])}}
                            </div>
                            <div class="form-group">
                                <label for="inputViTriLamViec">Vị trí làm việc: </label>
                                {{Form::text('inputViTriLamViec',null,['class' => 'form-control', 'name' => 'inputViTriLamViec[]', 'placeholder' => 'Thực tập sinh'])}}
                            </div>
                            <div class="form-group">
                                <label for="inputMoTaCongViec">Mô tả công việc: </label>
                                {{Form::textarea('inputMoTaCongViec',null,['row' => '5','class' => 'form-control', 'name' => 'inputMoTaCongViec[]', 'placeholder' => 'Training về jQuery và Bootstrap...'])}}
                            </div>
                            <div class="form-group">
                                <label for="inputThoiGianBatDau">Thời gian bắt đầu: </label>
                                <div class="input-group date">
                                    {{Form::text('inputThoiGianBatDau',null,['class' => 'form-control', 'name' => 'inputThoiGianBatDau[]'])}}
                                    <span class="input-group-addon" id="btn_inputThoiGianBatDau">
                                             <span class="glyphicon glyphicon-calendar"></span></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputThoiGianKetThuc">Thời gian kết thúc: </label>
                                <div class="input-group date">
                                    {{Form::text('inputThoiGianKetThuc',null,['class' => 'form-control', 'name' => 'inputThoiGianKetThuc[]'])}}
                                    <span class="input-group-addon" id="btn_inputThoiGianKetThuc">
                                             <span class="glyphicon glyphicon-calendar"></span>
                                         </span>
                                </div>
                            </div>
                        </span>
                    </div>
                </li>

            </ol>
            <nav aria-label="...">
                <ul class="pager">
                    <li><a id="addKinh_nghiem_lam_viec" href="#kinh_nghiem_lam_viec">Thêm</a></li>
                </ul>
            </nav>
            <div class="form-group">
                <div class="col-sm-9"></div>
                <div class="col-sm-3">
                    <a role="button" data-toggle="collapse" href="#du_an_thuc_te"
                       aria-controls="gioi_thieu_ban_than">Dự án đã tham gia <span aria-hidden="true">»</span></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end div Kinh nghiệm làm việc -->