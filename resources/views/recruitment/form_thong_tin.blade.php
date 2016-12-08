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