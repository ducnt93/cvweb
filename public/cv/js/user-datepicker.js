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
    $('#inputNgaysinh').on('focus', function () {
        showDateNgaySinh('inputNgaysinh');
    });

    // when click icon calender
    $('#btn_inputNgaySinh').click(function () {
        showDateWithFocus('inputNgaysinh');
    });
    //End ngay sinh

    // Nam nhap hoc
    $('input[name="inputNamNhapHoc[]"]').on('focus', function () {
        showDateNgaySinh('inputNamNhapHoc[]');
    });

    // when click icon calender
    $('#btn_nam_nhap_hoc').click(function () {
        showDateWithFocus('inputNamNhapHoc[]');
    });
    // End nam nhap hoc

    // Nam tot nghiep
    $('input[name="inputNamTotNghiep[]"]').on('focus', function () {
        showDateNgaySinh('inputNamTotNghiep[]');
    });

    // when click icon calender
    $('#btn_nam_tot_nghiep').click(function () {
        showDateWithFocus('inputNamTotNghiep[]');
    });
    // End nam tot nghiep

    // Bat dau du an
    $('input[name="inputThoiGianBatDau[]"]').on('focus', function () {
        showDateNgaySinh('inputThoiGianBatDau[]');
    });

    // when click icon calender
    $('#btn_inputThoiGianBatDau').click(function () {
        showDateWithFocus('inputThoiGianBatDau[]');
    });
    // End bat dau du an

    // Ket thuc du an
    $('input[name="inputThoiGianKetThuc[]"]').on('focus', function () {
        showDateNgaySinh('inputThoiGianKetThuc[]');
    });

    // when click icon calender
    $('#btn_inputThoiGianKetThuc').click(function () {
        showDateWithFocus('inputThoiGianKetThuc[]');
    });
    // Ket thuc du an

    // Bat dau kinh nghiem
    $('input[name="inputTime_begin_du_an[]"]').on('focus', function () {
        showDateNgaySinh('inputTime_begin_du_an[]');
    });

    // when click icon calender
    $('#btn_inputTime_begin_du_an').click(function () {
        showDateWithFocus('inputTime_begin_du_an[]');
    });
    // Ket thuc du an

    // Ket thuc du an
    $('input[name="inputTime_end_du_an[]"]').on('focus', function () {
        showDateNgaySinh('inputTime_end_du_an[]');
    });

    // when click icon calender
    $('#btn_inputTime_end_du_an').click(function () {
        showDateWithFocus('inputTime_end_du_an[]');
    });
    // Ket thuc du an
});