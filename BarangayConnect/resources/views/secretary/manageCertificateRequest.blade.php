<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{ asset('img/image (5).png') }}">
    <title>Barangay Connect</title>
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
<style>
    .id-logo{
    height: 16vh;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: space-evenly;
}

</style>
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
        <!-- ============================================================== --> <br> <br>
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
                                <a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-rocket"></i>Manage Request</a>
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
                                <a class="nav-link" href="/secretary/request_history" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4"><i class="fab fa-fw fa-wpforms"></i>Request History </a>
                            </li>
                          
                                      
                                    </ul>
                                </div>
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
                            <h2 class="pageheader-title">Barangay Certificate Requests</h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Barangay Certificate Requests</li>
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
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    <div class="card">
        <h5 class="card-header">Barangay Certificate Requests Table</h5>
        <div class="card-body">
            <div class="table-responsive">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <!-- Add a search input field -->
                        <input type="text" id="search" class="form-control" placeholder="Search...">
                    </div>
                </div>
                <table class="table table-striped table-bordered first" id="dataTable">
                    <thead>
                        <tr>
                        <th>Requestors</th>
                            <th>Reference Number</th>
                            <th>Valid Document for<br> Verification</th>
                            <th>ID Number</th>
                            <th>Request Status</th>
                            <th>Date Requested</th>
                            <th>Date for Document <br> Pickup</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($document_requests as $document_request)
                            <tr>
                                <td>{{ $document_request->full_name }}</td>
                                <td>{{ $document_request->tracker_number }}</td>
                                <td>{{ $document_request->id_type }}</td>
                                <td>{{ $document_request->id_number }}</td>
                                <td>{{ $document_request->status }}</td>
                                <td>{{ $document_request->created_at->format('Y/m/d') }}</td>
                                <td>{{ $document_request->document_date}}</td>
                                <td>
                                     <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#myModal{{ $document_request->id }}" @if ($document_request->status === 'cancelled' || $document_request->status === 'Claimed') disabled @endif>
                                    <i class="fas fa-fw fa-print"></i>
                                </button>
                                @if ($document_request->status !== 'cancelled' && $document_request->status !== 'Claimed')
                                    <form action="{{ route('claimDocumentPermit', ['document_request' => $document_request]) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <button type="submit" class="btn btn-success">Mark as Claimed</button>
                                    </form>
                                @endif
                                            </td>
                                        @endforeach
                                        </tbody>
                                  
                                    @foreach ($document_requests as $document_request)
                                    <div class="modal fade" id="myModal{{ $document_request->id }}">
                                        <div class="modal-dialog" style="max-width: 700px;">
                                            <div class="modal-content">
                                                <div class="modal-body" style="max-height: 600px; overflow-y: auto;">
                                                <div class="id-logo" >
                                                                <div class="id-logo-box1">
                                                                    <img src="/img/nabunturanlogo.png" alt="" style="width: 200px;">
                                                                    
                                                                </div>
                                                                <div class="id-logo-box2" > <br>
                                                                <h5 style="text-align: center; font-weight: bold; margin: 0;">Republic of the Philippines</h5>
                                                                <h5 style="text-align: center; font-weight: bold; margin: 0;">Office of the Barangay Local Government</h5>
                                                                <h5 style="text-align: center; font-weight: bold; margin: 0;">Barangay Nabunturan Barili Cebu</h5>

                                                                </div>

                                                                <div class="id-logo-box3">
                                                                    <img src="/img/sklogo.png" alt="" style="width: 200px;">
                                                                </div>
                                                            </div>
                                                
                                                    <hr>
                                                    <h4 style="text-align: center; font-weight: bold;">BARANGAY CERTIFICATE</h4> <br>
                                                    <p style="text-align: left;">TO WHOM IT MAY CONCERN:</p>
                                                    <p>This is to CERTIFY that <strong><u>{{ $document_request->full_name }}</u></strong>, of a legal age, <u>{{ $document_request->civil_status }}</u>, born on <u>{{ \Carbon\Carbon::parse($document_request->birthday)->format('F d, Y') }}</u>, is a resident of <u>{{ $document_request->address }}</u>.</p>
                                                    <p>This is to certify further that the above-mentioned name and his/her family is classified as 'INDIGENT' in this barangay.</p>
                                                    <p>This certification is being issued upon request for <u>{{ $document_request->purpose }}</u> from the City Mayor's Office and for whatever legal purpose/s it may serve him/her best.</p>
                                                    <div class="form-outline">
                                                        <textarea class="form-control" id="textAreaExample{{ $document_request->id }}" rows="3">Issued this 5TH day of January 2020, at Barangay Nabunturan, Barili, Cebu Philippines.{{ $document_request->textarea_content }}</textarea>
                                                    </div>
                                                    <div style="text-align: right;">
                                                    <img id="signatureImage{{ $document_request->id }}" src="/img/signature.png" alt="Barangay Captain Signature" style="width: 100px; height: 50px; margin-right:50px">
                                                    <p>Barangay Captain Almar Gutierrez</p>
                                                </div>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-secondary printButton" data-document-id="{{ $document_request->id }}">Print</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>    @endforeach
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
    <script>
document.addEventListener("DOMContentLoaded", function() {
    const searchInput = document.getElementById("search");
    const table = document.getElementById("dataTable");
    const tableRows = table.getElementsByTagName("tr");

    searchInput.addEventListener("input", function() {
        const searchTerm = searchInput.value.toLowerCase();

        for (let i = 1; i < tableRows.length; i++) {
            const cells = tableRows[i].getElementsByTagName("td");
            let found = false;

            for (let j = 0; j < cells.length; j++) {
                const cellText = cells[j].textContent || cells[j].innerText;

                if (cellText.toLowerCase().indexOf(searchTerm) > -1) {
                    found = true;
                    break;
                }
            }

            if (found) {
                tableRows[i].style.display = "";
            } else {
                tableRows[i].style.display = "none";
            }
        }
    });
});

document.querySelectorAll(".printButton").forEach(function (printButton) {
    printButton.addEventListener("click", function () {
        var documentId = this.getAttribute("data-document-id");
        var modalBody = document.querySelector("#myModal" + documentId + " .modal-body").cloneNode(true);
        var textAreaValue = document.querySelector("#textAreaExample" + documentId).value;

        // Modify the modal content with the textAreaValue
        modalBody.querySelector(".form-outline").innerHTML = '<p>' + textAreaValue + '</p';

        var printWindow = window.open('', '', 'width=600,height=600');
        printWindow.document.open();
        printWindow.document.write('<html><head><title>Print</title>');

        // Create a <style> element and add the CSS rules for .id-logo
        var styleElement = printWindow.document.createElement('style');
        styleElement.innerHTML = `
            .id-logo {
                height: 16vh;
                width: 100%;
                display: flex;
                align-items: center;
                justify-content: space-evenly;
            }
        `;
        printWindow.document.head.appendChild(styleElement);

        printWindow.document.write('</head><body>');
        printWindow.document.write(modalBody.innerHTML); // Extract the modified modal body content

        printWindow.document.write('</body></html>');
        printWindow.document.close();

        // Delay the print operation
        setTimeout(function() {
            printWindow.print();
            printWindow.close();
        }, 1000); // Adjust the delay time (in milliseconds) as needed
    });
});


</script>

</body>
 
</html>