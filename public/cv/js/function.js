$(document).ready(function () {
    //Hiện ảnh CV ngay trên trình duyệt
    function readURL(input) {

        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#avatar1').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#inputAnh").change(function(){
        readURL(this);
    });

    //Thêm, xóa kinh nghiệm làm việc
    var i = $('#addremoveKinh_nghiem_lam_viec li').size() + 1;
    $('a#addKinh_nghiem_lam_viec').click(function() {
        $('<li>' + '<br/><div class="form-group"><div class="well"><div class="form-group"><label for="cong_ty_lam_viec_4">Nơi làm việc: </label><input type="text" name="noilamviec[]" class="form-control" id="cong_ty_lam_viec_4" placeholder="Công ty D" /></div><div class="form-group"><label for="vi_tri_lam_viec_4">Vị trí làm việc: </label><input name="vitrilamviec[]" type="text" class="form-control" id="vi_tri_lam_viec_4" placeholder="Quản trị và bảo mật hệ thống" /></div><div class="form-group"><label for="mo_ta_cong_viec_4">Mô tả công việc: </label><textarea row="5" name="motacongviec[]"  class="form-control" id="mo_ta_cong_viec_4" placeholder="Vận hành, quản trị mô-đun bảo mật cho hệ thống mạng doanh nghiệp"></textarea></div><div class="form-group"><label for="timeBat_dau_lam_viec_4">Thời gian bắt đầu: </label><div class="input-group date"><input type="month" class="form-control" id="timeBat_dau_lam_viec_4"  name="thoigianbatdau[]" /></div></div><div class="form-group"><label for="timeKet_thuc_lam_viec_4">Thời gian kết thúc: </label><div class="input-group date"><input type="month" class="form-control" id="timeKet_thuc_lam_viec_4" name="thoigianketthuc[]"/></div></div><div class="clearfix"></div></div></div>' + '</li>').appendTo('ol#addremoveKinh_nghiem_lam_viec');
        i++;
    });
    $('a#removeKinh_nghiem_lam_viec').click(function() {
        $('#addremoveKinh_nghiem_lam_viec li:last').remove();
        i--;
    });

    //Thêm, xóa dự án thực tế
    var i = $('#addremoveDu_an_thuc_te li').size() + 1;
    $('a#addDu_an_thuc_te').click(function() {
        $('<li>' + '<br/><div class="well"><span class="form-horizontal"><div class="form-group"><label for="inputTen_du_an_4" class="col-sm-3 control-label">Tên dự án</label><div class="col-sm-9"><input type="text" class="form-control" id="inputTen_du_an_4" name="inputTen_du_an[]" point=""></div></div> <div class="form-group"><label for="inputTom_tat_du_an_4" class="col-sm-3 control-label">Tóm tắt dự án</label><div class="col-sm-9"><input type="text" class="form-control" id="inputTom_tat_du_an_4" name="inputTom_tat_du_an[]"point=""></div></div><div class="form-group"><label for="inputTime_begin_du_an_4" class="col-sm-3 control-label">Ngày bắt đầu dự án</label><div class="col-sm-9"><input type="date" class="form-control" id="inputTime_begin_du_an_4" name="inputTime_begin_du_an[]" point=""></div></div><div class="form-group"><label for="inputTime_end_du_an_4" class="col-sm-3 control-label">Ngày kết thúc dự án</label><div class="col-sm-9"><input type="date" class="form-control" id="inputTime_end_du_an_4" name="inputTime_end_du_an[]"  point=""></div></div><div class="form-group"><label for="inputSo_nguoi_du_an_4" class="col-sm-3 control-label">Số người tham gia dự án</label><div class="col-sm-9"><input type="number"  min="1" class="form-control" id="inputSo_nguoi_du_an_4" name="inputSo_nguoi_du_an[]" point=""></div></div><div class="form-group"><label for="inputChi_tiet_du_an_4" class="col-sm-3 control-label">Mô tả chi tiết về dự án</label><div class="col-sm-9"><textarea row="5" class="form-control" id="inputChi_tiet_du_an_4" name="inputChi_tiet_du_an[]" point=""></textarea></div></div><div class="form-group"><label for="inputVai_tro_trong_du_an_4" class="col-sm-3 control-label">Vai trò trong dự án</label><div class="col-sm-9"><textarea row="5" class="form-control" id="inputVai_tro_trong_du_an_4" name="inputVai_tro_trong_du_an[]" point=""></textarea></div></div><div class="form-group"><label for="inputCongviec_cuthe_du_an_4" class="col-sm-3 control-label">Công việc cụ thể</label><div class="col-sm-9"><textarea row="5" class="form-control" id="inputCongviec_cuthe_du_an_4" name="inputCongviec_cuthe_du_an[]"  point=""></textarea></div></div><div class="form-group"><label for="inputEnviroment_du_an_4" class="col-sm-3 control-label">Môi trường phát triển</label><div class="col-sm-9"><input type="text" class="form-control" id="inputEnviroment_du_an_4" name="inputEnviroment_du_an[]"  point=""></div></div><div class="form-group"><label for="inputNgonngu_trong_du_an_4" class="col-sm-3 control-label">Ngôn ngữ được sử dụng</label><div class="col-sm-9"><input type="text" class="form-control" id="inputNgonngu_trong_du_an_4" name="inputNgonngu_trong_du_an[]" point=""></div></div></span></div>' + '</li>').appendTo('ol#addremoveDu_an_thuc_te');
        i++;
    });
    $('a#removeDu_an_thuc_te').click(function() {
        $('#addremoveDu_an_thuc_te li:last').remove();
        i--;
    });

    $('a#addHocVan').click(function() {
        var i = $('#addRemoveHocVan li').size() + 1;
        $('<li>' +
            '<br/>' +
            '<div class="form-group"> ' +
            '<div class="well"> ' +
            '<div class="form-group">' +
            '<label for="truong_tot_nghiep">Trường tốt nghiệp:</label>' +
            ' <input type="text" class="form-control" name="truong_tot_nghiep[]" />' +
            '</div> ' +
            '<div class="form-group">' +
            '<label for="nganh_tot_nghiep">Ngành tốt nghiệp:</label>' +
            '<input type="text" class="form-control" id="nganh_tot_nghiep" name="nganh_tot_nghiep[]"/>' +
            '</div> ' +
            '<div class="form-group">' +
            ' <label for="nam_tot_nghiep">Năm Nhập học:</label> ' +
            '<input type="month" class="form-control" id="nam_tot_nghiep" name="nam_nhap_hoc[]" />' +
            '</div>' +
            '<div class="form-group">' +
            '<label for="nam_tot_nghiep">Năm tốt nghiệp:</label> ' +
            '<input type="month" class="form-control" id="nam_tot_nghiep" name="nam_tot_nghiep[]" />' +
            '</div> <div class="clearfix">' +
            '</div> ' +
            '</div> ' +
            '</div>' +
            '</li>').appendTo('ol#addRemoveHocVan');
        i++;
    });

});
