var ngayHienTai = new Date();
        var ngay = ngayHienTai.getDate() + '/' + ngayHienTai.getMonth() + '/' + ngayHienTai.getFullYear();
        var gio = "Giờ:  " + ngayHienTai.getHours() + ":" + ngayHienTai.getMinutes() ;
        document.getElementById("ngayHienTai").innerHTML = ngay;
        document.getElementById("gioHienTai").innerHTML = gio;