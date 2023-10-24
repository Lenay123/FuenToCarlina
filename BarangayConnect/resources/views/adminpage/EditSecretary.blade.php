<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="{{ asset('img/image (5).png') }}">
  <title>Barangay Connect</title>

  <!-- Custom fonts for this template -->
  <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="/css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
<div class="sidebar-brand-icon rotate-n-15">
  <img src="/img/logo.png" alt="Barangay Connect Logo" class="img-responsive" style="width:50px; height:60px; margin-top:30px; margin-left:20px">
  </div>
  <div class="sidebar-brand-text mx-3">Barangay Connect</div>

</a> <br>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item ">
        <a class="nav-link" href="/adminpage/AdminDashboard">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <div class="sidebar-heading">
        Interface
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item ">
        <a class="nav-link collapsed" href="/adminpage/ManageResidents" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Manage Residents</span>
        </a>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item active">
        <a class="nav-link collapsed" href="/adminpage/ManageSecretary"  data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Manage Secretary</span>
        </a>
      </li>


      <li class="nav-item ">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>View Transactions</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">  
            <a class="collapse-item" href="/adminpage/BarangayIndigencyTransaction">Barangay Indigency <br> Transactions</a>
            <a class="collapse-item" href="/adminpage/BarangayCertificateTransaction">Barangay Certificate <br> Transactions</a>
            <a class="collapse-item" href="/adminpage/BarangayIDTransaction">Barangay ID Transactions</a>
            <a class="collapse-item" href="/adminpage/BarangayPermitTransaction">Barangay Business <br> Permit Transactions</a>
          </div>
        </div>
      </li>


      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>


          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">


            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">Valerie Luna</span>
                    <i class="fas fa-user-circle fa-lg"></i> <!-- Replace with the user icon -->
                </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" disabled>
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Active
                </a>
               
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>

        <!-- body content -->


      <div>
      <h2 style="margin-left: 10px; margin-right: 10px; background-color: #1074e6; font-size: 15px; color: white; padding: 10px; font-family: 'Poppins'; border: none; border-radius: 5px;">Personal Details</h2>
      </div>

        <div class="card" style="margin-left:10px; margin-right:10px">
    <div class="card-body" >

    <form style="margin-left: 20px; margin-right: 20px;" class="row g-3" action="{{ route('adminpage.updateSecretary', ['id' => $secretary->id]) }}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT') 
          <div class="col-md-6">
              <label for="firstname" class="form-label">First Name:</label>
              <input style="border: 1px solid rgb(96, 90, 90);" type="text" class="form-control" name="first_name" required value="{{ $secretary->first_name }}">
          </div>
          <div class="col-md-6">
              <label for="lastname" class="form-label">Last Name:</label>
              <input style="border: 1px solid rgb(96, 90, 90);" type="text" class="form-control" name="last_name" required value="{{ $secretary->last_name }}">
          </div>
          <div class="col-md-6">
              <label for="lastname" class="form-label">Middle Name:</label>
              <input style="border: 1px solid rgb(96, 90, 90);" type="text" class="form-control" name="middle_name" value="{{ $secretary->middle_name }}">
          </div>
          <div class="col-md-6">
              <label for="email" class="form-label">Email:</label>
              <input style="border: 1px solid rgb(96, 90, 90);" type="text" class="form-control" name="email" required value="{{ $secretary->email }}">
          </div>
          <div class="col-md-6">
              <label for="inputPassword4" class="form-label">Phone:</label>
              <input style="border: 1px solid rgb(96, 90, 90);" type="text" class="form-control" name="contact_number" required value="{{ $secretary->contact_number }}">
          </div>
          <div class="col-md-6">
              <label for="address">Address:</label>
              <select class="form-control" name="address" required style="border: 1px solid rgb(96, 90, 90);">
                  <option value="Proper Nabunturan Barili Cebu" @if ($secretary->address === 'Proper Nabunturan Barili Cebu') selected @endif>Proper Nabunturan, Barili, Cebu</option>
                  <option value="Sitio San Roque Nabunturan Barili Cebu" @if ($secretary->address === 'Sitio San Roque Nabunturan Barili Cebu') selected @endif>Sitio San Roque Nabunturan, Barili, Cebu</option>
                  <option value="Sitio Cabinay Nabunturan Barili Cebu" @if ($secretary->address === 'Sitio Cabinay Nabunturan Barili Cebu') selected @endif>Sitio Cabinay Nabunturan, Barili, Cebu</option>
              </select>
          </div>
          <div class="col-md-6">
              <label for="birthday">Birthday:</label>
              <input type="date" class="form-control" name="birthday" required style="border: 1px solid rgb(96, 90, 90);" value="{{ $secretary->birthday }}">
          </div>
          <div class="col-md-6">
              <label for="gender">Gender:</label>
              <select class="form-control" name="gender" required style="border: 1px solid rgb(96, 90, 90);">
                  <option value="male" @if ($secretary->gender === 'male') selected @endif>Male</option>
                  <option value="female" @if ($secretary->gender === 'female') selected @endif>Female</option>
              </select>
          </div>
          <br><br><br><br>
          
          <div class="container">
              <div class="row">
                  <div class="col-md-12 d-flex"> 
                      <div class="col-md-2 col-sm-4 float-left">
                          <a href="{{ route('adminpage.ManageSecretary') }}" class="btn btn-primary btn-block">Cancel</a>
                      </div>
                      <div class="col-md-2 col-sm-4 float-left"> 
                          <button type="submit" class="btn btn-primary btn-block" onclick="return confirm('Are you sure you want to Update the information of this secretary?');">Update</button>
                      </div>
                  </div>
              </div>
          </div>
      </form>
    </div>
</div>
  
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

  <!-- Bootstrap core JavaScript-->
  <script src="/vendor/jquery/jquery.min.js"></script>
  <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="/vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="/js/demo/datatables-demo.js"></script>

</body>

</html>