/**
 * Created by Administrator on 14/12/2016.
 */
$(document).ready(function () {
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
});