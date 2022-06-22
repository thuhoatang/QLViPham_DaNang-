<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoiViPham extends Model
{
    use HasFactory;

    public function luatGiaoThong()
    {
        return $this->belongsTo(LuatGiaoThong::class, "id_luatGiaoThong", "id");
    }
}
