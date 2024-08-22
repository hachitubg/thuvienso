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
    
    
      @section('css')
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
      select .option {
          width: 250px;
      }

      .option {
          overflow: hidden;
          white-space: nowrap;
          text-overflow: ellipsis;
      }
      </style>
     @show
    
   
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
        @section('danhmuc')
        <li class="nav-item">
          <a class="nav-link" href="">
            <i class="fas fa-fw fa-table"></i>
            <span>Quản lý danh mục</span></a>
        </li>
        @show
        @section('loaisach')
        <li class="nav-item">
          <a class="nav-link" href="">
            <i class="fas fa-fw fa-table"></i>
            <span>Quản lý loại sách</span></a>
        </li>
        @show
        @section('sach')
        <li class="nav-item">
          <a class="nav-link" href="">
            <i class="fas fa-fw fa-table"></i>
            <span>Quản lý sách</span></a>
        </li>
        @show
        @section('chitietsach')
        <li class="nav-item">
          <a class="nav-link" href="">
            <i class="fas fa-fw fa-table"></i>
            <span>Quản lý chi tiết sách</span></a>
        </li>
        @show
        @section('donhang')
        <li class="nav-item">
          <a class="nav-link" href="">
            <i class="fas fa-fw fa-table"></i>
            <span>Quản lý đơn đặt hàng</span></a>
        </li>
        @show
        @section('khachhang')
        <li class="nav-item">
          <a class="nav-link" href="{{ route('adminsqlkhachhang') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Quản lý khách hàng</span></a>
        </li>
        @show
      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
            @section('tenbang')
            @show
            
                @section('table')
                @show
              
          <p class="small text-center text-muted my-5">
            <em>More table examples coming soon...</em>
          </p>
        </div>
        @section('model')
        @show

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
            <a class="btn btn-primary" href="{{ route('adminsgetlogin')}}">Logout</a>
          </div>
        </div>
      </div>
    </div>
    @section('javascript')
    @show
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
