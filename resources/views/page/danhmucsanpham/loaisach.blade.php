@extends('index.index')
@section('title')
{{ $loaisach->tenloai }}
@endsection
@section('style')
	<link rel="stylesheet" type="text/css" href="{{ url('css/danhmucsach.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ url('css/styles.css') }}">
	<style>
	#ulmenu{
		position: absolute;
		display: none;
		z-index: 10;
		background: white;
		box-sizing: border-box;
		border-left: 2px solid lavender;
		border-bottom: 2px solid lavender;
		border-right: 2px solid lavender;
	}
	#mainmenu #menucontact div:hover #ulmenu{
		display: block;
	}
	#content{
		z-index: 9.5;
	}
	.product{
			min-height: 250px;
			width:20%;
			display: inline-block;
			float: left;
			line-height: 150%;
		}
		.product .image{
			height: 380px;
			width: 130px;
			margin: auto;
			border:none;
		}
		.image img{
			height: 182px;
			width: 130px;
		}
		.product .product_name{
			width: 130px;
			height: 48px;
			overflow: hidden;
			/*white-space: normal;
			text-overflow: ellipsis:;*/
			text-transform: capitalize;
		}
		.product .prices{
			 color: #444444;
		    font-weight: bold;
		    font-size: 14px;
		}
		.product .rootprices{
			color: #999999;
		    text-decoration: line-through;
		    font-size: 11px !important;
		}
		.product .rating .comment{
			font-size: 12px;
		    color: #787878;
		    display: block;
		}
		.product .rating .checked{
		    color: orange;
		}
		.product .product_name:hover{
			color: #11212D;
			cursor: pointer;
		}
		.product .product_	composer:hover{
			color: #11212D;
			cursor: pointer;
		}
		.product .category{
			width: 100%;
			font-weight: bold;
			color: #444;
			text-transform: capitalize;
			font-size: 14px;
			text-align: center;
			margin-top:15px;

		}
		.product .category:hover{
			color: #11212D;
			cursor: pointer;
		}
	</style>
@endsection
@section('header')
	@include('page.header')
	@include('page.mainmenu')
@endsection
@section('content')
	<div class="pathway"><ul><li><a href="http://nobita.vn" title="Trang chủ">Trang chủ \</a></li><li>{{ $loaisach->theloai_id }}</li></ul></div>
	<div class="clear"></div>
	<h3 style="font-weight: bold;">@if(count($sach)<1)Loại sách này chưa được cung cấp vui lòng chọn loại sách khác!@else{{ $loaisach->theloai_id }}@endif</h3>
	@if(count($sach) > 0)
	<div id="container">
        <div class="sortable" id="layoutGroup4" style="margin-left: 0;width: 1140px;">    	
            <div class="block" id="module_listproducts">
	<div class="clear"></div>
	<div class="pagesright">
		<div class="views">
			<a class="active fa fa-th-large" title="Xem danh sách theo dạng lưới"></a>
			<a class=" fa fa-th-list"  title="Xem theo dạng danh sách"></a>
		</div>
	
		<div class="clear"></div>
	</div>
	<div class="clear"></div>
	<div class="blockcontent">
		<br>
	@section('sanpham')
	@foreach($sach as $sachs)
	<div class="product">
		<div class="image">
			<div style="position: relative;">
			<a href="{{ route('chitietsanpham',$sachs->id) }}"><img src="{{ asset('storage/uploads').'/'.$sachs->anh}}" alt="" class=""></a>
			</div>
			<a href="{{ route('chitietsanpham',$sachs->id) }}"><div class="product_name" title="{{ $sachs->tensach }}">{{ $sachs->tensach }}</div></a>
			<div class="product_composer"> Tác Giả: <span style="color:red">{{ $sachs->tentacgia }}<span></div>
			<div class="rating">
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star"></span>
			<span class="fa fa-star"></span>
			<span class="comment">(30 nhận xét)</span></div>
		</div>
	</div>
	@endforeach
	@show
	</div>
	</div>
	<div class="clear">&nbsp;</div>
   	@section('phantrang')
   
   	@show
    <div class="clear"></div>
</div>
            
        </div>	
    </div>	
	@else
	@endif
@endsection
@section('footer')
	@include('page.footer')
@endsection
