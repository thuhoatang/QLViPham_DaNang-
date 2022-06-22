<?php

use App\Http\Controllers\HinhAnhVPController;
use App\Http\Controllers\ViPhamController;
use App\Models\DiaChiChiTiet;
use App\Models\HinhAnhViPham;
use App\Models\LoiViPham;
use App\Models\NguoiThietHai;
use App\Models\PhuongXa;
use App\Models\QuanHuyen;
use App\Models\ViPham;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin/chi-tiet-vi-pham', function(){
    return view('trangthainopphat.nganhang.chitietnopphat');
});

Route::get('/page/canhsat/themvipham', 
[ViPhamController::class, 'getLuatGiaoThong'])->name("themvpTrang1");


// post vi phạm ở trang 1
Route::post('/page/canhsat/themvipham', function(Request $request){
    
    // insert bang vi pham
    $soCCCD_viPham = $request->input('soCCCD_viPham');
    $bienSoXe = $request->input('bienSoXe');
    $soCCCDNguoiThietHai = $request->input('soCCCDNguoiThietHai');
    $bienSoXeNguoiThietHai = $request->input('bienSoXeNguoiThietHai');
    $tenNguoiThietHai = $request->input('tenNguoiThietHai');

    $ghiChu = $request->input('ghiChu');
    $hanNopPhat = $request->input('hanNopPhat');
    $xaPhuong = $request->input('xaPhuong');

    $quanHuyen = $request->input('quanHuyen');
    $diaChi = $request->input('diaChi');
    
    $diaChiChiTiet = new DiaChiChiTiet();

    $diaChiChiTiet->tenDCCT = $diaChi;
    $diaChiChiTiet->id_phuongXa = $xaPhuong;
    $diaChiChiTiet->tenDCCT = $diaChi;

    $diaChiChiTiet->save();

    
    $viPham = new ViPham();
    
    $viPham->soCCCD = $soCCCD_viPham;
    $viPham->hanNopPhat = $hanNopPhat;
    $viPham->ghiChu = $ghiChu;
    $viPham->id_diaChiChiTiet = $diaChiChiTiet->id;
    $viPham->bienSoXe = $bienSoXe;
    $viPham->save();
    
    $nguoiThietHai = new NguoiThietHai();
    
    $nguoiThietHai->id_vipham = $viPham->id;
    $nguoiThietHai->soCCCD = $soCCCDNguoiThietHai;
    $nguoiThietHai->save();
    
    // Lưu nhiều ảnh
    
    if ($request->has('image')) {
        //var_dump( $request->file('image'));
        $file_imgs = $request->file('image');
        
        for ($i=0; $i < count($file_imgs); $i++) { 
            
            $src_hinh = $file_imgs[$i]->move('image_uploaded', 'image' . $viPham->id  . "_" . $i . '.jpg');
            $hinhAnh = new HinhAnhViPham();
            $hinhAnh->id_vipham = $viPham->id;
            $hinhAnh->src_hinh = $src_hinh;
            
            $hinhAnh->save();        
        }
        echo "Ban đã tải hình ảnh lên";
    }else echo "Bạn chưa tải hình ảnh lên";
    
    // vi phạm - luật
    
    if($request->has("loiViPham")){
        $luatGT_ViPhams = $request->input("loiViPham");
        $tongTienVP = 0;
        for($i=0; $i < count($luatGT_ViPhams); $i++){
            $loiViPham = new LoiViPham();
            $loiViPham->id_vipham = $viPham->id;
            $loiViPham->id_luatGiaoThong = $luatGT_ViPhams[$i];
            
            $loiViPham->save();

            $tongTienVP =$tongTienVP + $loiViPham->luatGiaoThong->tienPhat;
        }

        $viPham->tongTienPhat = $tongTienVP;
        $viPham->save();
    }
    return $viPham;
});

// api post quận huyện -< vi phạm

Route::post('api/phuongXa', function(Request $request){
    $quanHuyen = $request->input('quanHuyen');
    $phuongXa = PhuongXa::where('id_quanHuyen', $quanHuyen)->get();
    return $phuongXa;
});

Route::get('get_token', function(){
    return csrf_token();
});

Route::get('/page/canhsat/themvipham_trang2', function () {
    return view('page.canhsat.themvipham_trang2');
})->name("themvpTrang2");

Route::get('/page/canhsat/danhsachvipham', function () {
    
    // get dữ liệu quận xã
    $quanHuyen = QuanHuyen::all();

    // get dữ liệu vi Phạm
    $danhSachDaLuuVP = ViPham::orderBy('id', 'DESC')->get();
    
    return view('page.canhsat.danhsachvipham', ['danhSachDaLuuVP' => $danhSachDaLuuVP, 'quanHuyen' => $quanHuyen]);
})->name("danhsachvipham");

Route::post('/page/canhsat/danhsachvipham', function (Request $request) {
    // gửi bằng form thì nhận dữ liệu bằng tên input thèn form - ajax
   $idViPham_canThayDoi = $request->input('trangThaiDuyet');
   
    
 
    for($i=0; $i < count($idViPham_canThayDoi); $i++){
        $viPhams = ViPham::where('id', $idViPham_canThayDoi[$i])->get();
        $viPham = $viPhams[0];
        $viPham->trangthai_duyet = 1;
        $viPham->save();
    }

    return $idViPham_canThayDoi;

})->name("danhsachvipham");

   


Route::get('admin/trang-thai-nop-phat', function(){
    return view('trangthainopphat.nganhang.ttnopphat');
});
Route::get('/header', function () {
    return view('masterlayout.canhsat.header');

})->name("header");


Route::get('/headerQTV', function () {
    return view('masterlayout.quanTriVien.headerQTV');
})->name("headerQTV");

Route::get('/bodyQTV', function () {
    return view('masterlayout.quanTriVien.bodyQTV');
})->name("bodyQTV");
Route::get('/headerTimKiem', function () {
    return view('masterlayout.timkiem.headerTimKiem');
})->name("headerTimKiem");
Route::get('/bodyTimKiem', function () {
    return view('masterlayout.timkiem.bodyTimKiem');
})->name("bodyTimKiem");

// chi tieets vi phamj
Route::get('/chitietvipham/{idVP}', function ($idVP) {
    $viPhams = ViPham::where('id', $idVP)->get();
    
    $viPham = $viPhams[0];
    // $phuongTien = $viPham->phuongTien;
    // $loaiPhuongTien = $viPham->phuongTien->loaiPhuongTien;
    //return $viPham->nguoiThietHai;
    return view('page.canhsat.chitietvipham', ['chiTietViPham' => $viPham]);
})->name("chitietvipham");

Route::get('vipham/{id}/{id2}', function ($id, $id2) {
    return 'vipham'.$id.$id2;
});

// trang gioi thieu
Route::get('trangGioiThieu', function () {
    return view('masterlayout.trangGioiThieu');
})->name('trangGioiThieu');



// trang dang nhap 01
Route::get('dangnhap01', function () {
    return view('masterlayout.dangnhap01');
})->name('dangnhap01');
// trang dang nhap 02
Route::get('dangnhap02', function () {
    return view('masterlayout.dangnhap02');
})->name('dangnhap02');

Route::post('dangnhap02', function (Request $request) {
    $email = $request->input('email');
    $password = $request->input('password');

    $user = Auth::attempt(['email' => $email, 'password' => $password]);
    
        if ($user) {
           
            return redirect('trangGioiThieu');
        } else {
            return redirect('dangnhap02');
        }
    
})->name('dangnhap02');

