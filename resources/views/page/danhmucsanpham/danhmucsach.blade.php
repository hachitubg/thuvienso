@extends('page.danhmucsanpham.danhmucsach_mater')

@section('title')
Thể loại
@endsection

@section('tendanhmuc')
@endsection

@section('danhmuc_tieude')
@endsection

@section('sanpham')
    @foreach($sach as $theloai_id)
    <div class="product">
        <div class="image">
            <div style="position: relative;">
                <a href="{{ route('chitietsanpham', $theloai_id['id']) }}">
                    <img src="{{ asset('storage/uploads').'/'.$theloai_id['anh'] }}" alt="" class="">
                </a>
            </div>
            <a href="{{ route('chitietsanpham', $theloai_id['id']) }}">
                <div class="product_name" title="{{ $theloai_id['tensach'] }}">{{ $theloai_id['tensach'] }}</div>
            </a>
            <div class="product_composer">
                Tác Giả: <span style="color:red">{{ $theloai_id['tentacgia'] }}</span>
            </div>
        </div>
    </div>
    @endforeach

    <style>
    .product {
        padding: 10px !important;
        background-color: #f9f9f9 !important;
        border-radius: 8px !important;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1) !important;
        transition: transform 0.2s ease, box-shadow 0.2s ease !important;
        overflow: hidden !important;
    }

    .product:hover {
        transform: translateY(-10px) !important;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2) !important;
    }

    .product img {
        width: auto !important;
        height: 200px !important;
        border-radius: 8px !important;
        transition: opacity 0.3s ease !important;
        border: groove 1px black;
    }

    .product img:hover {
        opacity: 0.8 !important;
    }

    .product_name {
        font-size: 18px !important;
        font-weight: bold !important;
        color: #333 !important;
        margin-top: 30px !important;
        width: 100% !important;
        text-align: center;
    }

    .product_composer {
        font-size: 14px !important;
        color: #555 !important;
        margin-top: 5px !important;
    }
</style>
@endsection
