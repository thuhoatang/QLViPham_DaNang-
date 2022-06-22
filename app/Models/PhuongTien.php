<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhuongTien extends Model
{
    use HasFactory;
    public function loaiPhuongTien()
    {
        return $this->belongsTo(LoaiPhuongTien::class, "id_maLoai", "id");
    }
}

