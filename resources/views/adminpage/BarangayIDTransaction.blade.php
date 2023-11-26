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
		<link
			href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
			rel="stylesheet"
		/>
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="/vendors/styles/core.css" />
		<link
			rel="stylesheet"
			type="text/css"
			href="/vendors/styles/icon-font.min.css"
		/>
		<link
			rel="stylesheet"
			type="text/css"
			href="/src/plugins/datatables/css/dataTables.bootstrap4.min.css"
		/>
		<link
			rel="stylesheet"
			type="text/css"
			href="/src/plugins/datatables/css/responsive.bootstrap4.min.css"
		/>
		<link rel="stylesheet" type="text/css" href="/vendors/styles/style.css" />

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
            <li class="menu-item">
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
            <li class="menu-item ">
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
            <li class="menu-item active open">
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
          <br>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper"> 
            <!-- Content -->
            <div class="container-fluid">
                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">Barangay ID Requests History</h1>
                <p class="mb-4">These are the transactions</p>
                <!-- DataTales Example -->
                <div class="card shadow mb-4">
<div class="card-header py-3 d-flex justify-content-between align-items-center">
    <h6 class="m-0 font-weight-bold text-primary">All</h6>
    <div class="dropdown">
    <select id="status-filter" class="form-select w-auto">
                                    <option value="all" selected>All</option>
                                    <option value="Pending">Pending</option>
                                    <option value="cancelled">Cancelled</option>
                                    <option value="Claimed">Claimed</option>
                                </select>
    </div>
</div>
<div class="card-body">
    <div class="table-responsive">
    <table class="data-table table nowrap" id="dataTable">
            <thead>
                <tr>
                <th class="table-plus datatable-nosort">Requestors</th>
                    <th>Photo</th>
                    <th>Requested Document</th>
                    <th>Reference Number</th>
                    <th>Status</th>
                    <th>Requested date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($document_requests as $document_request)
                    <tr data-status="{{ $document_request->status }}" data-id="{{ $document_request->id }}">
                        <td>{{ $document_request->full_name }}</td>
                        <td>
                            <img src="/image/{{ $document_request->image }}" alt="Document Image" width="100" height="100">
                        </td>
                        <td>{{ $document_request->document_type }}</td>
                        <td>{{ $document_request->tracker_number }}</td>
                        <td>{{ $document_request->status }}</td>
                        <td>{{ $document_request->created_at->format('Y/m/d') }}</td>
                        <td>
                            @if ($document_request->status === 'Pending' || $document_request->status === 'To be Claimed' || $document_request->status === 'In Progress')
                                <button type="button" class="btn btn-danger" disabled>Delete</button>
                            @else
                            <form method="POST" action="{{ route('adminpage.deleteID', $document_request->id) }}" onsubmit="return confirm('Are you sure you want to delete this document request?')">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-danger">Delete</button>
                          </form>                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>





            </div>
            <!-- / Content -->



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
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript -->
    <script src="/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages -->
    <script src="/js/sb-admin-2.min.js"></script>
    <script src="/vendors/scripts/core.js"></script>
		<script src="/vendors/scripts/script.min.js"></script>
		<script src="/vendors/scripts/process.js"></script>
		<script src="/vendors/scripts/layout-settings.js"></script>
		<script src="/src/plugins/apexcharts/apexcharts.min.js"></script>
		<script src="/src/plugins/datatables/js/jquery.dataTables.min.js"></script>
		<script src="/src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
		<script src="/src/plugins/datatables/js/dataTables.responsive.min.js"></script>
		<script src="/src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
		<script src="/vendors/scripts/dashboard.js"></script>
    <!-- Page level plugins -->
    <script src="/vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <!-- Page level custom scripts -->
    <script src="/js/demo/datatables-demo.js"></script>
    <script>
$(document).ready(function() {
    // Retrieve the selected status from storage
    const selectedStatus = localStorage.getItem('selectedStatus');

    // Set the filter to the retrieved status
    if (selectedStatus) {
        $('#status-filter').val(selectedStatus);

        // Show or hide rows based on the selected status
        updateTable(selectedStatus);

        // Update the text within the <h6> element
        updateHeaderText(selectedStatus);
    } else {
        $('#no-data-row').hide();
    }

    // Handle filter change
    $('#status-filter').on('change', function() {
        const selectedStatus = $(this).val();

        // Store the selected status in local storage
        localStorage.setItem('selectedStatus', selectedStatus);

        // Show or hide rows based on selected status
        updateTable(selectedStatus);

        // Update the text within the <h6> element
        updateHeaderText(selectedStatus);
    });
});

function updateTable(selectedStatus) {
    if (selectedStatus === 'all') {
        $('tr[data-status]').show();
        $('#no-data-row').hide(); // Hide "No data" row
    } else {
        $('tr[data-status]').hide();
        const matchingRows = $(`tr[data-status="${selectedStatus}"]`);
        matchingRows.show();

        // Show the "No data" row if there are no matching rows
        if (matchingRows.length === 0) {
            $('#no-data-row').show();
        } else {
            $('#no-data-row').hide();
        }
    }
}

function updateHeaderText(selectedStatus) {
    if (selectedStatus === 'all') {
        $('h6.m-0').text('All');
    } else {
        $('h6.m-0').text(selectedStatus);
    }
}
</script>
  </body>
</html>
