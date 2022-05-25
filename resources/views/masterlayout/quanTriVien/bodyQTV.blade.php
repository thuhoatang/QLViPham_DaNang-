<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thống kê</title>

    <!-- boostrap -->
    <link rel="stylesheet" href="boostrap-5/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="boostrap-5/css/bootstrap-grid.css">
    <link rel="stylesheet" href="style/style_admin.css">
    <link rel="stylesheet" href="../style/style_thongke.css">
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
    <!-- nội dung thống kê -->
    <div class="content-thongke-qtv" id="content-thongke-qtv">
        <h2>Thống kê/Vi phạm</h2>
        <!-- search -->
        <div class="search_thongke" id="search_thongke">
            <div class="search_vipham">
                <form action="">
                    <p>Tìm tên vi phạm</p>
                    <input type="text" name="vipham" id="vipham" placeholder="Tìm kiếm">
                </form>
                <form action="">
                    <p>Sắp xếp số lượng vi phạm</p>
                    <input type="text" name="vipham" id="vipham" placeholder="Cao thấp">
                </form>
            </div>   
            <div class="filter_quan">
                
                <div class="checkbox">

                    <div class="checkbox_1">
                    <p>Lọc tên với Quận</p>
                        <form>
                            <div class="form-check-default box-checkbox">
                                <input class="form-checkbox-input" id="default-check2" type="checkbox" name="default-check" checked="checked">
                                <label class="form-checkbox-label-2" for="default-check2">Hải Châu</label>
                            </div>

                            <div class="form-check-default box-checkbox">
                                <input class="form-checkbox-input" id="default-check2" type="checkbox" name="default-check">
                                <label class="form-checkbox-label-2" for="default-check2">Cẩm Lệ</label>
                            </div>
                            <div class="form-check-default box-checkbox">
                                <input class="form-checkbox-input" id="default-check2" type="checkbox" name="default-check">
                                <label class="form-checkbox-label-2" for="default-check2">Thanh Khê</label>
                            </div>

                            <div class="form-check-default box-checkbox">
                                <input class="form-checkbox-input" id="default-check2" type="checkbox" name="default-check">
                                <label class="form-checkbox-label-2" for="default-check2">Liên Chiểu</label>
                            </div>
                            
                        </form>
                    </div>
                    <div class="checkbox_2">
                        <form>
                            <div class="form-check-default box-checkbox">
                                <input class="form-checkbox-input" id="default-check2" type="checkbox" name="default-check" checked="checked">
                                <label class="form-checkbox-label-2" for="default-check2">Ngũ Hành Sơn</label>
                            </div>

                            <div class="form-check-default box-checkbox">
                                <input class="form-checkbox-input" id="default-check2" type="checkbox" name="default-check">
                                <label class="form-checkbox-label-2" for="default-check2">Sơn Trà</label>
                            </div>
                            <div class="form-check-default box-checkbox">
                                <input class="form-checkbox-input" id="default-check2" type="checkbox" name="default-check" checked="checked">
                                <label class="form-checkbox-label-2" for="default-check2">Huyện Hòa Vang</label>
                            </div>

                            <div class="form-check-default box-checkbox">
                                <input class="form-checkbox-input" id="default-check2" type="checkbox" name="default-check">
                                <label class="form-checkbox-label-2" for="default-check2">Huyện Hoàng Sa</label>
                            </div>

                            
                        </form>
                    </div>
                </div>
            </div>
            <div class="btn_search">
                <button>Áp dụng tìm kiếm</button>
            </div>
        </div>
        <!-- result -->
        <div class="result_search">
            <h2 style="padding-left: 60px; font-size:1.7rem;" >Kết quả tìm kiếm</h2>
            <div class="result_soluong_quan">
                <div class="quan_soluongvp">
                    <h3>Quận Hải Châu: <span>30 vi phạm</span></h3>
                </div>
                <table class="table_vipham"  cellspacing=0 cellpading=0>
                    <tr>
                        <th >Tên vi phạm</th>
                        <th >Số lượng</th>
                        <th >Xem chi tiết</th>
                    </tr>
                    <tr>
                        <td>Vượt đèn đỏ</td>
                        <td>12</td>
                        <td><a href="">Xem chi tiết</a></td>
                    </tr>
                    <tr>
                        <td>Vượt đèn đỏ</td>
                        <td>12</td>
                        <td><a href="">Xem chi tiết</a></td>
                    </tr>
                    <tr>
                        <td>Vượt đèn đỏ</td>
                        <td>12</td>
                        <td><a href="">Xem chi tiết</a></td>
                    </tr>
                    
                </table>
                
            </div>
            <!-- thống kê nổi bật -->
            <div class="thongke_noibat">
                <h2>Các quận vi phạm nhiều nhất</h2>
                <div class="quan_vp">
                    <div class="quan" id="quan">
                        <h3>Quận Cẩm Lệ</h3>
                        <p>450</p>
                    </div>
                    <div class="quan">
                        <h3>Quận Sơn Trà</h3>
                        <p>150</p>
                    </div>
                    <div class="quan">
                        <h3>Quận Hòa Vang</h3>
                        <p>160</p>
                    </div>
                    <div class="quan">
                        <h3>Quận Thanh Khê</h3>
                        <p>250</p>
                    </div>
                </div>


            </div>
            <!-- thống kê theo ngày -->
            <div class="thongke_ngay">
                <h2>Thống kê theo ngày trong tuần</h2>
                <div class="date">
                    <button>Thứ 2</button>
                    <button>Thứ 3</button>
                    <button>Thứ 4</button>
                    <button>Thứ 5</button>
                    <button>Thứ 6</button>
                    <button>Thứ 7</button>
                    <button>Chủ nhật</button>
                </div>
                <table class="table_vipham"  cellspacing=0 cellpading=0>
                    <tr>
                        <th >Tên vi phạm</th>
                        <th >Loại vi phạm</th>
                        <th >Số lượng</th>
                        <th >Quận</th>
                        
                    </tr>
                    <tr>
                        <td>Vượt đèn đỏ</td>
                        <td>1</td>
                        <td>1230</td>
                        <td>Hải Châu</td>
                    </tr>
                    <tr>
                        <td>Vượt đèn đỏ</td>
                        <td>1</td>
                        <td>1230</td>
                        <td>Hải Châu</td>
                    </tr>
                    <tr>
                        <td>Vượt đèn đỏ</td>
                        <td>1</td>
                        <td>1230</td>
                        <td>Hải Châu</td>
                    </tr>
                    
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">

     
     <script type="text/javascript" src="boostrap-5/js/bootstrap.bundle.js"></script>
     <script type="text/javascript" src="boostrap-5/js/bootstrap.bundle.min.jsx"></script>
</body>
</html>