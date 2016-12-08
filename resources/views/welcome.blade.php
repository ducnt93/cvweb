




<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Curriculum Vitae</title>
    <base href="{{asset('')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="public/cv/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/cv/css/bootstrap-select.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="public/cv/css/style.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div class="container">
    <!-- BEGIN page-header -->
    <div class="page-header">
        <h1 class="text-center"><b>Curriculum Vitae</b></h1>
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

<!-- jQuery -->
<script src="public/cv/js/jquery-1.11.3.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="public/cv/js/bootstrap.min.js"></script>
<script src="public/cv/js/function.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="public/cv/js/wanakana.js"></script>
<script src="public/cv/js/bootstrap-datepicker.min.js"></script>
<script src="public/cv/js/bootstrap-select.min.js"></script>
<!--<script src="js/tinhthanh.js"></script>-->
<link rel="stylesheet" href="public/cv/css/bootstrap-datepicker3.css">

<script>
    // Convert cac kieu chu romaji,katakana,haragana => katakana
    function treatKatakana(target) {
        var val = target.val();
        if (wanakana.isHiragana(val) == true || wanakana.isRomaji(val) == true) {
            target.val(wanakana.toKatakana(val));
        } else {
            if (wanakana.isKatakana(val) == true) {
                target.val(val);
            } else {
                target.val('');
            }
        }

    }

    // Convert tieng viet co dau thanh khong sau de search trong dropdowm nhanh hon
    function convertVietnamese(str) {
        str = str.toLowerCase();
        str = str.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g, "a");
        str = str.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g, "e");
        str = str.replace(/ì|í|ị|ỉ|ĩ/g, "i");
        str = str.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g, "o");
        str = str.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g, "u");
        str = str.replace(/ỳ|ý|ỵ|ỷ|ỹ/g, "y");
        str = str.replace(/đ/g, "d");
        return str;
    }


    // Khi moi file cua web duoc load xong no se chay cai nay.
    $(document).ready(function () {

        // Get danh sach thanh pho
        /*$.get("https://thongtindoanhnghiep.co/api/city", function (data, status) {
            //debugger
            var cityList = data.LtsItem;
            var $selectCity = $('#inputDiachi');
            $(cityList).each(function (index, o) {
                var string_data_tokens = convertVietnamese(o.Title);
                var $option = $("<option data-tokens = '" + string_data_tokens + "'/>").attr("value", o.ID).text(o.Title);
                $selectCity.append($option);
            });
        });*/
        // Get danh sach huyen cua 1 thanh pho
       /* $('#inputDiachi').change(function () {
            var cityID = $('#inputDiachi').val();
            var url = "https://thongtindoanhnghiep.co/api/city/" + cityID + "/district";
            $.get(url, function (data, status) {
                var districtsList = data;
                var $selectDistrict = $('#inputDiachiHuyen');
                $(districtsList).each(function (index, o) {
                    var $option = $("<option/>").attr("value", o.ID).text(o.Title);
                    $selectDistrict.append($option);
                });
            });
        });*/

        // Get danh sach xa cua 1 huyen
       /* $('#inputDiachiHuyen').change(function () {
            var districtID = $('#inputDiachiHuyen').val();
            var url = "https://thongtindoanhnghiep.co/api/district/" + districtID + "/ward";
            $.get(url, function (data, status) {
                var wardList = data;
                var $selectWard = $('#inputDiachiXa');
                $(wardList).each(function (index, o) {
                    var $option = $("<option/>").attr("value", o.ID).text(o.Title);
                    $selectWard.append($option);
                });
            });
        });*/

        // Ho ten
       /* var $_katakana_hoten = $("#inputHo");
        if ($_katakana_hoten.length > 0) {
            $_katakana_hoten.blur(function () {
                treatKatakana($(this));
            });
        }*/

        //datetimepicker nam sinh.
        var date_input = $('input[name="inputNgaysinh"]');
        var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() : "body";
        date_input.datepicker({
            format: 'mm/dd/yyyy',
            container: container,
            todayHighlight: true,
            autoclose: true,
        });
    });

    // Thanh ti le hoan thanh dang ky
    function checkProgress() {
        //debugger;
        $total_point = 0;
        if ($('#inputHo').val() != "") {
            $total_point += $('#inputHo').attr('point');
        }
        if ($('#inputDiachi').val() != "") {
            $total_point += $('#inputDiachi').attr('point');
        }
        if ($('#inputEmail').val() != "") {
            $total_point += $('#inputEmail').attr('point');
        }
        if ($('#inputQuequan').val() != "") {
            $total_point += $('#inputQuequan').attr('point');
        }
        if ($('#inputSdt').val() != "") {
            $total_point += $('#inputSdt').attr('point');
        }
        $("#progressBar").css({'width': $total_point + '%'});
        $("#progressBar").attr('aria-valuenow', $total_point);
        $('#ratePoint').val($total_point);
    }
</script>
 @yield('script')
</body>

</html>