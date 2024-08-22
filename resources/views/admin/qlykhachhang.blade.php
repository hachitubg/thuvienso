<!DOCTYPE html>
  <html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Tables</title>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <link href="{{ url('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="{{ url('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="{{ url('vendor/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ url('css/sb-admin.css') }}" rel="stylesheet">
    <style>
      .highlightRow {
            background-color: #dadada;
        }
      img{
        cursor: pointer;
      }
      #btnadd {
            float: right;
            height: 38px;
            border-radius: 7px;
            background-color: #00CC00;
            color: white;
        }
    </style>
  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="index.html">Start Bootstrap</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-primary" type="button">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </form>

      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-bell fa-fw"></i>
            <span class="badge badge-danger">9+</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-envelope fa-fw"></i>
            <span class="badge badge-danger">7</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
            <a class="dropdown-item" href="#"></a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#">{{ request()->cookie('name') }}
            </a>
            <a class="dropdown-item" href="#">Activity Log</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="" data-toggle="modal" data-target="#logoutModal">Logout</a>
          </div>
        </li>
      </ul>

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Admin</span>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Pages</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Login Screens:</h6>
            <a class="dropdown-item" href="{{ route('adminsgetlogin') }}">Login</a>
            <a class="dropdown-item" href="register.html">Register</a>
            <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
            <div class="dropdown-divider"></div>
            <h6 class="dropdown-header">Other Pages:</h6>
            <a class="dropdown-item" href="404.html">404 Page</a>
            <a class="dropdown-item" href="blank.html">Blank Page</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Charts</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('adminsqlkhachhang/addusers') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Quản lý danh mục</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('adminsqlkhachhang/addusers') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Quản lý khách hàng</span></a>
        </li>
      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">khachhang</a>
            </li>
            <li class="breadcrumb-item active">Tables</li>
          </ol>

          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Data Table Example
              <a href="{{ route('adminsqlkhachhang/addusers') }}"><input type="button" value="Thêm Sản Phẩm" id="btnadd"/></div>
            <div class="card-body"></a>
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Họ tên</th>
                      <th>UserName</th>
                      <th>PhoneNumber</th>
                      <th>Địa chỉ</th>
                      <th>Mail</th>
                      <th>Create_at</th>
                      <th>Update_at</th>
                      <th>Edit</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>ID</th>
                      <th>Họ tên</th>
                      <th>UserName</th>
                      <th>PhoneNumber</th>
                      <th>Địa chỉ</th>
                      <th>Mail</th>
                      <th>Create_at</th>
                      <th>Update_at</th>
                      <th>Edit</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @foreach($khachhang as $kh)
                      <tr>
                        <td><label id="lblid">{{ $kh->id }}</label></td>
                        <td><label id="lblten">{{ $kh->ten }}</label></td>
                        <td><label id="lblusername">{{ $kh->username }}</td>
                        <td><label id="lblsdt">{{ $kh->sdt }}</td>
                        <td><label id="lbldiachi">{{ $kh->diachi }}</td>
                        <td><label id="lblmail">{{ $kh->mail }}</td>
                        <td>{{ $kh->created_at }}</td>
                        <td>{{ $kh->updated_at }}</td>
                        <td>
                          <img src="{{ url('public\image\delete.png') }}" onclick="deleteclk(this);" data-toggle="modal" data-target="#exampleModalCenter">
                          <img src="{{ url('public\image\edit.png') }}" onclick="Editdatas(this);"data-toggle="modal" data-target="#myModal4">
                        </td>
                      </tr\>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>

          <p class="small text-center text-muted my-5">
            <em>More table examples coming soon...</em>
          </p>

        </div>
        <!-- /.container-fluid -->
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
                  <tr>
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
<!-- Modal -->
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
        Bạn có chắc chắn muốn xóa khách hàng có mã là: <label id="idkh"></label> ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" onclick="deletedatas(this);" >Xóa</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="CloseEditdatasDialog();">Hủy</button>
      </div>
    </div>
  </div>
</div>
        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Your Website 2018</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <script>
      var row;
      var id,hoten,username,phonenumber,address,mail;
      function Updatesdatas(editButton) {
            var url = "{{ route('adminsqlkhachhang/editkh')}}"; 
            id=$("#txtidkh").val();
            ten = $("#txttenkhachang").val();
            username = $("#txtusername").val();
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
    <!-- Bootstrap core JavaScript-->
    <script src="{{ url('public/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ url('public/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ url('public/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Page level plugin JavaScript-->
    <script src="{{ url('public/vendor/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ url('public/vendor/datatables/dataTables.bootstrap4.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ url('public/js/sb-admin.min.js') }}"></script>

    <!-- Demo scripts for this page-->
    <script src="{{ url('public/js/demo/datatables-demo.js') }}"></script>

  </body>
</html>
