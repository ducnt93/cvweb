/**
 * Created by Administrator on 14/12/2016.
 */
$(document).ready(function () {
    $.validator.addMethod('filesize', function (value, element, param) {
        return this.optional(element) || (element.files[0].size <= param)
    });
    //Jquery step:
    var form = $("#form-user").show();
    form.steps({
        headerTag: "h3",
        bodyTag: "section",
        transitionEffect: "slideLeft",
        labels: {
            current: "Mục hiện tại:",
            pagination: "Trang",
            finish: "Nộp CV",
            next: "Tiếp tục",
            previous: "Quay lại",
            loading: "Đang tải ..."
        },
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
            inputSdt: {
                required: true,
                number: true
            },
            inputQueQuan: "required",
            inputDiachi: "required",
            inputEmail: {
                required: true,
                email: true
            },
            inputAnh: {
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
                minlength: "Mật khẩu phải dài hơn 8 ký tự."
            },
            inputMatKhauConfirm: {
                required: "Xác nhận mật khẩu không được để trống.",
                minlength: "Mật khẩu phải dài hơn 8 ký tự.",
                equalTo: "Mật khẩu không khớp.",
            },
            inputHo: "Họ tên không được để trống.",
            inputQueQuan: "Quê quán không được để trống.",
            inputNgaysinh: "Ngày sinh không được để trống.",
            inputSdt: {
                required: "Số điện thoại không được để trống.",
                number: "Định dạng số không đúng"
            },
            inputDiachi: "Địa chỉ không được để trống.",
            inputEmail: {
                required: "Email không được để trống.",
                email: "Định dạng email không đúng."
            },
            inputAnh: {
                required: "Ảnh đại diện không được để trống.",
                extension: "Ảnh không đúng định dạng.",
                filesize: "Ảnh có kích thước lớn hơn 1MB. Xin chọn kích ảnh khác."
            },
            inputLyDo: "Lý do không được để trống.",

            // Trinh do hoc van
            inputTruong: "Không được để trống.",
            inputNganh: "Không được để trống.",
            inputNam: "Không được để trống.",

        }
    });

});