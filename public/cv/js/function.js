$(document).ready(function () {
    if (!$('#inputAnh').val()) {
        $('#showImg').css('display', 'none');
    }
    else {
        $('#showImg').css('display', 'block');
    }
    //Hiện ảnh CV ngay trên trình duyệt
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#avatar1')
                    .attr('src', e.target.result)
                    .width(160)
                    .height(190);
            };

            reader.readAsDataURL(input.files[0]);
            $('#showImg').css('display', 'block');
        }
    }

    $("#inputAnh").change(function () {
        readURL(this);
    });

    //Thêm, xóa kinh nghiệm làm việc
    var i = $('#addremoveKinh_nghiem_lam_viec li').size() + 1;
    $('a#addKinh_nghiem_lam_viec').click(function () {
        $('<li>' +
            '<br/>'+
            '<div class="well">'+
            '<span class="form-horizontal">'+
            '<div class="form-group">'+
            '<label for="inputNoiLamViec">Nơi làm việc: </label>'+
            '<input type="text" class="form-control" name="inputNoiLamViec[]"'+
            'placeholder="Công ty A"/>'+
            '</div>'+
            '<div class="form-group">'+
            '<label for="inputViTriLamViec">Vị trí làm việc: </label>'+
            '<input type="text" class="form-control" name="inputViTriLamViec[]"'+
            'placeholder="Thực tập sinh"/>'+
            '</div>'+
            '<div class="form-group">'+
            '<label for="inputMoTaCongViec">Mô tả công việc: </label>'+
            '<textarea row="5" class="form-control"'+
            'name="inputMoTaCongViec[]"'+
            'placeholder="Training về jQuery và Bootstrap..."></textarea>'+
            '</div>'+
            '<div class="form-group">'+
            '<label for="inputThoiGianBatDau">Thời gian bắt đầu: </label>'+
            '<div class="input-group date">'+
            '<input type="date" class="form-control"'+
            'name="inputThoiGianBatDau[]"/>'+
            '<span class="input-group-addon" id="btn_inputThoiGianBatDau">'+
            '<span class="glyphicon glyphicon-calendar"></span></span>'+
            '</div>'+
            '</div>'+
            '<div class="form-group">'+
            '<label for="inputThoiGianKetThuc">Thời gian kết thúc: </label>'+
            '<div class="input-group date">'+
            '<input type="date" class="form-control"'+
            'name="inputThoiGianKetThuc[]"/>'+
            '<span class="input-group-addon" id="btn_inputThoiGianKetThuc">'+
            '<span class="glyphicon glyphicon-calendar"></span>'+
            '</span>'+
            '</div>'+
            '</div>'+
            '</span>'+
            '</div>'+
            '</li>').appendTo('ol#addremoveKinh_nghiem_lam_viec');
        i++;
    });
    $('a#removeKinh_nghiem_lam_viec').click(function () {
        $('#addremoveKinh_nghiem_lam_viec li:last').remove();
        i--;
    });

    //Thêm, xóa dự án thực tế
    var i = $('#addremoveDu_an_thuc_te li').size() + 1;
    $('a#addDu_an_thuc_te').click(function () {
        $('<li>' +
            '<br/>' +
            '<div class="well">' +
            '<span class="form-horizontal">' +
            '<div class="form-group">' +
            '<label for="inputTen_du_an_4" class="col-sm-3 control-label">Tên dự án</label>' +
            '<div class="col-sm-9">' +
            '<input type="text" class="form-control" id="inputTen_du_an_4" name="ten[]" point="">' +
            '</div>' +
            '</div> ' +
            '<div class="form-group">' +
            '<label for="inputTom_tat_du_an_4" class="col-sm-3 control-label">Tóm tắt dự án</label>' +
            '<div class="col-sm-9">' +
            '<input type="text" class="form-control" id="inputTom_tat_du_an_4" name="tomtat[]"point="">' +
            '</div>' +
            '</div>' +
            '<div class="form-group">'+
            '<label for="inputTime_begin_du_an"'+
            'class="col-sm-3 control-label">Ngày bắt đầu dự án</label>'+
            '<div class="col-sm-9">'+
            '<div class="input-group date">'+
            '<input type="date" class="form-control"'+
            'name="ngaybatdau[]" point=""/>'+
            '<span class="input-group-addon" id="btn_inputTime_begin_du_an">'+
            '<span class="glyphicon glyphicon-calendar"></span>'+
            '</span>'+
            '</div>'+
            '</div>'+
            '</div>'+
            '<div class="form-group">'+
            '<label for="inputTime_end_du_an"'+
            'class="col-sm-3 control-label">Ngày kết thúc dự án</label>'+
            '<div class="col-sm-9">'+
            '<div class="input-group date">'+
            '<input type="date" class="form-control"'+
            'name="ngayketthuc[]" point="">'+
            '<span class="input-group-addon" id="btn_inputTime_end_du_an">'+
            '<span class="glyphicon glyphicon-calendar"></span>'+
            '</span>'+
            '</div>'+
            '</div>'+
            '</div>'+
            '<div class="form-group">' +
            '<label for="inputSo_nguoi_du_an_4" class="col-sm-3 control-label">Số người tham gia dự án</label>' +
            '<div class="col-sm-9">' +
            '<input type="number"  min="1" class="form-control" id="inputSo_nguoi_du_an_4" name="songuoi[]" point="">' +
            '</div>' +
            '</div>' +
            '<div class="form-group">' +
            '<label for="inputChi_tiet_du_an_4" class="col-sm-3 control-label">Mô tả chi tiết về dự án</label>' +
            '<div class="col-sm-9">' +
            '<textarea row="5" class="form-control" id="inputChi_tiet_du_an_4" name="chitiet[]" point=""></textarea>' +
            '</div>' +
            '</div>' +
            '<div class="form-group">' +
            '<label for="inputVai_tro_trong_du_an_4" class="col-sm-3 control-label">Vai trò trong dự án</label>' +
            '<div class="col-sm-9">' +
            '<textarea row="5" class="form-control" id="inputVai_tro_trong_du_an_4" name="vaitro[]" point="">' +
            '</textarea>' +
            '</div>' +
            '</div>' +
            '<div class="form-group">' +
            '<label for="inputCongviec_cuthe_du_an_4" class="col-sm-3 control-label">Công việc cụ thể</label>' +
            '<div class="col-sm-9">' +
            '<textarea row="5" class="form-control" id="inputCongviec_cuthe_du_an_4" name="congvieccuthe[]"  point="">' +
            '</textarea>' +
            '</div>' +
            '</div>' +
            '<div class="form-group">' +
            '<label for="inputEnviroment_du_an_4" class="col-sm-3 control-label">Môi trường phát triển</label>' +
            '<div class="col-sm-9">' +
            '<input type="text" class="form-control" id="inputEnviroment_du_an_4" name="moitruongpt[]"  point="">' +
            '</div>' +
            '</div>' +
            '<div class="form-group">' +
            '<label for="inputNgonngu_trong_du_an_4" class="col-sm-3 control-label">Ngôn ngữ được sử dụng</label><div class="col-sm-9">' +
            '<input type="text" class="form-control" id="inputNgonngu_trong_du_an_4" name="ngonngusd[]" point="">' +
            '</div>' +
            '</div>' +
            '</span>' +
            '</div>' +
            '</li>').appendTo('ol#addremoveDu_an_thuc_te');
        i++;
    });
    $('a#removeDu_an_thuc_te').click(function () {
        $('#addremoveDu_an_thuc_te li:last').remove();
        i--;
    });

    $('a#addHocVan').click(function () {
        var i = $('#addRemoveHocVan li').size() + 1;
        $('<li>'+
            '<br/>'+
            '<div class="well">'+
            '<span class="form-horizontal">'+
            '<div class="form-group">'+
            '<label for="inputTruongTotNghiep">Trường tốt nghiệp<span'+
            'class="required_input">(*)</span> :</label>'+
            '<input type="text" class="form-control"'+
            'name="inputTruongTotNghiep[]"/>'+
            '<label for="inputTruongTotNghiep" class="error"></label>'+
            '</div>'+
            '<div class="form-group">'+
            '<label for="inputNganhTotNghiep">Ngành tốt nghiệp<span'+
            'class="required_input">(*)</span> :</label>'+
            '<input type="text" class="form-control"'+
            'placeholder="Áp dụng cho Đai học trở lên." name="inputNganhTotNghiep[]"/>'+
            '<label for="inputNganhTotNghiep" class="error"></label>'+
            '</div>'+
            '<div class="form-group">'+
            '<label for="inputNamNhapHoc">Năm Nhập học<span'+
            'class="required_input">(*)</span> :</label>'+
            '<div class="input-group date">'+
            '<input type="date" class="form-control" id="inputNamNhapHoc" name="inputNamNhapHoc[]"/>'+
            '<span class="input-group-addon" id="btn_nam_nhap_hoc">'+
            '<span class="glyphicon glyphicon-calendar"></span>'+
            '</span>'+
            '</div>'+
            '<label for="inputNamNhapHoc" class="error"></label>'+
            '</div>'+
            '<div class="form-group">'+
            '<label for="inputNamTotNghiep">Năm tốt nghiệp<span'+
            'class="required_input">(*)</span> :</label>'+
            '<div class="input-group date">'+
            '<input type="date" class="form-control"'+
            'name="inputNamTotNghiep[]"/>'+
            '<span class="input-group-addon" id="btn_nam_tot_nghiep">'+
            '<span class="glyphicon glyphicon-calendar"></span>'+
            '</span>'+
            '</div>'+
            '<label for="inputNamTotNghiep" class="error"></label>'+
            '</div>'+
            '</span>'+
            '</div>'+
            '</li>').appendTo('ol#addRemoveHocVan');
        i++;
    });

});
