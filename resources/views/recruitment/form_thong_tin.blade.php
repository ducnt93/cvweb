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
            <form action="luu" method="POST" enctype="multipart/form-data">
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
    <script src="{{asset('/cv/js/user-datepicker.js')}}"></script>
    <script src="{{asset('/cv/js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('/cv/js/jquery.steps.min.js')}}"></script>
    <script src="{{asset('/cv/js/formValidation.min.js')}}"></script>
    <script>
        $(document).ready(function () {

            /*    //Jquery step:
             var form = $("#form-user").show();
             form.steps({
             headerTag: "h3",
             bodyTag: "section",
             transitionEffect: "slideLeft",
             onStepChanging: function (event, currentIndex, newIndex) {
             // Allways allow previous action even if the current form is not valid!
             if (currentIndex > newIndex) {
             return true;
             }
             // Needed in some cases if the user went back (clean up)
             if (currentIndex < newIndex) {
             // To remove error styles
             form.find(".body:eq(" + newIndex + ") label.error").remove();
             form.find(".body:eq(" + newIndex + ") .error").removeClass("error");
             }
             form.validate().settings.ignore = ":disabled,:hidden";
             return form.valid();
             },
             onFinishing: function (event, currentIndex) {
             form.validate().settings.ignore = ":disabled";
             return form.valid();
             },
             onFinished: function (event, currentIndex) {
             var newInput = $("<input name='formSubmit' type='hidden' value=''>");
             $('input#fileToUpload').after(newInput);
             form.submit();
             },
             }).validate({
             errorPlacement: function errorPlacement(error, element) {
             element.before(error);
             },
             rules: {
             // Thong tin ca nhan
             inputTenDangNhap: "required",
             inputMatKhau: {
             required: true,
             minlength: 1
             },
             inputMatKhauConfirm: {
             required: true,
             minlength: 1,
             equalTo: "#inputMatKhau"
             },
             inputHo: "required",
             inputNgaysinh: "required",
             inputSdt: "required",
             inputEmail: {
             required: true,
             email: true
             },
             fileToUpload: {
             required: true,
             extension: "jpg|jpeg|png|gif",
             filesize: 1048576
             },
             inputLyDo: "required",

             // Trinh do hoc van
             inputTruong: "required",
             inputNganh: "required",
             inputNam: "required",
             },
             messages: {
             // Thong tin ca nhan
             inputTenDangNhap: "Tên đăng nhập không được để trống.",
             inputMatKhau: {
             required: "Mật khẩu không được để trống.",
             minlength: "Mật khẩu phải dài hơn 8 ký tự"
             },
             inputMatKhauConfirm: {
             required: "Xác nhận mật khẩu không được để trống.",
             minlength: "Mật khẩu phải dài hơn 8 ký tự",
             equalTo: "Mật khẩu không khớp",
             },
             inputHo: "Họ tên không được để trống.",
             inputNgaysinh: "Ngày sinh không được để trống",
             inputSdt: "Số điện thoại không được để trống",
             inputEmail: {
             required: "Email không được để trống.",
             email: "Định dạng email không đúng."
             },
             fileToUpload: {
             required: "Ảnh đại diện không được để trống.",
             extension: "Ảnh không đúng định dạng",
             filesize: "Ảnh có kích thước lớn hơn 1MB. Xin chọn kích ảnh khác."
             },
             inputLyDo: "Lý do không được để trống",

             // Trinh do hoc van
             inputTruong: "Không được để trống.",
             inputNganh: "Không được để trống.",
             inputNam: "Không được để trống.",

             }
             });
             */
            $("#addDu_an_thuc_te").change(function () {
                $.get('themda', function (data) {
                    $("#addDu_an_thuc_te").html(data);
                });
            });
            var xTriggered = 0;
            $("#target").keyup(function (event) {
                var idTheLoai = $(this).val();
                var res = idTheLoai.split(" ");
                if (res[res.length - 1] == null || res[res.length - 1] == '') {
                    // alert('asdasd');
                    $.get('ajax/haubasdasjdnasdnsakjdnasndjaks', function (data) {
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
                    $.get('ajaxtc/haubasdasjdnasdnsakjdnasndjaks', function (data) {
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

            $("#addKinh_nghiem_lam_viec").change(function () {
                $.get('themkn', function (data) {
                    $("#addremoveKinh_nghiem_lam_viec").html(data);
                });
            });
        });
    </script>
@endsection