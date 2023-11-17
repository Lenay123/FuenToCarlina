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

  <!-- Custom fonts for this template-->
  <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
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
      <li class="nav-item active">
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
      <li class="nav-item">
        <a class="nav-link collapsed" href="/adminpage/ManageSecretary"  data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Manage Secretary</span>
        </a>
      </li>

      <li class="nav-item">
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
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                <i class="fas fa-user-circle fa-lg"></i> <!-- Replace with the user icon -->
            </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" disabled>
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Active
                </a>
                
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
          </div>

          <!-- Content Row -->
          <div class="row">

         
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Barangay Secretary</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{ empty($secretaryCount) ? 0 : $secretaryCount }}</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

  
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Barangay Residents</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $userCount > 0 ? $userCount : '0' }}</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Barangay Admin</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $admin > 0 ? $admin : '0' }}</div>
                        </div>

                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

           
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Barangay Indigency </div>
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
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $barangayIdCount }}</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Barangay Certificate</div>
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
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $barangayIdCount }}</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

  
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Barangay ID</div>
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
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $barangayIdCount }}</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Barangay Business Permit</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
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
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $barangayIdCount }}</div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- /.container-fluid -->
        <div class="chart-container">
    @if($document_requests->isNotEmpty())
        <!-- Create a canvas for the bar graph -->
        <canvas id="documentRequestChart" width="400" height="200"></canvas>

        <script>
    document.addEventListener('DOMContentLoaded', function () {
        // Use Chart.js to create a bar graph for document requests
        var ctx = document.getElementById('documentRequestChart').getContext('2d');

        // Customize colors and labels based on document types
        var colors = [];
        var labels = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

        @foreach(['Barangay ID', 'Barangay Business Permit', 'Barangay Indigency', 'Barangay Certificate'] as $documentType)
            // Customize colors based on document types
            @if($documentType == 'Barangay ID')
                colors.push('rgba(0, 0, 255, 0.2)'); // Blue
            @elseif($documentType == 'Barangay Business Permit')
                colors.push('rgba(255, 0, 0, 0.2)'); // Red
            @elseif($documentType == 'Barangay Indigency')
                colors.push('rgba(75, 192, 192, 0.2)'); // Green
            @elseif($documentType == 'Barangay Certificate')
                colors.push('rgba(192, 192, 75, 0.2)'); // Yellow
            @endif
        @endforeach

        var dataset = [];

        @foreach(['Barangay ID', 'Barangay Business Permit', 'Barangay Indigency', 'Barangay Certificate'] as $documentType)
            var counts = @json($document_requests->where('document_type', $documentType)->pluck('count')->toArray());
            dataset.push({
                label: '{{ $documentType }}',
                data: counts,
                backgroundColor: colors[{{ array_search($documentType, ['Barangay ID', 'Barangay Business Permit', 'Barangay Indigency', 'Barangay Certificate']) }}],
                borderColor: colors[{{ array_search($documentType, ['Barangay ID', 'Barangay Business Permit', 'Barangay Indigency', 'Barangay Certificate']) }}].replace('0.2', '1'),
                borderWidth: 1
            });
        @endforeach

        var documentRequestChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: dataset
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        min: 0, // Set the minimum value of the y-axis to 0
                    }
                },
                legend: {
                    display: true,
                    position: 'top', // You can change the legend position
                    labels: {
                        fontColor: 'black', // You can change the legend label color
                    }
                },
            }
        });
    });
</script>


    @else
        <p>No document requests yet.</p>
    @endif
</div>






</div>

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; FuenToCarLina</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

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
          <a class="btn btn-primary" href="{{route('adminpagelogout')}}">Logout</a>
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
  <script src="/vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="/js/demo/chart-area-demo.js"></script>
  <script src="/js/demo/chart-pie-demo.js"></script>
</body>

</html>
