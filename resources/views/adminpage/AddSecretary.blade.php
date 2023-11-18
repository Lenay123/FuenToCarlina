<!DOCTYPE html>

<html
  lang="en"
  class="light-style layout-menu-fixed layout-compact"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="/assets/"
  data-template="vertical-menu-template-free">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Barangay Connect</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('img/image (5).png') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet" />

    <link rel="stylesheet" href="/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="/js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo"> <br>
            <a href="index.html" class="app-brand-link">
              {{-- <span class="app-brand-logo demo">
                Barangay Connect
              </span> --}}
              <h3 class="">Barangay Connect</h3>

            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboards -->
            <li class="menu-item ">
              <a href="/adminpage/AdminDashboard" class="menu-link ">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Dashboards">Dashboard</div>
             
              </a>
                       </li>

            <!-- Layouts -->
            <li class="menu-item ">
              <a href="/adminpage/ManageResidents" class="menu-link ">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div data-i18n="Layouts">Manage Resident</div>
              </a>
            </li>

            <!-- Front Pages -->
            <li class="menu-item active open">
              <a href="/adminpage/ManageSecretary" class="menu-link">
                <i class="menu-icon tf-icons bx bx-store"></i>
                <div data-i18n="Front Pages">Manage Secretary</div>
              </a>
            </li>

            <li class="menu-header small text-uppercase">
              <span class="menu-header-text">View Transactions</span>
            </li>
            <!-- Apps -->
            <li class="menu-item">
              <a
                href="/adminpage/BarangayPermitTransaction"
              
                class="menu-link">
                <i class="menu-icon tf-icons bx bx-envelope"></i>
                <div data-i18n="Email">Barangay Business Permit </div>
            
              </a>
            </li>
            <li class="menu-item">
              <a
                href="/adminpage/BarangayCertificateTransaction"
              
                class="menu-link">
                <i class="menu-icon tf-icons bx bx-chat"></i>
                <div data-i18n="Chat">Barangay Certificate </div>
             
              </a>
            </li>
            <li class="menu-item">
              <a
                href="/adminpage/BarangayIndigencyTransaction"
              
                class="menu-link">
                <i class="menu-icon tf-icons bx bx-calendar"></i>
                <div data-i18n="Calendar">Barangay Indigency </div>
             
              </a>
            </li>
            <li class="menu-item">
              <a
                href="/adminpage/BarangayIDTransaction"
              
                class="menu-link">
                <i class="menu-icon tf-icons bx bx-grid"></i>
                <div data-i18n="Kanban">Barangay ID</div>
              </a>
            </li>

   
  
 
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar">
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">

              <ul class="navbar-nav flex-row align-items-center ms-auto">

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="{{ asset('img/user.png') }}" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="{{ asset('img/user.png') }}" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-medium d-block">Almar Gutierrez</span>
                            <small class="text-muted">Admin</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-user me-2"></i>
                        <span class="align-middle">My Profile</span>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="{{route('adminpagelogout')}}">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Log Out</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
            <div class="mt-5">
              @if($errors->any())
                  <div class="col-12">
                      @foreach($errors->all() as $error)
                          <div class="alert alert-danger">{{$error}}</div>
    
                      @endforeach
                  </div>
              @endif
    
              @if(session()->has('error'))
              <div class="alert alert-danger">{{session('error')}}</div>
    
              @endif
    
              @if(session()->has('success'))
              <div class="alert alert-success">{{session('success')}}</div>
    
              @endif
          </div>
    
            <div class="card" style="margin-left:10px; margin-right:10px">
        <div class="card-body" >
        <form style="margin-left: 20px; margin-right: 20px;" class="row g-3" action="{{ route('adminpage.storeSecretary') }}" method="POST" enctype="multipart/form-data">
          @csrf
              <div class="col-md-6">
                <label for="firstname" class="form-label">First Name:</label>
                <input style=" border: 1px solid rgb(96, 90, 90);"  type="text" class="form-control" name="first_name" required>
              </div>
              <div class="col-md-6">
                <label for="lastname" class="form-label">Last Name:</label>
                <input style=" border: 1px solid rgb(96, 90, 90);" type="text" class="form-control" name="last_name" required>
              </div>
              <div class="col-md-6">
                <label for="lastname" class="form-label">Middle Name:</label>
                <input style=" border: 1px solid rgb(96, 90, 90);" type="text" class="form-control" name="middle_name" required>
              </div>
              <div class="col-md-6">
                  <label for="email" class="form-label">Email:</label>
                  <input style=" border: 1px solid rgb(96, 90, 90);" type="text" class="form-control" name="email" required>
                </div>
                <div class="col-md-6">
                  <label for="inputPassword4" class="form-label">Phone:</label>
                  <input style=" border: 1px solid rgb(96, 90, 90);" type="text" class="form-control" name="contact_number" required>
                </div>
                <div class="col-md-6">
                      <label for="address" >Address:</label>
                      <select class="form-control" name="address" required style=" border: 1px solid rgb(96, 90, 90);">
                          <option value="Proper Nabunturan Barili Cebu">Proper Nabunturan, Barili, Cebu</option>
                          <option value="Sitio San Roque Nabunturan Barili Cebu">Sitio San Roque Nabunturan, Barili, Cebu</option>
                          <option value="Sitio Cabinay Nabunturan Barili Cebu">Sitio Cabinay Nabunturan, Barili, Cebu</option>
                      </select>
                  </div>
                  <div class="col-md-6">
                  <label for="birthday">Birthday:</label>
                  <input type="date" class="form-control" name="birthday" required  style=" border: 1px solid rgb(96, 90, 90);">
              </div>
                  <div class="col-md-6">
                      <label for="gender">Gender:</label>
                      <select class="form-control" name="gender" required style=" border: 1px solid rgb(96, 90, 90);">
                          <option value="male">Male</option>
                          <option value="female">Female</option>
                      </select>
                  </div>
              <div class="col-md-6">
                      <label for="password">Password:</label>
                      <input type="password" class="form-control" name="password" required style=" border: 1px solid rgb(96, 90, 90);">
                  </div>
    
                  <div class="col-md-6">
                      <label for="password_confirmation">Confirm Password:</label>
                      <input type="password" class="form-control" name="password_confirmation" required style=" border: 1px solid rgb(96, 90, 90);">
                  </div>
              <br><br><br><br>
              <div class="container">
          <div class="row">
              <div class="col-md-12 d-flex"> <!-- For centering content and displaying buttons in a flex container -->
                  <div class="col-md-2 col-sm-4 float-left"> <!-- Adjust column size for different screen sizes and align to the left -->
                      <a href="{{ route('adminpage.ManageSecretary') }}" class="btn btn-primary btn-block">Cancel</a>
                  </div>
                  <div class="col-md-2 col-sm-4 float-left"> <!-- Adjust column size for different screen sizes and align to the left -->
                  <button type="submit"  class="btn btn-primary btn-block">ADD</button>
                  </div>
              </div>
          </div>
      </div>
        </form>
        </div>
    </div>
            </div>
            <!-- / Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0">
                  ©
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  , made with ❤️ by
                  <a href="https://themeselection.com" target="_blank" class="footer-link fw-medium">FuenToCarlina</a>
                </div>
              </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->


    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->

    <script src="/vendor/libs/jquery/jquery.js"></script>
    <script src="/vendor/libs/popper/popper.js"></script>
    <script src="/vendor/js/bootstrap.js"></script>
    <script src="/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="/vendor/js/menu.js"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="/js/main copy.js"></script>

    <!-- Page JS -->
    <script src="/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
