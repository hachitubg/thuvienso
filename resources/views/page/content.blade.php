@section('content')
<div id="content">
    @foreach($theloai as $loai)
        @php
            // Lọc sách theo thể loại hiện tại và lấy tối đa 5 cuốn
            $sachTrongTheLoai = $sach->filter(function($sachItem) use ($loai) {
                return $sachItem->theloai_id == $loai->id;
            })->take(4);
        @endphp

        @if($sachTrongTheLoai->count() > 0)
            <h2 class="title_pd">
                <a href="" class="title">{{ $loai->tentheloai }}</a>
                <span class="css"></span>
                <a href="" class="more"></a>
            </h2>
            <div class="list_pd">
                @foreach($sachTrongTheLoai as $sachItem)
                    <div class="product">
                        <div class="image" style="position: relative;">
                            <a href="{{ route('chitietsanpham', $sachItem->id) }}">
                                <img src="{{ asset('storage/uploads').'/'.$sachItem->anh }}" alt="" class="">
                            </a>
                        </div>
                        <a href="{{ route('chitietsanpham', $sachItem->id) }}">
                            <div class="product_name" title="{{ $sachItem->tensach }}">{{ $sachItem->tensach }}</div>
                        </a>
                        <div class="product_composer">Tác Giả: <span style="color:red">{{ $sachItem->tentacgia }}</span></div>
                    </div>
                @endforeach
            </div>
        @endif
    @endforeach
</div>

<style>
    .product {
        margin: 10px 25px !important;
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

