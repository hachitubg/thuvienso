@extends('page.danhmucsanpham.danhmucsach_mater')
@section('tendanhmuc')
{{ $danhmuc_id->tendanhmuc }}
@endsection
@section('danhmuc_tieude')
	@if(count( $danhmucsach_id)>0)
	{{ $danhmuc_id->tendanhmuc }}
	@else
	{{ $error }}
	@endif
@endsection
@section('loaisach')
	@foreach($ls as $loaisach)
		@if($loaisach->madanhmuc==$id)
		<li><a href="{{ route('loaisach/',$loaisach->id) }}" title="{{ $loaisach->tenloai }}">{{ $loaisach->tenloai }}</a></li>
		@endif
	@endforeach
@endsection
@section('tacgia')
	@if(count( $danhmucsach_id)>0)
	@foreach($tacgia as $sach_danhmuc_id_tacgia)
        <a href="{{ route('danhmuc/tacgia',[$danhmuc_id->id,$sach_danhmuc_id_tacgia['tacgia']]) }}" title="{{ $sach_danhmuc_id_tacgia['tacgia'] }}" class="checkboxs">
		<li  class="checkbox">
		<input type="radio" name="checktacgia"> {{ $sach_danhmuc_id_tacgia['tacgia'] }}<span class="count">({{ $sach_danhmuc_id_tacgia['sl'] }})</span>
		</li>
		</a>
    @endforeach
	@else
	@endif
@endsection
@section('sanpham')
@if(count( $danhmucsach_tacgia)>0)
@foreach($danhmucsach_tacgia as $sach_danhmuc_id)
	<div class="product">
		<div class="image">
			<div style="position: relative;">
			<a href="{{ route('chitietsanpham',$sach_danhmuc_id->id) }}"><img src="{{ asset('/public/image/anhsanpham').'/'.$sach_danhmuc_id->anhbia}}" alt="" class=""></a>
			@if($sach_danhmuc_id->khuyenmai>0)
			<span class="saleprice" style="background:url({{ url('public/image/saleprice.png') }}) no-repeat;">{{ $sach_danhmuc_id->khuyenmai }}%</span>
			@endif
			</div>
			<a href="{{ route('chitietsanpham',$sach_danhmuc_id->id) }}"><div class="product_name" title="{{ $sach_danhmuc_id->tensach }}">{{ $sach_danhmuc_id->tensach }}</div></a>
			<div class="product_composer">{{ $sach_danhmuc_id->tacgia }}</div>
			<div class="prices">{{ number_format($sach_danhmuc_id->dongia-$sach_danhmuc_id->dongia*$sach_danhmuc_id->khuyenmai/100,0,",",".")}}₫</div>
			<div class="rootprices">{{ number_format($sach_danhmuc_id->dongia,0,",",".") }}₫</div>
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
	@else
	@endif
@endsection
@section('nhaxuatban')
@if(count($sach)>0)
@foreach($nxbs as $sach_nxb_id)
    @foreach($nxb as $nhaxuatban)
    @if($nhaxuatban->id==$sach_nxb_id['nxb'])
    <a href="/danh-muc/1/sach-kinh-te.html?field2=4" title="Thái Hà">
	<li  class="checkbox">
		<input type="radio" name="checknxb"> {{ $nhaxuatban->tennhaxuatban }}</i> <span class="count">({{ $sach_nxb_id['sl'] }})</span>
		<span class="delete"></span>
	</li>
	</a>
    @else
    @endif
    @endforeach
@endforeach
@else
@endif
<script>
	$(document).ready(function(){
		var tacgia,ds_tacgia;
		tacgia='{{ $danhmucsach_tacgia[0]['tacgia'] }}';
		// $(".checkboxs").click(function(){
		// 	var str=$(this).text().toString();
		// 	tacgia = str.replace(/[^\S]+/g, " ");
		// 	tacgia=tacgia.substring(0,tacgia.length-4);
		// 	var danhmuc={{ $danhmuc_id->id }};
		// 	alert(danhmuc+tacgia);
		// });

	})
</script>
@endsection


