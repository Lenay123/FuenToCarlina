<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Barangay Connect</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
	<link rel="icon" href="{{ asset('img/image (5).png') }}">
    
    <!-- FontAwesome JS-->
    <script defer src="/plugins/fontawesome/js/all.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/515e3f1675.js" crossorigin="anonymous"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/515e3f1675.js" crossorigin="anonymous"></script>
    
    <!-- App CSS -->  
    <link id="theme-style" rel="stylesheet" href="/css/portal.css">

</head> 

<body class="app">   	
	<header class="app-header fixed-top">	   	            
        <div class="app-header-inner">  
	        <div class="container-fluid py-2">
		        <div class="app-header-content"> 
		            <div class="row justify-content-between align-items-center">
			        
				    <div class="col-auto">
					    <a id="sidepanel-toggler" class="sidepanel-toggler d-inline-block d-xl-none" href="#">
						    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" role="img"><title>Menu</title><path stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" d="M4 7h22M4 15h22M4 23h22"></path></svg>
					    </a>
				    </div><!--//col-->
		          
					<div class="app-utilities col-auto">
					<div class="app-utility-item app-user-dropdown dropdown">
				            <a class="dropdown-toggle" id="user-dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
							<img id="image" src="{{ asset('image/' . auth()->user()->image) }}" style="max-width: 200px; max-height: 200px; margin-bottom: 10px; border-radius: 50%;">
{{ auth()->user()->first_name }}   {{ auth()->user()->last_name }}</a>
				            <ul class="dropdown-menu" aria-labelledby="user-dropdown-toggle">
								<li><a class="dropdown-item" href="{{ route('residentpage.Account') }}">Account</a></li>
								<li><hr class="dropdown-divider"></li>
								<li><a class="dropdown-item" onclick="return confirm('Are you sure you want to Logout?');" href="{{route('logout')}}">Log Out</a></li>
							</ul>
			            </div><!--//app-user-dropdown--> 
		            </div><!--//app-utilities-->
		        </div><!--//row-->
	            </div><!--//app-header-content-->
	        </div><!--//container-fluid-->
        </div><!--//app-header-inner-->
        <div id="app-sidepanel" class="app-sidepanel"> 
	        <div id="sidepanel-drop" class="sidepanel-drop"></div>
	        <div class="sidepanel-inner d-flex flex-column">
		        <a href="#" id="sidepanel-close" class="sidepanel-close d-xl-none">&times;</a>
		        <div class="app-branding">
		            <a class="app-logo" href="index.html"><img class="logo-icon me-2" src="{{ asset('img/image (5).png') }}" alt="logo"><span class="logo-text">Barangay Connect</span></a>
	
		        </div><!--//app-branding-->  
		        
			    <nav id="app-nav-main" class="app-nav app-nav-main flex-grow-1">
				    <ul class="app-menu list-unstyled accordion" id="menu-accordion">
					    <li class="nav-item">
					        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
					        <a class="nav-link " href="/residentpage/resident">
						        <span class="nav-icon">
						        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-house-door" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
		  <path fill-rule="evenodd" d="M7.646 1.146a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 .146.354v7a.5.5 0 0 1-.5.5H9.5a.5.5 0 0 1-.5-.5v-4H7v4a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .146-.354l6-6zM2.5 7.707V14H6v-4a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5v4h3.5V7.707L8 2.207l-5.5 5.5z"/>
		  <path fill-rule="evenodd" d="M13 2.5V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
		</svg>
						         </span>
		                         <span class="nav-link-text">Dashboard</span>
					        </a><!--//nav-link-->
					    </li><!--//nav-item-->
					    <li class="nav-item">
					        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
					        <a class="nav-link active" href="/residentpage/transactions" >
						        <span class="nav-icon">
						        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-card-list" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M14.5 3h-13a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
  <path fill-rule="evenodd" d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5z"/>
  <circle cx="3.5" cy="5.5" r=".5"/>
  <circle cx="3.5" cy="8" r=".5"/>
  <circle cx="3.5" cy="10.5" r=".5"/>
</svg>
						         </span>
		                         <span class="nav-link-text">Transactions</span>
					        </a><!--//nav-link-->
					    </li><!--//nav-item-->
					    <li class="nav-item has-submenu">
					        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
							<a class="nav-link submenu-toggle" href="#" data-bs-toggle="collapse" data-bs-target="#submenu-1" aria-expanded="false" aria-controls="submenu-1">
						        <span class="nav-icon">
						        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
						        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-files" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
	  <path fill-rule="evenodd" d="M4 2h7a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H4z"/>
	  <path d="M6 0h7a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2v-1a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H6a1 1 0 0 0-1 1H4a2 2 0 0 1 2-2z"/>
	</svg>
						         </span>
		                         <span class="nav-link-text">Request Document</span>
		                         <span class="submenu-arrow">
		                             <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
	  <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
	</svg>
	                             </span><!--//submenu-arrow-->
					        </a><!--//nav-link-->
					        <div id="submenu-1" class="collapse submenu submenu-1" data-bs-parent="#menu-accordion">
						        <ul class="submenu-list list-unstyled">
							        <li class="submenu-item"><a class="submenu-link" href="{{ route('residentpage.barangayCertificate') }}">Barangay Certificate</a></li>
							        <li class="submenu-item"><a class="submenu-link" href="{{ route('residentpage.barangayIndigency') }}">Barangay Indigency</a></li>
							        <li class="submenu-item"><a class="submenu-link" href="{{ route('residentpage.barangayBusinessPermit') }}">Barangay Business Permit</a></li>
									<li class="submenu-item"><a class="submenu-link" href="{{ route('residentpage.barangayID') }}">Barangay ID</a></li>
						        </ul>
					        </div>
					    </li><!--//nav-item-->			    
				    </ul><!--//app-menu-->
			    </nav><!--//app-nav-->

		       
	        </div><!--//sidepanel-inner-->
	    </div><!--//app-sidepanel-->
    </header><!--//app-header-->
    
    <div class="app-wrapper">
	    
	    <div class="app-content pt-3 p-md-3 p-lg-4">
		    <div class="container-xl">
			    
			    <div class="row g-3 mb-4 align-items-center justify-content-between">
				    <div class="col-auto">
			            <h1 class="app-page-title mb-0">Transactions</h1>
				    </div>

				    <div class="col-auto">
					     <div class="page-utilities">
						    <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
							    <div class="col-auto">
								   
					                
							    </div><!--//col-->



								<div class="col-auto">
									<select id="status-filter" class="form-select w-auto">
									<option value="all" selected>Select Status</option>
										<option value="all" >All</option>
										<option value="Pending">Pending</option>
										<option value="cancelled">Cancelled</option>
										<option value="Claimed">Claimed</option>
									</select>
								</div>
								<div class="col-auto">
									<select id="document-filter" class="form-select" onchange="filterDocuments()" >
										<option value="all" selected>Select Document </option>
										<option value="all" >All</option>
										<option value="Barangay Indigency"> Certificate </option>
										<option value="Barangay Certificate">Indigency </option>
										<option value="Barangay Business Permit">Permit </option>
										<option value="Barangay ID">ID </option>

									</select>
								</div>
								

						    </div><!--//row-->
					    </div><!--//table-utilities-->
				    </div><!--//col-auto-->
			    </div><!--//row-->
			   
			    
				<nav id="orders-table-tab" class="orders-table-tab app-nav-tabs nav shadow-sm flex-column flex-sm-row mb-4">
					<a class="flex-sm-fill text-start text-sm-left nav-link active" id="orders-all-tab" data-bs-toggle="tab" href="#orders-all" role="tab" aria-controls="orders-all" aria-selected="true">All</a>
				</nav>

				
				
				<div class="tab-content" id="orders-table-tab-content">
			        <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
					    <div class="app-card app-card-orders-table shadow-sm mb-5">
						    <div class="app-card-body">
							    <div class="table-responsive">
								<table class="table app-table-hover mb-0 text-left" id="document-list">
								<thead> <br>
								<div class="col-auto">
									<!-- Search input field with search icon -->
									<div class="input-group">
										<input type="text" id="search" class="form-control col-md-28" placeholder="Search..." style= "border: 1px solid rgba(128, 128, 128, 0.5)">
										<span class="input-group-text"><i class="fas fa-search"></i></span>
									</div>
								</div> <br>
									<tr>
										<th class="cell">Name</th>
										<th class="cell">Photo</th>
										<th class="cell">Requested Documents</th>
										<th class="cell">ID Type</th>
										<th class="cell">Date Requested</th>
										<th class="cell">Date for Document <br>Pickup</th>
										<th class="cell">Time for Document <br>Pickup</th>
										<th class="cell">Reference Number</th>
										<th class="cell">Status</th>
										<th class="cell">Purpose</th>
										<th class="cell">Actions</th>
									</tr>
								</thead>
									<tbody>
									@if(!empty($document_requests) && $document_requests->count())
									@foreach ($document_requests as $document_request)
										<tr data-status="{{ $document_request->status }}" data-id="{{ $document_request->id }}" data-document-type="{{ $document_request->document_type }}">
										<td>{{$document_request->full_name}}</td>
										<td>
										@if ($document_request->document_type === 'Barangay ID')
												<img src="/image/{{ $document_request->image }}" width="100" height="100">
											@else
											No image in this request
											@endif
                						</td>
											<td>{{$document_request->document_type}}</td>
											<td>{{$document_request->id_type}}</td>
											<td>{{$document_request->created_at}}</td>
											<td>{{$document_request->document_date}}</td>
											<td>
												@if ($document_request->document_time)
													{{ \Carbon\Carbon::createFromFormat('H:i', $document_request->document_time)->format('g:i A') }}
												@else
													No time specified
												@endif
											</td>
											<td>{{$document_request->tracker_number}}</td>
											<td>{{$document_request->status}}</td>
											<td>
												@if($document_request->purpose === 'other')
													{{ $document_request->purpose }}: {{ $document_request->other_inputted_value ?? 'N/A' }}
												@else
													{{ $document_request->purpose }}
												@endif
											</td>
													<td>
														
														<form method="POST" action="{{ route('document_requests.cancel', $document_request) }}">
															@csrf
															@method('PATCH')
															@if (!in_array($document_request->status, ['cancelled', 'In Progress', 'Claimed']))
																<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#cancelConfirmationModal{{ $document_request->id }}"><i class="fa-solid fa-ban"></i></button>
															@endif
															<div class="modal fade" id="cancelConfirmationModal{{ $document_request->id }}" tabindex="-1" role="dialog" aria-labelledby="cancelConfirmationModalLabel{{ $document_request->id }}" aria-hidden="true">
																<div class="modal-dialog" role="document">
																	<div class="modal-content">
																		<div class="modal-header">
																			<h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
																			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																				<span aria-hidden="true">&times;</span>
																			</button>
																		</div>
																		<div class="modal-body">
																			<p>Are you sure you want to cancel this request?</p>
																		</div>
																		<div class="modal-footer">
																			<button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
																			<button type="submit" class="btn btn-danger">Yes</button>
																		</div>
																	</div>
																</div>
															</div>
														</form>
														<div class="modal fade" id="deleteModal{{ $document_request->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel{{ $document_request->id }}" aria-hidden="true">
															<div class="modal-dialog" role="document">
																<div class="modal-content">
																	<div class="modal-header">
																		<h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
																		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																			<span aria-hidden="true">&times;</span>
																		</button>
																	</div>
																	<div class="modal-body">
																		<p>Are you sure you want to delete?</p>
																	</div>
																	<div class="modal-footer">
																		<button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
																		<form action="{{ route('delete.request', $document_request->id) }}" method="post">
																			@csrf
																			@method('delete')
																			<button type="submit" class="btn btn-danger">Yes</button>
																		</form>
																	</div>
																</div>
															</div>
														</div>

				
															@if ($document_request->status === 'cancelled' || $document_request->status === 'Claimed'|| $document_request->status === 'Declined')
																<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal{{ $document_request->id }}"><i class="far fa-trash-alt"></i></button>
															@endif												
													</td>
												</tr>
											@endforeach
										@else
											<tr>
												<td colspan="5">There are no Requests.</td>
											</tr>
										@endif
									</tbody>
								

								</table> <br>
							<center><p id="no-requests-message" style="display: none;">No requests for the selected document type.</p>
							<p id="no-results-message" style="display: none;">No results found.</p></center>	

						        </div><!--//table-responsive-->
						       
						    </div><!--//app-card-body-->		
						</div><!--//app-card-->

						
			        </div><!--//tab-pane-->
			        
				</div><!--//tab-content-->
				
				
			    
		    </div><!--//container-fluid-->
	    </div><!--//app-content-->
	    
	    <footer class="app-footer">
		    <div class="container text-center py-3">
		         <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
            <small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart" style="color: #fb866a;"></i> by <a class="app-link" >FuenToCarlina</a> for developers</small>
		       
		    </div>
	    </footer><!--//app-footer-->
	    
    </div><!--//app-wrapper-->    					

 
    <!-- Javascript -->          
    <script src="/plugins/popper.min.js"></script>
    <script src="/plugins/bootstrap/js/bootstrap.min.js"></script>  

    <!-- Charts JS -->
    <script src="/plugins/chart.js/chart.min.js"></script> 
    <script src="/js/index-charts.js"></script> 
    
    <!-- Page Specific JS -->
    <script src="/js/app.js"></script> 
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

	<script>
    // Function to filter the table rows based on the search query
    function searchTable() {
        var searchQuery = $('#search-orders').val().toLowerCase();
        $('#document-list tbody tr').each(function () {
            var row = $(this);
            var rowText = row.text().toLowerCase();

            if (rowText.includes(searchQuery)) {
                row.show();
            } else {
                row.hide();
            }
        });
    }

    $(document).ready(function () {
        // Handle form submission to trigger the search
        $('.table-search-form').submit(function (e) {
            e.preventDefault();
            searchTable();
        });

        // Handle input changes to perform real-time search
        $('#search-orders').on('input', function () {
            searchTable();
        });

        // Get the initial status from the URL query parameter
        var selectedStatus = getUrlParameter('status');

        // Set the initial status in the filter dropdown, default to "All" if not specified
        if (!selectedStatus) {
            selectedStatus = 'all';
        }
        $('#status-filter').val(selectedStatus);

        // Update the tab label based on the selected status
        updateAllTabLabel(selectedStatus);

        // Filter documents based on the selected status
        filterDocuments(selectedStatus);

        // Handle status filter change
        $('#status-filter').change(function () {
            selectedStatus = $(this).val();

            // Update the URL with the selected status as a query parameter
            var url = window.location.href.split('?')[0] + '?status=' + selectedStatus;
            window.history.pushState({ path: url }, '', url);

            updateAllTabLabel(selectedStatus);
            filterDocuments(selectedStatus);
        });

        function updateAllTabLabel(selectedStatus) {
            var allTabLabel = $('#orders-all-tab');
            allTabLabel.text('All'); // Reset the label to "All"
            if (selectedStatus === 'Pending') {
                allTabLabel.text('Pending');
            } else if (selectedStatus === 'In Progress') {
                allTabLabel.text('In Progress');
            } else if (selectedStatus === 'Cancelled') {
                allTabLabel.text('Cancelled');
            } else if (selectedStatus === 'To be Claim') {
                allTabLabel.text('To be Claim');
            } else if (selectedStatus === 'Claimed') {
                allTabLabel.text('Claimed');
            }
        }

        function filterDocuments(status) {
            $('#document-list tbody tr').each(function () {
                var row = $(this);
                var rowStatus = row.data('status');

                if (status === 'all' || status === rowStatus) {
                    row.show();
                } else {
                    row.hide();
                }
            });
        }

        // Function to get URL query parameters
        function getUrlParameter(name) {
            name = name.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]');
            var regex = new RegExp('[\\?&]' + name + '=([^&#]*)');
            var results = regex.exec(location.search);
            return results === null ? '' : decodeURIComponent(results[1].replace(/\+/g, ' '));
        }

    });
</script>


<script>
    document.addEventListener("DOMContentLoaded", function() {
        const searchInput = document.getElementById("search");
        const table = document.getElementById("document-list");
        const tableRows = table.getElementsByTagName("tr");
        const noResultsMessage = document.getElementById("no-results-message");

        searchInput.addEventListener("input", function() {
            const searchTerm = searchInput.value.toLowerCase();
            let resultsFound = false;

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
                    resultsFound = true;
                } else {
                    tableRows[i].style.display = "none";
                }
            }

            // Display no results message if no matches are found
            if (!resultsFound) {
                noResultsMessage.style.display = "block";
            } else {
                noResultsMessage.style.display = "none";
            }
        });
    });
</script>

<script>
    function filterDocuments() {
        var selectedDocument = document.getElementById("document-filter").value;
        var documentRows = document.querySelectorAll("#document-list tbody tr");

        documentRows.forEach(function(row) {
            var documentType = row.getAttribute("data-document-type");

            if (selectedDocument === "all" || selectedDocument === documentType) {
                row.style.display = "table-row";
            } else {
                row.style.display = "none";
            }
        });

        // Show a message if there are no requests for the selected document type
        var noRequestsMessage = document.getElementById("no-requests-message");
        var requestsExist = Array.from(documentRows).some(function(row) {
            return row.style.display !== "none";
        });

        if (requestsExist) {
            noRequestsMessage.style.display = "none";
        } else {
            noRequestsMessage.style.display = "block";
        }
    }
</script>
</body>
</html> 

