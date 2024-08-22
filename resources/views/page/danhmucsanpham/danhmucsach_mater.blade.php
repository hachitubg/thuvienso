@extends('index.index')

@section('style')
    <link rel="stylesheet" type="text/css" href="{{ url('css/danhmucsach.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/styles.css') }}">

    <style>
        /* Cấu trúc chính cho layout */
        .blockcontent {
            display: flex;
            flex-wrap: wrap;
            gap: 20px; /* Khoảng cách giữa các sản phẩm */
            justify-content: flex-start;
        }

        /* Cấu trúc sản phẩm */
        .blockcontent .product {
            width: calc(25% - 20px); /* Chiếm 25% chiều rộng của dòng, trừ đi khoảng cách */
            box-sizing: border-box;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 15px;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .blockcontent .product:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        /* Hình ảnh sản phẩm */
        .blockcontent .product .image img {
            max-width: 100%;
            height: auto;
            margin-bottom: 10px;
            transition: opacity 0.3s ease;
        }

        /* Tên sản phẩm */
        .blockcontent .product .product_name {
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 10px;
            color: #333;
            transition: color 0.3s ease;
        }

        .blockcontent .product .product_name:hover {
            color: #007bff;
        }

        /* Giá sản phẩm */
        .blockcontent .product .prices {
            font-size: 14px;
            color: #444;
            font-weight: bold;
        }

        .blockcontent .product .rootprices {
            font-size: 12px;
            color: #999;
            text-decoration: line-through;
        }

        .category-list {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .category-item {
            margin-bottom: 10px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .category-item:hover {
            transform: translateX(5px);
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
        }

        .category-link {
            display: block;
            padding: 10px 15px;
            background-color: #253745;
            color: #CCD0CF;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .category-link:hover {
            background-color: #4A5C6A;
            color: #fff;
        }

        ul li:hover {
            background: none !important;
        }
    </style>
@endsection

@section('script')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const theloaiSach = document.getElementById('theloaiSach');
            const sachTheoNganh = document.getElementById('sachTheoNganh');

            document.querySelectorAll('.category-link').forEach(function (element) {
                element.addEventListener('click', function () {
                    if (this.closest('#module_categories').querySelector('h2').textContent === 'Thể loại sách') {
                        sachTheoNganh.style.display = 'none';
                        theloaiSach.style.display = 'block';
                    } else if (this.closest('#module_categories').querySelector('h2').textContent === 'Sách theo ngành') {
                        theloaiSach.style.display = 'none';
                        sachTheoNganh.style.display = 'block';
                    }
                });
            });
        });
    </script>
@endsection

@section('header')
    @include('page.header')
@endsection

@section('content')
    <div class="pathway">
        <ul>
            <li><a href="/" title="Trang chủ">Trang chủ /</a></li>
            <li>{{ $tentheloai }}</li>
        </ul>
    </div>
    <div class="clear"></div>
    <div id="container" style="display: flex">
        <!-- MENU BÊN TRÁI MÀN HÌNH -->
        <div style="display: flex; flex-direction: column;">
            <div id="theloaiSach" class="sortable" id="layoutGroup3" style="margin: 20px 0 !important;">
                <div class="block" id="module_categories">
                    <h2>Thể loại sách</h2>
                    <div class="blockcontent">
                        <ul class="category-list">
                            @foreach($theloai_menu as $loai)
                                <li class="category-item">
                                    <a href="{{ url('theloai/' . $loai->id) }}" class="category-link">{{ $loai->tentheloai }}</a>
                                </li>
                            @endforeach
                        </ul>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>

            <div id="sachTheoNganh" class="sortable" id="layoutGroup3" style="margin: 20px 0 !important;">
                <div class="block" id="module_categories">
                    <h2>Sách theo ngành</h2>
                    <div class="blockcontent">
                        <ul class="category-list">
                            @foreach($nganh_menu as $nganh)
                                <li class="category-item">
                                    <a href="{{ url('nganh/' . $nganh->id) }}" class="category-link">{{ $nganh->tennxb }}</a>
                                </li>
                            @endforeach
                        </ul>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="sortable" id="layoutGroup4" style="margin-left: 30px !important; width: 100% !important;">
            <div class="block" id="module_listproducts">
                <div class="intro"></div>
                <div class="clear"></div>

                
                <div class="pagesright" style="border-radius: 5px;">
                    <div class="views">
                        <h1 style="margin: 0px !important; font-weight: bold;">{{ $tentheloai }}</h1>
                    </div>
                    <div class="clear"></div>
                </div>

                <h1>@section('danhmuc_tieude')@show</h1>

                @if(count($sach) < 1)
                    <h1>Hiện tại không có sách nào thuộc thể loại này !</h1>
                @else
                @endif
                
                <div class="clear"></div>
                <div class="blockcontent">
                    @section('sanpham')
                    @show
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    @include('page.footer')
@endsection
