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
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

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
            <li class="menu-item active open">
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
                      <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#backDropModal">
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

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <div class="col-lg-8 mb-4 order-0">
                  <div class="card">
                    <div class="d-flex align-items-end row">
                      <div class="col-sm-7">
                        <div class="card-body">
                          <h5 class="card-title text-primary">Welcome back Captain Almar Gutierrez! 🎉</h5>
                          <p class="mb-4">
                           Explore your achievements and latest updates as you continue your journey here.
                          </p>

                        
                        </div>
                      </div>
                      <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                          <img
                            src="{{ asset('img/man-with-laptop-light.png') }}"
                            height="140"
                            alt="View Badge User"
                            data-app-dark-img="{{ asset('img/man-with-laptop-light.png') }}"
                            data-app-light-img="{{ asset('img/man-with-laptop-light.png') }}" />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 order-1">
                  <div class="row">
                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <img
                                src="{{ asset('img/chart-success.png') }}"
                                alt="chart success"
                                class="rounded" />
                            </div>
                            <div class="dropdown">
                              <button
                                class="btn p-0"
                                type="button"
                                id="cardOpt3"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                              </button>
                              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                <a class="dropdown-item" href="/adminpage/BarangayIndigencyTransaction">View More</a>
                              </div>
                            </div>
                          </div>
                          <span class="fw-medium d-block mb-1">Barangay Indigency</span>
                          @php
                          $barangayIdCount = 0; // Initialize the count to 0
                      @endphp
                      @foreach ($document_requests as $count)
                          @if ($count->document_type === 'Barangay Indigency')
                              @php
                                  $barangayIdCount = $count->count; // Update the count if a record is found
                              @endphp
                          @endif
                      @endforeach
                          <h3 class="card-title mb-2">{{ $barangayIdCount }}</h3>
                          <small class="text-success fw-medium"><i class="bx bx-up-arrow-alt"></i> +72.80%</small>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <img
                                src="{{ asset('img/wallet-info.png') }}"
                                alt="Credit Card"
                                class="rounded" />
                            </div>
                            <div class="dropdown">
                              <button
                                class="btn p-0"
                                type="button"
                                id="cardOpt6"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                              </button>
                              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                                <a class="dropdown-item" href="/adminpage/BarangayPermitTransaction">View More</a>
                              </div>
                            </div>
                          </div>
                          <span>Barangay Business Permit</span>
                          @php
                          $barangayIdCount = 0; // Initialize the count to 0
                      @endphp
                      @foreach ($document_requests as $count)
                          @if ($count->document_type === 'Barangay Business Permit')
                              @php
                                  $barangayIdCount = $count->count; // Update the count if a record is found
                              @endphp
                          @endif
                      @endforeach
                          <h3 class="card-title text-nowrap mb-1">{{ $barangayIdCount }}</h3>
                          <small class="text-success fw-medium"><i class="bx bx-up-arrow-alt"></i> +28.42%</small>
                        </div>
                      </div>
                    </div>
                    
                  </div>
                </div>
                <!-- Total Revenue -->
                <div class="col-12 col-lg-8 order-2 order-md-3 order-lg-2 mb-4">
                  <div class="card">
                    <div class="row row-bordered g-0">
                      <div class="col-md-8">
                        <h5 class="card-header m-0 me-2 pb-3">Total Requests</h5>
                        <canvas id="totalRequestsChart" class="px-2"></canvas>
                      </div>

                      <div class="col-md-4">
                        <div id="growthChart"></div>
                        <div class="text-center fw-medium pt-3 mb-2">{{ number_format($percentageGrowth, 2) }}% Requests Growth</div>

                        <div class="d-flex px-xxl-4 px-lg-2 p-4 gap-xxl-3 gap-lg-1 gap-3 justify-content-between">
                          <div class="d-flex">
                            <div class="me-2">
                              <span class="badge bg-label-info p-2"><i class="bx bx-wallet text-info"></i></span>
                            </div>
                            <div class="d-flex flex-column">
                              <small>2023</small>
                              <h6 class="mb-0">{{ $totalDocumentRequests ?? 0 }} Document Requests</h6>
                          </div>
                          
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
                <!--/ Total Revenue -->
                <div class="col-12 col-md-8 col-lg-4 order-3 order-md-2">
                  <div class="row">
                    <div class="col-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <img src="{{ asset('img/wallet-info.png') }}" alt="Credit Card" class="rounded" />
                            </div>
                            <div class="dropdown">
                              <button
                                class="btn p-0"
                                type="button"
                                id="cardOpt4"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                              </button>
                              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">
                                <a class="dropdown-item" href="/adminpage/BarangayIDTransaction">View More</a>
                              </div>
                            </div>
                          </div>
                          <span class="d-block mb-1">Barangay ID</span>
                          @php
                          $barangayIdCount = 0; // Initialize the count to 0
                      @endphp
                      @foreach ($document_requests as $count)
                          @if ($count->document_type === 'Barangay ID')
                              @php
                                  $barangayIdCount = $count->count; // Update the count if a record is found
                              @endphp
                          @endif
                      @endforeach
                          <h3 class="card-title text-nowrap mb-2">{{ $barangayIdCount }}</h3>
                          <small class="text-danger fw-medium"><i class="bx bx-down-arrow-alt"></i> -14.82%</small>
                        </div>
                      </div>
                    </div>
                    <div class="col-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <img src="{{ asset('img/wallet-info.png') }}" alt="Credit Card" class="rounded" />
                            </div>
                            <div class="dropdown">
                              <button
                                class="btn p-0"
                                type="button"
                                id="cardOpt1"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                              </button>
                              <div class="dropdown-menu" aria-labelledby="cardOpt1">
                                <a class="dropdown-item" href="/adminpage/BarangayCertificateTransaction">View More</a>
                              </div>
                            </div>
                          </div>
                          <span class="fw-medium d-block mb-1">Barangay Certificate</span>
                          @php
                          $barangayIdCount = 0; // Initialize the count to 0
                      @endphp
                      @foreach ($document_requests as $count)
                          @if ($count->document_type === 'Barangay Certificate')
                              @php
                                  $barangayIdCount = $count->count; // Update the count if a record is found
                              @endphp
                          @endif
                      @endforeach
                          <h3 class="card-title mb-2">{{ $barangayIdCount }}</h3>
                          <small class="text-success fw-medium"><i class="bx bx-up-arrow-alt"></i> +28.14%</small>
                        </div>
                      </div>
                    </div>

                    <div class="col-12 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="d-flex justify-content-between flex-sm-row flex-column gap-3">
                            <div class="d-flex flex-sm-column flex-row align-items-start justify-content-between">
                              <div class="card-title">
                                <h5 class="text-nowrap mb-2">Barangay Residents</h5>
                                <span class="badge bg-label-warning rounded-pill">Year 2023</span>
                              </div>
                              <div class="mt-sm-auto">
                                <h3 class="mb-0">{{ $userCount > 0 ? $userCount : '0' }}</h3>
                              </div>
                            </div>
                            <div id="profileReportChart"></div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-12 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="d-flex justify-content-between flex-sm-row flex-column gap-3">
                            <div class="d-flex flex-sm-column flex-row align-items-start justify-content-between">
                              <div class="card-title">
                                <h5 class="text-nowrap mb-2">Barangay Secretaries</h5>
                                <span class="badge bg-label-warning rounded-pill">Year 2023</span>
                              </div>
                              <div class="mt-sm-auto">
                                <h3 class="mb-0">{{ empty($secretaryCount) ? 0 : $secretaryCount }}</h3>
                              </div>
                            </div>
                            <div id="profileReportChart1"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
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
                    <!-- Modal Backdrop -->
                    <div class="col-lg-4 col-md-3">
                      <div class="mt-3">
                        <!-- Button trigger modal -->
                    

                        <!-- Modal -->
                        <div class="modal fade" id="backDropModal" data-bs-backdrop="static" tabindex="-1">
                          <div class="modal-dialog">
                            <form class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="backDropModalTitle">My Profile</h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <div class="row">
                                  <div class="col mb-3">
                                    <label for="nameBackdrop" class="form-label">Name</label>
                                    <input
                                      type="text"
                                      id="nameBackdrop"
                                      class="form-control"
                                      placeholder="Enter Name" value= "Almar Gutierrez" readonly/>
                                  </div>
                                </div>
                                <div class="row g-2">
                                  <div class="col mb-0">
                                    <label for="emailBackdrop" class="form-label">Email</label>
                                    <input
                                      type="email"
                                      id="emailBackdrop"
                                      class="form-control"
                                      placeholder="xxxx@xxx.xx" value= "admin@gmail.com" readonly/>
                                  </div>
                                  <div class="col mb-0">
                                    <label for="dobBackdrop" class="form-label">DOB</label>
                                    <input type="date" id="dobBackdrop" class="form-control" />
                                  </div>
                                </div>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                  Close
                                </button>
                                <button type="button" class="btn btn-primary">Save</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                    <script>
                      // Sample data (replace this with actual data from your database)
                      const requestLabels = [];
                      const requestCounts = [];
                  
                      @foreach(['Barangay ID', 'Barangay Business Permit', 'Barangay Indigency', 'Barangay Certificate'] as $documentType)
                          requestLabels.push('{{ $documentType }}');
                          requestCounts.push({{ $document_requests->where('document_type', $documentType)->sum('count') }});
                      @endforeach
                  
                      // Get the  canvas element
                      const totalRequestsCanvas = document.getElementById('totalRequestsChart');
                  
                      if (totalRequestsCanvas) {
                          const ctx = totalRequestsCanvas.getContext('2d');
                  
                          // Create the chart
                          new Chart(ctx, {
                              type: 'bar',
                              data: {
                                  labels: requestLabels,
                                  datasets: [{
                                      label: 'Number of Requests',
                                      data: requestCounts,
                                      backgroundColor: 'rgba(75, 192, 192, 0.2)',
                                      borderColor: 'rgba(75, 192, 192, 1)',
                                      borderWidth: 1
                                  }]
                              },
                              options: {
                                  scales: {
                                      xAxes: [{
                                          display: false, // Hide x-axis labels
                                          ticks: {
                                              autoSkip: true
                                          }
                                      }],
                                      yAxes: [{
                                          ticks: {
                                              beginAtZero: true
                                          }
                                      }]
                                  },
                                  legend: {
                                      display: false
                                  },
                                  tooltips: {
                                      enabled: false
                                  }
                              }
                          });
                      } else {
                          console.error('Canvas element with ID "totalRequestsChart" not found.');
                      }
                  </script>
                  
                
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
