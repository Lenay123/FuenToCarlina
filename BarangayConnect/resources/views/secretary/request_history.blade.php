<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Barangay Document</title>
    <link rel="icon" href="{{ asset('img/image (5).png') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/libs/css/style.css">
    <link rel="stylesheet" href="/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" type="text/css" href="/assets/vendor/datatables/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="/assets/vendor/datatables/css/buttons.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="/assets/vendor/datatables/css/select.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="/assets/vendor/datatables/css/fixedHeader.bootstrap4.css">
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="../index.html">Barangay Connect</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item dropdown notification">
                       
                        </li>

                        @if(auth()->check())
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">  {{ auth()->user()->first_name }} {{ auth()->user()->last_name }} <i class="fas fa-caret-down"></i></a>
                                    @endif
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>Active</a>
                                <a class="dropdown-item" href="{{route('secretarylogout')}}"><i class="fas fa-power-off mr-2"></i>Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== --><br> <br>
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="/secretary/secretary_dashboard" aria-expanded="false"><i class="fa fa-fw fa-user-circle"></i>Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-rocket"></i>Manage Request</a>
                                <div id="submenu-2" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="/secretary/manageIndigencyRequest">Barangay Indigency</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="/secretary/manageCertificateRequest">Barangay Certificate</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="/secretary/manageIdRequest">Barangay ID</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="/secretary/manageBusinessPermitRequest">Barangay Business Permit</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item ">
                                <a class="nav-link active" href="#" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4"><i class="fab fa-fw fa-wpforms"></i>Request History </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Barangay Connect Transactions</h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Barangay Connect Transactions</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- ============================================================== -->
                    <!-- basic table  -->
                    <!-- ============================================================== -->
                    @if(session('success'))
                    <div class="alert alert-success">
                           {{ session('success') }}
                    </div>
                @endif
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Barangay Connect Transaction History Table</h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered first">
                                        <thead>
                                            <tr>
                                                <th>Requestors</th>
                                                <th>Reference Number</th>
                                                <th>Requested Document</th>
                                                <th>Date Requested</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($document_requests as $document_request)
                                            <tr data-status="{{ $document_request->status }}" data-id="{{ $document_request->id }}">
                                                <td>{{ $document_request->full_name }}</td>
                                                <td>{{ $document_request->tracker_number }}</td>
                                                <td>{{ $document_request->document_type }}</td>
                                                <td>{{ $document_request->created_at->format('Y/m/d') }}</td>
                                            
                                                <td>
                                                    <form action="{{ route('document_requests.destroy', $document_request->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to remove this document request?')">Remove</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach

                                        

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end basic table  -->
                    <!-- ============================================================== -->
                </div>

                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js -->
    <script src="/assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- main js -->
    <script src="/assets/libs/js/main-js.js"></script>
    <!-- chart chartist js -->
    <script src="/assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
    <!-- sparkline js -->
    <script src="/assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <!-- morris js -->
    <script src="/assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="/assets/vendor/charts/morris-bundle/morris.js"></script>
    <!-- chart c3 js -->
    <script src="/assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="/assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="/assets/vendor/charts/c3charts/C3chartjs.js"></script>
    <script src="/assets/libs/js/dashboard-ecommerce.js"></script>

<!-- <script>
function deleteRow(button) {
    if (confirm('Are you sure you want to delete this document request?')) {
        var row = button.closest('tr'); // Find the parent row

        // Retrieve the ID from the data attribute
        var requestId = row.getAttribute('data-id');

        // Store the deleted row's ID in Local Storage
        var deletedRows = JSON.parse(localStorage.getItem('deletedRows')) || [];
        deletedRows.push(requestId);
        localStorage.setItem('deletedRows', JSON.stringify(deletedRows));

        // Hide the row
        row.style.display = 'none';
    }
}

// Load the deleted rows from Local Storage and hide them
function loadDeletedRows() {
    var deletedRows = JSON.parse(localStorage.getItem('deletedRows')) || [];
    deletedRows.forEach(function (requestId) {
        var row = document.querySelector(`tr[data-id="${requestId}"]`);
        if (row) {
            row.style.display = 'none';
        }
    });
}

// Call the function to load deleted rows on page load
loadDeletedRows();

</script> -->


</body>
 
</html>