<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuanHuyen extends Model
{
    use HasFactory;
    public function tinhThanh()
    {
        return $this->belongsTo(TinhThanh::class, "id_tinhThanh", "id");
    }
}
