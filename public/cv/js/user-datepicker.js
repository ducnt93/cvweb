/**
 * Created by Administrator on 14/12/2016.
 */
$(document).ready(function () {

    //datetimepicker nam sinh.
    var date_input = $('input[name="inputNgaysinh"]');
    var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() : "body";
    date_input.datepicker({
        format: 'dd/mm/yyyy',
        container: container,
        todayHighlight: true,
        autoclose: true,
    });
    // when click icon calender
    $('#btn_inputNgaySinh').click(function () {
        //datetimepicker nam sinh.
        var date_input = $('input[name="inputNgaysinh"]');
        var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() : "body";
        date_input.datepicker({
            format: 'dd/mm/yyyy',
            container: container,
            todayHighlight: true,
            autoclose: true,
        }).focus();
    });

    //datetimepicker nam nhap hoc.
    var date_input = $('input[name="nam_nhap_hoc[]"]');
    var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() : "body";
    date_input.datepicker({
        format: 'dd/mm/yyyy',
        container: container,
        todayHighlight: true,
        autoclose: true,
    });
    // when click icon calender
    $('#btn_nam_nhap_hoc').click(function () {
        //datetimepicker nam sinh.
        var date_input = $('input[name="nam_nhap_hoc[]"]');
        var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() : "body";
        date_input.datepicker({
            format: 'dd/mm/yyyy',
            container: container,
            todayHighlight: true,
            autoclose: true,
        }).focus();
    });

    //datetimepicker nam tot nghiep.
    var date_input = $('input[name="nam_tot_nghiep[]"]');
    var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() : "body";
    date_input.datepicker({
        format: 'dd/mm/yyyy',
        container: container,
        todayHighlight: true,
        autoclose: true,
    });
    // when click icon calender
    $('#btn_nam_tot_nghiep').click(function () {
        //datetimepicker nam sinh.
        var date_input = $('input[name="nam_tot_nghiep[]"]');
        var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() : "body";
        date_input.datepicker({
            format: 'dd/mm/yyyy',
            container: container,
            todayHighlight: true,
            autoclose: true,
        }).focus();
    });

    //datetimepicker du an bat dau.
    var date_input = $('input[name="inputTime_begin_du_an[]"]');
    var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() : "body";
    date_input.datepicker({
        format: 'dd/mm/yyyy',
        container: container,
        todayHighlight: true,
        autoclose: true,
    });
    // when click icon calender
    $('#btn_inputTime_begin_du_an').click(function () {
        //datetimepicker nam sinh.
        var date_input = $('input[name="inputTime_begin_du_an[]"]');
        var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() : "body";
        date_input.datepicker({
            format: 'dd/mm/yyyy',
            container: container,
            todayHighlight: true,
            autoclose: true,
        }).focus();
    });

    //datetimepicker nam sinh.
    var date_input = $('input[name="inputTime_end_du_an[]"]');
    var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() : "body";
    date_input.datepicker({
        format: 'dd/mm/yyyy',
        container: container,
        todayHighlight: true,
        autoclose: true,
    });
    // when click icon calender
    $('#btn_inputTime_end_du_an').click(function () {
        //datetimepicker nam sinh.
        var date_input = $('input[name="nam_tot_nghiep[]"]');
        var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() : "body";
        date_input.datepicker({
            format: 'dd/mm/yyyy',
            container: container,
            todayHighlight: true,
            autoclose: true,
        }).focus();
    });
});