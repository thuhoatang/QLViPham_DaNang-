<head>

<link rel="stylesheet" href="style/dangNhap.css">
<link rel="stylesheet" href="style/style_admin.css">
<title>Đăng nhập</title>

<!-- boostrap -->
<link rel="stylesheet" href="boostrap-5/css/bootstrap-grid.min.css">
<link rel="stylesheet" href="boostrap-5/css/bootstrap-grid.css">
<link rel="stylesheet" href="style/style_admin_2.css">
<link rel="stylesheet" href="boostrap-5/css/styles-admin.css">
<link rel="stylesheet" href="font/google-font.css">
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
<!-- header -->
</head>
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
           
            <div class="phan_dangnhap text-left"> 
                <h6>Đăng nhập</h6>
                <div class="button_dangnhap">
                 <form method="post" class="text-left" id="">
                    @csrf
                     <div class="form-group my-4">
                       <label for="exampleInputEmail1">Tên đăng nhập</label>
                       <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nhập email">
                       
                     </div>
                     <div class="form-group my-1">
                       <label for="exampleInputPassword1">Mật khẩu</label>
                       <input  name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Nhập mật khẩu của bạn">
                     </div>
                    
                     <button id="submit_from_dangnhap" type="submit" class="btn btn-success my-3">Đăng nhập</button>
                   </form>
                </div>
             </div>
        </main>
       
    </div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">

     
    <script type="text/javascript" src="boostrap-5/js/bootstrap.bundle.js"></script>
    <script type="text/javascript" src="boostrap-5/js/bootstrap.bundle.min.jsx"></script>
</body>



