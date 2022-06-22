
@extends('masterlayout.canhsat.header')

@section('danhsachvipham')

<link rel="stylesheet" href="style/danhsachvipham.css">



<div class="container-fluid px-4 mt-2">

    @if (Illuminate\Support\Facades\Auth::user()->id_quyencanbo == 1)
    <div class="canbo">
        <div class="container-fluid px-4 mt-2">
            <p class="mt-4 text-dark"> <b>Duyệt vi phạm</b></p>
            <div class="d-flex">
                <!-- search -->
                <div class="input-group mb-3" style="width: 250px">
                    <input id="myInput" type="text" class="form-control" placeholder="Tìm theo biển số xe"
                        aria-label="" aria-describedby="basic-addon1">

                    <div class="input-group-prepend">
                        <button class="btn btn-outline-secondary" type="button">Tìm</button>
                    </div>
                </div>

                <!-- combobox -->
                
                <div class="form-group input-group mb-3 mx-5" style="width: 300px">
                    
                    <select  id="ddlCountry" oninput="" style="width:200px" class="custom-select" >
                        <option value="all">Tất cả quận</option>
                        @foreach ($quanHuyen as $quanHuyen)
                            <option value="{{$quanHuyen->quanHuyen}}">{{$quanHuyen->quanHuyen}}</option>
                            
                        @endforeach

                      {{-- <option selected>Quận huyện</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option> --}}
                    </select>
                </div>

                <div>
                    <button onclick="changeTrangThai();" type="button" class="btn btn-success btn-sm">Duyệt vi phạm</button>
                </div>
            </div>
           

            <!-- table -->
            
            
        </div>
    </div>
    @else
    <div class="canhsat">
        <p class="mt-4 text-dark">Quản lý vi phạm/ Danh sách các vi phạm</p>

        <p class="mt-4 text-dark">  <b>BẢNG THỐNG KÊ VI PHẠM</b></p>
    
        <div class="input-group mb-3" style="width: 250px">
            <input id="myInput" type="text" class="form-control" placeholder="Tìm theo biển số xe"
                aria-label="" aria-describedby="basic-addon1">
    
            <div class="input-group-prepend">
                <button  class="btn btn-outline-secondary" type="button">Tìm</button>
            </div>
        </div>
    </div>  
    @endif
   
    
    

    {{-- <div>
        <button onclick="changeTrangThai();" type="button" class="btn btn-success btn-sm">Duyệt vi phạm</button>
    </div> --}}
    <!-- table  -->
    <table class="w-100">
        <thead>
            <tr>
                <th>STT</th>
                <th id="th_biensopt">Biển số</th>
                

                <th id="th_loaipt">Loại phương tiện</th>

                @if (Illuminate\Support\Facades\Auth::user()->id_quyencanbo == 2)
                    <th id="th_ngayvipham">Ngày vi phạm</th>
                    <th>Thao tác</th>
                @else
                    <th id="th_thoigian">Thời gian</th>
                    <th id="th_diadiem">Địa điểm</th>
                    <th id="th_trangthai">Trạng thái</th>
                    <th id="th_thaotac">Thao tác</th>
                @endif

                

            </tr>
        </thead>
        <tbody id="myTable">

            @foreach ($danhSachDaLuuVP as $viPham)
                <tr>
                    <td>{{$viPham->id}}</td>
                    <td>{{$viPham->phuongTien->bienSoXe}}</td>
                    <td>{{$viPham->phuongTien->loaiPhuongTien->tenLoai}}</td>
                    @if (Illuminate\Support\Facades\Auth::user()->id_quyencanbo == 2)
                    <td>{{$viPham->created_at}}</td>
                    <td class="text-center">
                        
                        <a href='{{ route('chitietvipham',['idVP'=>$viPham->id])}}' id="" class="xemchitiet">Xem
                            chi tiết</a>
                        <button type="button" class="border-0
                                bg-transparent">
                            <span class="iconify" data-icon="akar-icons:chat-edit" style="color:orangered;
                                    font-size:20px"></span>
                        </button>
                    </td>
                    @else

                                <td>{{$viPham->created_at}}</td>
                                <td>{{$viPham->diaChi->xaPhuong->quanHuyen->quanHuyen}}</td>
                                <td>
                                    <div class="form-group input-group my-1 text-center ">
                                        <p class="trangthai_duyet my-0 ml-3" id="trangthai_{{$viPham->id}}">
                                        @if ($viPham->trangthai_duyet == 1)
                                            Đã duyệt
                                        @else
                                            Chưa duyệt
                                        @endif
                                        
                                        </p>
                                    </div>
                                </td>
                                <td>
                                    <a href='{{ route('chitietvipham',['idVP'=>$viPham->id])}}' id="" class="xemchitiet">Xem
                                        chi tiết</a>
                                    <button type="button" class="border-0
                                            bg-transparent">
                                        
                                        @if ($viPham->trangthai_duyet == 1)
                                            
                                        @else
                                        <input name="trangthaiduyet[]" value="{{$viPham->id}}" type="checkbox" id="input_checkbox_{{$viPham->id}}"/>
                                            
                                        @endif
                                    </button>
                                </td>
                        
                    @endif
   
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<script type="text/javascript">
    var token = "{{ csrf_token() }}"
</script>

<script type="text/javascript" src="js/danhsachvipham.js"></script>


@endsection