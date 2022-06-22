@extends('masterlayout.canhsat.header')

@section('themvipham')
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
            <form method="POST" action="{{ route('themvpTrang1') }}" enctype="multipart/form-data" class="">
                @csrf
                <!-- tên người điều khiển xe/ biển số -->
                <div id="textboxVP" class="row mt-4">
                    <div class="col">
                        <label class="" for=""> <b>Số CCCD/CMT người vi phạm</b></label>
                        <input id="soCCCD_viPham" name="soCCCD_viPham" type="text" class="form-control"
                            placeholder="Nhập số CCCD người vi phạm" value="">
                    </div>
                    <div class="col">
                        <label class="" for=""> <b>Biển số
                                phương tiện vi phạm</b></label>
                        <input name="bienSoXe" type="text" class="form-control" placeholder="Nhập biển số">
                    </div>
                </div>

                <!-- thêm hình ảnh vi phạm -->
                <label class="my-1"> <b>Thêm hình ảnh minh chứng</b></label>
                <div class="themanh d-flex">
                    <div class="form-group input-file-container themanh_input">
                        <input class="input-file" type="file" name="image" hidden id="my-file" multiple />
                        <label tabindex="0" for="my-file" class="label_input text-center px-3 pt-2"
                            id="btn_chosse_img">&nbsp; &nbsp; &nbsp; &nbsp; Tải ảnh lên &nbsp; </label>
                    </div>
                    <!-- ảnh hiện lên -->
                    <div class="return_img mx-5 d-flex">
                        <div class="div_img">
                            {{-- <img class="img_choseed"
                                src="https://images.unsplash.com/photo-1654512799227-94e56fbed599?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDJ8NnNNVmpUTFNrZVF8fGVufDB8fHx8&auto=format&fit=crop&w=600&q=60"
                                alt=""> --}}

                        </div>
                    </div>
                </div>


                <!-- tên người điều khiển xe/ biển số -->
                <div id="textboxVP" class="row mt-4">
                    {{-- <div class="col">
                        <label class="" for=""> <b>Tên người/ Tổ chức thiệt hại</b></label>
                        <input name="tenNguoiThietHai" type="text" class="form-control" placeholder="Nhập tên người vi phạm">
                    </div> --}}
                    <div class="col">
                        <label class="" for=""> <b>Số CCCD/ CMT người thiệt hại</b></label>
                        <input name="soCCCDNguoiThietHai" type="text" class="form-control" placeholder="Nhập tên người vi phạm">
                    </div>
                    <div class="col">
                        <label class="" for=""> <b>Biển số
                                phương tiện (nếu có)</b></label>
                        <input name="bienSoXeNguoiThietHai" type="text" class="form-control" placeholder="Nhập biển số">
                    </div>
                </div>

                <!-- so cccd/  -->
                <div id="textboxVP" class="row mt-4 mb-4">

                    {{-- date input --}}
                    <div class="datetime col mt-2">
                        <lable>Thời gian/ Hạn nộp</lable>
                    </br>
                        <input id="hanNopPhat" type="date">
                    </div>
                    
                </div>

                <div class="d-flex">
                    <div class="input-group">
                        <select name="quanHuyen" class="custom-select" id="combobox_quan">
                            @foreach ($quanHuyen as $item)
                            <option value="{{ $item->id}}">{{$item->quanHuyen}}</option>
                            @endforeach
                        
                        </select>
                    </div>
                    

                    <div class="input-group">                    
                        <select name="xaPhuong" class="custom-select" id="xaPhuong">
                            @foreach ($xaPhuong as $item)
                            <option value="{{ $item->id}}">{{$item->xaPhuong}}</option>
                            @endforeach                            
                        </select>
                    </div>
                      

                    <div class=""> 
                        <input name="diaChi" id="diachichitiet" type="text" class="form-control" placeholder="Nhập địa chỉ vi phạm">
                    </div>
                        
                </div>

                <!-- bảng thêm vi pham Loại vi phạm -->
                <div id="vipham_luatGT" class="row mt-4">
                    <div class="col">
                        <div class="d-flex
                            justify-content-around">
                            <label class="mt-1" for=""> <b>Tên
                                    vi phạm</b></label>
                            <div id="form_searchVP" class="d-flex form-inline">
                                <input id="form_searchVP_input" class="form-control" type="search"
                                    placeholder="Tìm tên vi
                                        phạm"
                                    aria-label="Search">
                                <button class="btn
                                    btn-outline-success"
                                    type="">Tìm</button>
                            </div>
                        </div>


                        <!-- Scroll -->
                        <div id="noidungVP" class="noidungVP">
                            <!-- tiêu đề -->
                            <div id="noidungVP_tieude"
                                class="px-4 d-flex
                                justify-content-between">
                                <b>Tên vi phạm</b>
                                <b>Thao tác</b>
                            </div>


                            <!-- Nội dung cuộn -->
                            <div id="noidungVP_scroll" class="row mx-2 my-1">

                                @foreach ($danhSachViPham as $item)
                                    <div id="dongViPham_id_{{ $item->id }}"
                                        class="vipham01 d-flex
                                    justify-content-between">
                                        <p id="chitiet_vipham_{{$item->id}}">{{ $item->tenLuatViPham }}</p>
                                        <input onclick="onclickForCheckBox(event)"  type="checkbox" class="loiViPham btn px-0 py-0 mb-3" name="loivipham[]"
                                            value="{{ $item->id }}" />
                                    </div>
                                @endforeach
                                {{-- <div class="vipham01 d-flex
                                    justify-content-between">
                                <p id="chitiet_vipham01">Bes
                                    hoaf de thuong</p>
                                <button onclick="addListViPham()" type="button" class="btn
                                        px-0 py-0 mb-3"><span class="iconify" style="font-size:20px"
                                        data-icon="akar-icons:circle-plus-fill"></span></button>
                            </div>
                            <div class="vipham01 d-flex
                                    justify-content-between">
                                <p>Không đội </p>
                                <button type="button" class="btn px-0 py-0
                                        mb-3"><span class="iconify" style="font-size:20px"
                                        data-icon="akar-icons:circle-plus-fill"></span></button>
                            </div>
                            <div class="vipham01 d-flex
                                    justify-content-between">
                                <p>Không đội o hiểm</p>
                                <button type="button" class="btn px-0 py-0
                                        mb-3"><span class="iconify" style="font-size:20px"
                                        data-icon="akar-icons:circle-plus-fill"></span></button>
                            </div>
                            <div class="vipham01 d-flex
                                    justify-content-between">
                                <p>Không đội mũ bảo hiểm mũ
                                    bảo hiểm</p>
                                <button type="button" class="btn px-0 py-0
                                        mb-3"><span class="iconify" style="font-size:20px"
                                        data-icon="akar-icons:circle-plus-fill"></span></button>
                            </div>
                            <div class="vipham01 d-flex
                                    justify-content-between">
                                <p>Không đội mũ bảo hiểm mũ
                                    bảo hiểm</p>
                                <button type="button" class="btn px-0 py-0
                                        mb-3"><span class="iconify" style="font-size:20px"
                                        data-icon="akar-icons:circle-plus-fill"></span></button>
                            </div>
                            <div class="vipham01 d-flex
                                    justify-content-between">
                                <p>Không đội mũ bảo hiểm mũ
                                    bảo hiểm</p>
                                <button type="button" class="btn px-0 py-0
                                        mb-3"><span class="iconify" style="font-size:20px"
                                        data-icon="akar-icons:circle-plus-fill"></span></button>
                            </div>
                            <div class="vipham01 d-flex
                                    justify-content-between">
                                <p>Không đội mũ bảo hiểm mũ
                                    bảo hiểm</p>
                                <button type="button" class="btn px-0 py-0
                                        mb-3"><span class="iconify" style="font-size:20px"
                                        data-icon="akar-icons:circle-plus-fill"></span></button>
                            </div>
                            <div class="vipham01 d-flex
                                    justify-content-between">
                                <p>Không đội mũ bảo hiểm mũ
                                    bảo hiểm</p>
                                <button type="button" class="btn px-0 py-0
                                        mb-3"><span class="iconify" style="font-size:20px"
                                        data-icon="akar-icons:circle-plus-fill"></span></button>
                            </div> --}}

                            </div>

                        </div>
                    </div>


                    <div class="col">
                        <label class="mt-1" for=""> <b>Danh sách
                                vi phạm</b></label>
                        <div id="danhsachvipham">
                            <!-- <div class="dsvipham_list my-2">
                                                        <span id="ds_chitiet_vipham01" class="ten_dsvipham_list">Không đội mũ bảo hiểm</span>
                                                        <button id="btn_xoaVP" type="button" class="bg-transparent border-0">
                                                            <span class="iconify" data-icon="akar-icons:circle-minus" style="color: #cc964a; font-size:20px;"></span>
                                                        </button>
                                                    </div> -->
                            <div class="dsvipham_list my-2">
                                <span id="" class="ten_dsvipham_list">Vượt
                                    đèn đỏ</span>
                                <button id="btn_xoaVP" type="button"
                                    class="bg-transparent
                                    border-0">
                                    <span class="iconify" data-icon="akar-icons:circle-minus"
                                        style="color: #cc964a;
                                            font-size:20px;"></span>
                                </button>
                            </div>
                            <div class="dsvipham_list my-2">
                                <span id="" class="ten_dsvipham_list">Không
                                    đội mũ bảo hiểm</span>
                                <button id="btn_xoaVP" type="button"
                                    class="bg-transparent
                                    border-0">
                                    <span class="iconify" data-icon="akar-icons:circle-minus"
                                        style="color: #cc964a;
                                            font-size:20px;"></span>
                                </button>
                            </div>
                        </div>

                    </div>
                </div>


                <!-- input ghi chú -->
                <label for="basic-url"> <b>Ghi chú</b></label>
                <div class="input-group">
                    <textarea name="ghiChu" class="form-control" aria-label="With textarea"></textarea>
                </div>


                <link rel="stylesheet" href="style/themvipham.css">

                <!-- Input -->
                <div class="formBtn_submit my-2 d-flex justify-content-around">
                    <a href='{{ route('themvpTrang2') }}' type=""
                        class="btn formBtn_submit btn_chuyentrang text-white">Gây thiệt hại cho người</a>
                    <button type="" class="btn formBtn_submit btn_huy text-white">Hủy vi phạm</button>
                    <button id="submit" type="button" class="btn formBtn_submit btn_luu text-white">Lưu vi phạm</button>
                </div>


            </form>
        </div>
    </div>

    <script type="text/javascript">
    var token = "{{ csrf_token() }}"
    
    
    
    
    </script>
    <script type="text/javascript" src="js/themvipham.js"></script>
@endsection
