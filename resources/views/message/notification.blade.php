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