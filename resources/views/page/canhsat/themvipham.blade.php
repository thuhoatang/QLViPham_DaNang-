
@extends('masterlayout.canhsat.header')

@section('themvipham')

<link rel="stylesheet" href="style/themvipham.css">

        <div class="container-fluid px-4 mt-2">
            <p class="mt-4 text-dark">Quản lý vi phạm/ Thêm vi phạm</p>

            <!-- Biên bản vi phạm giao thông -->
            <div id="bienbanvp" class="container-fluid">
                <!-- tên biên bản -->
                <b id="tieudeVP" class="d-flex justify-content-center">BIÊN BẢN VI PHẠM HÀNH CHÍNH GIAO THÔNG
                    ĐƯỜNG BỘ</b>
                <!-- ngày tháng giờ vi phạm -->
                <span>Ngày</span> <span id="ngayHienTai"></span> &emsp; &emsp; <span id="gioHienTai"></span>
                <!-- tên người điều khiển xe/ biển số -->
                <form class="">
                    <div id="textboxVP" class="row  mt-4">
                        <div class="col">
                            <label class="" for=""> <b>Tên người điều khiển xe</b></label>
                            <input type="text" class="form-control" placeholder="Nhập tên người vi phạm">
                        </div>
                        <div class="col">
                            <label class="" for=""> <b>Biển số phương tiện vi phạm</b></label>
                            <input type="text" class="form-control" placeholder="Nhập biển số">
                        </div>
                    </div>

                    <!-- Loại vi phạm -->
                    <div id="vipham_luatGT" class="row mt-4">
                        <div class="col">
                            <div class=" d-flex justify-content-around">
                                <label class="mt-1" for=""> <b>Tên vi phạm</b></label>
                                <form id="form_searchVP" class="form-inline">
                                    <input id="form_searchVP_input" class="form-control" type="search" placeholder="Tìm tên vi phạm" aria-label="Search">
                                    <button class="btn btn-outline-success" type="">Tìm</button>
                                </form>
                            </div>
                           

                            <!-- Scroll -->
                            <div id="noidungVP" class="noidungVP">
                                <!-- tiêu đề -->
                                <div id="noidungVP_tieude"  class="px-4 d-flex justify-content-between">
                                    <b>Tên vi phạm</b>
                                    <b>Thao tác</b>
                                </div>
                                <!-- Nội dung cuộn -->
                                <div id="noidungVP_scroll" class="row mx-2 my-1">
                                    <div class="vipham01 d-flex justify-content-between">
                                        <p>Không đội mũ bảo hiểm</p>
                                        <input type="checkbox">
                                    </div>
                                    <div class="vipham01 d-flex justify-content-between">
                                        <p>Không đội </p>
                                        <input type="checkbox">
                                    </div>
                                    <div class="vipham01 d-flex justify-content-between">
                                        <p>Không đội o hiểm</p>
                                        <input type="checkbox">
                                    </div>
                                    <div class="vipham01 d-flex justify-content-between">
                                        <p>Không đội mũ bảo hiểm mũ bảo hiểm</p>
                                        <input type="checkbox">
                                    </div>
                                    <div class="vipham01 d-flex justify-content-between">
                                        <p>Không đội mũ bảo hiểm mũ bảo hiểm</p>
                                        <input type="checkbox">
                                    </div>
                                    <div class="vipham01 d-flex justify-content-between">
                                        <p>Không đội mũ bảo hiểm mũ bảo hiểm</p>
                                        <input type="checkbox">
                                    </div>

                                </div>

                            </div>
                        </div>


                        <div class="col">
                            <label class="mt-1" for=""> <b>Danh sách vi phạm</b></label>
                            
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <script type="text/javascript" src="js/themvipham.js"></script>
   
        @endsection
