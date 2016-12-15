@extends('layouts.app')
@section('container')

    <div class="container">
        <!-- BEGIN page-header -->
        <div class="page-header">
            <h1 class="text-center"><b style="color: #428BCA;">Curriculum Vitae</b></h1>
        </div>
        <!-- END page-header -->


        <!-- ---------------------------------------------- BEGIN main-infomation -------------------------------------------------- -->
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            @if(count($errors)>0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $err)
                        {{$err}}<br>
                    @endforeach
                </div>
            @endif
            @if(session('thongbaothanhcong'))
                <div class="alert alert-success" role="alert">
                    <strong>Well done!</strong> Gửi thành công.
                </div>

            @endif
            @if(session('loianh'))
                <div class="alert alert-danger" role="alert">
                    <strong>Lỗi!</strong> Sai định dạng ảnh.
                </div>
            @endif
            <form action="" method="POST" enctype="multipart/form-data" id="form_user">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                @include('recruitment.thong_tin_ca_nhan')
                @include('recruitment.gioi_thieu_ban_than')
                @include('recruitment.ly_do_den_nhat')
                @include('recruitment.trinh_do_hoc_van')
                @include('recruitment.ky_nang_chuyen_mon')
                @include('recruitment.kinh_nghiem_lam_viec')
                @include('recruitment.du_an_tham_gia')

            </form>


        </div>
        <!-- ------------------------------------------------END main-infomation --------------------------------------------------- -->

    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function () {
            var xTriggered = 0;
            $("#target").keyup(function (event) {
                var idTheLoai = $(this).val();
                var res = idTheLoai.split(" ");
                if (res[res.length - 1] == null || res[res.length - 1] == '') {
                    // alert('asdasd');
                    $.get('ajax/nothing', function (data) {
                        //    alert(idTheLoai);
                        $("#searchKQ").html(data);
                    });
                }
                else {
                    $.get('ajax/' + res[res.length - 1], function (data) {
                        //    alert(idTheLoai);
                        $("#searchKQ").html(data);
                    });
                }
            }).keydown(function (event) {
                if (event.which == 13) {
                    event.preventDefault();
                }
            });

            $("#other").click(function () {
                $("#target").keyup();
            });

            $("#searchKQtc").click(function () {
                debugger
                var tinhcach = document.getElementById("targettc").value;
                var arr1 = tinhcach.split(",");
                var arr = arr1.slice(0, arr1.length - 1);
                tinhcach = '';
                for (i = 0; i < arr.length; i++) {
                    if (arr[i].trim() != null && arr[i].trim() != '') {
                        tinhcach += arr[i].trim() + ', ';
                    }
                }
                var kq = document.getElementById("kqtc").value;
                if (kq.trim() != null && kq.trim() != '') {
                    tinhcach += kq + ', ';
                }
                document.getElementById('targettc').value = tinhcach;
            });
            $("#targettc").keyup(function (event) {
                var idTheLoai = $(this).val();
                var res = idTheLoai.split(" ");
                if (res[res.length - 1] == null || res[res.length - 1] == '') {
                    // alert('asdasd');
                    $.get('ajaxtc/nothing', function (data) {
                        //    alert(idTheLoai);
                        $("#searchKQtc").html(data);
                    });
                }
                else {
                    $.get('ajaxtc/' + res[res.length - 1], function (data) {
                        //    alert(idTheLoai);
                        $("#searchKQtc").html(data);
                    });
                }
            }).keydown(function (event) {
                if (event.which == 13) {
                    event.preventDefault();
                }
            });


            $("#searchKQ").click(function () {
                var sothichcanhan = document.getElementById("target").value;
                var arr1 = sothichcanhan.split(",");
                var arr = arr1.slice(0, arr1.length - 1);
                sothichcanhan = '';
                for (i = 0; i < arr.length; i++) {
                    if (arr[i].trim() != null && arr[i].trim() != '' || arr)
                        sothichcanhan += arr[i].trim() + ', ';
                }
                var kq = document.getElementById("kqst").value;
                if (kq.trim() != null && kq.trim() != '') {
                    sothichcanhan += kq + ', ';
                }
                document.getElementById('target').value = sothichcanhan;
            });

            $("#addDu_an_thuc_te").change(function () {
                $.get('themda', function (data) {
                    $("#addDu_an_thuc_te").html(data);
                });
            });

            $("#addKinh_nghiem_lam_viec").change(function () {
                $.get('themkn', function (data) {
                    $("#addremoveKinh_nghiem_lam_viec").html(data);
                });
            });

            //datetimepicker nam sinh.
            var date_input = $('input[name="inputNgaysinh"]');
            var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() : "body";
            date_input.datepicker({
                format: 'dd/mm/yyyy',
                container: container,
                todayHighlight: true,
                autoclose: true,
            });

            //datetimepicker nam sinh.
            var nam_nhap_hoc = $('input[name="nam_nhap_hoc[]"]');
            nam_nhap_hoc.datepicker({
                format: 'dd/mm/yyyy',
                container: container,
                todayHighlight: true,
                autoclose: true,
            });

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
        });
    </script>
@endsection