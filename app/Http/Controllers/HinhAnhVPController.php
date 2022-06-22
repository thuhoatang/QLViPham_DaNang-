<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\HinhAnhViPham;
use Illuminate\Http\Request;

class HinhAnhVPController extends Controller
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

    public function create() {
        return view('page.canhsat.themvipham');

    }

    public function store(Request $request){
        dd($request);
    }
}
