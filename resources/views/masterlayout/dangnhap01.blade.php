

<link rel="stylesheet" href="style/dangNhap.css">
<link rel="stylesheet" href="style/style_admin.css">
<title>Quản lý vi phạm</title>

<!-- boostrap -->
<link rel="stylesheet" href="boostrap-5/css/bootstrap-grid.min.css">
<link rel="stylesheet" href="boostrap-5/css/bootstrap-grid.css">
<link rel="stylesheet" href="style/style_admin_2.css">
<link rel="stylesheet" href="boostrap-5/css/styles-admin.css">
<link rel="stylesheet" href="font/google-font.css">
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
<!-- header -->

<body>
 <!-- header -->
 <nav class="sb-topnav navbar navbar-expand navbar">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="index.html">
        <img id="logoimg" src="./image/Logo_GTDN.png" alt="">
    </a>
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
            class="fas fa-bars"></i></button>
    <!-- Navbar Search-->
    
    
</nav>


    
    <div id="w-100">
        <main class="d-flex justify-content-center">
            <div class="logo_img d-block">
                <img src="./image/anh_dn.svg" alt="">
            </div>
            <div class="ml-5 phan_dangnhap text-center"> 
               <h6>Bạn hãy đăng nhập với vai trò</h6>
               <div class="button_dangnhap">
                <a href='{{ route('dangnhap02') }}'  class="btn border-danger bg-transparent w-100 text-success my-2">Người tham gia giao thông</a>
                <a href='{{ route('dangnhap02') }}'  class="btn border-danger bg-transparent w-100 text-success">Người có nhiệm vụ thi hành</a>

               </div>
            </div>
        </main>
       
    </div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">

     
    <script type="text/javascript" src="boostrap-5/js/bootstrap.bundle.js"></script>
    <script type="text/javascript" src="boostrap-5/js/bootstrap.bundle.min.jsx"></script>
</body>



