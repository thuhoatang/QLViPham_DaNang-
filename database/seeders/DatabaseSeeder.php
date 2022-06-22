<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // insert quyền
        DB::table('quyens')->insert([
            'id' => 1,
            'tenQuyen' => "Cán bộ duyệt"
        ]);
        DB::table('quyens')->insert([
            'id' => 2,
            'tenQuyen' => "Cảnh sát"
        ]);
        DB::table('quyens')->insert([
            'id' => 3,
            'tenQuyen' => "Người dùng"
        ]);

        // insert LoaiPhuongTien
        DB::table('loai_phuong_tiens')->insert([
            'id' => 1,
            'tenLoai' => "Xe máy"
        ]);
        DB::table('loai_phuong_tiens')->insert([
            'id' => 2,
            'tenLoai' => "Xe ô tô"
        ]);
        // insert tinh_thanhs
        DB::table('tinh_thanhs')->insert([
            'tinhThanh' => "Đà Nẵng"
        ]);

        // insert quan_huyens
        DB::table('quan_huyens')->insert([
            'id' => 1,
            'quanHuyen' => "Quận Hải Châu",
            'id_tinhThanh' => 1
        ]);
        DB::table('quan_huyens')->insert([
            'id' => 2,
            'quanHuyen' => "Quận Cẩm Lệ",
            'id_tinhThanh' => 1
        ]);
        DB::table('quan_huyens')->insert([
            'id' => 3,
            'quanHuyen' => "Quận Thanh Khê",
            'id_tinhThanh' => 1
        ]);
        DB::table('quan_huyens')->insert([
            'id' => 4,
            'quanHuyen' => "Quận Liên Chiểu",
            'id_tinhThanh' => 1
        ]);
        DB::table('quan_huyens')->insert([
            'id' => 5,
            'quanHuyen' => "Quận Ngũ Hành Sơn",
            'id_tinhThanh' => 1
        ]);

        // insert phuong_xas
        DB::table('phuong_xas')->insert([
            'id' =>1,
            'xaPhuong' => "Phường Thanh Bình",
            'id_quanHuyen' => 1
        ]);
        DB::table('phuong_xas')->insert([
            'id' =>2,
            'xaPhuong' => "Phường Thạch Thang",
            'id_quanHuyen' => 1
        ]);
        DB::table('phuong_xas')->insert([
            'id' =>3,
            'xaPhuong' => "Phường Thuận Phước",
            'id_quanHuyen' => 1
        ]);
        DB::table('phuong_xas')->insert([
            'id' =>4,
            'xaPhuong' => "Phường Thanh Bình",
            'id_quanHuyen' => 1
        ]);
        DB::table('phuong_xas')->insert([
            'id' =>5,
            'xaPhuong' => "Phường Khuê Trung",
            'id_quanHuyen' => 2
        ]);
        DB::table('phuong_xas')->insert([
            'id' =>6,
            'xaPhuong' => "Phường Hòa Phát",
            'id_quanHuyen' => 2
        ]);
        DB::table('phuong_xas')->insert([
            'id' =>7,
            'xaPhuong' => "Phường Hòa An",
            'id_quanHuyen' => 2
        ]);
        DB::table('phuong_xas')->insert([
            'id' =>8,
            'xaPhuong' => "Phường Tam Thuận",
            'id_quanHuyen' => 3
        ]);
        DB::table('phuong_xas')->insert([
            'id' =>9,
            'xaPhuong' => "Phường Thanh Khê Tây",
            'id_quanHuyen' => 3
        ]);
        DB::table('phuong_xas')->insert([
            'id' =>10,
            'xaPhuong' => "Phường Xuân Hà",
            'id_quanHuyen' => 3
        ]);


        // insert thong_tin_ca_nhans
        DB::table('thong_tin_ca_nhans')->insert([
            
            'soCCCD' => "123345678",
            'hoTen' => "Ngô Văn Đạt",
            'id_phuongXa' => 1,
            'ngheNghiep' => 'Công nhân xây dựng',
            'sdt' => '0905678321',
            'ngaySinh' => '1995-12-12'
        ]);
        DB::table('thong_tin_ca_nhans')->insert([
            
            'soCCCD' => "678907456",
            'hoTen' => "Nguyễn Thanh Ngân",
            'id_phuongXa' => 1,
            'ngheNghiep' => 'Kỹ sư',
            'sdt' => '0905678322',
            'ngaySinh' => '1995-12-12'
        ]); 
        
        DB::table('thong_tin_ca_nhans')->insert([
            
            'soCCCD' => "123345665",
            'hoTen' => "Nguyễn Văn Khánh",
            'id_phuongXa' => 1,
            'ngheNghiep' => 'Công nhân',
            'sdt' => '0905699921',
            'ngaySinh' => '1995-12-12'
        ]); 
        
        DB::table('thong_tin_ca_nhans')->insert([
            
            'soCCCD' => "123366678",
            'hoTen' => "Trần Văn Anh",
            'id_phuongXa' => 1,
            'ngheNghiep' => 'Công nhân',
            'sdt' => '0905678377',
            'ngaySinh' => '1995-12-12'
        ]); 
        
        // imnsert tai_khoan_nguoi_tham_gia_giao_thongs
        DB::table('tai_khoan_nguoi_tham_gia_giao_thongs')->insert([
            'id' =>1,
            'tenDangNhap' => "vandat",
            'matKhau' => "1234",
            'soCCCD' => "123345678"
        ]); 
        DB::table('tai_khoan_nguoi_tham_gia_giao_thongs')->insert([
            'id' =>2,
            'tenDangNhap' => "thanhngan",
            'matKhau' => "1234",
            'soCCCD' => "678907456"
        ]); 
        DB::table('tai_khoan_nguoi_tham_gia_giao_thongs')->insert([
            'id' =>3,
            'tenDangNhap' => "vankhanh",
            'matKhau' => "1234",
            'soCCCD' => "678907456"
        ]); 
        // insert users
        DB::table('users')->insert([
            'id' =>1,
            'email' => "canhsat@gmail.com",
            'name' => "canhsat",
            'password' => bcrypt("1234"),
            'id_quyencanbo' =>2,
            'soCCCD' => "678907456"
        ]);
        DB::table('users')->insert([
            'id' =>2,
            'email' => "canboduyet@gmail.com",
            'name' => "canboduyet",
            'password' => bcrypt("1234"),
            'id_quyencanbo' =>1,
            'soCCCD' => "678907456"
        ]);
        DB::table('users')->insert([
            'id' =>3,
            'email' => "nganhang@gmail.com",
            'name' => "nganhang",
            'password' => bcrypt("1234"),
            'id_quyencanbo' =>1,
            'soCCCD' => "678907456"
        ]);
        // insert phuong_tiens
        DB::table('phuong_tiens')->insert([
            // 'id' =>1,
            'bienSoXe' => "43D9567",
            'tenPhuongTien' => "Volvo 012",
            'mauXe' => "Đỏ-Bạc",
            'nhanHieu' => "Volvo",
            'ngayDangKi' => "2012-12-12",
            'soCCCD' => "678907456",
            'id_maLoai' => 1
        ]);

        DB::table('phuong_tiens')->insert([
            //'id' =>2,
            'bienSoXe' => "43E8902",
            'tenPhuongTien' => "Zenos 099",
            'mauXe' => "Đỏ-Bạc",
            'nhanHieu' => "Zenos",
            'ngayDangKi' =>  "2012-12-12",
            'soCCCD' => "678907456",
            'id_maLoai' => 1
        ]);

        DB::table('phuong_tiens')->insert([
            //'id' =>3,
            'bienSoXe' => "43E9902",
            'tenPhuongTien' => "Toyota 099",
            'mauXe' => "Đỏ-Bạc",
            'nhanHieu' => "Toyota",
            'ngayDangKi' =>  "2012-12-12",
            'soCCCD' => "678907456",
            'id_maLoai' => 1
        ]);
        // insert luật giao thông
        DB::table('luat_giao_thongs')->insert([
            'id' => 1,
            'tenLuatViPham' => "Không đội mũ bảo hiểm",
            'tienPhat' => 200000,
            'noiDungLuat' => "aaaa"
        ]);
        
        DB::table('luat_giao_thongs')->insert([
            'id' => 2,
            'tenLuatViPham' => "Bấm còi, rú ga liên tục",
            'tienPhat' => 1500000,
            'noiDungLuat' => null
        ]);

        DB::table('luat_giao_thongs')->insert([
            'id' => 3,
            'tenLuatViPham' => "Sử dụng đèn chiếu xa trong đô thị",
            'tienPhat' => 300000,
            'noiDungLuat' => null
        ]);

        DB::table('luat_giao_thongs')->insert([
            'id' => 4,
            'tenLuatViPham' => "Hành vi bỏ chạy khi gây tai nạn",
            'tienPhat' => 5000000,
            'noiDungLuat' => null
        ]);

        DB::table('luat_giao_thongs')->insert([
            'id' => 5,
            'tenLuatViPham' => "Vận chuyển chất cấm",
            'tienPhat' => 20000000,
            'noiDungLuat' => null
        ]);

        DB::table('luat_giao_thongs')->insert([
            'id' => 6,
            'tenLuatViPham' => "Vượt đèn đỏ",
            'tienPhat' => 800000,
            'noiDungLuat' => null
        ]);

        DB::table('luat_giao_thongs')->insert([
            'id' => 7,
            'tenLuatViPham' => "Đi quá tốc độ",
            'tienPhat' => 1500000,
            'noiDungLuat' => null
        ]);

        DB::table('luat_giao_thongs')->insert([
            'id' => 8,
            'tenLuatViPham' => "Đi ngược chiều đường",
            'tienPhat' => 500000,
            'noiDungLuat' => null
        ]);

        DB::table('luat_giao_thongs')->insert([
            'id' =>9 ,
            'tenLuatViPham' => "Phá hoại cơ sở vật chất trên đường",
            'tienPhat' => 3000000,
            'noiDungLuat' => null
        ]);

        DB::table('luat_giao_thongs')->insert([
            'id' => 10,
            'tenLuatViPham' => "Không tuân thủ lệnh thi hành công vụ",
            'tienPhat' => 2500000,
            'noiDungLuat' => null
        ]);

        DB::table('luat_giao_thongs')->insert([
            'id' => 11,
            'tenLuatViPham' => "Thiếu giấy phép quy định của xe",
            'tienPhat' => 400000,
            'noiDungLuat' => null
        ]);

        DB::table('luat_giao_thongs')->insert([
            'id' => 12,
            'tenLuatViPham' => "Đua xe, tổ chức đua xe trái phép",
            'tienPhat' => 900000,
            'noiDungLuat' => null
        ]);

        DB::table('luat_giao_thongs')->insert([
            'id' => 13,
            'tenLuatViPham' => "Hành hung người tham gia giao thông",
            'tienPhat' => 1500000,
            'noiDungLuat' => null
        ]);
        DB::table('luat_giao_thongs')->insert([
            'id' => 14,
            'tenLuatViPham' => "Đỗ xe không đúng quy định",
            'tienPhat' => 1500000,
            'noiDungLuat' => null
        ]);
        // inssert dia_chi_chi_tiets
        

}
}
