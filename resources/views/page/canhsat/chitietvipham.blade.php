@extends('masterlayout.canhsat.header')

@section('chitietvipham')
    <link rel="stylesheet" href="style/chitietbienban.css">

    <div class="container-fluid px-4 mt-2">
        <p class="mt-4 text-dark">Quản lý vi phạm/ Chi tiêt vi phạm</p>

        <p class="mt-4 text-dark text-center"> <b>BIÊN BẢN VI PHẠM HÀNH CHÍNH GIAO THÔNG ĐƯỜNG BỘ</b></p>

        <!-- ngày tháng giờ vi phạm -->
        <span>Thời gian vi phạm: &emsp; &emsp; </span> <span id="ngayVP">{{$chiTietViPham->created_at}}</span>
        &emsp; &emsp;

        <!--  Thông tin cơ bản   -->
        <div class="thongtin_NguoiVP">
            <!-- teenn người điều khiển -->
            <span> <b>Tên người điều khiển/ chủ xe vi phạm: &emsp; &emsp; &emsp; &emsp;</b></span>
            <span>{{$chiTietViPham->thongTinCaNhan->hoTen}}</span>

            </br>
            <!-- biển số pt -->
            <span> <b>Biển số phương tiện: &emsp; &emsp;</b></span>
            <span>{{$chiTietViPham->bienSoXe}}</span>
            <span> &emsp; &emsp; &emsp; &emsp;</span>
            <span> <b>Số CCCD/ CMND: &emsp; &emsp;</b></span>
            <span>{{$chiTietViPham->soCCCD}}</span>
            </br>
            <!-- địa chỉ -->
            <span> <b>Địa chỉ: &emsp; &emsp;</b></span>
            <span>{{$chiTietViPham->diaChi->tenDCCT}}, {{$chiTietViPham->diaChi->xaPhuong->xaPhuong}}, 
                {{$chiTietViPham->diaChi->xaPhuong->quanHuyen->quanHuyen}},
                {{$chiTietViPham->diaChi->xaPhuong->quanHuyen->tinhThanh->tinhThanh}}
            </span>

            </br>
            <!-- Nghề nghiệp -->
            <span> <b>Nghề nghiệp: &emsp; &emsp;</b></span>
            <span>{{$chiTietViPham->thongTinCaNhan->ngheNghiep}}</span>
            </br>

            {{-- ảnh vi phạm --}}
            <div>
               <span> <b>Ảnh vi phạm</b></span>
               @foreach ($chiTietViPham->hinhAnh as $hinhAnh)
               
               <img src="{{$hinhAnh->src_hinh}}" alt="" style="width: 150px; height: 150px; object-fit: contain">
               @endforeach
            </div>


            <!-- danh sách vi phạm -->
            <span> <b>Danh sách vi phạm: &emsp; &emsp;</b></span>
            </br>
            <div id="table_danhsach_vp" style="width: 600px">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">STT</th>
                            <th scope="col">Tên vi phạm</th>
                            <th scope="col">Thu phí</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($chiTietViPham->loiViPham as $loiViPham)
                            <tr>
                            <th scope="row">{{$loiViPham->id}}</th>
                                <td>{{$loiViPham->luatGiaoThong->tenLuatViPham}}</td>
                                <td>{{$loiViPham->luatGiaoThong->tienPhat}} VND</td>
                            </tr>
                        @endforeach
                        


                    </tbody>
                </table>

                <div class="d-flex justify-content-between">
                    <span><b>Tổng tiền thanh toán: &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;</b></span>
                    <span><b>{{number_format($chiTietViPham->tongTienPhat, 0, ',', '.');}}</b>&emsp;&emsp;VND</span>
                </div>


            </div>

            <!-- Người thiệt hại -->
            <span> <b>Tên người thiệt hại: &emsp; &emsp;</b></span>
            <span></span>
            <span> <b>Số CCCD người thiệt hại: &emsp; &emsp;</b></span>
            <span>{{$chiTietViPham->nguoiThietHai[0]->soCCCD}}</span>
            </br>
            <!-- Ghi chú -->
            <span> <b>Ghi chú: &emsp; &emsp;</b></span>
            <span>{{$chiTietViPham->ghiChu}}</span>
            </br>


        </div>

        <div class="trangthai_thaydoi">
            <span> <b>Trạng thái duyệt:  &emsp; &emsp; &emsp; &emsp;</b> </span>
            @if ($chiTietViPham->trangthai_duyet == 1)
                <span>Đã duyệt &emsp; &emsp;&emsp; &emsp;</span> 
                <span> <b>Vào lúc: &emsp; &emsp;</b> </span>
                <span>{{$chiTietViPham->updated_at}}</span>
            @else
            
            <span>Chưa duyệt</span>
            @endif
           
        </div>

        <div class="d-flex justify-content-end">
            <button type="button" class="btn my-2 text-white" style="background-color: rgb(172, 120, 31); width:30%;">In
                phiếu vi phạm</button>

        </div>


    </div>
@endsection
