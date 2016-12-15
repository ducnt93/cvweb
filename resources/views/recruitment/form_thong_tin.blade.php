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
            @include('message.notification')
            <form action="" method="POST" enctype="multipart/form-data" id="form-user" class="form-horizontal">
                {{Form::token()}}
                <h3>Thông tin cá nhân</h3>
                <section>
                    <div class="panel-group" id="accordion_section1">
                        @include('recruitment.thong_tin_ca_nhan')
                    </div>
                </section>

                <h3>Giới thiệu</h3>
                <section>
                    <div class="panel-group" id="accordion_section2">
                        @include('recruitment.gioi_thieu_ban_than')
                        @include('recruitment.ly_do_den_nhat')
                        @include('recruitment.trinh_do_hoc_van')
                    </div>
                </section>

                <h3>Kỹ năng</h3>
                <section>
                    <div class="panel-group" id="accordion_section3">
                        @include('recruitment.ky_nang_chuyen_mon')
                    </div>
                </section>

                <h3>Kinh nghiệm</h3>
                <section>
                    <div class="panel-group" id="accordion_section4">
                        @include('recruitment.kinh_nghiem_lam_viec')
                        @include('recruitment.du_an_tham_gia')
                    </div>
                </section>
            </form>


        </div>
        <!-- ------------------------------------------------END main-infomation --------------------------------------------------- -->

    </div>
@endsection
@section('script')
    <script src="{{asset('/public/cv/js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('/public/cv/js/jquery.steps.min.js')}}"></script>
    <script src="{{asset('/public/cv/js/formValidation.min.js')}}"></script>
    <script src="{{asset('/public/cv/js/additional-methods.min.js')}}"></script>
    <script src="{{asset('/public/cv/js/user-form-validation.js')}}"></script>
    <script src="{{asset('/public/cv/js/user-datepicker.js')}}"></script>
    <script src="{{asset('/public/cv/js/user-search.js')}}"></script>
    <script src="{{asset('/public/cv/js/function.js')}}"></script>
    <script>
        $(document).ready(function () {
            $("html,body").animate({scrollTop: 215}, 500);
            $('#inputHo').focus();

            // Add icon for collapse

            $('#accordion_section1 .accordion-toggle').click(function (e) {
                var chevState = $(e.target).siblings("i.indicator").toggleClass('glyphicon-chevron-down glyphicon-chevron-up');
                $("i.indicator").not(chevState).removeClass("glyphicon-chevron-down").addClass("glyphicon-chevron-up");
            });

            $('#accordion_section2 .accordion-toggle').click(function (e) {
                var chevState = $(e.target).siblings("i.indicator").toggleClass('glyphicon-chevron-down glyphicon-chevron-up');
                $("i.indicator").not(chevState).removeClass("glyphicon-chevron-down").addClass("glyphicon-chevron-up");
            });

            $('#accordion_section4 .accordion-toggle').click(function (e) {
                var chevState = $(e.target).siblings("i.indicator").toggleClass('glyphicon-chevron-down glyphicon-chevron-up');
                $("i.indicator").not(chevState).removeClass("glyphicon-chevron-down").addClass("glyphicon-chevron-up");
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
        });
    </script>
@endsection