@extends('index.index')
@section('title')
	Đặt hàng
@endsection
@section('style')
	<link rel="stylesheet" href="{{ url('css/list_product.css') }}">
	<link href="{{ url('css/chitietsanphams.css') }}" type="text/css" rel="stylesheet"/>
	<link href="{{ url('css/dathang.css') }}" type="text/css" rel="stylesheet"/>
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
	#content {
    padding: 60px 0;
    min-height: 700px;
	}
	
	</style>
@endsection
@section('header')
	@include('page.header')
	@include('page.mainmenu')
@endsection
@section('content')
<div class="inner-header">
			<div class="pull-left">
				<h3 class="inner-title">Đặt hàng
				@if(!empty($thongbao))
				<script>
					alert('{{ $thongbao }}');
				</script>
				@endif</h3>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb">
					<a href="{{ url('home') }}" style="color: #11212D;">Trang chủ</a> / <span>Đặt hàng</span>
				</div>
			</div>
			<div class="clearfix"></div>
	</div>
		<div id="content">
			<form action="{{ route('postdathang') }}" method="post" class="beta-form-checkout">
				{{ csrf_field() }}
				<div class="row">
					<div class="col-sm-6">
						<h2>Đặt hàng</h2>
						<div class="space20">&nbsp;</div>
						<table>
							<tr>
								<td class="first"><label for="name">Họ tên*</label></td>
								<td><input type="text" id="name" name="name" placeholder="Họ tên" required class="input_style"></td>
							</tr>
							<tr>
								<td class="first"><label>Giới tính </label></td>
								<td><input id="gender" type="radio" class="input-radio" name="gender" value="nam" checked="checked" style="width: 10%"><span style="margin-right: 10%">Nam</span>
							<input id="gender" type="radio" class="input-radio" name="gender" value="nữ" style="width: 10%"><span>Nữ</span></td>
							</tr>
							<tr>
								<td class="first"><label for="email">Email*</label></td>
								<td><input type="email" name="email" id="email" required placeholder="expample@gmail.com" class="input_style"></td>
							</tr>
							<tr>
								<td class="first"><label for="adress">Địa chỉ*</label></td>
								<td><input type="text" name="address" id="adress" placeholder="Street Address" required class="input_style"></td>
							</tr>
							<tr>
								<td class="first"><label for="phone">Điện thoại*</label></td>
								<td><input type="text" name="phone" id="phone" required class="input_style"></td>
							</tr>
							<tr>
								<td class="first"><label for="notes">Ghi chú</label></td>
								<td><textarea id="notes" name="notes" class="input_style" rows="3"></textarea></td>
							</tr>
						</table>
					</div>
					<div class="col-sm-6">
						<div class="your-order">
							<div class="your-order-head"><h2>Đơn hàng của bạn</h2></div>
							<div class="your-order-body" style="padding: 0px 10px">
								<div class="your-order-item">
									<div>
									<!--  one item	 -->
									@if(Session::has('cart'))
										@php
										$cart=Session::get('cart');
										$products_cart=$cart->items;
										@endphp
										@foreach($products_cart as $product)
										<div class="media">
											<img width="25%" src="{{ asset('public/image/anhsanpham').'/'.$product['item']['anhbia'] }}" alt="" class="pull-left">
											<div class="media-body" style="margin-left: 30px;">
												<p class="font-large">{{ $product['item']['tensach'] }}</p>
												<span class="color-gray your-order-info">Tác giả: {{ $product['item']['tacgia'] }}</span>
												<span class="color-gray your-order-info">Số lượng: {{ $product['qty'] }}</span>
												<span class="color-gray your-order-info">Đơn giá: {{ number_format($product['price'],0,",",".") }}₫</span>
											</div>
										</div>
										<hr>
										@endforeach
									@endif
									<!-- end one item -->
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="your-order-item">
									<div class="pull-left"><p class="your-order-f18">Tổng tiền:</p></div>
									<div class="pull-right"><h5 class="color-black">@if(Session::has('cart')){{ number_format($cart->totalPrice,0,",",".") }}₫@else 0₫ @endif</h5></div>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="your-order-head"><h5>Hình thức thanh toán</h5></div>
							
							<div class="your-order-body">
								<ul class="payment_methods">
									<li class="payment_method_bacs">
										<input id="payment_method_bacs" type="radio" class="input-radio" name="payment_method" value="COD" checked="checked" data-order_button_text="">
										<label for="payment_method_bacs">Thanh toán khi nhận hàng </label>
										<div class="payment_box payment_method_bacs" style="display: block;">
											Cửa hàng sẽ gửi hàng đến địa chỉ của bạn, bạn xem hàng rồi thanh toán tiền cho nhân viên giao hàng
										</div>						
									</li>

									<li class="payment_method_cheque">
										<input id="payment_method_cheque" type="radio" class="input-radio" name="payment_method" value="ATM" data-order_button_text="">
										<label for="payment_method_cheque">Chuyển khoản </label>
										<div class="payment_box payment_method_cheque" style="display: none;">
											Chuyển tiền đến tài khoản sau:
											<br>- Số tài khoản: 123 456 789
											<br>- Chủ TK: Nguyễn A
											<br>- Ngân hàng ACB, Chi nhánh TPHCM
										</div>						
									</li>
									
								</ul>
							</div>

							<div class="text-center"><input type="submit" class="beta-btn primary" value="Đặt hàng"></div>
						</div> <!-- .your-order -->
					</div>
				</div>
			</form>
		</div> <!-- #content -->
@endsection
@section('footer')
	@include('page.footer')
@endsection