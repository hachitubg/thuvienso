@extends('index.index')

@section('title')
	Chi tiết sản phẩm
@endsection

@section('style')
	<link rel="stylesheet" href="{{ url('css/list_product.css') }}">
	<link href="{{ url('css/chitietsanphams.css') }}" type="text/css" rel="stylesheet"/>
	<style>
		#ulmenu {
			position: absolute;
			display: none;
			z-index: 10;
			background: white;
			box-sizing: border-box;
			border-left: 2px solid lavender;
			border-bottom: 2px solid lavender;
			border-right: 2px solid lavender;
		}
		#mainmenu #menucontact div:hover #ulmenu {
			display: block;
		}
		#content {
			z-index: 9.5;
		}
		.products {
			width: 155px;
			background: #FFFFFF;
			padding: 0 5px;
			margin: 10px auto;
			position: relative;
		}
		.products .image .saleprice {
			background: url({{ url('public/image/saleprice.png') }}) no-repeat;
			font-weight: bold;
			text-align: center;
			color: #FFF;
			font-size: 13px;
			line-height: 23px;
			width: 46px;
			height: 37px;
			position: absolute;
			top: 0;
			right: 54px;
		}
		.BookDetailSection-actions .Button.small-middle .Button-control {
			height: 32px;
		}
		.Button.outline-green .Button-control {
			background: var(--white);
			border-color: var(--forest-green);
		}
		.intro {
			background-color: #f9f9f9 !important;
			padding: 15px !important;
			border-radius: 8px !important;
			box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1) !important;
		}
		.tensach {
			font-weight: bold !important;
    		font-size: 20px !important;
		}
		.button_docsach {
			width:120px; 
			height:27px; 
			margin-top: 10px;
			display: inline-block; 
			background-color: #343a40; 
			text-decoration: none;
			border-radius: 5px;
			text-align: center;
			color: white;
		}
		.button_docsach_login {
			width:190px; 
			height:27px; 
			margin-top: 10px;
			display: inline-block; 
			background-color: #343a40; 
			text-decoration: none;
			border-radius: 5px;
			text-align: center;
			color: white;
		}
		a:hover {
			color: white !important;
		}
	</style>
@endsection

@section('header')
	@include('page.header')
@endsection

@section('content')
	<div id="container">
		<div class="sortable" id="layoutGroup1">
			<div class="product_view_contener">
				<div class="showleft">
					<div class="image_contenner">
						<div class="mainimage">
							<img src="{{ asset('storage/uploads').'/'.$sach->anh }}" id="mainimage" style="border: double 1px black;width: 280px;"/>
							<div style="display: flex; justify-content: center; align-items: center; height: 100%;">
								<div class="Button-control flex items-center justify-center">
									@if(Cookie::get('name'))
										<a class="button_docsach" href="{{ url('open-pdf/'.$sach->id)}}">Đọc sách</a>
									@else
										<a class="button_docsach_login" href="{{ route('kh_login') }}">Đăng nhập để đọc sách</a>
									@endif
								</div>
							</div>
						</div>
					</div>
					<div class="product_info">
						<div>
							<h1 class="tensach">{{ $sach->tensach }}</h1>
						</div>
						<div>
							<span>Tác giả: {{ $sach->tentacgia }}</span> 
						</div>
						<div>
							<span>Năm phát hành: {{ $sach->namxuatban }}</span>
						</div>
						<div class="block" id="module_ProductDetail">
							<h3>Giới thiệu về cuốn sách</h3>
							<div class="intro" id="contentid">
								@php 
								echo($sach->noidung);
								@endphp
							</div>
						</div>
					</div>
				</div>
				<div class="clear" style="clear: both;"></div>
			</div>
			<div class="block" id="module_ProductFieds">
				<a name="fieldlist"></a>
				<h3>Thông tin chi tiết</h3>
				<table class="fields" cellpadding="0" cellspacing="0" width="100%">
					<tr class="field_view_contenner row1">
						<td class="title" style="font-weight: bold;">
							Tên sách
						</td>
						<td class="values">
							{{ $sach->tensach }}
						</td>
					</tr>
					<tr class="field_view_contenner row0">
						<td class="title" style="font-weight: bold;">
							Tác giả
						</td>
						<td class="values">
							{{ $sach->tentacgia }}
						</td>
					</tr>
					<tr class="field_view_contenner row1">
						<td class="title" style="font-weight: bold;">
							Năm xuất bản
						</td>
						<td class="values">
							{{ $sach->namxuatban }}
						</td>
					</tr>
					<tr class="field_view_contenner row0">
						<td class="title" style="font-weight: bold;">
							Chuyên ngành
						</td>
						<td class="values">
							{{ $nganh_sach -> tennxb }}
						</td>
					</tr>
					<tr class="field_view_contenner row1">
						<td class="title" style="font-weight: bold;">
							Thể loại
						</td>
						<td class="values">
							{{ $theloai_sach -> tentheloai }}
						</td>
					</tr>
					<tr class="field_view_contenner row0">
						<td class="title" style="font-weight: bold;">
							Ngày thêm vào thư viện
						</td>
						<td class="values">
							{{ \Carbon\Carbon::parse($sach->created_at)->format('d/m/Y') }}
						</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
@endsection

@section('footer')
	@include('page.footer')
@endsection
