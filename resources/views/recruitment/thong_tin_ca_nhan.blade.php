<!-- begin div Thông tin cá nhân -->
        <div class="panel panel-primary">
            <div class="panel-heading" role="tab" id="headingOne">
                <h4 class="panel-title">
                    <label>
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#thong_tin_ca_nhan" aria-expanded="true" aria-controls="thong_tin_ca_nhan" style="color:white;">Thông tin cá nhân</a>
                    </label>
                </h4>
            </div>
            <div id="thong_tin_ca_nhan" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body">
                    <span class="form-horizontal">
                        <div class="form-group">
                            <label for="inputHo" class="col-sm-2 control-label" lang="jp" required>Họ và tên：</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputHo"
                                       placeholder="Đỗ Văn A"
                                       name="inputHo" point="10" required>
                                <div class="output" id="inputHo_output" lang="jp"></div>
                            </div>
                        </div>
                        <div class="form-group form-inline">
                            <label for="inputNgaysinh" class="col-sm-2 control-label">Ngày sinh</label>
                            <div class="col-sm-10">
                                <div class='input-group date'>
                                    <input type='date' class="form-control" id='inputNgaysinh' name="inputNgaysinh" required/>
                                    <!-- <span class="input-group-addon">
                                         <span class="glyphicon glyphicon-calendar"></span>
                                     </span>-->
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Giới tính</label>
                            <div class="col-sm-10">
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="inputGioitinh" id="inputGioitinhNam"
                                               value="1" checked point="5">
                                        Nam
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="inputGioitinh" id="inputGioitinhNu" value="0"
                                               point="5">
                                        Nữ
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputDiachi" class="col-sm-2 control-label">Địa chỉ</label>
                            <div class="col-sm-10">
                                <input type="text" name="inputDiachi" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputSdt" class="col-sm-2 control-label">Số điện thoại</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputSdt"  required
                                       placeholder="Số máy di động hoặc số máy cố định" name="inputSdt" point="10">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail" class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputEmail" required
                                       placeholder="Nhập địa chỉ Email" name="inputEmail" point="10">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputQuequan" class="col-sm-2 control-label">Quê quán</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputQuequan" placeholder="Ba Dinh, Ha Noi" name="inputQuequan" point="5" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Ảnh CV</label>
                            <div class="col-sm-10">
                                <span id="form-avatar" runat="server">
                                    <input type='file' id="inputAnh" name="inputAnh"  required/><br/>
                                    <img id="avatar1" src="#" alt="ảnh 3x4 cm" style="width:114px; height:152px;"
                                         point="5"/>
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-10"></div>
                            <div class="col-sm-2">
                                <input type="hidden" id="ratePoint" name="ratePoint" value=""/>
                                <a role="button" data-toggle="collapse"  href="#gioi_thieu_ban_than"  aria-controls="gioi_thieu_ban_than" ">Tiếp tục</a>
                                </a>
                                 
                            </div>
                        </div>
                    </span>
                </div>
            </div>
        </div>
      <!-- end div Thông tin cá nhân -->