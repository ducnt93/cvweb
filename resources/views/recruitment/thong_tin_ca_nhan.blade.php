<!-- begin div Thông tin cá nhân -->
<div class="panel panel-primary">
    <div class="panel-heading" role="tab" id="headingOne">
        <h4 class="panel-title">
            <label>
                <a class="accordion-toggle" data-toggle="collapse" href="#thong_tin_ca_nhan"  aria-expanded="true"
                   data-parent="#accordion_section1" aria-controls="thong_tin_ca_nhan" style="color:white;">1.2.Thông
                    tin cá nhân</a>
                <i class="indicator glyphicon glyphicon-chevron-down  pull-right"></i>
            </label>
        </h4>
    </div>
    <div id="thong_tin_ca_nhan" class="panel-collapse collapse in">
        <div class="panel-body">
                    <span class="form-horizontal">
                        <div class="form-group">
                            <label for="inputHo" class="col-sm-2 control-label" lang="jp">Họ và tên<span
                                        class="required_input">(*)</span> :</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control1 required" id="inputHo"
                                       placeholder="Đỗ Văn A"
                                       name="inputHo" point="10">
                                <label for="inputHo" class="error"></label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Ngày sinh<span
                                        class="required_input">(*)</span> :</label>
                            <div class="col-sm-10">
                                <div class='input-group date'>
                                    <input type='text' class="form-control1 required" id='inputNgaysinh'
                                           name="inputNgaysinh"/>
                                    <span class="input-group-addon" id="btn_inputNgaySinh">
                                         <span class="glyphicon glyphicon-calendar"></span>
                                     </span>
                                </div>
                                <label for="inputNgaysinh" class="error"></label>
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
                            <label for="inputDiachi" class="col-sm-2 control-label">Địa chỉ
                                <span class="required_input">(*)</span> :</label>
                            <div class="col-sm-10">
                                <input type="text" name="inputDiachi" class="form-control1 required"
                                       placeholder="Duy Tân, Cầu Giấy, Hà Nội">
                                <label for="inputDiachi" class="error"></label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputSdt" class="col-sm-2 control-label">Số điện thoại<span
                                        class="required_input">(*)</span> :</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control1 required" id="inputSdt"
                                       placeholder="Số máy di động hoặc số máy cố định" name="inputSdt" point="10">
                                <label for="inputSdt" class="error"></label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail" class="col-sm-2 control-label">Email<span
                                        class="required_input">(*)</span> :</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control1 required" id="inputEmail"
                                       placeholder="Nhập địa chỉ Email" name="inputEmail" point="10">
                                 <label for="inputEmail" class="error"></label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputQuequan" class="col-sm-2 control-label">Quê quán<span
                                        class="required_input">(*)</span> :</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control1 required" id="inputQuequan"
                                       placeholder="Ba Dinh, Ha Noi"
                                       name="inputQuequan" point="5">
                                <label for="inputQuequan" class="error"></label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Ảnh CV<span
                                        class="required_input">(*)</span> :</label>
                            <div class="col-sm-10">
                                <input type='file' id="inputAnh" name="inputAnh"/>
                                <div id="showImg">
                                    <img id="avatar1" src="#" alt="ảnh 3x4 cm"/>
                                </div>
                                 <label for="inputAnh" class="error"></label>
                            </div>
                        </div>
                    </span>
        </div>
    </div>
</div>
<!-- end div Thông tin cá nhân -->