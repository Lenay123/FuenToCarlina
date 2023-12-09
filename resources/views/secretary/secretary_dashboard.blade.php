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
		<script src="https://rawgit.com/kimmobrunfeldt/progressbar.js/1.0.0/dist/progressbar.js"></script>
		<!-- End Google Tag Manager -->
	</head>
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
								<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
									<span class="user-icon">
										<img src="https://www.nicepng.com/png/detail/128-1280406_view-user-icon-png-user-circle-icon-png.png" alt="" />
									</span>
									@if(auth()->check())
									<span class="user-name">{{ auth()->user()->first_name }} {{ auth()->user()->last_name }}</span>
									@endif
								</a>
								<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
									<!-- Open the modal when clicking on "My Profile" -->
									<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#myProfileModal">
										<i class="dw dw-user1"></i> My Profile
									</a>
									<a class="dropdown-item"  onclick="return confirm('Are you sure you want to Logout?');" href="{{ route('secretarylogout') }}">
										<i class="dw dw-logout"></i> Log Out
									</a>
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
							<a href="javascript:;" class="dropdown-toggle no-arrow active">
								<span class="micon bi bi-house"></span
								><span class="mtext">Dashboard</span>
							</a>
						</li>
						<li class="dropdown">
							<a href="/secretary/manageIndigencyRequest" class="dropdown-toggle no-arrow">
								<span class="micon bi bi-textarea-resize"></span
								><span class="mtext">Barangay Indigency</span>
							</a>
					
						</li>
						<li class="dropdown">
							<a href="/secretary/manageCertificateRequest" class="dropdown-toggle no-arrow">
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
							<a href="/secretary/manageBusinessPermitRequest" class="dropdown-toggle no-arrow">
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
			<div class="pd-ltr-20">
				<div class="card-box pd-20 height-100-p mb-30">
					<div class="row align-items-center">
						<div class="col-md-4">
							<img src="https://cdn.dribbble.com/users/291221/screenshots/1425333/helper.gif" alt="" />
						</div>
						<div class="col-md-8">
							<h4 class="font-20 weight-500 mb-10 text-capitalize">
								Welcome back
								@if(auth()->check())
								<div class="weight-600 font-30 text-blue">{{ auth()->user()->first_name }} {{ auth()->user()->last_name }} </div>
							</h4>
							@endif
							<p class="font-18 max-width-600">
								Explore your achievements and latest updates as you continue your journey here.

							</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xl-3 mb-30">
						<div class="card-box height-100-p widget-style1">
							<div class="d-flex flex-wrap align-items-center">
							<div class="progress-data">
							<div id="documentRequestsCircle3"></div>
							</div>
														
								<div class="widget-data">
									@php
										$barangayIndigencyCount = \App\Models\DocumentRequest::withTrashed()
											->where('document_type', 'Barangay Indigency')
											->count() ?? 0;
									@endphp

								
								
									<div class="h4 mb-0">{{ $barangayIndigencyCount }}</div>
									<div class="weight-600 font-14">Barangay Indigency</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 mb-30">
						<div class="card-box height-100-p widget-style1">
							<div class="d-flex flex-wrap align-items-center">
								<div class="progress-data">
								<div id="documentRequestsCircle2"></div>
								</div>
								<div class="widget-data">
									@php
									$barangayCertificateCount = \App\Models\DocumentRequest::withTrashed()
										->where('document_type', 'Barangay Certificate')
										->count() ?? 0;
								@endphp
								
									<div class="h4 mb-0">{{ $barangayCertificateCount }}</div>
									<div class="weight-600 font-14">Barangay Certificate</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 mb-30">
						<div class="card-box height-100-p widget-style1">
							<div class="d-flex flex-wrap align-items-center">
								<div class="progress-data">
								<div id="documentRequestsCircle1"></div>
								</div>
								<div class="widget-data">
									@php
									$barangayIdCount = \App\Models\DocumentRequest::withTrashed()
										->where('document_type', 'Barangay ID')
										->count() ?? 0;
								@endphp
								
									<div class="h4 mb-0">{{ $barangayIdCount }}</div>
									<div class="weight-600 font-14">Barangay ID</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 mb-30">
						<div class="card-box height-100-p widget-style1">
							<div class="d-flex flex-wrap align-items-center">
								<div class="progress-data">
								<div id="documentRequestsCircle4"></div>
								</div>
								<div class="widget-data">
									@php
									$barangayPermitCount = \App\Models\DocumentRequest::withTrashed()
										->where('document_type', 'Barangay Business Permit')
										->count() ?? 0;
								@endphp
								
									<div class="h4 mb-0">{{ $barangayPermitCount }}</div>
									<div class="weight-600 font-14">Barangay Business Permit</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
				<div class="col-xl-7 mb-30">
					<div class="card-box height-100-p pd-20 position-relative">
						@if($document_requests->isNotEmpty())
						<button id="exportChartButton" data-chart-id="barChart" style="position: absolute; top: 0; right: 0; margin-right:-250px; margin-top: 3px;" class="btn btn-link position-absolute top-0 start-0 mt-3"><i class="dw dw-export"></i> Export</button>
						@endif
						<h2 class="h4 mb-20">Transaction Status</h2>

						@if($document_requests->isNotEmpty())
						<canvas id="barChart"></canvas>
						@else
						<p style="margin-left:10px">No document requests available.</p>
						@endif
					</div>
				</div>


				<div class="col-xl-5 mb-30">
					<div class="card-box height-100-p pd-20">
						@if($document_requests->isNotEmpty())
						<button id="exportChartButton1" data-chart-id="pieChart" style="position: absolute;  right: 0; margin-right:-270px; margin-top: -50px;" class="btn btn-link position-absolute top-0 start-0 mt-3"><i class="dw dw-export"></i> Export</button>
						@endif
						<h2 class="h4 mb-20">Requested Documents</h2>

						@if($document_requests->isNotEmpty())
						<canvas id="pieChart"></canvas>
						@else
						<p style="margin-left:10px">No document requests available.</p>
						@endif
					</div>
				</div>

				</div>

				</div>
				<div class="card-box mb-30">
					<h2 class="h4 pd-20">Recent Requests</h2>
					<table class="data-table table nowrap">
						<thead>
							<tr>
								<th class="table-plus datatable-nosort">Requestors</th>
								<th>Reference Number</th>
								<th>Requested Document</th>
								<th>Date Requested</th>
								<th class="datatable-nosort">Action</th>
							</tr>
						</thead>
						<tbody>
							@forelse($first5DocumentRequests as $request)
								<tr>
									<td>
										<h5 class="font-16">{{ $request->full_name }}</h5>
									</td>
									<td>{{ $request->tracker_number }}</td>
									<td>{{ $request->document_type }}</td>
									<td>{{ $request->created_at->format('Y-m-d H:i:s') }}</td>
									<td>
										<div class="dropdown">
											<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
												<i class="dw dw-more"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
												<a class="dropdown-item" onclick="redirectToView('{{ $request->document_type }}')"><i class="dw dw-eye"></i> View</a>
												
											</div>
										</div>
									</td>
								</tr>
							@empty
								<tr>
									<td colspan="5" class="text-center">No request</td>
								</tr>
							@endforelse
						</tbody>

					</table>

				</div>
				<div class="footer-wrap pd-20 mb-20 card-box">
					Barangay Connect Made by
					<a href="https://github.com/Lenay123/FuenToCarlina/tree/final_deployment" target="_blank"
						>FuenToCarlina</a
					>
				</div>
			</div>
		</div>

    <!-- Modal -->
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

		<script>
    // Function to generate random colors
	function getRandomColor() {
    var letters = '0123456789ABCDEF';
    var color = '#';
    for (var i = 0; i < 6; i++) {
        color += letters[Math.floor(Math.random() * 16)];
    }
    return color;
}

// Fetch the status labels and counts including soft-deleted records
var statusData = @json(\App\Models\DocumentRequest::withTrashed()
    ->select('status', \DB::raw('COUNT(*) as count'))
    ->groupBy('status')
    ->get());

// Extract labels and counts
var statusLabels = statusData.map(item => item.status);
var statusCounts = statusData.map(item => item.count);

// Exclude "delete" and "deleted" statuses
var excludedStatuses = ['delete', 'deleted'];
var filteredStatusLabels = statusLabels.filter(function (status) {
    return !excludedStatuses.includes(status.toLowerCase());
});
var filteredStatusCounts = statusCounts.filter(function (_, index) {
    return !excludedStatuses.includes(statusLabels[index].toLowerCase());
});

// Generate an array of random colors for the remaining statuses
var backgroundColors = filteredStatusLabels.map(function () {
    return getRandomColor();
});

var ctxBar = document.getElementById('barChart').getContext('2d');
var barChart = new Chart(ctxBar, {
    type: 'bar',
    data: {
        labels: filteredStatusLabels,
        datasets: [{
            label: 'Number of Requests',
            data: filteredStatusCounts,
            backgroundColor: backgroundColors,
        }],
    },
    options: {
        responsive: true,
        scales: {
            x: {
                title: {
                    display: true,
                    text: 'Status',
                },
            },
            y: {
                title: {
                    display: true,
                    text: 'Number of Requests',
                },
            },
        },
    },
});


// Chart data for the pie chart
var ctxPie = document.getElementById('pieChart').getContext('2d');

// Fetch the data including soft-deleted requests
var pieChartData = @json(\App\Models\DocumentRequest::withTrashed()
    ->select('document_type', \DB::raw('COUNT(*) as count'))
    ->groupBy('document_type')
    ->get());

var pieChart = new Chart(ctxPie, {
    type: 'pie',
    data: {
        labels: pieChartData.map(item => item.document_type),
        datasets: [{
            data: pieChartData.map(item => item.count),
            backgroundColor: [
                '#36A2EB',
                '#FFCE56',
                '#FF6384',
                '#4BC0C0',
                '#9966FF',
                // Add more colors as needed
            ],
        }],
    },
    options: {
        responsive: true,
    }
});

	function redirectToView(documentType) {
        // Handle the redirection based on the document type
        switch (documentType) {
            case 'Barangay ID':
                window.location.href = '{{ route('id.requests') }}';
                break;
            case 'Barangay Business Permit':
                window.location.href = '{{ route('business_permit.requests') }}';
                break;
            case 'Barangay Certificate':
                window.location.href = '{{ route('certificate.requests') }}';
                break;
            case 'Barangay Indigency':
                window.location.href = '{{ route('indigency.requests') }}';
                break;
            // Add more cases for other document types as needed
            default:
                // Handle default case or display an error
                alert('Invalid document type');
        }
    }

// Function to export chart image
function exportChart(chartId) {
    // Use the toBase64Image() method to export the chart as an image
    var chart = Chart.getChart(chartId);
    var chartImage = chart.toBase64Image();

    // Create an anchor element to trigger the download
    var downloadLink = document.createElement('a');
    downloadLink.href = chartImage;
    downloadLink.download = 'chart.png'; // You can change the file name and format as needed
    downloadLink.click();
}

// Event listener for the first button
document.getElementById('exportChartButton').addEventListener('click', function () {
    exportChart('barChart');
});

// Event listener for the second button
document.getElementById('exportChartButton1').addEventListener('click', function () {
    exportChart('pieChart');
});


// Assume you have PHP variables for counts
var barangayIdCount = {{ $barangayIdCount }};
var barangayCertificateCount = {{ $barangayCertificateCount }};
var barangayIndigencyCount = {{ $barangayIndigencyCount }};
var barangayPermitCount = {{ $barangayPermitCount }};

// Function to create circular progress bar
function createProgressBar(elementId, count, strokeColor) {
    var bar = new ProgressBar.Circle(document.getElementById(elementId), {
        color: strokeColor,
        strokeWidth: 30, // Adjust the thickness of the stroke
        trailWidth: 4,
        duration: 2000,
        trailColor: '#d3d3d3', // Set the stroke color for the remaining part
        text: {
            value: count === 0 ? '0%' : (count / 100).toFixed(2) + '%' // Show 0% if count is 0, otherwise calculate the percentage based on count
        },
        step: function(state, bar) {
            bar.path.setAttribute('stroke', state.color);
            var value = Math.round(bar.value() * 100);
            if (value === 0) {
                bar.setText('');
            } else {
                bar.setText(value + '%');
            }
        }
    });

    // Adding a gradient effect to the edge of the circle
    bar.path.setAttribute('stroke-linecap', 'round');
    bar.path.setAttribute('stroke', 'url(#gradient)');

    // Animate the progress bar
    bar.animate(count / 100);  // Should be a value between 0 and 1
}

// Create circular progress bars for each document type with different stroke colors
createProgressBar('documentRequestsCircle1', barangayIdCount, '#28a745'); // Green
createProgressBar('documentRequestsCircle2', barangayCertificateCount, '#007bff'); // Blue
createProgressBar('documentRequestsCircle3', barangayIndigencyCount, '#ffc107'); // Yellow
createProgressBar('documentRequestsCircle4', barangayPermitCount, '#dc3545'); // Red



    </script>

    <!-- SVG gradient definition for the edge color -->
    <svg style="display: none;">
        <defs>
            <linearGradient id="gradient" x1="0%" y1="0%" x2="100%" y2="0%">
                <stop offset="0%" style="stop-color:#28a745; stop-opacity:1" />
                <stop offset="100%" style="stop-color:#ff8c00; stop-opacity:1" />
            </linearGradient>
        </defs>
    </svg>


	</body>
</html>
