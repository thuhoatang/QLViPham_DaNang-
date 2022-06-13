
@extends('masterlayout.canhsat.header')

@section('themvipham_trang2')

<link rel="stylesheet" href="style/themvipham.css">

<div class="container-fluid px-4 mt-2">
    <p class="mt-4 text-dark">Quản lý vi phạm/ Thêm vi phạm</p>
    <!-- Biên bản vi phạm giao thông -->
    <div id="bienbanvp" class="container-fluid">
        <!-- tên biên bản -->
        <b id="tieudeVP" class="d-flex
                justify-content-center">BIÊN BẢN VI PHẠM HÀNH
            CHÍNH GIAO THÔNG
            ĐƯỜNG BỘ</b>
        <!-- ngày tháng giờ vi phạm -->
        <span>Ngày</span> <span id="ngayHienTai"></span>
        &emsp; &emsp; <span id="gioHienTai"></span>
        <form class="">

            <!-- tên người điều khiển xe/ biển số -->
            <div id="textboxVP" class="row mt-4">
                <div class="col">
                    <label class="" for=""> <b>Tên người/ Tổ chức thiệt hại</b></label>
                    <input type="text" class="form-control" placeholder="Nhập tên người vi phạm">
                </div>
                <div class="col">
                    <label class="" for=""> <b>Biển số
                            phương tiện (nếu có)</b></label>
                    <input type="text" class="form-control" placeholder="Nhập biển số">
                </div>
            </div>

            <!-- so cccd/  -->
            <div id="textboxVP" class="row mt-4 mb-4">
                <div class="col">
                    <label class="" for=""> <b>Số CCCD/ CMT</b></label>
                    <input type="text" class="form-control" placeholder="Nhập tên người vi phạm">
                </div>
                <div class="col">
                    <label class="" for=""> <b>Địa chỉ</b></label>
                    <input type="text" class="form-control" placeholder="Nhập biển số">
                </div>
            </div>


            <!-- input ghi chú -->
            <label for="basic-url"> <b>Ghi chú</b></label>
            <div class="input-group">
                <textarea class="form-control" aria-label="With textarea"></textarea>
              </div>

            <!-- Input -->
            <div class="formBtn_submit my-4 d-flex justify-content-around">
                <a href = '{{ route('themvpTrang1')}}' class="btn formBtn_submit btn_chuyentrang text-white">Quay lại trang trước</a>
                <button type="button" class="btn formBtn_submit btn_huy text-white">Hủy vi phạm</button>
                <button type="button" class="btn formBtn_submit btn_luu text-white">Lưu vi phạm</button>
            </div>
        </form>
    </div>
</div>
        <script type="text/javascript" src="js/themvipham.js"></script>
   
        @endsection
