
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
 

<a class="navbar-brand mr-1" href="index.html"></a>

<button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
  
</button>

<!-- Navbar Search -->
<form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
  <div class="input-group">
  
  </div>
</form>

<!-- Navbar -->
<ul class="navbar-nav ml-auto ml-md-0">
  <li class="nav-item dropdown no-arrow mx-1">
    
  </li>
  <li class="nav-item dropdown no-arrow mx-1">
   
  </li>
  <li class="nav-item dropdown no-arrow">
    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="fas fa-user-circle fa-fw"></i>
    </a>
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
      <a class="dropdown-item" href="#">{{ request()->cookie('name') }}</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="" data-toggle="modal" data-target="#logoutModal">Logout</a>
    </div>
  </li>
</ul>
  
</nav>

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