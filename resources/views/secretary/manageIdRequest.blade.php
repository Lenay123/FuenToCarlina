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
    background-color: rgb(7, 64, 117);
    display: flex;
    align-items: center;
    justify-content: space-evenly;
}

.id-logo-box1{
    width: 20%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}

.id-logo-box2{
    width: 60%;
    height: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    padding-top: 10px;
    color: white;
    
    
}

.id-logo-box2 h1{
    font-size: 1.5rem;
}

.id-logo-box2 h3{
    font-size: 1rem;
}
.id-logo-box2 h4{
    font-size: 1rem;
}

.id-logo-box3{
    width: 20%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}
.id-title{
    background-color: skyblue;
    height: 7vh;
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;

}

.id-content {
    height: 50vh;
    width: 100%;
    display: flex;
    background-color: white;
    justify-content: space-around;
    align-items: center;
    
}

.id-content-image{
    width: 30%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;

}


.id-content-info{
    background-color: white;
    width: 50%;
    height: 100%;
    display: flex;
    flex-direction: column;

    
}

.id-content-info p{
    font-size: 12px;

    padding-left: 10px;


}

.id-content-info h3{
    font-size: 16px;
    padding-left: 10px;
}

.id-content-info h1{
    font-size: 20px;
    padding-left: 10px;
}


.id-content-sign{
    width: 18%;
    height:100px;
    margin-top: 20%;
    display: flex;
    justify-content: center;
    align-items: center;
    
    
}
</style>
	<body>

		<div class="header">
			<div class="header-left">
				<div class="menu-icon bi bi-list"></div>
				<div
					class="search-toggle-icon bi bi-search"
					data-toggle="header_search"
				></div>
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
							<a class="dropdown-item" href="profile.html"
								><i class="dw dw-user1"></i> My Profile</a
							>
							<a class="dropdown-item" href="{{route('secretarylogout')}}"
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
				<a href="index.html">
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
							<a href="/secretary/manageIndigencyRequest" class="dropdown-toggle no-arrow">
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
							<a href="/secretary/manageIdRequest" class="dropdown-toggle no-arrow active">
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
        <h5 class="card-header">Barangay ID Requests Table</h5>
        <div class="card-body">
            <div class="table-responsive">
                <table class="data-table table nowrap" id="dataTable">
                    <thead>
                        <tr>
						<th class="table-plus datatable-nosort">Requestors</th>
						<th>Photo</th>
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
								<td>
                            <img src="/image/{{ $document_request->image }}" alt="Document Image" width="100" height="100">
                        </td>
                                <td>{{ $document_request->tracker_number }}</td>
                                <td>{{ $document_request->id_type }}</td>
                                <td>{{ $document_request->id_number }}</td>
                                <td>{{ $document_request->status }}</td>
                                <td>{{ $document_request->created_at->format('Y/m/d') }}</td>
                                <td>{{ $document_request->document_date}}</td>
                                     <td>
                                     <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#myModal{{ $document_request->id }}" @if ($document_request->status === 'cancelled' || $document_request->status === 'Claimed') disabled @endif>
                                     <i class="micon bi bi-printer"></i>
                                </button>
                                @if ($document_request->status !== 'cancelled' && $document_request->status !== 'Claimed')
                                    <form action="{{ route('claimDocumentPermit', ['document_request' => $document_request]) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <button type="submit" class="btn btn-success"><i class="micon bi bi-check2"></i></button>
                                    </form>
                                @endif
                                            </td>
                                        @endforeach
                                        </tbody>
                                  
                                    @foreach ($document_requests as $document_request)
                                    <div class="modal fade" id="myModal{{ $document_request->id }}">
                                        <div class="modal-dialog" style="max-width: 750px;">
                                            <div class="modal-content">
                                            <div class="modal-body" style="max-height: 1000px;">
                                                <section id="printContent" >
                                                        <div class="id-container">
                                                            <div class="id-logo" >
                                                                <div class="id-logo-box1">
                                                                    <img src="/img/nabunturanlogo.png" alt="" style="width: 200px;">
                                                                    
                                                                </div>
                                                                <div class="id-logo-box2" > <br>
                                                                    <h1 style="color: white; margin: 0;">REPUBLIC OF THE PHILIPPINES</h1>
                                                                    <h3 style="color: white; margin: 0;">Barili Cebu, Barangay Nabunturan</h3>
                                                                </div>

                                                                <div class="id-logo-box3">
                                                                    <img src="/img/sklogo.png" alt="" style="width: 200px;">
                                                                </div>
                                                            </div>
                                                            <div class="id-title">
                                                                <h2 style="margin-top: 10px;">BARANGAY RESIDENT'S CARD</h2>
                                                            </div> <br> <br> <br>

                                                            <div class="id-content" style="margin-top:30px" >
                                                                <div class="id-content-image">
                                                                    <img src="/image/{{ $document_request->image }}" alt="" style="width: 170px; border: 3px solid black;">
                                                                    <br><br>
                                                                
                                                                    <h4 style="border-top: 1px solid black; padding: 5px 20px;">Resident's Signature</h3>
                                                                </div>
                                                                <div class="id-content-info">
                                                                    <p style="font-size: 12px; margin: 0; padding: 1px;">LAST NAME, FIRST NAME, MI.</p>
                                                                    <H1 style="font-size: 20px; margin: 0; padding: 1px;">{{ $document_request->full_name }}</H1>
                                                                    <p style="font-size: 12px; margin: 0; padding: 1px;">DATE OF BIRTH</p>
                                                                    <h3 style="font-size: 16px; margin: 0; padding: 1px;">{{ $document_request->birthday }}</h3>
                                                                    <P style="font-size: 12px; margin: 0; padding: 1px;">MOBILE NUMBER</P>
                                                                    <h3 style="font-size: 16px; margin: 0; padding: 1px;">{{ $document_request->contact_number }}</h3>
                                                                    <p style="font-size: 12px; margin: 0; padding: 1px;">ADDRESS</p>
                                                                    <h3 style="font-size: 16px; margin: 0; padding: 1px;">{{ $document_request->address }}</h3>
                                                                    <p style="font-size: 12px; margin: 0; padding: 1px;">CIVIL STATUS</p>
                                                                    <h3 style="font-size: 16px; margin: 0; padding: 1px;">{{ $document_request->civil_status }}</h3>
                                                                    <p style="font-size: 12px; margin: 0; padding: 1px;">GENDER</p>
                                                                    <h3 style="font-size: 16px; margin: 0; padding: 1px;">{{ $document_request->gender }}</h3>
                                                                </div> <br> 
                                                                <div class="id-content-sign">
                                                                    <br><br>
                                                                    <p>
                                                                        <img src="/img/signature.png" alt="" style="width: 100px; margin-bottom: -10px;">
                                                                        <span style="border-top: 1px solid black; display: inline-block; width: 100px; margin-top: -8px;"></span>
                                                                        Barangay Captain Signature
                                                                    </p>
                                                                </div>



                                                            </div>
                                                        </div>
                                                    </section>
                                                <div class="modal-footer">
                                                <button type="button" class="btn btn-primary closeButton" data-dismiss="modal">Close</button>
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
        var modalContent = document.querySelector("#myModal" + documentId + " .modal-body").cloneNode(true);

        // Remove "Print" and "Close" buttons from the cloned modal content
        var printButtons = modalContent.querySelectorAll(".printButton, .closeButton");
        printButtons.forEach(function(button) {
            button.remove();
        });

        var printWindow = window.open('', '', 'width=800, height=600');
        printWindow.document.open();
        printWindow.document.write('<html><head><title>Print</title>');
        
        // Add your CSS styles to the print window's head
        printWindow.document.write('<style>');
        printWindow.document.write(`
        .id-logo {
                height: 16vh;
                width: 100%;
                background-color: rgb(7, 64, 117)!important;
                display: flex;
                align-items: center;
                justify-content: space-evenly;
            }
            .id-logo-box1{
                width: 20%;
                height: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .id-logo-box2{
                width: 60%;
                height: 100%;
                display: flex;
                flex-direction: column;
                align-items: center;
                padding-top: 10px;
                color: white;
                
                
            }

            .id-logo-box2 h1{
                font-size: 1.5rem;
            }

            .id-logo-box2 h3{
                font-size: 1rem;
            }
            .id-logo-box2 h4{
                font-size: 1rem;
            }

            .id-logo-box3{
                width: 20%;
                height: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
            }
            .id-title{
                background-color: skyblue;
                height: 7vh;
                width: 100%;
                display: flex;
                justify-content: center;
                align-items: center;

            }

            .id-content {
                height: 50vh;
                width: 100%;
                display: flex;
                background-color: white;
                justify-content: space-around;
                align-items: center;
                
            }

            .id-content-image{
                width: 30%;
                height: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;

            }


            .id-content-info{
                background-color: white;
                width: 50%;
                height: 100%;
                display: flex;
                flex-direction: column;

                
            }

            .id-content-info p{
                font-size: 12px;

                padding-left: 10px;


            }

            .id-content-info h3{
                font-size: 16px;
                padding-left: 10px;
            }

            .id-content-info h1{
                font-size: 20px;
                padding-left: 10px;
            }


            .id-content-sign{
                width: 18%;
                height:100px;
                margin-top: 20%;
                display: flex;
                justify-content: center;
                align-items: center;
                
                
            }
        `);
        printWindow.document.write('</style>');

        printWindow.document.write('</head><body>');
        
        // Set the background color directly in the print styles
        printWindow.document.write(`
        <style>
            @media print {
                .id-logo{
                    background-color: rgb(7, 64, 117);
                }
                /* Set up custom paper size to consume only half of the page */
                @page {
                    size: 210mm 148.5mm; /* Half of an A4 page */
                }
                /* Add other print styles here */
            }
        </style>
        `);
        
        printWindow.document.write(modalContent.innerHTML); // Extract the modified modal body content

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
