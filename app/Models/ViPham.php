<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ViPham extends Model
{
    use HasFactory;

    public function phuongTien()
    {
        // tham số đầu tiên của khóa ngoại của model đang đứng
        return $this->belongsTo(PhuongTien::class, "bienSoXe", "bienSoXe");
    }

    public function thongTinCaNhan()
    {
        return $this->belongsTo(ThongTinCaNhan::class, "soCCCD", "soCCCD");
    }

    public function loiViPham()
    {
        // tham số đầi tiên của model muốn trỏ tới
        return $this->hasMany(LoiViPham::class,"id_vipham", "id");
    }

    public function nguoiThietHai()
    {
        return $this->hasMany(NguoiThietHai::class,"id_vipham", "id");
    }

    public function diaChi()
    {
        return $this->belongsTo(DiaChiChiTiet::class, "id_diachichitiet", "id");
    }

    public function hinhAnh() {
        return $this->hasMany(HinhAnhViPham::class, "id_vipham", "id");
    }
   
}
