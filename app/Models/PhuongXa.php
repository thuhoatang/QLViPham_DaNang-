<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhuongXa extends Model
{
    use HasFactory;
    public function quanHuyen()
    {
        return $this->belongsTo(QuanHuyen::class, "id_quanHuyen", "id");
    }
}
