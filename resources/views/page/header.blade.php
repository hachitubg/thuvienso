@section('header')
@if(Session::has('error'))
	<script>
		alert('{{ Session::get('error') }}');
	</script>
@endif	
<div id="header">
		<form action="{{ route('timkiem_key') }}" method="get">
		<div id="top" style="width: 1140px;margin: auto;height: 55px; background: #253745;">
			<div id="logo" style="display: flex;
            justify-content: left;
            align-items: left;">
				<a href="{{ url('/') }}">
					<span style="font-weight: bold;font-size: 300%;line-height: 30px;">
						<img src="{{ asset('image').'/'.'UTT_YELLOW.png' }}" alt="" style="width: 70px; height: 55px; padding: 5px">
					</span>
			    </a>
				<span style="font-weight: bold; font-size: 22px; color: #CCD0CF;margin-top: 10px; margin-left: 40px;">
					THƯ VIỆN SỐ UTT
				</span>
			</div>
			<div style="width: 440px;height: 30px;margin-top:13px;position: relative;bottom: 57px;left: 342px;">
				<input type="text" name="key" style="width: 394px;height: 30px;border-radius:5px" id="searching">
				<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
			<a href=""><input type="submit" value="Tìm" style="border-radius:5px;width: 44px;float: right;height: 30px;text-align: center;font-weight: bold;color: #11212D;background: white"></a>
			<div id="producrslist"></div>
			</div>
			<div style="float: right;bottom:87px;position: relative;height: 30px;" id="login">
				<lable style="margin-right: 30px;">
				@if (Cookie::get('name'))
					 <label><div style="background: white;width: 100px;
					 height: 30px;line-height: 30px;text-align: center;overflow: hidden;border-radius:5px">{{ request()->cookie('name') }}</div>
					 </label> 
					 <label><div style="background: white;width: 100px;
					 height: 30px;line-height: 30px;text-align: center;overflow: hidden;border-radius:5px"><a href="{{ route('kh_logout') }}" style="color: black;">Đăng xuất</a></div>
					 </label> 
				@else
					<label><div style="background: white;width: 100px;
					 height: 30px;line-height: 30px;text-align: center;overflow: hidden;border-radius:5px"><a href="{{ route('kh_login') }}" style="color: black;">Đăng nhập</a></div>
					 </label>  	
				@endif
			</div>
		</div>
	</form>
	</div>
	<style>
		ul li:hover{
			background: lavender;
		}
		a:hover{
			text-decoration: none;
		}
	</style>
	<script>
		var row,qty;
		function changeqty(editButton,id){
			row=$(editButton).parent();
			qty=$("#qty",row).val();
			location.assign('/laravel/sachhay/update-cart/'+id+'-'+qty);
		}
		$(document).ready(function(){
			$('#searching').keyup(function(){
				var key=$('#searching').val();
				url="{{ route('timkiem') }}";
					if(key.length==0){
					$('#producrslist').fadeIn();
					$('#producrslist').html(key);
					}
				else{
					$.ajax({
                type: "POST",
                url: url,
                cache: false,
                data:{
                _token:$('#token').val(),
                query:key
                },
                success: function(data){       
					if(data.success){
					$('#producrslist').fadeIn();
					$('#producrslist').html(data.success);
					}
                      }
                      });
				}
			});
		});
	</script>
@endsection()