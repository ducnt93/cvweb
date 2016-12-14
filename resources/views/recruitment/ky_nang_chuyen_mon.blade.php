<!-- begin div Kỹ năng chuyên môn -->
<div class="panel panel-primary">
    <div class="panel-heading" role="tab" id="headingFive">
        <h4 class="panel-title">
            <label>
                <a class="accordion-toggle" role="button" data-toggle="collapse" data-parent="#accordion_section3" href="#chuyen_mon"
                   aria-expanded="true" aria-controls="chuyen_mon" style="color:white;">3.1.Kỹ năng chuyên môn</a>
                <i class="indicator glyphicon glyphicon-chevron-down  pull-right"></i>
            </label>
        </h4>
    </div>
    <div id="chuyen_mon" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingFive">
        <div class="panel-body">
            <div class="form-group row">
                <label class="col-sm-2 control-label">Kiến thức kinh nghiệm về OS</label>
                <div class="col-sm-10">
                    <div class="row">
                        <?php foreach ($chuyennganh as $cn): ?>
                        <?php if ($cn->tennganh == "Kiến thức kinh nghiệm về OS"): ?>
                        <label class="col-sm-3" data-toggle="collapse" data-target="#collapse{{$cn->id}}"
                               aria-expanded="false"
                               aria-controls="collapse{{$cn->id}}" style="padding-left:5px;">
                            <input type="checkbox" name="inputOS[]" value="{{$cn->tenchuyenmon}}"/> {{$cn->tenchuyenmon}}
                        </label>
                        <?php endif ?>

                        <?php endforeach ?>
                    </div>
                    <div class="row">
                        <?php foreach ($chuyennganh as $cn): ?>
                        <?php if ($cn->tennganh == "Kiến thức kinh nghiệm về OS"): ?>
                        <div id="collapse{{$cn->id}}" aria-expanded="false" class="collapse">
                            <div class="well">
                                <div class="form-group">
                                    <label for="">Thời gian kinh nghiệm với {{$cn->tenchuyenmon}}</label>
                                    <select class="form-control" id="" name="input{{changeTitle($cn->tenchuyenmon)}}">
                                        <option value="Chưa có kinh nghiệm">Chưa có kinh nghiệm</option>
                                        <option value="01 - 03 tháng">01 - 03 tháng</option>
                                        <option value="03 - 06 tháng">03 - 06 tháng</option>
                                        <option value="06 - 09 tháng">06 - 09 tháng</option>
                                        <option value="09 - 12 tháng">09 - 12 tháng</option>
                                        <option value="12 - 15 tháng">12 - 15 tháng</option>
                                        <option value="15 - 18 tháng">15 - 18 tháng</option>
                                        <option value="18 - 21 tháng">18 - 21 tháng</option>
                                        <option value="21 - 24 tháng">21 - 24 tháng</option>
                                        <option value="Trên 24 tháng">Trên 24 tháng</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <?php endif ?>

                        <?php endforeach ?>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 control-label">Kiến thức kinh nghiệm về Database</label>
                <div class="col-sm-10">
                    <div class="row">
                        <?php foreach ($chuyennganh as $cn): ?>
                        <?php if ($cn->tennganh == "Kiến thức kinh nghiệm về Database"): ?>
                        <label class="col-sm-3" data-toggle="collapse" data-target="#collapse{{$cn->id}}"
                               aria-expanded="false"
                               aria-controls="collapseMsAccess" style="padding-left:5px;">
                            <input type="checkbox" value="{{$cn->tenchuyenmon}}" name="inputDB[]"/> {{$cn->tenchuyenmon}}
                        </label>
                        <?php endif ?>

                        <?php endforeach ?>
                    </div>
                    <div class="row">
                        <?php foreach ($chuyennganh as $cn): ?>
                        <?php if ($cn->tennganh == "Kiến thức kinh nghiệm về Database"): ?>
                        <div id="collapse{{$cn->id}}" aria-expanded="false" class="collapse">
                            <div class="well">
                                <div class="form-group">
                                    <label for="">Thời gian kinh nghiệm với {{$cn->tenchuyenmon}}</label>
                                    <select class="form-control" id="" name="input{{changeTitle($cn->tenchuyenmon)}}">
                                        <option value="Chưa có kinh nghiệm">Chưa có kinh nghiệm</option>
                                        <option value="01 - 03 tháng">01 - 03 tháng</option>
                                        <option value="03 - 06 tháng">03 - 06 tháng</option>
                                        <option value="06 - 09 tháng">06 - 09 tháng</option>
                                        <option value="09 - 12 tháng">09 - 12 tháng</option>
                                        <option value="12 - 15 tháng">12 - 15 tháng</option>
                                        <option value="15 - 18 tháng">15 - 18 tháng</option>
                                        <option value="18 - 21 tháng">18 - 21 tháng</option>
                                        <option value="21 - 24 tháng">21 - 24 tháng</option>
                                        <option value="Trên 24 tháng">Trên 24 tháng</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <?php endif ?>

                        <?php endforeach ?>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 control-label">Kiến thức kinh nghiệm về Ngôn ngữ lập trình, Framework,
                    IDE</label>
                <div class="col-sm-10">
                    <div class="row">
                        <?php foreach ($chuyennganh as $cn): ?>
                        <?php if ($cn->tennganh == "Kiến thức kinh nghiệm về Ngôn ngữ lập trình, Framework, IDE"): ?>
                        <label class="col-sm-3" data-toggle="collapse" data-target="#collapse{{$cn->id}}"
                               aria-expanded="false"
                               aria-controls="collapseMsAccess" style="padding-left:5px;">
                            <input type="checkbox" value="{{$cn->tenchuyenmon}}" name="inputIDE[]"/> {{$cn->tenchuyenmon}}
                        </label>
                        <?php endif ?>

                        <?php endforeach ?>
                    </div>
                    <div class="row">
                        <?php foreach ($chuyennganh as $cn): ?>
                        <?php if ($cn->tennganh == "Kiến thức kinh nghiệm về Ngôn ngữ lập trình, Framework, IDE"): ?>
                        <div id="collapse{{$cn->id}}" aria-expanded="false" class="collapse">
                            <div class="well">
                                <div class="form-group">
                                    <label for="">Thời gian kinh nghiệm với {{$cn->tenchuyenmon}}</label>
                                    <select class="form-control" id="" name="input{{changeTitle($cn->tenchuyenmon)}}">
                                        <option value="Chưa có kinh nghiệm">Chưa có kinh nghiệm</option>
                                        <option value="01 - 03 tháng">01 - 03 tháng</option>
                                        <option value="03 - 06 tháng">03 - 06 tháng</option>
                                        <option value="06 - 09 tháng">06 - 09 tháng</option>
                                        <option value="09 - 12 tháng">09 - 12 tháng</option>
                                        <option value="12 - 15 tháng">12 - 15 tháng</option>
                                        <option value="15 - 18 tháng">15 - 18 tháng</option>
                                        <option value="18 - 21 tháng">18 - 21 tháng</option>
                                        <option value="21 - 24 tháng">21 - 24 tháng</option>
                                        <option value="Trên 24 tháng">Trên 24 tháng</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <?php endif ?>

                        <?php endforeach ?>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 control-label">Kiến thức kinh nghiệm về vận hành máy chủ web</label>
                <div class="col-sm-10">
                    <div class="row">
                        <?php foreach ($chuyennganh as $cn): ?>
                        <?php if ($cn->tennganh == "Kiến thức kinh nghiệm về vận hành máy chủ web"): ?>
                        <label class="col-sm-3" data-toggle="collapse" data-target="#collapse{{$cn->id}}"
                               aria-expanded="false"
                               aria-controls="collapseMsAccess" style="padding-left:5px;">
                            <input type="checkbox" value="{{$cn->tenchuyenmon}}" name="inputWEB[]"/> {{$cn->tenchuyenmon}}
                        </label>
                        <?php endif ?>

                        <?php endforeach ?>
                    </div>
                    <div class="row">
                        <?php foreach ($chuyennganh as $cn): ?>
                        <?php if ($cn->tennganh == "Kiến thức kinh nghiệm về vận hành máy chủ web"): ?>
                        <div id="collapse{{$cn->id}}" aria-expanded="false" class="collapse">
                            <div class="well">
                                <div class="form-group">
                                    <label for="">Thời gian kinh nghiệm với {{$cn->tenchuyenmon}}</label>
                                    <select class="form-control" id="" name="input{{changeTitle($cn->tenchuyenmon)}}">
                                        <option value="Chưa có kinh nghiệm">Chưa có kinh nghiệm</option>
                                        <option value="01 - 03 tháng">01 - 03 tháng</option>
                                        <option value="03 - 06 tháng">03 - 06 tháng</option>
                                        <option value="06 - 09 tháng">06 - 09 tháng</option>
                                        <option value="09 - 12 tháng">09 - 12 tháng</option>
                                        <option value="12 - 15 tháng">12 - 15 tháng</option>
                                        <option value="15 - 18 tháng">15 - 18 tháng</option>
                                        <option value="18 - 21 tháng">18 - 21 tháng</option>
                                        <option value="21 - 24 tháng">21 - 24 tháng</option>
                                        <option value="Trên 24 tháng">Trên 24 tháng</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <?php endif ?>

                        <?php endforeach ?>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 control-label">Kiến thức về tin học văn phòng</label>
                <div class="col-sm-10">
                    <div class="row">
                        <label class="col-sm-3" style="padding-left:5px;">
                            <input name="inputVPhong[]" value="MsWord" type="checkbox"/> MsWord
                        </label>
                        <label class="col-sm-3" style="padding-left:5px;">
                            <input name="inputVPhong[]" value="MsExcel" type="checkbox"/> MsExcel
                        </label>
                        <label class="col-sm-3" style="padding-left:5px;">
                            <input name="inputVPhong[]" value="MsPowerPoint" type="checkbox"/> MsPowerPoint
                        </label>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 control-label">Kiến thức khác</label>
                <div class="col-sm-10">
                    <div class="row">
                        <label class="col-sm-3" style="padding-left:5px;">
                            <input name="inputKThucKhac[]" value="Hacking" type="checkbox"/> Hacking
                        </label>
                        <label class="col-sm-3" style="padding-left:5px;">
                            <input name="inputKThucKhac[]" value="Bigdata" type="checkbox"/> Bigdata
                        </label>
                        <label class="col-sm-3" style="padding-left:5px;">
                            <input name="inputKThucKhac[]" value="Git" type="checkbox"/> Git
                        </label>

                        <label class="col-sm-3" style="padding-left:5px;">
                            <input name="inputKThucKhac[]" value="Machine Learning" type="checkbox"/> Machine Learning
                        </label>
                        <label class="col-sm-3" style="padding-left:5px;">
                            <input name="inputKThucKhac[]" value="VMWare" type="checkbox"/> VMWare
                        </label>
                        <label class="col-sm-3" style="padding-left:5px;">
                            <input name="inputKThucKhac[]" value="Docker" type="checkbox"/> Docker
                        </label>
                        <label class="col-sm-3" style="padding-left:5px;">
                            <input name="inputKThucKhac[]" value="Photoshop" type="checkbox"/> Photoshop
                        </label>
                    </div>

                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end div Kỹ năng chuyên môn -->