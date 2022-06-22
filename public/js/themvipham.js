var at = "active";

var inp = document.getElementById("my-file");
var btn = document.getElementById("btn_chosse_img");
var divimg = document.getElementsByClassName("return_img")[0];

btn.addEventListener("click", function () {
    inp.click();
    console.log("nhấn 1 lần");
});
var arrayFile = [];
var bien_id = 1;
inp.addEventListener("change", function () {
    var files = this.files[0];
    arrayFile.push(files);
    if (files) {
        var reader = new FileReader();
        reader.onload = function () {
            var result = reader.result;
            var div = document.createElement("div");
            div.className = "div_img";
            // div.className = "return_img" + '' + at;

            var img = document.createElement("img");

            img.src = result;
            img.className = "img_choseed";

            div.appendChild(img);
            var div02 = document.createElement("div");
            divimg.append(div);

            // at = "";
            var themanh_input = document.getElementsByClassName(
                "form-group input-file-container themanh_input"
            );

            var newInput = document.createElement("input");
            newInput.className = "input-file";
            themanh_input[0].appendChild(newInput);
            // newInput.id=
        };
        reader.readAsDataURL(files);
    }
    console.log("nhấn lần 2");
});

var ngayHienTai = new Date();
var ngay =
    ngayHienTai.getDate() +
    "/" +
    ngayHienTai.getMonth() +
    "/" +
    ngayHienTai.getFullYear();
var gio = "Giờ:  " + ngayHienTai.getHours() + ":" + ngayHienTai.getMinutes();
document.getElementById("ngayHienTai").innerHTML = ngay;
document.getElementById("gioHienTai").innerHTML = gio;

function addListViPham(id) {
    // var ten_chitiet_vipham = document.getElementById("chitiet_vipham01");
    // var div_0 = document.getElementById("danhsachvipham");
    // var div_ds_chitiet_vipham = document.createElement('div');

    // div_ds_chitiet_vipham.className = 'dsvipham_list my-2';
    // div_ds_chitiet_vipham.innerHTML = '<div id="dsvipham_list01" class="dsvipham_list my-2"> <span id="ds_chitiet_vipham01" class="ten_dsvipham_list">' + ten_chitiet_vipham.textContent + '</span> <button onclick="delListViPham();" id="btn_xoaVP" type="button" class="bg-transparent border-0"> <span class="iconify" data-icon="akar-icons:circle-minus" style="color: #cc964a; font-size:20px;"></span> </button> </div>'

    // div_0.appendChild(div_ds_chitiet_vipham);

    var dongViPham = document.getElementById("dongViPham_id_" + id);
    dongViPham.style.display = "none";
}

function delListViPham() {
    var div_0 = document.getElementById("danhsachvipham");
    var div_ds_chitiet_vipham = document.getElementById("dsvipham_list01");
    div_ds_chitiet_vipham.remove();
}

// ajax ảnh
var soCCCD_viPham = document.getElementsByName("soCCCD_viPham")[0];
var bienSoXe = document.getElementsByName("bienSoXe")[0];
var tenNguoiThietHai = document.getElementsByName("tenNguoiThietHai")[0];
var bienSoXeNguoiThietHai = document.getElementsByName(
    "bienSoXeNguoiThietHai"
)[0];
var soCCCDNguoiThietHai = document.getElementsByName("soCCCDNguoiThietHai")[0];
var diaChiNguoiThietHai = document.getElementsByName("diaChiNguoiThietHai")[0];
var ghiChu = document.getElementsByName("ghiChu")[0];
var submit = document.getElementById("submit");
var hanNopPhat = document.getElementById("hanNopPhat");
var quanHuyen = document.getElementById("combobox_quan");
var diaChi = document.getElementsByName("diaChi")[0];
var xaPhuong = document.getElementsByName("xaPhuong")[0];
var loiViPham = document.getElementsByName("loivipham[]");
var arr = [];

submit.addEventListener("click", function () {
    var form = new FormData();
    form.append("_token", token);
    form.append("soCCCD_viPham", soCCCD_viPham.value);
    form.append("bienSoXe", bienSoXe.value);
    //form.append("tenNguoiThietHai", tenNguoiThietHai.value);
    form.append("soCCCDNguoiThietHai", soCCCDNguoiThietHai.value);
    form.append("ghiChu", ghiChu.value);
    form.append("hanNopPhat", hanNopPhat.value);
    form.append("diaChi", diaChi.value);
    form.append("xaPhuong", xaPhuong.value);
    form.append("quanHuyen", quanHuyen.value);
    var arr = [];
    for (let i = 0; i < loiViPham.length; i++) {
        if (loiViPham[i].checked) {
            arr.push(loiViPham[i]);
            form.append("loiViPham[]", loiViPham[i].value);
        }
    }

    for (let i = 0; i < arrayFile.length; i++) {
        var element = arrayFile[i];
        form.append("image[]", element);
    }

    $.ajax({
        method: "post",
        url: "http://localhost/DAPM20/public/page/canhsat/themvipham",
        context: document.body,
        data: form,
        contentType: false,
        processData: false,
    })
        .done(function (result) {
            //console.log(result);
            window.location.replace(
                "http://localhost/DAPM20/public/page/canhsat/danhsachvipham"
            );
        })
        .fail(function (result) {
            window.location.replace(
                "http://localhost/DAPM20/public/page/canhsat/danhsachvipham"
            );

            console.log(result);
        });
});

function callApiPhuongXa(idQuanHuyen) {
    var form = new FormData();

    form.append("quanHuyen", quanHuyen.value);
    form.append("_token", token);
    xaPhuong.innerHTML = "";

    $.ajax({
        type: "POST",
        url: "http://localhost/DAPM20/public/api/phuongXa",
        context: document.body,
        data: form,
        contentType: false,
        processData: false,
    }).done(function (data) {
        console.log(data);
        for (let item = 0; item < data.length; item++) {
            var optionPX = document.createElement("OPTION");
            optionPX.value = data[item].id;
            optionPX.innerText = data[item].xaPhuong;
            xaPhuong.append(optionPX);
        }
    });
}

quanHuyen.addEventListener("change", function () {
    callApiPhuongXa(quanHuyen);
});

function onclickForCheckBox(event) {
    console.log(event.target);
    if (event.target.checked == true) {
        var ten_chitiet_vipham = document.getElementById(
            "chitiet_vipham_" + event.target.value
        );
        var div_0 = document.getElementById("danhsachvipham");
        var div_ds_chitiet_vipham = document.createElement("div");
        div_ds_chitiet_vipham.id = "dsvipham_list_"+event.target.value;

        div_ds_chitiet_vipham.className = "dsvipham_list my-2";
        div_ds_chitiet_vipham.innerHTML =
            '<div id="dsvipham_list01" class="dsvipham_list my-2"> <span id="ds_chitiet_vipham_'+event.target.value+'" class="ten_dsvipham_list">' +
            ten_chitiet_vipham.textContent +
            '</span> <button onclick="delListViPham();" id="btn_xoaVP" type="button" class="bg-transparent border-0"> <span class="iconify" data-icon="akar-icons:circle-minus" style="color: #cc964a; font-size:20px;"></span> </button> </div>';

        div_0.appendChild(div_ds_chitiet_vipham);
    }else{
        var div = $('#dsvipham_list_'+event.target.value);
        div.remove();

    }
}

