<!DOCTYPE html>
<html>
	<head>
		<!-- Basic Page Info -->
		<meta charset="utf-8" />
		<title>Barangay Connect</title>
		<link rel="icon" href="{{ asset('img/image (5).png') }}">
		<!-- Site favicon -->



		<!-- Mobile Specific Metas -->
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1, maximum-scale=1"
		/>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">

		<!-- Google Font -->
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

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script
			async
			src="https://www.googletagmanager.com/gtag/js?id=G-GBZ3SGGX85"
		></script>
		<script
			async
			src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2973766580778258"
			crossorigin="anonymous"
		></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag() {
				dataLayer.push(arguments);
			}
			gtag("js", new Date());

			gtag("config", "G-GBZ3SGGX85");
		</script>
		<!-- Google Tag Manager -->
		<script>	
			(function (w, d, s, l, i) {
				w[l] = w[l] || [];
				w[l].push({ "gtm.start": new Date().getTime(), event: "gtm.js" });
				var f = d.getElementsByTagName(s)[0],
					j = d.createElement(s),
					dl = l != "dataLayer" ? "&l=" + l : "";
				j.async = true;
				j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
				f.parentNode.insertBefore(j, f);
			})(window, document, "script", "dataLayer", "GTM-NXZMQSS");
		</script>
		<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
		<!-- End Google Tag Manager -->
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

		<div class="header">
			<div class="header-left">
				<div class="menu-icon bi bi-list"></div>
			</div>
			<div class="header-right">

				<div class="user-notification">
					<div class="dropdown">
						<a
							class="dropdown-toggle no-arrow"
							href="#"
							role="button"
							data-toggle="dropdown"
						>
						</a>
						<div class="dropdown-menu dropdown-menu-right">github-link
							<div class="notification-list mx-h-350 customscroll">
								<ul>
									<li>
										<a href="#">
											<img src="/vendors/images/img.jpg" alt="" />
											<h3>John Doe</h3>
											<p>
												Lorem ipsum dolor sit amet, consectetur adipisicing
												elit, sed...
											</p>
										</a>
									</li>
									<li>
										<a href="#">
											<img src="/vendors/images/photo1.jpg" alt="" />
											<h3>Lea R. Frith</h3>
											<p>
												Lorem ipsum dolor sit amet, consectetur adipisicing
												elit, sed...
											</p>
										</a>
									</li>
									<li>
										<a href="#">
											<img src="/vendors/images/photo2.jpg" alt="" />
											<h3>Erik L. Richards</h3>
											<p>
												Lorem ipsum dolor sit amet, consectetur adipisicing
												elit, sed...
											</p>
										</a>
									</li>
									<li>
										<a href="#">
											<img src="/vendors/images/photo3.jpg" alt="" />
											<h3>John Doe</h3>
											<p>
												Lorem ipsum dolor sit amet, consectetur adipisicing
												elit, sed...
											</p>
										</a>
									</li>
									<li>
										<a href="#">
											<img src="/vendors/images/photo4.jpg" alt="" />
											<h3>Renee I. Hansen</h3>
											<p>
												Lorem ipsum dolor sit amet, consectetur adipisicing
												elit, sed...
											</p>
										</a>
									</li>
									<li>
										<a href="#">
											<img src="/vendors/images/img.jpg" alt="" />
											<h3>Vicki M. Coleman</h3>
											<p>
												Lorem ipsum dolor sit amet, consectetur adipisicing
												elit, sed...
											</p>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="user-info-dropdown">
					<div class="dropdown">
						<a
							class="dropdown-toggle"
							href="#"
							role="button"
							data-toggle="dropdown"
						> 
							<span class="user-icon">
								<img src="https://www.nicepng.com/png/detail/128-1280406_view-user-icon-png-user-circle-icon-png.png" alt="" />
							</span>
							@if(auth()->check())
							<span class="user-name">{{ auth()->user()->first_name }} {{ auth()->user()->last_name }} </span>
							@endif
						</a>
						<div
							class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list"
						>
						<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#myProfileModal"
								><i class="dw dw-user1"></i> My Profile</a
							>
							<a class="dropdown-item"  onclick="return confirm('Are you sure you want to Logout?');" href="{{route('secretarylogout')}}"
								><i class="dw dw-logout"></i> Log Out</a
							>
						</div>
					</div>
				</div>
					</div>
				</div>
			</div>
		</div>

		<div class="right-sidebar">
			<div class="sidebar-title">
				<h3 class="weight-600 font-16 text-blue">
					Layout Settings
					<span class="btn-block font-weight-400 font-12"
						>User Interface Settings</span
					>
				</h3>
				<div class="close-sidebar" data-toggle="right-sidebar-close">
					<i class="icon-copy ion-close-round"></i>
				</div>
			</div>
			<div class="right-sidebar-body customscroll">
				<div class="right-sidebar-body-content">
					<h4 class="weight-600 font-18 pb-10">Header Background</h4>
					<div class="sidebar-btn-group pb-30 mb-10">
						<a
							href="javascript:void(0);"
							class="btn btn-outline-primary header-white active"
							>White</a
						>
						<a
							href="javascript:void(0);"
							class="btn btn-outline-primary header-dark"
							>Dark</a
						>
					</div>

					<h4 class="weight-600 font-18 pb-10">Sidebar Background</h4>
					<div class="sidebar-btn-group pb-30 mb-10">
						<a
							href="javascript:void(0);"
							class="btn btn-outline-primary sidebar-light"
							>White</a
						>
						<a
							href="javascript:void(0);"
							class="btn btn-outline-primary sidebar-dark active"
							>Dark</a
						>
					</div>

					<h4 class="weight-600 font-18 pb-10">Menu Dropdown Icon</h4>
					<div class="sidebar-radio-group pb-10 mb-10">
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebaricon-1"
								name="menu-dropdown-icon"
								class="custom-control-input"
								value="icon-style-1"
								checked=""
							/>
							<label class="custom-control-label" for="sidebaricon-1"
								><i class="fa fa-angle-down"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebaricon-2"
								name="menu-dropdown-icon"
								class="custom-control-input"
								value="icon-style-2"
							/>
							<label class="custom-control-label" for="sidebaricon-2"
								><i class="ion-plus-round"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebaricon-3"
								name="menu-dropdown-icon"
								class="custom-control-input"
								value="icon-style-3"
							/>
							<label class="custom-control-label" for="sidebaricon-3"
								><i class="fa fa-angle-double-right"></i
							></label>
						</div>
					</div>

					<h4 class="weight-600 font-18 pb-10">Menu List Icon</h4>
					<div class="sidebar-radio-group pb-30 mb-10">
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebariconlist-1"
								name="menu-list-icon"
								class="custom-control-input"
								value="icon-list-style-1"
								checked=""
							/>
							<label class="custom-control-label" for="sidebariconlist-1"
								><i class="ion-minus-round"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebariconlist-2"
								name="menu-list-icon"
								class="custom-control-input"
								value="icon-list-style-2"
							/>
							<label class="custom-control-label" for="sidebariconlist-2"
								><i class="fa fa-circle-o" aria-hidden="true"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebariconlist-3"
								name="menu-list-icon"
								class="custom-control-input"
								value="icon-list-style-3"
							/>
							<label class="custom-control-label" for="sidebariconlist-3"
								><i class="dw dw-check"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebariconlist-4"
								name="menu-list-icon"
								class="custom-control-input"
								value="icon-list-style-4"
								checked=""
							/>
							<label class="custom-control-label" for="sidebariconlist-4"
								><i class="icon-copy dw dw-next-2"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebariconlist-5"
								name="menu-list-icon"
								class="custom-control-input"
								value="icon-list-style-5"
							/>
							<label class="custom-control-label" for="sidebariconlist-5"
								><i class="dw dw-fast-forward-1"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebariconlist-6"
								name="menu-list-icon"
								class="custom-control-input"
								value="icon-list-style-6"
							/>
							<label class="custom-control-label" for="sidebariconlist-6"
								><i class="dw dw-next"></i
							></label>
						</div>
					</div>

					<div class="reset-options pt-30 text-center">
						<button class="btn btn-danger" id="reset-settings">
							Reset Settings
						</button>
					</div>
				</div>
			</div>
		</div>

		<div class="left-side-bar">
			<div class="brand-logo">
				<a href="#">
				<h5>Barangay Connect</h5>
				</a>
				<div class="close-sidebar" data-toggle="left-sidebar-close">
					<i class="ion-close-round"></i>
				</div>
			</div>
			<div class="menu-block customscroll">
				<div class="sidebar-menu">
					<ul id="accordion-menu">
						<li class="dropdown">
							<a href="/secretary/secretary_dashboard" class="dropdown-toggle no-arrow">
								<span class="micon bi bi-house"></span
								><span class="mtext">Dashboard</span>
							</a>
						</li>
						<li class="dropdown">
							<a href="/secretary/manageIndigencyRequest" class="dropdown-toggle no-arrow active">
								<span class="micon bi bi-textarea-resize"></span
								><span class="mtext">Barangay Indigency</span>
							</a>
					
						</li>
						<li class="dropdown">
							<a href="/secretary/manageCertificateRequest" class="dropdown-toggle no-arrow ">
								<span class="micon bi bi-table"></span
								><span class="mtext">Barangay Certificate</span>
							</a>
							
						</li>
						<li>
							<a href="/secretary/manageIdRequest" class="dropdown-toggle no-arrow">
								<span class="micon bi bi-calendar4-week"></span
								><span class="mtext">Barangay ID</span>
							</a>
						</li>
						<li class="dropdown">
							<a href="/secretary/manageBusinessPermitRequest" class="dropdown-toggle no-arrow ">
								<span class="micon bi bi-archive"></span
								><span class="mtext"> Barangay Business <br> Permit </span>
							</a>
						</li>
						<li class="dropdown">
							<a href="/secretary/request_history" class="dropdown-toggle no-arrow">
								<span class="micon bi bi-command"></span
								><span class="mtext">Transaction History</span>
							</a>
					
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="mobile-menu-overlay"></div>

		<div class="main-container">
        <div class="card">
        <h5 class="card-header">Barangay Indigency Requests Table</h5>
        <div class="card-body">
            <div class="table-responsive">
			<div class="row mb-3">
                    <div class="col-md-6">
                        <!-- Add a search input field -->
                        <input type="text" id="search" class="form-control" placeholder="Search...">
                    </div>
                </div>
                <table class="data-table table nowrap" id="dataTable">
                    <thead>
                        <tr>
						<th class="table-plus datatable-nosort">Requestors</th>
                            <th>Reference Number</th>
                            <th>Valid Document for<br> Verification</th>
                            <th>ID Number</th>
                            <th>Request Status</th>
                            <th>Date Requested</th>
                            <th>Date for Document <br> Pickup</th>
							<th>TIme for Document <br> Pickup</th>

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
								<td>
									@if ($document_request->document_time)
													{{ \Carbon\Carbon::createFromFormat('H:i', $document_request->document_time)->format('g:i A') }}
												@else
													No time specified
												@endif
								</td>
                                <td>{{ $document_request->document_date}}</td>
                                <td>
                                     <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#myModal{{ $document_request->id }}" @if ($document_request->status === 'cancelled' || $document_request->status === 'Claimed') disabled @endif>
                                     <i class="micon bi bi-printer"></i>
                                </button>
                                @if ($document_request->status !== 'cancelled' && $document_request->status !== 'Claimed')
                                    <form action="{{ route('claimDocumentPermit', ['document_request' => $document_request]) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <button type="submit" class="btn btn-success" onclick="return confirm('Are you sure you want to mark this request as CLAIMED?');"><i class="micon bi bi-check2"></i></button>
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
		</div>


		<div class="modal fade" id="myProfileModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">My Profile</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
				<form id="updateProfileForm" class="modal-content" method="POST" action="{{ route('secretary.updateProfileSecretary') }}">
    @csrf
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
					<div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary" onclick="return confirm('Are you sure you want to Update your Profile?');">Save Changes</button>
                </div>
					</div>
					
			</form>
            
            </div>
        </div>
    </div>

		<!-- js -->
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
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
		<!-- Google Tag Manager (noscript) -->
		<noscript
			><iframe
				src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS"
				height="0"
				width="0"
				style="display: none; visibility: hidden"
			></iframe
		></noscript>
		<!-- End Google Tag Manager (noscript) -->

		<!-- End Google Tag Manager (noscript) -->

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
