@extends('admin.admin')
@section('khachhang')
	<li class="nav-item active" >
          <a class="nav-link" href="">
            <i class="fas fa-fw fa-table"></i>
            <span>Quản lý khách hàng</span></a>
    </li>
@endsection()
@section('tenbang')
	<ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">khachhang</a>
            </li>
            <li class="breadcrumb-item active">Tables</li>
	</ol>
@endsection
@section('table')
<div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Data Table Example
              <a href="{{ route('adminsqlkhachhang/addusers') }}"><input type="button" value="Thêm Khách Hàng" id="btnadd"/></div>
            <div class="card-body"></a>
              <div class="table-responsive">
	<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Quyen</th>
                      <th>Create_at</th>
                      <th>Update_at</th>
                      <th>Edit</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>ID</th>
                      <th>Họ tên</th>
                      <th>Mail</th>
                      <th>Quyen</th>
                      <th>Create_at</th>
                      <th>Update_at</th>
                      <th>Edit</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @foreach($khachhang as $kh)
                        <tr>
                        <td><label id="lblid">{{ $kh->id }}</label></td>
                        <td><label id="lblusername">{{ $kh->name }}</td>
                        <td><label id="lblemail">{{ $kh->email }}</td>
                        <td><label id="lblpassword">{{ $kh->password }}</td>
                        <td><label id="lblquyentk">{{ $kh->quyen_tk }}</td>
                        <td>{{ $kh->created_at }}</td>
                        <td>{{ $kh->updated_at }}</td>
                        <td>
                            <img src="{{ url('image\delete.png') }}" onclick="deleteclk(this);" data-toggle="modal" data-target="#exampleModalCenter">
                            <img src="{{ url('image\edit.png') }}" onclick="Editdatas(this);"data-toggle="modal" data-target="#myModal4">
                        </td>
                        </tr\>
                    @endforeach
                    </tbody>
                </table>
                </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>
@endsection
@section('model')
	<div class="modal fade" id="myModal4">
          <div class="modal-dialog">
              <div class="modal-content">
              <div style="background-color: white;margin: auto;width: 600px;" id="editkh">
                <form action="{{ route('adminsqlkhachhang/editkh')}}" method="post" >
                <button type="button" class="close mr-2" data-dismiss="modal" onclick="CloseEditdatasDialog();">&times;</button>
                <table style="width:100%;">
                  <tr>
                    <td colspan="2" class="text-center font-weight-bold p-3"><h3>Edit Khách Hàng</h3></td>
                  </tr>
                  <tr style="display: none;">
                    <td>
                      <div class="form-group pl-3 pr-3">
                      <label>Mã khách hàng:</label>
                      <input type="text" name="txtidkh" class="form-control" id="txtidkh" disabled="">
                        </div>
                    </td>
                    <td></td>
                  </tr>
                  <tr>
                    <td colspan="2">
                      <div class="form-group pl-3 pr-3">
                      <label>Tên khách hàng:</label>
                                  <input type="text" class="form-control" name="txttenkhachang" id="txttenkhachang" >
                                  </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="form-group pl-3 pr-3">
                      <label>UserName:</label>
                      <input type="text" name="txtusername" class="form-control" id="txtusername">
                        </div>
                    </td>
                    <td>
                      <div class="form-group pl-3 pr-3">
                      <label>PassWord:</label>
                      <input type="text" name="txtpassword" class="form-control" id="txtpassword">
                        </div>
                    </td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>
              <div class="form-group pl-3 pr-3">
              <label>PhoneNumber:</label>
              <input type="text" name="gia" class="form-control" id="txtphonenumber" >
                </div>
            </td>
            <td>
              <div class="form-group pl-3 pr-3">
              <label>Địa chỉ:</label>
              <input type="text" name="txtdiachi" id="txtdiachi" class="form-control" >
            </div>
            </td>
            <td>
              <div class="form-group pl-3 pr-3">
              <label>Mail:</label>
              <input type="text" name="txtmail" id="txtmail" class="form-control" >
            </div>
            </td>
          </tr>
        </table>
      </form>
      <div class="text-center">
        <button class="btn btn-success m-3" style="width: 100px;" data-dismiss="modal" onclick="Updatesdatas(); return false;">Sửa</button>
        <button class="btn btn-success m-3" style="width: 100px;" data-dismiss="modal" onclick="CloseEditdatasDialog();">Hủy</button>
      </div>
    </div>
    </div>
  </div>
  </div>
	{{-- model xóa khách hàng --}}
	<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  	<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Xóa Khách Hàng</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="CloseEditdatasDialog();">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Bạn có chắc chắn muốn xóa khách hàng này <label id="idkh" style="display: none;"></label> ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" onclick="deletedatas(this);" >Xóa</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="CloseEditdatasDialog();">Hủy</button>
      </div>
    </div>
  	</div>
	</div>
@endsection
@section('javascript')
<script>
      var row;
      var id,hoten,username,phonenumber,address,mail,password;
      function Updatesdatas(editButton) {
            var url = "{{ route('adminsqlkhachhang/editkh')}}"; 
            id=$("#txtidkh").val();
            ten = $("#txttenkhachang").val();
            username = $("#txtusername").val();
            password=$("#txtpassword").val();
            phonenumber = $("#txtphonenumber").val();
            address = $("#txtdiachi").val();
            mail = $("#txtmail").val();
            $.ajax({
                type: "POST",
                url: url,
                cache: false,
                data:{
                _token:'{{ csrf_token() }}',
                type: 3,
                id: id,
                ten:ten,
                username:username,
                password:password,
                sdt:phonenumber,
                diachi:address,
                mail:mail
              },
                success: function(dataResult){
                dataResult = JSON.parse(dataResult);
                     if(dataResult.statusCode)
              {
                  alert('Update success!');
                            $("#lblid",row).text(id);
                            $("#lblten",row).text(ten);
                            $("#lblusername",row).text(username);
                            $("#lblsdt",row).text(phonenumber);
                            $("#lbldiachi",row).text(address);
                            $("#lblmail",row).text(mail);
                            row.removeClass("highlightRow");
                            CloseEditdatasDialog();
             }
             else{
                 alert("Internal Server Error");
             }            
          }
        });
            return false;
        }

      function deletedatas(editButton) {
            var url = "{{ route('adminsqlkhachhang/deletekh')}}"; 
            id=$("#idkh").text();
            $.ajax({
                type: "POST",
                url: url,
                cache: false,
                data:{
                _token:'{{ csrf_token() }}',
                type: 3,
                id: id
                },
                success: function(dataResult){
                dataResult = JSON.parse(dataResult);
                if(dataResult.statusCode)
                {
                alert('delete success!');
                $('#exampleModalCenter').modal('hide');
                row.removeClass("highlightRow");
                $(row).remove();
                      }
                else {
                alert('There is some error during delete');
                row.removeClass("highlightRow");
                      }
                      }
                      });
                // return false;
        }
      function Editdatas(editButton) {
            row = $(editButton).parent().parent();
            id=$("#lblid",row).text();
            ten = $("#lblten", row).text();
            username = $("#lblusername", row).text();
            phonenumber = $("#lblsdt",row).text();
            address = $("#lbldiachi", row).text();
            mail = $("#lblmail", row).text();
            row.addClass("highlightRow");
            DisplayEditdatasDialog();
            return false;
        }
        function deleteclk(editButton){
            row = $(editButton).parent().parent();
            id = $("#lblid", row).text();
            $("#idkh").text(id);
            row.addClass("highlightRow");
            return false;
        }
      function DisplayEditdatasDialog() {
          $("#txtidkh").val(id);
          $("#txttenkhachang").val(ten);
          $("#txtusername").val(username);
          $("#txtphonenumber").val(phonenumber);
          $("#txtdiachi").val(address);
          $("#txtmail").val(mail);
      }
      function CloseEditdatasDialog() {
          $("#updatemodel").hide();
          row.removeClass("highlightRow");
      }
    </script>
@endsection