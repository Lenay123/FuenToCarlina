<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link rel="icon" href="{{ asset('img/image (5).png') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/libs/css/style.css">
    <link rel="stylesheet" href="/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="/assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="/assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="/assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="/assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>Barangay Connect</title>
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
                                <a class="nav-link active" href="#" aria-expanded="false"><i class="fa fa-fw fa-user-circle"></i>Dashboard</a>
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
                                <a class="nav-link" href="/secretary/request_history" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4"><i class="fab fa-fw fa-wpforms"></i>Request History </a>
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
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">Barangay Connect Dashboard </h2>
                                <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Barangay Connect Dashboard</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <div class="ecommerce-widget">

                        <div class="row">
                            <!-- ============================================================== -->
                            <!-- sales  -->
                            <!-- ============================================================== -->
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                <div class="card border-3 border-top border-top-primary">
                                    <div class="card-body">
                                        <h5 class="text-muted">Barangay Indigency</h5>
                                        <div class="metric-value d-inline-block">

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

                                            <h1 class="mb-1">{{ $barangayIdCount }}</h1>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end sales  -->
                            <!-- ============================================================== -->
                            <!-- ============================================================== -->
                            <!-- new customer  -->
                            <!-- ============================================================== -->
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                <div class="card border-3 border-top border-top-primary">
                                    <div class="card-body">
                                        <h5 class="text-muted">Barangay Certificate</h5>
                                        <div class="metric-value d-inline-block">
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

                                            <h1 class="mb-1">{{ $barangayIdCount }}</h1>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end new customer  -->
                            <!-- ============================================================== -->
                            <!-- ============================================================== -->
                            <!-- visitor  -->
                            <!-- ============================================================== -->
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                <div class="card border-3 border-top border-top-primary">
                                    <div class="card-body">
                                        <h5 class="text-muted">Barangay ID</h5>
                                        <div class="metric-value d-inline-block">
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

                                            <h1 class="mb-1">{{ $barangayIdCount }}</h1>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end visitor  -->
                            <!-- ============================================================== -->
                            <!-- ============================================================== -->
                            <!-- total orders  -->
                            <!-- ============================================================== -->
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                <div class="card border-3 border-top border-top-primary">
                                    <div class="card-body">
                                        <h5 class="text-muted">Barangay Business Permit</h5>
                                        <div class="metric-value d-inline-block">
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

                                            <h1 class="mb-1">{{ $barangayIdCount }}</h1>
                                        </div>
                                      
                                    </div>
                                </div>
                            </div>

                           
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

                            <!-- ============================================================== -->
                            <!-- end total orders  -->
                            <!-- ============================================================== -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->



    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
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
//    document.addEventListener('DOMContentLoaded', function () {
//             const ctx = document.getElementById('worldwide-sales').getContext('2d');
//             const myChart = new Chart(ctx, {
//                 type: 'bar',
//                 data: {
//             labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
//             datasets: [{
//                 label: 'Barangay Indigency',
//                 data: [10, 20, 30, 40, 50, 60, 70, 80, 90, 100, 110, 120],
//                 backgroundColor: 'rgba(75, 192, 192, 0.2)',
//                 borderColor: 'rgba(75, 192, 192, 1)',
//                 borderWidth: 1
//             },
//             {
//                 label: 'Barangay ID',
//                 data: [5, 15, 25, 35, 45, 55, 65, 75, 85, 95, 105, 115],
//                 backgroundColor: 'rgba(255, 99, 132, 0.2)',
//                 borderColor: 'rgba(255, 99, 132, 1)',
//                 borderWidth: 1
//             },
//             {
//                 label: 'Barangay Business Permit',
//                 data: [15, 25, 35, 45, 55, 65, 75, 85, 95, 105, 115, 125],
//                 backgroundColor: 'rgba(255, 205, 86, 0.2)',
//                 borderColor: 'rgba(255, 205, 86, 1)',
//                 borderWidth: 1
//             },
//             {
//                 label: 'Barangay Certificate',
//                 data: [25, 35, 45, 55, 65, 75, 85, 95, 105, 115, 125, 135],
//                 backgroundColor: 'rgba(54, 162, 235, 0.2)',
//                 borderColor: 'rgba(54, 162, 235, 1)',
//                 borderWidth: 1
//             },
//             {
//                 label: 'Barangay Indigency',
//                 data: [35, 45, 55, 65, 75, 85, 95, 105, 115, 125, 135, 145],
//                 backgroundColor: 'rgba(153, 102, 255, 0.2)',
//                 borderColor: 'rgba(153, 102, 255, 1)',
//                 borderWidth: 1
//             }]
//         },
//                 options: {
//                     scales: {
//                         y: {
//                             beginAtZero: true
//                         }
//                     }
//                 }
//             });
//         });
</script>
</body>
 
</html>