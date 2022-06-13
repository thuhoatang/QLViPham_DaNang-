var at = "active";

        var inp = document.getElementById("my-file");
        var btn = document.getElementById("btn_chosse_img");
        var divimg = document.getElementsByClassName("return_img")[0];

        btn.addEventListener("click", function () {
            inp.click();
        })

        inp.addEventListener("change", function () {
            var files = this.files[0];
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
                };
                reader.readAsDataURL(files);

            }

        })



        var ngayHienTai = new Date();
        var ngay = ngayHienTai.getDate() + '/' + ngayHienTai.getMonth() + '/' + ngayHienTai.getFullYear();
        var gio = "Giờ:  " + ngayHienTai.getHours() + ":" + ngayHienTai.getMinutes();
        document.getElementById("ngayHienTai").innerHTML = ngay;
        document.getElementById("gioHienTai").innerHTML = gio;

        function addListViPham() {
            var ten_chitiet_vipham = document.getElementById("chitiet_vipham01");
            var div_0 = document.getElementById("danhsachvipham");
            var div_ds_chitiet_vipham = document.createElement('div');

            div_ds_chitiet_vipham.className = 'dsvipham_list my-2';
            div_ds_chitiet_vipham.innerHTML = '<div id="dsvipham_list01" class="dsvipham_list my-2"> <span id="ds_chitiet_vipham01" class="ten_dsvipham_list">' + ten_chitiet_vipham.textContent + '</span> <button onclick="delListViPham();" id="btn_xoaVP" type="button" class="bg-transparent border-0"> <span class="iconify" data-icon="akar-icons:circle-minus" style="color: #cc964a; font-size:20px;"></span> </button> </div>'

            div_0.appendChild(div_ds_chitiet_vipham);

        }

        function delListViPham() {

            var div_0 = document.getElementById("danhsachvipham");
            var div_ds_chitiet_vipham = document.getElementById("dsvipham_list01");
            div_ds_chitiet_vipham.remove();

        }

