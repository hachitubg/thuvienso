@extends('page.danhmucsanpham.danhmucsach_mater')
@section('title')
Tìm kiếm sản phẩm
@endsection
@section('tendanhmuc')
Tìm kiếm sản phẩm với từ khóa:"{{ $key }}"
@endsection
@section('danhmuc_tieude')
@if(count($sach)<1) Không Tìm Thấy Sản Phẩm Nào Với Từ Khóa: <span style="color:red"> "{{ $key }}" </span> Vui Lòng Tìm
    Kiếm Sản Phẩm Khác!
    @else
    Tìm Kiếm Sản Phẩm Với Từ Khóa: <span style="color:red"> "{{ $key }}" </span>Tìm Thấy {{ count($sach) }} Kết Quả
    @endif
    @endsection


    @section('sanpham')
    @foreach($sach as $sach_danhmuc_id)
    <div class="product">
        <div class="image">
            <div style="position: relative;">
                <a href="{{ route('chitietsanpham',$sach_danhmuc_id->id) }}"><img src="{{ asset('storage/uploads').'/'.$sach_danhmuc_id->anh}}" alt="" class=""></a>
                @if($sach_danhmuc_id->khuyenmai>0)
                    <span class="saleprice" style="background:url({{ url('public/image/saleprice.png') }}) no-repeat;">{{ $sach_danhmuc_id->khuyenmai }}%</span>
                @endif
            </div>
            <a href="{{ route('chitietsanpham',$sach_danhmuc_id->id) }}">
                <div class="product_name" title="{{ $sach_danhmuc_id->tensach }}">{{ $sach_danhmuc_id->tensach }}</div>
            </a>
            <div class="product_composer"> Tác Giả: <span style="color:red">{{ $sach_danhmuc_id->tentacgia }}<span>
            </div>
        </div>
    </div>
    @endforeach
    @endsection