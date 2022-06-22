$(document).ready(function () {
    $("#myInput").on("keyup", function () {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});

var trangThaiDuyet = document.getElementsByName("trangthaiduyet[]");

function changeTrangThai(){
    var form = new FormData();
    
    form.append("_token", token);
    
    var arr = [];
    for(let i =0; i<trangThaiDuyet.length; i++){
        if(trangThaiDuyet[i].checked){
            arr.push(trangThaiDuyet[i]);
            form.append("trangThaiDuyet[]", trangThaiDuyet[i].value);
        }

    }

    $.ajax({
        type: 'POST',
        url: "http://localhost/DAPM20/public/page/canhsat/danhsachvipham",
        context: document.body,
        data: form,
        contentType: false,
        processData: false

    }).done(function (data) {
        console.log(data);
        location.reload();
    })
    .fail(function (data) {
        // window.location.replace("http://localhost/DAPM20/public/page/canhsat/danhsachvipham");

        console.log(data);
    }); 
}

