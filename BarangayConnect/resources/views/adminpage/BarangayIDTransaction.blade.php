<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Barangay Connect</title>
    <link rel="icon" href="{{ asset('img/image (5).png') }}">
    <!-- Custom fonts for this template -->
    <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<body id="page-top">
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                <div class="sidebar-brand-icon rotate-n-15">
                    <img src="/img/logo.png" alt="Barangay Connect Logo" style="width: 50px; height: 60px; margin-top: 30px; margin-left: 20px">
                </div>
                <div class="sidebar-brand-text mx-3">Barangay Connect</div>
            </a>
            <br>
            <hr class="sidebar-divider">
            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="/adminpage/AdminDashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
            <div class="sidebar-heading">Interface</div>
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="/adminpage/ManageResidents" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Manage Residents</span>
                </a>
            </li>
            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item ">
                <a class="nav-link collapsed" href="/adminpage/ManageSecretary" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Manage Secretary</span>
                </a>
            </li>
            <li class="nav-item active">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>View Transactions</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="/adminpage/BarangayIndigencyTransaction">Barangay Indigency<br> Transactions</a>
                        <a class="collapse-item" href="/adminpage/BarangayCertificateTransaction">Barangay Certificate<br> Transactions</a>
                        <a class="collapse-item" href="/adminpage/BarangayIDTransaction">Barangay ID Transactions</a>
                        <a class="collapse-item" href="/adminpage/BarangayPermitTransaction">Barangay Business<br> Permit Transactions</a>
                    </div>
                </div>
            </li>
            <hr class="sidebar-divider d-none d-md-block">
            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
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
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
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
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Requestor</th>
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
                            <td>{{ $document_request->document_type }}</td>
                            <td>{{ $document_request->tracker_number }}</td>
                            <td>{{ $document_request->status }}</td>
                            <td>{{ $document_request->created_at->format('Y/m/d') }}</td>
                            <td>
                                @if ($document_request->status === 'Pending' || $document_request->status === 'To be Claimed' || $document_request->status === 'In Progress')
                                    <button type="button" class="btn btn-danger" disabled>Delete</button>
                                @else
                                <button class="btn btn-danger" onclick="deleteRow(this)">Delete</button>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>





                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; FuenToCarLina 2023</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->
    <!-- Scroll to Top Button -->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- Logout Modal -->
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
    <!-- Bootstrap core JavaScript -->
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript -->
    <script src="/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages -->
    <script src="/js/sb-admin-2.min.js"></script>
    <link href="/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="/vendor/datatables/dataTables.bootstrap4.min.js"></script>
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

        // Remove the row from the table
        row.remove();
    }
}

// Rebuild the table when the page loads
function rebuildTable() {
    var deletedRows = JSON.parse(localStorage.getItem('deletedRows')) || [];
    deletedRows.forEach(function (requestId) {
        var row = document.querySelector(`tr[data-id="${requestId}"]`);
        if (row) {
            row.remove();
        }
    });
}

// Call the function to rebuild the table on page load
rebuildTable();
</script> -->
</body>
</html>
