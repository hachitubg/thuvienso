<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add user</title>
	<link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" id="bootstrap-css">
	<script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{ asset('svendor/jquery/jquery.min.js') }}"></script>
	<!------ Include the above in your HEAD tag ---------->
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-2.1.3.min.js"></script>
	<style>
		body {
		    background-size: cover;
		}

		*[role="form"] {
		    max-width: 530px;
		    padding: 15px;
		    margin: 0 auto;
		    border-radius: 0.3em;
		    background-color: #CCD0CF;
		}

		*[role="form"] h2 { 
		    font-family: 'Open Sans' , sans-serif;
		    font-size: 20px;
		    font-weight: 600;
		    color: #000000;
		    margin-top: 5%;
		    text-align: center;
		    text-transform: uppercase;
		    letter-spacing: 4px;
		}
        .logo-img
		{
		    max-height: 100%;
			width: 200px;
		    margin: 0 auto 10px;
		    display: block;
            padding-bottom: 50px;
		}
	</style>
</head>
<body>
	<div class="container" style="padding-top: 50px;">
            <form class="form-horizontal" role="form" action="{{ route('adminsqlkhachhang/postkh') }}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <h2>ĐĂNG KÝ TÀI KHOẢN</h2>
                <img class="logo-img" src="http://127.0.0.1:8000/image/logo-utt-border.png" alt="">
                <div class="form-group">
                    <label for="username" class="col-sm-3 control-label">Tài Khoản:</label>
                    <div class="col-sm-9">
                        <input type="text" id="txtusername" name="txtusername" placeholder="UserName" class="form-control" autofocus required="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Mật Khẩu:</label>
                    <div class="col-sm-9">
                        <input type="password" id="password" name="PassWord" placeholder="PassWord" class="form-control" autofocus required="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email:</label>
                    <div class="col-sm-9">
                        <input type="email" id="email" placeholder="Email" class="form-control" name="email" autofocus required="">
                    </div>
                </div>

                <div class="form-group">
                    <label for="khoa_id" class="col-sm-3 control-label">Khoa</label>
                    <div class="col-sm-9">
                        <select id="khoa_id" name="khoa_id" class="form-control" onchange="getNganhByKhoa(this.value)">
                            @foreach($listKhoa as $khoa)
                                <option value="{{ $khoa->id }}" {{ old('khoa_id') == $khoa->id ? 'selected' : '' }}>
                                    {{ $khoa->tenkhoa }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                 <div class="form-group">
                       <label for="khoa_id" class="col-sm-3 control-label">Ngành</label>
                        <div class="col-sm-9">
                                <select id="nganh_id" name="nganh_id" class="form-control">
                                    <!-- Options của ngành sẽ được cập nhật bằng Ajax -->
                                </select>
                        </div>
                </div>
                
                <div class="form-group" style="visibility: hidden;">
                    <label for="email" class="col-sm-3 control-label">Role:</label>
                    <div class="col-sm-9">
                        <input type="number" id="quyen_tk" placeholder="Quyen Tk" class="form-control" name="quyen_tk" value="2" autofocus required="">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block" name="cmd">Đăng ký</button>
            </form> <!-- /form -->
    </div> <!-- ./container -->
</body>
</html>

<script>
    $(document).ready(function() {
        // Gọi hàm getNganhByKhoa với makhoa mặc định là 01 khi trang được tải
        getNganhByKhoa('01');
    });
    
    function getNganhByKhoa(khoa_id) {
        $.ajax({
            url: '/get-nganh-by-khoa/' + khoa_id,
            type: 'GET',
            success: function (data) {
                $('#nganh_id').empty(); // Xóa các option hiện tại
                $.each(data, function (key, nganh) {
                    $('#nganh_id').append('<option value="'+ nganh.id +'">'+ nganh.tennganh +'</option>');
                });
            }
        });
    }
</script>