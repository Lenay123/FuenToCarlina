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
            <a href="" class="app-brand-link">
               <h4 class="">Barangay Connect</h4>

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
            <li class="menu-item active open">
              <a href="/adminpage/ManageResidents" class="menu-link ">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div data-i18n="Layouts">Manage Resident</div>
              </a>
            </li>

            <!-- Front Pages -->
            <li class="menu-item">
              <a href="/adminpage/ManageSecretary" class="menu-link">
                <i class="menu-icon tf-icons bx bx-store"></i>
                <div data-i18n="Front Pages">Manage Secretary</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="{{route('adminpage.showOfficials')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-store"></i>
                <div data-i18n="Front Pages">Manage Officials</div>
              </a>
            </li>

            <li class="menu-item">
              <a href="/adminpage/ManageActivity" class="menu-link">
                <i class="menu-icon tf-icons bx bx-store"></i>
                <div data-i18n="Front Pages">Manage Activity</div>
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
                      <img src="https://www.nicepng.com/png/detail/128-1280406_view-user-icon-png-user-circle-icon-png.png" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="https://www.nicepng.com/png/detail/128-1280406_view-user-icon-png-user-circle-icon-png.png" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                          @if(auth()->check())
                          <span class="fw-medium d-block">
                              {{ auth()->user()->first_name }} {{ auth()->user()->last_name }}
                              @if(auth()->user()->role == 'admin')
                                  (Admin)
                              @elseif(auth()->user()->role == 'secretary')
                                  (Secretary)
                              @elseif(auth()->user()->role == 'user')
                                  (User)
                              @endif
                          </span>
                      
                                                  <small class="text-muted">Admin</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#backDropModal">
                        <i class="bx bx-user me-2"></i>
                        <span class="align-middle">My Profile</span>
                      </a>
                    </li>
                    

                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item"  onclick="return confirm('Are you sure you want to Logout?');" href="{{route('adminpagelogout')}}">
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
          @endif
          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">

              <div class="card" style="margin-left:10px; margin-right:10px">
                <div class="card-body" >
                    <form class="row g-3" style="margin: 20px 20px;" action="{{ route('adminpage.updateResident', ['id' => $user->id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')    
                        <div class="col-md-6">
                            <label for="firstname" class="form-label">First Name:</label>
                            <input style="border: 1px solid rgb(59, 57, 57);" type="text" class="form-control" name="first_name" required value="{{ $user->first_name }}">
                        </div>
                        <div class="col-md-6">
                            <label for="lastname" class="form-label">Last Name:</label>
                            <input style="border: 1px solid rgb(59, 57, 57);" type="text" class="form-control" name="last_name" required value="{{ $user->last_name }}">
                        </div>
                      <div class="col-md-6">
                          <label for="lastname" class="form-label">Middle Name:</label>
                          <input style="border: 1px solid rgb(59, 57, 57);" type="text" class="form-control" name="middle_name" value="{{ $user->middle_name }}">
                      </div>
                      <div class="col-md-6">
                          <label for="email" class="form-label">Email:</label>
                          <input style="border: 1px solid rgb(96, 90, 90);" type="text" class="form-control" name="email" required value="{{ $user->email }}">
                      </div>
                      <div class="col-md-6">
                          <label for="inputPassword4" class="form-label">Phone:</label>
                          <input style="border: 1px solid rgb(96, 90, 90);" type="text" class="form-control" name="contact_number" required value="{{ $user->contact_number }}">
                      </div>
                      <div class="col-md-6">
                          <label for="address">Address:</label>
                          <select  class="form-control" name="address" required style="border: 1px solid rgb(96, 90, 90);">
                              <option value="Proper Nabunturan Barili Cebu" @if ($user->address === 'Proper Nabunturan Barili Cebu') selected @endif>Proper Nabunturan, Barili, Cebu</option>
                              <option value="Sitio San Roque Nabunturan Barili Cebu" @if ($user->address === 'Sitio San Roque Nabunturan Barili Cebu') selected @endif>Sitio San Roque Nabunturan, Barili, Cebu</option>
                              <option value="Sitio Cabinay Nabunturan Barili Cebu" @if ($user->address === 'Sitio Cabinay Nabunturan Barili Cebu') selected @endif>Sitio Cabinay Nabunturan, Barili, Cebu</option>
                          </select>
                      </div>
                      <div class="col-md-6">
                          <label for="birthday">Birthday:</label>
                          <input type="date" class="form-control" name="birthday" required style="border: 1px solid rgb(96, 90, 90);" value="{{ $user->birthday }}">
                      </div>
            
                        <div class="col-md-6">
                            <label for="gender">Gender:</label>
                            <select class="form-control" name="gender" required style="border: 1px solid rgb(59, 57, 57);">
                                <option value="male" @if ($user->gender === 'male') selected @endif>Male</option>
                                <option value="female" @if ($user->gender === 'female') selected @endif>Female</option>
                            </select>
                        </div> 
                        <div class="container"> <br><br>
                        <div class="row">
                            <div class="col-md-12 d-flex"> <!-- For centering content and displaying buttons in a flex container -->
                                <div class="col-md-2 col-sm-4 float-left"> <!-- Adjust column size for different screen sizes and align to the left -->
                                    <a href="{{ route('adminpage.ManageResidents') }}" class="btn btn-primary btn-block">Cancel</a>
                                </div>
                                <div class="col-md-2 col-sm-4 float-left"> <!-- Adjust column size for different screen sizes and align to the left -->
                                <button type="submit" class="btn btn-primary btn-block" onclick="return confirm('Are you sure you want to update this resident\'s information?');">Update</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
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
                    <!-- Modal Backdrop -->
                    <div class="col-lg-4 col-md-3">
                      <div class="mt-3">
                        <!-- Button trigger modal -->
                    

                        <!-- Modal -->
  
<div class="modal fade" id="backDropModal" data-bs-backdrop="static" tabindex="-1">
    <div class="modal-dialog"> 
    <form id="updateProfileForm" class="modal-content" method="POST" action="{{ route('adminpage.updateProfileAdmin') }}">
    @csrf
    <div class="modal-header">
                <h5 class="modal-title" id="backDropModalTitle">My Profile</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="row g-2">
                    <div class="col mb-0">
                        <label for="emailBackdrop" class="form-label">Firstname</label>
                        <input
                            type="first_name"
                            name="first_name"
                            id="firstnameBackdrop"
                            class="form-control"
                            placeholder="xxxx@xxx.xx"
                            value="{{ auth()->check() ? auth()->user()->first_name : '' }}"
                            
                        />
                    </div>
                    <div class="col mb-0">
                        <label for="dobBackdrop" class="form-label">Middle Name</label>
                        <input
                            type="middlename"
                            name="middle_name"
                            id="middlenameBackdrop"
                            class="form-control"
                            value="{{ auth()->check() ? auth()->user()->middle_name : '' }}"
                        />
                    </div>
                </div>
                <div class="row g-2">
                    <div class="col mb-0">
                        <label for="emailBackdrop" class="form-label">Lastname</label>
                        <input
                            type="lastname"
                            name="last_name"
                            id="lastnameBackdrop"
                            class="form-control"
                            placeholder="xxxx@xxx.xx"
                            value="{{ auth()->check() ? auth()->user()->last_name : '' }}"
                            
                        />
                    </div>
                    <div class="col mb-0">
                        <label for="dobBackdrop" class="form-label">Contact Number</label>
                        <input
                            type="contact"
                            name="contact_number"
                            id="middlenameBackdrop"
                            class="form-control"
                            value="{{ auth()->check() ? auth()->user()->contact_number : '' }}"
                        />
                    </div>
                </div>
                <div class="row g-2">
                    <div class="col mb-0">
                        <label for="emailBackdrop" class="form-label">Email</label>
                        <input
                            type="email"
                            id="emailBackdrop"
                            class="form-control"
                            name="email"
                            placeholder="xxxx@xxx.xx"
                            value="{{ auth()->check() ? auth()->user()->email : '' }}" 
                            
                        />
                    </div>
                    <div class="col mb-0">
                        <label for="dobBackdrop" class="form-label">DOB</label>
                        <input
                            type="date"
                            id="dobBackdrop"
                            name="birthday"
                            class="form-control"
                            value="{{ auth()->check() ? auth()->user()->birthday : '' }}"
                        />
                    </div>
                </div>
                <div class="row g-2">
                    <div class="col mb-0">
                        <label for="addressBackdrop" class="form-label">Address</label>
                        <select id="addressBackdrop" class="form-select" name="address">
                            <option value="">Select Address</option>
                            <option value="Proper Nabunturan Barili Cebu" {{ auth()->check() && auth()->user()->address === 'Proper Nabunturan Barili Cebu' ? 'selected' : '' }}>Proper Nabunturan Barili Cebu</option>
                            <option value="Sitio San Roque Nabunturan Barili Cebu" {{ auth()->check() && auth()->user()->address === 'Sitio San Roque Nabunturan Barili Cebu' ? 'selected' : '' }}>Sitio San Roque Nabunturan Barili Cebu</option>
                            <option value="Sitio Cabinay Nabunturan Barili Cebu" {{ auth()->check() && auth()->user()->address === 'Sitio Cabinay Nabunturan Barili Cebu' ? 'selected' : '' }}>Sitio Cabinay Nabunturan Barili Cebu</option>
                            <!-- Add more options as needed -->
                        </select>
                    </div>
                    <div class="col mb-0">
                        <label for="genderBackdrop" class="form-label">Gender</label>
                        <select id="genderBackdrop" class="form-select" name="gender">
                            <option value="">Select Gender</option>
                            <option value="male" {{ auth()->check() && auth()->user()->gender === 'male' ? 'selected' : '' }}>male</option>
                            <option value="female" {{ auth()->check() && auth()->user()->gender === 'female' ? 'selected' : '' }}>female</option>
                        </select>
                    </div>
                </div>
                <div class="row g-2">
                  <div class="col mb-0">
                      <label for="newPasswordBackdrop" class="form-label">New Password</label>
                      <input
                          type="password"
                          id="newPasswordBackdrop"
                          name="new_password"
                          class="form-control"
                          placeholder="Enter new password"
                      />
                  </div>
                  <div class="col mb-0">
                      <label for="confirmPasswordBackdrop" class="form-label">Confirm Password</label>
                      <input
                          type="password"
                          id="confirmPasswordBackdrop"
                          name="new_password_confirmation"
                          class="form-control"
                          placeholder="Confirm new password"
                      />
                  </div>
              </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" onclick="return confirm('Are you sure you want to Update your Profile?');">Save Changes</button>
            </div>
        </form>
    </div>
</div>

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
