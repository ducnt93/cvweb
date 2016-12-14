<!-- begin div Trình độ học vấn -->
<div class="panel panel-primary">
    <div class="panel-heading" role="tab" id="headingFour">
        <h4 class="panel-title">
            <label>
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion_section2"
                   href="#trinh_do_hoc_van" aria-controls="trinh_do_hoc_van" style="color:white;">2.3.Trình
                    độ học vấn</a>
                <i class="indicator glyphicon glyphicon-chevron-down  pull-right"></i>
            </label>
        </h4>
    </div>
    <div id="trinh_do_hoc_van" class="panel-collapse collapse">
        <div class="panel-body">
            <div class="form-group">
                <label class="col-sm-2 control-label">Trình độ học vấn</label>
                <div class="col-sm-10">
                    <ol id="addRemoveHocVan">
                        <li>
                            <br/>
                            <div class="well">
                                <span class="form-horizontal">
                                    <div class="form-group">
                                        <label for="inputTruongTotNghiep">Trường tốt nghiệp<span
                                                    class="required_input">(*)</span> :</label>
                                        <input type="text" class="form-control"
                                               name="inputTruongTotNghiep[]"/>
                                        <label for="inputTruongTotNghiep" class="error"></label>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputNganhTotNghiep">Ngành tốt nghiệp<span
                                                    class="required_input">(*)</span> :</label>
                                        <input type="text" class="form-control"
                                               placeholder="Áp dụng cho Đai học trở lên." name="inputNganhTotNghiep[]"/>
                                        <label for="inputNganhTotNghiep" class="error"></label>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputNamNhapHoc">Năm Nhập học<span
                                                    class="required_input">(*)</span> :</label>
                                        <div class='input-group date'>
                                            <input type="text" class="form-control" name="inputNamNhapHoc[]"/>
                                            <span class="input-group-addon" id="btn_nam_nhap_hoc">
                                             <span class="glyphicon glyphicon-calendar"></span>
                                         </span>
                                        </div>
                                        <label for="inputNamNhapHoc" class="error"></label>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputNamTotNghiep">Năm tốt nghiệp<span
                                                    class="required_input">(*)</span> :</label>
                                        <div class='input-group date'>
                                            <input type="text" class="form-control"
                                                   name="inputNamTotNghiep[]"/>
                                            <span class="input-group-addon" id="btn_nam_tot_nghiep">
                                             <span class="glyphicon glyphicon-calendar"></span>
                                         </span>
                                        </div>
                                        <label for="inputNamTotNghiep" class="error"></label>
                                    </div>
                                </span>
                            </div>
                        </li>
                    </ol>
                    <nav aria-label="...">
                        <ul class="pager">
                            <li><a id="addHocVan" href="#trinh_do_hoc_van">Thêm</a></li>

                        </ul>
                    </nav>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Ngoại ngữ</label>
                <div class="col-sm-10">
                    <label data-toggle="collapse" data-target="#collapseTiengAnh" aria-expanded="false"
                           aria-controls="collapseTiengAnh" style="padding-left:5px;">
                        <input name="inputNgoaiNgu[]" value="anh" type="checkbox"/> Tiếng Anh
                    </label>
                    <label data-toggle="collapse" data-target="#collapseTiengNhat" aria-expanded="false"
                           aria-controls="collapseTiengNhat" style="padding-left:5px;">
                        <input name="inputNgoaiNgu[]" value="nhat" type="checkbox"/> Tiếng Nhật
                    </label>
                    <label data-toggle="collapse" data-target="#collapseTiengTrung" aria-expanded="false"
                           aria-controls="collapseTiengTrung" style="padding-left:5px;">
                        <input name="inputNgoaiNgu[]" value="trung" type="checkbox"/> Tiếng Trung
                    </label>

                    <div id="collapseTiengAnh" aria-expanded="false" class="collapse">
                        <div class="well">
                            <label data-toggle="collapse" data-target="#collapseToiec" aria-expanded="false"
                                   aria-controls="collapseToiec" style="padding-left:5px;">
                                <input type="checkbox" name="inputAnh[]" value="TOIEC"/> TOIEC
                            </label>
                            <div id="collapseToiec" aria-expanded="false" class="collapse">
                                <label for="Toiec">Chứng chỉ TOIEC</label>
                                <select class="form-control" id="Toiec" name="inputTOIEC">
                                    <option value="450">450</option>
                                    <option value="500">500</option>
                                    <option value="550">550</option>
                                    <option value="600">600</option>
                                    <option value="650">650</option>
                                    <option value="700">700</option>
                                    <option value="750">750</option>
                                    <option value="800">800</option>
                                    <option value="850">850</option>
                                    <option value="900">900</option>
                                </select>
                            </div>
                            <label data-toggle="collapse" data-target="#collapseIelts" aria-expanded="false"
                                   aria-controls="collapseIelts" style="padding-left:5px;">
                                <input type="checkbox" name="inputAnh[]" value="IELTS"/> IELTS
                            </label>
                            <div id="collapseIelts" aria-expanded="false" class="collapse">
                                <label for="Ielts">Chứng chỉ IELTS</label>
                                <select class="form-control" id="Ielts" name="inputIELTS">
                                    <option value="5.0">5.0</option>
                                    <option value="5.5">5.5</option>
                                    <option value="6.0">6.0</option>
                                    <option value="6.5">6.5</option>
                                    <option value="7.0">7.0</option>
                                    <option value="7.5">7.5</option>
                                    <option value="8.0">8.0</option>
                                    <option value="8.5">8.5</option>
                                    <option value="9.0">9.0</option>
                                </select>
                            </div>
                            <label data-toggle="collapse" data-target="#collapseToefl" aria-expanded="false"
                                   aria-controls="collapseToefl" style="padding-left:5px;">
                                <input type="checkbox" value="TOEFL" name="inputAnh[]"/> TOEFL
                            </label>
                            <div id="collapseToefl" aria-expanded="false" class="collapse">
                                <label for="Toefl">Chứng chỉ TOEFL iBT</label>
                                <select class="form-control" id="Toefl" name="inputTOEFL">
                                    <option value="32 - 34">32 - 34</option>
                                    <option value="35 - 45">35 - 45</option>
                                    <option value="46 - 59">46 - 59</option>
                                    <option value="60 - 78">60 - 78</option>
                                    <option value="79 - 93">79 - 93</option>
                                    <option value="94 - 101">94 - 101</option>
                                    <option value="102 - 109">102 - 109</option>
                                    <option value="110 - 114">110 - 114</option>
                                    <option value="115 - 117">115 - 117</option>
                                    <option value="118 - 120">118 - 120</option>
                                </select>
                            </div>
                            <label data-toggle="collapse" data-target="#collapseCefr" aria-expanded="false"
                                   aria-controls="collapseCefr" style="padding-left:5px;">
                                <input type="checkbox" name="inputAnh[]" value="CEFR"/> Chuẩn Châu Âu
                            </label>
                            <div id="collapseCefr" aria-expanded="false" class="collapse">
                                <label for="Ceft">CEFR</label>
                                <select class="form-control" id="Ceft" name="inputCEFR">
                                    <option value="A1">A1</option>
                                    <option value="A2">A2</option>
                                    <option value="B1">B1</option>
                                    <option value="B2">B2</option>
                                    <option value="C1">C1</option>
                                    <option value="C2">C2</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div id="collapseTiengNhat" aria-expanded="false" class="collapse">
                        <div class="well">
                            <div class="col-sm-4">
                                <label><input type="radio" name="inputNhat" value="N1"/> N1 </label><br>
                                <label><input type="radio" name="inputNhat" value="N2"/> N2</label>
                            </div>
                            <div class="col-sm-4">
                                <label><input type="radio" name="inputNhat" value="N3"/> N3</label> <br>
                                <label><input type="radio" name="inputNhat" value="N4"/> N4</label>
                            </div>
                            <div class="col-sm-4">
                                <label><input type="radio" name="inputNhat" value="N5"/> N5</label> <br>
                            </div>

                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div id="collapseTiengTrung" aria-expanded="false" class="collapse">
                        <div class="well">
                            <div class="col-sm-4">
                                <label><input type="radio" name="inputTrung" value="HSK1"/> HSK1 </label><br>
                                <label><input type="radio" name="inputTrung" value="HSK2"/> HSK2</label>
                            </div>
                            <div class="col-sm-4">
                                <label><input type="radio" name="inputTrung" value="HSK3"/> HSK3</label> <br>
                                <label><input type="radio" name="inputTrung" value="HSK4"/> HSK4</label>
                            </div>
                            <div class="col-sm-4">
                                <label><input type="radio" name="inputTrung" value="HSK5"/> HSK5</label> <br>
                            </div>

                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end div Trình độ học vấn -->
 