
@extends('masterlayout.canhsat.header')

@section('danhsachvipham')

<link rel="stylesheet" href="style/danhsachvipham.css">



<div class="container-fluid px-4 mt-2">
    <p class="mt-4 text-dark">Quản lý vi phạm/ Danh sách các vi phạm</p>

    <p class="mt-4 text-dark">  <b>BẢNG THỐNG KÊ VI PHẠM</b></p>

    <div class="input-group mb-3" style="width: 250px">
        <input id="myInput" type="text" class="form-control" placeholder="Tìm theo biển số xe"
            aria-label="" aria-describedby="basic-addon1">

        <div class="input-group-prepend">
            <button class="btn btn-outline-secondary" type="button">Tìm</button>
        </div>
    </div>
    <!-- table  -->
    <table class="w-100">
        <thead>
            <tr>
                <th>STT</th>
                <th id="th_biensopt">Biển số phương tiện</th>
                <th id="th_loaipt">Loại phương tiện</th>
                <th id="th_ngayvipham">Ngày vi phạm</th>
                <th>Thao tác</th>

            </tr>
        </thead>
        <tbody id="myTable">
            <tr>
                <td>1</td>
                <td>43 D 637</td>
                <td>Xe gắn máy</td>
                <td>01/04/2022</td>
                <td>
                    <a href="#" id="" class="xemchitiet">Xem
                        chi tiết</a>
                    <button type="button" class="border-0
                            bg-transparent">
                        <span class="iconify" data-icon="akar-icons:chat-edit" style="color:orangered;
                                font-size:20px"></span>
                    </button>
                </td>

            </tr>

            <tr>
                <td>1</td>
                <td>43 D 637</td>
                <td>Xe gắn máy</td>
                <td>01/04/2022</td>
                <td>
                    <a href="#" id="" class="xemchitiet">Xem
                        chi tiết</a>
                    <button type="button" class="border-0
                            bg-transparent">
                        <span class="iconify" data-icon="akar-icons:chat-edit" style="color:orangered;
                                font-size:20px"></span>
                    </button>
                </td>

            </tr>

            <tr>
                <td>1</td>
                <td>43 D 637</td>
                <td>Xe gắn máy</td>
                <td>01/04/2022</td>
                <td>
                    <a href="#" id="" class="xemchitiet">Xem
                        chi tiết</a>
                    <button type="button" class="border-0
                            bg-transparent">
                        <span class="iconify" data-icon="akar-icons:chat-edit" style="color:orangered;
                                font-size:20px"></span>
                    </button>
                </td>

            </tr>

            <tr>
                <td>1</td>
                <td>43 D 637</td>
                <td>Xe ô tô</td>
                <td>01/04/2022</td>
                <td>
                    <a href="#" id="" class="xemchitiet">Xem
                        chi tiết</a>
                    <button type="button" class="border-0
                            bg-transparent">
                        <span class="iconify" data-icon="akar-icons:chat-edit" style="color:orangered;
                                font-size:20px"></span>
                    </button>
                </td>

            </tr>

        </tbody>
    </table>
</div>

<script type="text/javascript" src="js/danhsachvipham.js"></script>


@endsection