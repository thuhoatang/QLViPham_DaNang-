<!DOCTYPE html>
<html lang="en">
<head>
    <base href="{{ asset('public') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Canh sát</title>

    <!-- boostrap -->
    <link rel="stylesheet" href="boostrap-5/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="boostrap-5/css/bootstrap-grid.css">
    <link rel="stylesheet" href="style/style_admin.css">
    <link rel="stylesheet" href="boostrap-5/css/styles-admin.css">
    <link rel="stylesheet" href="font/google-font.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css" integrity="sha384-eoTu3+HydHRBIjnCVwsFyCpUDZHZSFKEJD0mc3ZqSBSb6YhZzRHeiomAUWCstIWo" crossorigin="anonymous">
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
                            Quản lý cá nhân
                            <div class="sb-sidenav-collapse-arrow"><i class=""></i></div>
                        </a>
                        
                        <!-- menu 02 -->
                        <div class="sb-sidenav-menu-heading">Tra cứu</div>
                        <a class="nav-link collapsed text-dark" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts02" aria-expanded="false" aria-controls="collapseLayouts02">
                            <div class="sb-nav-link-icon"><i class="bi bi-search-heart-fill"></i></div>
                            Tra cứu xe
                            <div class="sb-sidenav-collapse-arrow"><i class=""></i></div>
                        </a>
                        
                        <!-- menu 03 -->
                        <div class="sb-sidenav-menu-heading">Thống kê</div>
                        <a class="nav-link collapsed text-dark" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts03" aria-expanded="false" aria-controls="collapseLayouts03">
                            <div class="sb-nav-link-icon"><i class="bi bi-pie-chart-fill"></i></div>
                            Thống kê vi phạm
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts03" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link text-dark" href="layout-static.html">Đã thêm mới</a>
                                <a class="nav-link text-dark" href="layout-sidenav-light.html">Đã gửi phê duyệt</a>
                                <a class="nav-link text-dark" href="layout-sidenav-light.html">Vi phạm trong ngày</a>
                            </nav>
                        </div>
                        <!-- Trang thai nop phat -->
                        <div class="sb-sidenav-menu-heading">Trạng thái</div>
                        <a class="nav-link collapsed text-dark" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts03" aria-expanded="false" aria-controls="collapseLayouts03">
                            <div class="sb-nav-link-icon"><i class="bi bi-pie-chart-fill"></i></div>
                            Trạng thái nộp phạt
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                    </div>
                </div>
            </nav>
        </div>

        <div id="layoutSidenav_content">
            <main>
                <div id="main-content">
                    <div id="content-main">
                        <div class="heading">
                            <h2>Quản lý nộp phạt /Nộp phạt/ Thông tin chi tiết</h2>
                        </div>
                        <!--  Nội dung -->
                        <div class="content-chitiet" style="width: 700px; margin: 0 auto; ">
                            <div class="row align-items-center">
                                <div class="col">
                                    Họ tên chủ xe
                                </div>
                                <div class="col">
                                    <!-- name -->
                                    Nguyễn văn A
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col">
                                    Ngày sinh
                                </div>
                                <div class="col">
                                    <!-- birthday -->
                                    03/10/2001
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col">
                                    Địa chỉ thường trú
                                </div>
                                <div class="col">
                                    <!-- address -->
                                    K45/Đinh Tiên Hoàng/ Hải Châu/ Đà Nẵng
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col">
                                    Số điện thoại
                                </div>
                                <div class="col">
                                    <!-- phone -->
                                    012345789
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col">
                                    Tên phương tiện
                                </div>
                                <div class="col">
                                    <!-- name vehicle -->
                                    Xe Air Blade 125 
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col">
                                    Biển số xe
                                </div>
                                <div class="col">
                                    <!-- license plates -->
                                    76C1 - 12345 
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col">
                                    Màu xe
                                </div>
                                <div class="col">
                                    <!-- Color -->
                                    Xanh đen 
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col">
                                    Nội dung vi phạm
                                </div>
                                <div class="col">
                                    <!-- license plates -->
                                    Vượt đèn đỏ 
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col">
                                    Nơi vi phạm
                                </div>
                                <div class="col">
                                    <!-- address accident -->
                                    Quận Cẩm Lệ 
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col">
                                    Hạn nộp phạt
                                </div>
                                <div class="col">
                                    <!-- deadline -->
                                    10/6/2021
                                </div>
                            </div>
                            <div class="row align-items-center" style="padding: 8px;">
                                <input style="width: 300px;" type="text" class="form-control" id="search" placeholder="Số tiền nộp phạt">
                            </div>
                            <div class="row align-items-center" style="padding: 8px;">
                                <div class="col">
                                    <button type="button" class="btn btn-outline-success">Nộp phạt</button>
                                </div>
                                <div class="col">
                                    <!-- time confirm -->
                                    14:00  4/5/2022
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2022</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
     <script type="text/javascript" src="boostrap-5/js/bootstrap.bundle.js"></script>
     <script type="text/javascript" src="boostrap-5/js/bootstrap.bundle.min.jsx"></script>
</body>
</html>
