@extends('masterlayout.canhsat.header')
@section('themvipham')
<div class="container-fluid px-4 mt-2">
    @if (Illuminate\Support\Facades\Auth::user()->id_quyencanbo == 2)
    <p class="mt-4 text-dark">Trang dành cho cảnh sát giao thông</p>
        
    @else
    <p class="mt-4 text-dark">Trang dành cho cán bộ duyệt vi phạm</p>
        
    @endif


</div>

@endsection