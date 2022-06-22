@extends('masterlayout.canhsat.header')
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
            
            <select style="width:200px" class="custom-select" id="inputGroupSelect01">
              <option selected>Quận huyện</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
        </div>

        <div>
            <button type="button" class="btn btn-success btn-sm">Duyệt vi phạm</button>
        </div>
    </div>
   

    <!-- table -->
    <!-- table  -->
    <table class="w-100">
        <thead>
            <tr>
                <th>STT</th>
                <th id="th_biensopt">Biển số phương tiện</th>
                <th id="th_thoigian">Thời gian</th>
                <th id="th_diadiem">Địa điểm</th>
                <th id="th_trangthai">Trạng thái</th>
                <th id="th_thaotac">Thao tác</th>
            </tr>
        </thead>
        <tbody id="myTable">
            <tr>
                <td>1</td>
                <td>43 D 637</td>
                <td>Xe gắn máy</td>
                <td>Hải Châu</td>
                <td>
                    <div class="form-group input-group my-2 mx-5" style="width: 100px">
            
                        <select style="width:200px" class="custom-select" id="inputGroupSelect01">
                          <option selected>Chưa duyệt</option>
                          <option value="1">Đã duyệt</option>
                          
                        </select>
                    </div>
                </td>
                <td>
                    <a href="#" id="" class="xemchitiet">Xem
                        chi tiết</a>
                    <button type="button" class="border-0
                            bg-transparent">
                        <input  type="checkbox" id="input"/>
                    </button>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>43 D 637</td>
                <td>Xe gắn máy</td>
                <td>Hải Châu</td>
                <td>
                    <div class="form-group input-group my-2 mx-5" style="width: 100px">
            
                        <select style="width:200px" class="custom-select" id="inputGroupSelect01">
                          <option selected>Chưa duyệt</option>
                          <option value="1">Đã duyệt</option>
                          
                        </select>
                    </div>
                </td>
                <td>
                    <a href="#" id="" class="xemchitiet">Xem
                        chi tiết</a>
                    <button type="button" class="border-0
                            bg-transparent">
                        <input  type="checkbox" id="input"/>
                    </button>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>43 D 637</td>
                <td>Xe gắn máy</td>
                <td>aaa</td>
                <td>
                    <div class="form-group input-group my-2 mx-5" style="width: 100px">
            
                        <select style="width:200px" class="custom-select" id="inputGroupSelect01">
                          <option selected>Chưa duyệt</option>
                          <option value="1">Đã duyệt</option>
                          
                        </select>
                    </div>
                </td>
                <td>
                    <a href="#" id="" class="xemchitiet">Xem
                        chi tiết</a>
                    <button type="button" class="border-0
                            bg-transparent">
                        <input  type="checkbox" id="input"/>
                    </button>
                </td>
            </tr>

        </tbody>
    </table>
    
</div>
@endsection