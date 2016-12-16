/**
 * Created by Administrator on 14/12/2016.
 */
$(document).ready(function () {

    function showDateNgaySinh(target) {
        //datetimepicker nam sinh.
        var date_input = $('input[name="' + target + '"]');
        var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() : "body";
        date_input.datepicker({
            format: 'dd/mm/yyyy',
            container: container,
            todayHighlight: true,
            autoclose: true,
        });
    }

    function showDateWithFocus(target) {
        var date_input = $('input[name="' + target + '"]');
        var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() : "body";
        date_input.datepicker({
            format: 'dd/mm/yyyy',
            container: container,
            todayHighlight: true,
            autoclose: true,
        }).focus();
    }

    // Ngay sinh
    showDateNgaySinh('inputNgaysinh');

    // when click icon calender
    $('#btn_inputNgaySinh').click(function () {
        showDateWithFocus('inputNgaysinh');
    });
    //End ngay sinh

    // Nam nhap hoc
    showDateNgaySinh('inputNamNhapHoc[]');

    // when click icon calender
    $('#btn_nam_nhap_hoc').click(function () {
        showDateWithFocus('inputNamNhapHoc[]');
    });
    // End nam nhap hoc

    // Nam tot nghiep
    showDateNgaySinh('inputNamTotNghiep[]');

    // when click icon calender
    $('#btn_nam_tot_nghiep').click(function () {
        showDateWithFocus('inputNamTotNghiep[]');
    });
    // End nam tot nghiep

    // Bat dau du an
    showDateNgaySinh('inputThoiGianBatDau[]');

    // when click icon calender
    $('#btn_inputThoiGianBatDau').click(function () {
        showDateWithFocus('inputThoiGianBatDau[]');
    });
    // End bat dau du an

    // Ket thuc du an
    showDateNgaySinh('inputThoiGianKetThuc[]');

    // when click icon calender
    $('#btn_inputThoiGianKetThuc').click(function () {
        showDateWithFocus('inputThoiGianKetThuc[]');
    });
    // Ket thuc du an

    // Bat dau kinh nghiem
    showDateNgaySinh('ngaybatdau[]');
    // when click icon calender
    $('#btn_inputTime_begin_du_an').click(function () {
        showDateWithFocus('ngaybatdau[]');
    });
    // Ket thuc du an

    // Ket thuc du an
    showDateNgaySinh('ngayketthuc[]');

    // when click icon calender
    $('#btn_inputTime_end_du_an').click(function () {
        showDateWithFocus('ngayketthuc[]');
    });
    // Ket thuc du an
});