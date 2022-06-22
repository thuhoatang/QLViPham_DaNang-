<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\LuatGiaoThong;
use App\Models\PhuongXa;
use App\Models\QuanHuyen;
use Illuminate\Http\Request;

class ViPhamController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }

    public function getLuatGiaoThong(Request $request)
    {
        $danhSachViPham = LuatGiaoThong::all();

        // var_dump($danhSachViPham);
        // return $danhsachvipham;

        $xaPhuong = PhuongXa::all();

        $quanHuyen = QuanHuyen::all();
        return view('page.canhsat.themvipham', ['danhSachViPham' => $danhSachViPham, 'xaPhuong' => $xaPhuong, 'quanHuyen' =>$quanHuyen]);

        

    }

    
}
