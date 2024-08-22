<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="{{ url('css/login.css') }}" rel="stylesheet">
	<link href="{{ url('css/login1.css') }}" rel="stylesheet">
	<script src="{{ url('js/jquery1.js')}}"></script>
	<style>
			.form-signin
		{
		    max-width: 330px;
		    padding: 15px;
		    margin: 0 auto;
		}
		.form-signin .form-signin-heading, .form-signin .checkbox
		{
		    margin-bottom: 10px;
		}
		.form-signin .checkbox
		{
		    font-weight: normal;
		}
		.form-signin .form-control
		{
		    position: relative;
		    font-size: 16px;
		    height: auto;
		    padding: 10px;
		    -webkit-box-sizing: border-box;
		    -moz-box-sizing: border-box;
		    box-sizing: border-box;
		}
		.form-signin .form-control:focus
		{
		    z-index: 2;
		}
		.form-signin input[type="text"]
		{
		    margin-bottom: -1px;
		    border-bottom-left-radius: 0;
		    border-bottom-right-radius: 0;
		}
		.form-signin input[type="password"]
		{
		    margin-bottom: 10px;
		    border-top-left-radius: 0;
		    border-top-right-radius: 0;
		}
		.account-wall
		{
		    margin-top: 20px;
		    padding: 40px 0px 20px 0px;
		    background-color: #f7f7f7;
		    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
		    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
		    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
		}
		.login-title
		{
		    color: #555;
		    font-size: 18px;
		    font-weight: 400;
		    display: block;
		}
		.profile-img
		{
		    width: 96px;
		    height: 96px;
		    margin: 0 auto 10px;
		    display: block;
		    -moz-border-radius: 50%;
		    -webkit-border-radius: 50%;
		    border-radius: 50%;
		}
		.need-help
		{
		    margin-top: 10px;
		}
		.new-account
		{
		    display: block;
		    margin-top: 10px;
		}
		.logo-img
		{
		    max-height: 100%;
			width: 200px;
		    margin: 0 auto 10px;
		    display: block;
		}
	</style>
</head>
<body>
	<div class="container">
		@if(Session::has('message'))
			<script>
				alert('{{ Session::get('message') }}');
			</script>
		@endif
		@if(Session::has('thongbao'))
			<script>
				alert('{{ Session::get('thongbao') }}');
			</script>
		@endif
    <div class="row" style="margin-top: 100px;">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">Vui lòng sử dụng tài khoản của website để đăng nhập!</h1>
            <div class="account-wall">
			<a href="{{ url('/') }}">
				<img class="logo-img" src="http://127.0.0.1:8000/image/logo-utt-border.png" alt="">
			</a>
                <form class="form-signin" action="{{ url('admin/login') }}" method="post">
				@csrf
                <input type="text" class="form-control" placeholder="Tài khoản" name="name" required autofocus>
                <input type="password" class="form-control" placeholder="Mật khẩu" name="password" required>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Đăng nhập</button>
                </form>
            </div>
            <a href="{{ route('adminsqlkhachhang/addusers') }}" class="text-center new-account">Tạo tài khoản mới</a>
        </div>
    </div>
</div>
</body>
</html>