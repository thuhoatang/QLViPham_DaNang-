<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tra cứu phương tiện</title>

    <!-- boostrap -->
    <link rel="stylesheet" href="boostrap-5/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="boostrap-5/css/bootstrap-grid.css">
    <link rel="stylesheet" href="style/style_admin.css">
   
    <link rel="stylesheet" href="boostrap-5/css/styles-admin.css">
    <link rel="stylesheet" href="font/google-font.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css" integrity="sha384-eoTu3+HydHRBIjnCVwsFyCpUDZHZSFKEJD0mc3ZqSBSb6YhZzRHeiomAUWCstIWo" crossorigin="anonymous">
    {{-- iquery --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
     <!-- header -->
     <nav class="sb-topnav navbar navbar-expand navbar">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.html">
            <img id="logoimg" src="image/Logo_GTDN.png" alt="">
        </a>
        <!-- Sidebar Toggle-->
        {{-- <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button> --}}
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div>
                <img id="userimg" src="image/profile.png" alt="">
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Đăng Nhập</a></li>
                    <li><a class="dropdown-item" href="#!">Đăng Xuất</a></li>
                    
                </ul>
            </li>
        </ul>
    </nav>

    <!-- tab menu -->
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <!-- menu 01 -->
                        <div class="sb-sidenav-menu-heading">Quản lý</div>
                        <a class="nav-link collapsed text-dark" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts01" aria-expanded="false" aria-controls="collapseLayouts01">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Quản lý vi phạm
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts01" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link text-dark" href="layout-static.html">Thêm vi phạm</a>
                                <a class="nav-link text-dark" href="layout-sidenav-light.html">Sửa vi phạm</a>
                                <a class="nav-link text-dark" href="layout-sidenav-light.html">Xóa vi phạm</a>

                            </nav>
                        </div>
                        <a class="nav-link collapse text-dark" href="#" data-bs-toggle="collapse" >
                            <div class="sb-nav-link-icon"><i class="bi bi-person-bounding-box"></i></div>
                            Quản lý người dùng
                            <div class="sb-sidenav-collapse-arrow"><i class=""></i></div>
                        </a>
                        <a class="nav-link collapse text-dark" href="#" data-bs-toggle="collapse" >
                            <div class="sb-nav-link-icon"><i class="bi bi-person-bounding-box"></i></div>
                            Quản lý cá nhân
                            <div class="sb-sidenav-collapse-arrow"><i class=""></i></div>
                        </a>
                        
                        <!-- menu 02 -->
                        <div class="sb-sidenav-menu-heading">Tra cứu</div>
                        <a class="nav-link collapsed text-dark" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts02" aria-expanded="false" aria-controls="collapseLayouts02">
                            <div class="sb-nav-link-icon"><i class="bi bi-search-heart-fill"></i></div>
                            Tra cứu vi phạm
                            <div class="sb-sidenav-collapse-arrow"><i class=""></i></div>
                        </a>
                        <a class="nav-link collapsed text-dark" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts02" aria-expanded="false" aria-controls="collapseLayouts02">
                        <div class="sb-nav-link-icon"><i class="fas fa-car"></i></div>
                            Tra cứu xe
                            <div class="sb-sidenav-collapse-arrow"><i class=""></i></div>
                        </a>
                        <!-- menu 03 -->
                        <div class="sb-sidenav-menu-heading">Thống kê</div>
                        <a class="nav-link collapsed text-dark" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts03" aria-expanded="false" aria-controls="collapseLayouts03">
                            <div class="sb-nav-link-icon"><i class="bi bi-pie-chart-fill"></i></div>
                            Thống kê
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts03" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link text-dark" href="layout-static.html">Thống kê vi phạm</a>
                                <a class="nav-link text-dark" href="layout-sidenav-light.html">Thống kê người dùng</a>
                                <a class="nav-link text-dark" href="layout-sidenav-light.html">Thống kê nộp phạt</a>

                            </nav>
                        </div>
                        
                    </div>
                </div>
                <!-- <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    Start Bootstrap
                </div> -->
            </nav>
        </div>

    </div>
    <!-- Giao diện tìm kiếm -->
    <div class="content_timkiem" id="content_timkiem">
        <h2>Tìm kiếm thông tin biển số</h2>
        <!-- Giao diện tìm kiếm !-->
        <div class="timkiem_bs" id="timkiem_bs">
            <form action="#">
                <div class="searchbox" id="searchbox">
                        <input type="text" class="timkiem_box" placeholder="Nhập biển số xe..." name="bienso" id="bienso" />
                       <i class="fas fa-search"></i>
                </div>
                <div class="button_area" id="button_area">
                    <select name="loaixe" class="timkiem_select" id="loaixe">
                        <option value="xemay">Xe Máy</option>
                        <option value="oto">Xe ô tô</option>
                    </select>
                    <select name="quanhuyen" class="timkiem_select" id="quanhuyen">
                        <option value="hoavang">Huyện Hòa Vang</option>
                        <option value="hoangxa">Huyện Hoàng Sa</option>
                        <option value="sontra">Sơn Trà</option>
                        <option value="nguhanhson">Ngũ Hành Sơn</option>
                        <option value="haichau">Hải Châu</option>
                        <option value="thanhkhe">Thanh Khê</option>
                        <option value="lienchieu">Liên Chiểu</option>
                        <option value="camle">Cẩm Lệ</option>
                    </select>
                    <input class="input_button" type="submit"  value="Tìm kiếm"/>
                </div>
                 
            </form>
        </div>
        <h2>Kết quả tìm kiếm:</h2>
        <!-- result -->
        <div class="ketqua_bienso" id="ketqua_bienso">
            <table >
                <tr>
                    <td style="width:30%"><label><h5>Họ tên chủ xe:</h5></label></td>
                    <td><p>Nguyễn Văn An</p></td>
                    <td  rowspan="10" style=" width:35%"><img style="margin-bottom: 300px" src="image/bienso_avt.png"/></td>
                </tr>
                <tr>
                    <td style="width:30%"><label><h5>Sinh ngày:</h5></label></td>
                    <td><p>20/04/2000</p></td>
                </tr>
                <tr>
                    <td style="width:30%"><label><h5>Số CCCD/CMND:</h5></label></td>
                    <td><p>9088 789 332</p></td>
                </tr>
                <tr>
                    <td style="width:30%"><label><h5>Địa chỉ thường trú:</h5></label></td>
                    <td><p>K45/Đinh Tiên Hoàng/ Hải Châu/ Đà Nẵng</p></td>
                </tr>
                <tr>
                    <td style="width:30%"><label><h5>Số điện thoại:</h5></label></td>
                    <td><p>0905589210</p></td>
                </tr>
                <tr>
                    <td style="width:30%"><label><h5>Nghề nghiệp:</h5></label></td>
                    <td><p>Sinh viên</p></td>
                </tr>
                <tr>
                    <td style="width:30%"><label><h5>Mẫu xe:</h5></label></td>
                    <td><p>Honda Air Blade 125</p></td>
                </tr>
                <tr>
                    <td style="width:30%"><label><h5>Biển số xe:</h5></label></td>
                    <td><p>43D-437000</p></td>
                </tr>
                <tr>
                    <td style="width:30%"><label><h5>Màu xe:</h5></label></td>
                    <td><p>Đỏ/Bạc/Đen</p></td>
                </tr>
                <tr>
                    <td style="width:30%"><label><h5>Ngày đăng ký:</h5></label></td>
                    <td><p>23/09/2021</p></td>
                </tr>
                <tr>
                    <td><button style="margin-left:15px; background-color: #D27C2C; color:white; border:#fff; border-radius:7px;height:40px">Tải bản xuống</button></td>
                    
                </tr>
            </table>
            
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">

     
     <script type="text/javascript" src="boostrap-5/js/bootstrap.bundle.js"></script>
     <script type="text/javascript" src="boostrap-5/js/bootstrap.bundle.min.jsx"></script>
</body>
</html>     