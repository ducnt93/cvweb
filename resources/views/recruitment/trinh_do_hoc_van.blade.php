<!-- begin div Trình độ học vấn -->
        <div class="panel panel-primary">
            <div class="panel-heading" role="tab" id="headingFour">
                <h4 class="panel-title">
                    <label>
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#trinh_do_hoc_van" aria-expanded="false" aria-controls="trinh_do_hoc_van" style="color:white;">Trình độ học vấn</a>
                    </label>
                </h4>
            </div>
            <div id="trinh_do_hoc_van" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
              <div class="panel-body">
                <div class="form-group">
                      <label class="col-sm-2 control-label">Trình độ học vấn</label>
                      <div class="col-sm-10">
                        <span>
                        <ol id="addRemoveHocVan">
                            <li>
                              <br/>
                          <div class="form-group">
                              <div class="well">
                                  <div class="form-group">
                                    <label for="truong_tot_nghiep">Trường tốt nghiệp:</label>
                                    <input type="text" class="form-control" id="truong_tot_nghiep" name="truong_tot_nghiep[]" />
                                  </div>
                                  <div class="form-group">
                                    <label for="nganh_tot_nghiep">Ngành tốt nghiệp:</label>
                                    <input type="text" class="form-control" id="nganh_tot_nghiep" placeholder="Áp dụng cho Đai học trở lên."  name="nganh_tot_nghiep[]"/>
                                  </div>
                                  <div class="form-group">
                                    <label for="nam_tot_nghiep">Năm Nhập học:</label>
                                    <input type="month" class="form-control" id="nam_tot_nghiep" name="nam_nhap_hoc[]" />
                                  </div>
                                  <div class="form-group">
                                    <label for="nam_tot_nghiep">Năm tốt nghiệp:</label>
                                    <input type="month" class="form-control" id="nam_tot_nghiep" name="nam_tot_nghiep[]" />
                                  </div>
                                  <div class="clearfix"></div>
                              </div>  
                                
                          </div>
                           </li>
                            
                          </ol>
                          <nav aria-label="...">
                            <ul class="pager">
                              <li><a id="addHocVan" href="#trinh_do_hoc_van">Thêm</a></li>
                                
                            </ul>
                          </nav>
                        </span>
                      </div>
                </div>
                <div class="form-group">
                            <label class="col-sm-2 control-label">Ngoại ngữ</label>
                            <div class="col-sm-10">
                                <label data-toggle="collapse" data-target="#collapseTiengAnh" aria-expanded="false"
                                       aria-controls="collapseTiengAnh" style="padding-left:5px;">
                                    <input name="ngoaingu[]" value="anh" type="checkbox"/> Tiếng Anh
                                </label>
                                <label data-toggle="collapse" data-target="#collapseTiengNhat" aria-expanded="false"
                                       aria-controls="collapseTiengNhat" style="padding-left:5px;">
                                    <input name="ngoaingu[]" value="nhat"  type="checkbox"/> Tiếng Nhật
                                </label>
                                <label data-toggle="collapse" data-target="#collapseTiengTrung" aria-expanded="false"
                                       aria-controls="collapseTiengTrung" style="padding-left:5px;">
                                    <input name="ngoaingu[]" value="trung" type="checkbox"/> Tiếng Trung
                                </label>

                                <div id="collapseTiengAnh" aria-expanded="false" class="collapse">
                                    <div class="well">
                                        <label data-toggle="collapse" data-target="#collapseToiec" aria-expanded="false"
                                               aria-controls="collapseToiec" style="padding-left:5px;">
                                            <input  type="checkbox"  name="anh[]" value="TOIEC" /> TOIEC
                                        </label>
                                        <div id="collapseToiec" aria-expanded="false" class="collapse">
                                          <label for="Toiec">Chứng chỉ TOIEC</label>
                                          <select class="form-control" id="Toiec" name="TOIEC">
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
                                            <input  type="checkbox"  name="anh[]" value="IELTS" />  IELTS
                                        </label>
                                        <div id="collapseIelts" aria-expanded="false" class="collapse">
                                          <label for="Ielts">Chứng chỉ IELTS</label>
                                          <select class="form-control" id="Ielts" name="IELTS">
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
                                            <input type="checkbox" value="TOEFL" name="anh[]" /> TOEFL
                                        </label>
                                        <div id="collapseToefl" aria-expanded="false" class="collapse">
                                          <label for="Toefl">Chứng chỉ TOEFL iBT</label>
                                          <select class="form-control" id="Toefl" name="TOEFL">
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
                                            <input type="checkbox"   name="anh[]"  value="CEFR" /> Chuẩn Châu Âu
                                        </label>
                                        <div id="collapseCefr" aria-expanded="false" class="collapse">
                                          <label for="Ceft">CEFR</label>
                                          <select class="form-control" id="Ceft" name="CEFR">
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
                                            <label><input type="radio" name="nhat" value="N1" /> N1 </label><br>
                                            <label><input type="radio" name="nhat" value="N2" /> N2</label>
                                        </div>
                                        <div class="col-sm-4">
                                            <label><input type="radio" name="nhat" value="N3" /> N3</label> <br>
                                            <label><input type="radio" name="nhat" value="N4" /> N4</label>
                                        </div>
                                        <div class="col-sm-4">
                                            <label><input type="radio" name="nhat" value="N5" /> N5</label> <br>
                                        </div>                                       
                                         
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div id="collapseTiengTrung" aria-expanded="false" class="collapse">
                                    <div class="well">
                                        <div class="col-sm-4">
                                            <label><input type="radio" name="trung" value="HSK1" /> HSK1 </label><br>
                                            <label><input type="radio" name="trung" value="HSK2" /> HSK2</label>
                                        </div>
                                        <div class="col-sm-4">
                                            <label><input type="radio" name="trung" value="HSK3" /> HSK3</label> <br>
                                            <label><input type="radio" name="trung" value="HSK4" /> HSK4</label>
                                        </div>
                                        <div class="col-sm-4">
                                            <label><input type="radio" name="trung" value="HSK5" /> HSK5</label> <br>
                                        </div>
                                        
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10"></div>
                    <div class="col-sm-2">
                        <input type="hidden" id="ratePoint" name="ratePoint" value=""/>
                        <a role="button" data-toggle="collapse"  href="#chuyen_mon"  aria-controls="gioi_thieu_ban_than">Tiếp tục</a>
                    </div>
                </div>
              </div>
            </div>
        </div>
      <!-- end div Trình độ học vấn -->
 