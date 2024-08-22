<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@section('title')
	@show</title>
	<link rel="icon" href="{{ asset('image').'/'.'logo-utt-border.png' }}" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="{{  asset('css/indexs.css') }}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="{{ asset("ckeditor/ckeditor.js") }}"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	@section('style')
	@show
</head>
<body>
	<div style="width: 100%;height: auto;">
		<div id="head">
			@yield('header')
			@yield('mainmenu')
		</div>
		<div id="container">
			@yield('slide')
			@yield('content')	
		</div>
		<div id="footer">
			@yield('footer')
		</div>
	</div>
</body>
</html>