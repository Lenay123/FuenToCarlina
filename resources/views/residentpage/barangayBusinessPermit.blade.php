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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>

    <!-- App CSS -->  
    <link id="theme-style" rel="stylesheet" href="/css/portal.css">

</head> 
<style>
.modal#statusSuccessModal .modal-content, 
.modal#statusErrorsModal .modal-content {
	border-radius: 10px;
}
.modal#statusSuccessModal .modal-content svg, 
.modal#statusErrorsModal .modal-content svg {
	width: 100px; 
	display: block; 
	margin: 0 auto;
}
.modal#statusSuccessModal .modal-content .path, 
.modal#statusErrorsModal .modal-content .path {
	stroke-dasharray: 1000; 
	stroke-dashoffset: 0;
}
.modal#statusSuccessModal .modal-content .path.circle, 
.modal#statusErrorsModal .modal-content .path.circle {
	-webkit-animation: dash 0.9s ease-in-out; 
	animation: dash 0.9s ease-in-out;
}
.modal#statusSuccessModal .modal-content .path.line, 
.modal#statusErrorsModal .modal-content .path.line {
	stroke-dashoffset: 1000; 
	-webkit-animation: dash 0.95s 0.35s ease-in-out forwards; 
	animation: dash 0.95s 0.35s ease-in-out forwards;
}
.modal#statusSuccessModal .modal-content .path.check, 
.modal#statusErrorsModal .modal-content .path.check {
	stroke-dashoffset: -100; 
	-webkit-animation: dash-check 0.95s 0.35s ease-in-out forwards; 
	animation: dash-check 0.95s 0.35s ease-in-out forwards;
}

@-webkit-keyframes dash { 
	0% {
		stroke-dashoffset: 1000;
	}
	100% {
		stroke-dashoffset: 0;
	}
}
@keyframes dash { 
	0% {
		stroke-dashoffset: 1000;
	}
	100%{
		stroke-dashoffset: 0;
	}
}
@-webkit-keyframes dash { 
	0% {
		stroke-dashoffset: 1000;
	}
	100% {
		stroke-dashoffset: 0;
	}
}
@keyframes dash { 
	0% {
		stroke-dashoffset: 1000;}
	100% {
		stroke-dashoffset: 0;
	}
}
@-webkit-keyframes dash-check { 
	0% {
		stroke-dashoffset: -100;
	}
	100% {
		stroke-dashoffset: 900;
	}
}
@keyframes dash-check {
	0% {
		stroke-dashoffset: -100;
	}
	100% {
		stroke-dashoffset: 900;
	}
}
.box00{
	width: 100px;
	height: 100px;
	border-radius: 50%;
}
</style>
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
		            <a class="app-logo" href=""><img class="logo-icon me-2" src="{{ asset('img/image (5).png') }}" alt="logo"><span class="logo-text">Barangay Connect</span></a>
	
		        </div><!--//app-branding-->  
		        
			    <nav id="app-nav-main" class="app-nav app-nav-main flex-grow-1">
				    <ul class="app-menu list-unstyled accordion" id="menu-accordion">
					    <li class="nav-item">
					        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
					        <a class="nav-link" href="/residentpage/resident">
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
					        <a class="nav-link" href="/residentpage/transactions" >
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
							<a class="nav-link submenu-toggle active" href="#" data-bs-toggle="collapse" data-bs-target="#submenu-1" aria-expanded="false" aria-controls="submenu-1">
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
			    <h1 class="app-page-title">Barangay Business Permit</h1>
			    <hr class="mb-4">
                <div class="row g-4 settings-section">
	                <div class="col-12 col-md-4">
		                <h3 class="section-title">General</h3>
		                <div class="section-intro">This is a critical document required for individuals or entities engaging in business activities within a specific barangay in the Philippines. </div>
	                </div>
	                <div class="col-12 col-md-8">
				<div class="app-card app-card-settings shadow-sm p-4">
					<form class="settings-form" action="{{ route('resident.store') }}" method="POST">
						@csrf
						<div class="form-group">
							<label for="exampleInputName1" class="form-label">Full name: <span class="text-danger">*</span></label>
							<input type="name" class="form-control" name="full_name" required style="border: 0.5px solid #B0AEAE;"value="{{ old('full_name') }}">
						</div>
						<div class="form-group">
							<label for="exampleInputName1" class="form-label">Business name: <span class="text-danger">*</span></label>
							<input type="name" class="form-control" name="business_name"  required style="border: 0.5px solid #B0AEAE;" value="{{ old('business_name') }}">
						</div>

						<div class="form-group">
										<label for="birthday">Birthday:<span class="text-danger">*</span></label>
										<div class="input-group">
										  <input type="date" class="form-control" name="birthday" required style="border: 0.5px solid #B0AEAE;" value="{{ old('birthday') }}">
										  <div class="input-group-append">
											<span class="input-group-text">
											  <i class="fas fa-calendar"></i>
											</span>
										  </div>
										</div>
										<div class="text-danger birthday-feedback"></div>
									  </div>


									<div class="form-group">
										<label for="address">Address: <span class="text-danger">*</span></label>
										<select class="form-control" name="address" required style="border: 0.5px solid #B0AEAE;">
										<option value="Proper Nabunturan Barili Cebu" {{ old('address') == 'Proper Nabunturan Barili Cebu' ? 'selected' : '' }}>Proper Nabunturan Barili Cebu</option>
										<option value="Sitio San Roque Nabunturan Barili Cebu" {{ old('address') == 'Sitio San Roque Nabunturan Barili Cebu' ? 'selected' : '' }}>Sitio San Roque Nabunturan Barili Cebu</option>
										<option value="Sitio Cabinay Nabunturan Barili Cebu" {{ old('address') == 'Sitio Cabinay Nabunturan Barili Cebu' ? 'selected' : '' }}>Sitio Cabinay Nabunturan Barili Cebu</option>
															</select>
									</div>
									<div class="form-group">
										<label for="civil_status">Civil Status: <span class="text-danger">*</span></label>
										<select class="form-control" name="civil_status" required style="border: 0.5px solid #B0AEAE;">
											<option value="Single" {{ old('civil_status') == 'Single' ? 'selected' : '' }}>Single</option>
											<option value="Married"{{ old('civil_status') == 'Married' ? 'selected' : '' }}>Married</option>
											<option value="Widowed" {{ old('civil_status') == 'Widowed' ? 'selected' : '' }}>Widowed</option>
											<option value="Divorced" {{ old('civil_status') == 'Divorced' ? 'selected' : '' }}>Divorced</option>
										</select>
									</div>


									<label for="document_type" >Type of Document: <span class="text-danger">*</span></label>
									<select id="document_type" name="document_type" class="form-control" style="border: 0.5px solid #B0AEAE;">
										<option value="Barangay Certificate">Barangay Certificate</option>
									</select><br>

									<div class="form-group">
										<label for="document_date">Date for Document Pickup: <span class="text-danger">*</span></label>
										<div class="input-group">
											<input type="date" class="form-control" name="document_date" id="document_date" required style="border: 0.5px solid #B0AEAE;" value="{{ old('document_date') }}">
											<div class="input-group-append">
												<span class="input-group-text">
													<i class="fas fa-calendar"></i> <!-- FontAwesome calendar icon -->
												</span>
											</div>
										</div>
									</div>

									<div class="form-group">
										<label for="document_time" >Time for Document Pickup: <span class="text-danger">*</span></label>
										<select class="form-control" name="document_time" required style="border: 0.5px solid #B0AEAE;">
											<option>Select Time</option>
											<option value="09:00" {{ old('document_time') == '09:00' ? 'selected' : '' }}>9:00 AM</option>
											<option value="09:30" {{ old('document_time') == '09:30' ? 'selected' : '' }}>9:30 AM</option>
											<option value="10:00" {{ old('document_time') == '10:00' ? 'selected' : '' }}>10:00 AM</option>
											<option value="10:30" {{ old('document_time') == '10:30' ? 'selected' : '' }}>10:30 AM</option>
											<option value="11:00" {{ old('document_time') == '11:00' ? 'selected' : '' }}>11:00 AM</option>
											<option value="11:30" {{ old('document_time') == '11:30' ? 'selected' : '' }}>11:30 AM</option>
											<option value="12:00" {{ old('document_time') == '12:00' ? 'selected' : '' }}>12:00 PM</option>
											<option value="12:30" {{ old('document_time') == '12:30' ? 'selected' : '' }}>12:30 PM</option>
											<option value="13:00" {{ old('document_time') == '13:00' ? 'selected' : '' }}>1:00 PM</option>
											<option value="13:30" {{ old('document_time') == '13:30' ? 'selected' : '' }}>1:30 PM</option>
											<option value="14:00" {{ old('document_time') == '14:00' ? 'selected' : '' }}>2:00 PM</option>
											<option value="14:30" {{ old('document_time') == '14:30' ? 'selected' : '' }}>2:30 PM</option>
											<option value="15:00" {{ old('document_time') == '15:00' ? 'selected' : '' }}>3:00 PM</option>
											<option value="15:30" {{ old('document_time') == '15:30' ? 'selected' : '' }}>3:30 PM</option>
											<option value="16:00" {{ old('document_time') == '16:00' ? 'selected' : '' }}>4:00 PM</option>
											<option value="16:30" {{ old('document_time') == '16:30' ? 'selected' : '' }}>4:30 PM</option>
											<option value="17:00" {{ old('document_time') == '17:00' ? 'selected' : '' }}>5:00 PM</option>

										</select>
									</div>




						<label for="document_type">Type of Document: <span class="text-danger">*</span></label>
						<select id="document_type" name="document_type" class="form-control" style="border: 0.5px solid #B0AEAE;">
							<option value="Barangay Business Permit">Barangay Business Permit</option>
						</select> <br>

						<label for="id_type">Select an ID: <span class="text-danger">*</span></label>
										<select id="id_type" name="id_type" class="form-control" required style="border: 0.5px solid #B0AEAE;" onchange="showOtherField()">
											<option value="">Select an ID</option>
											<option value="NSO with School ID" {{ old('id_type') == 'NSO with School ID' ? 'selected' : '' }}>NSO with School ID</option>
											<option value="NBI Clearance" {{ old('id_type') == 'NBI Clearance' ? 'selected' : '' }}>NBI Clearance</option>
											<option value="Voters ID" {{ old('id_type') == 'Voters ID' ? 'selected' : '' }}>Voters ID</option>
											<option value="Drivers License" {{ old('id_type') == 'Drivers License' ? 'selected' : '' }}>Drivers License</option>
											<option value="Voters Certificate" {{ old('id_type') == 'Voters Certificate' ? 'selected' : '' }}>Voters Certificate</option>
											<option value="National ID" {{ old('id_type') == 'National ID' ? 'selected' : '' }}>National ID</option>
											<option value="SSS" {{ old('id_type') == 'SSS' ? 'selected' : '' }}>SSS</option>
											<option value="Others" {{ old('id_type') == 'Others' ? 'selected' : '' }}>Others</option>

										</select>

						<div id="otherField" style="display:none;">
							<label for="otherIdType">Specify Other ID:</label>
							<input type="text" id="otherIdType" name="specific_id" class="form-control"  style="border: 0.5px solid #B0AEAE;" value="{{ old('specific_id') }}">
						</div>

						<div class="description"><p style="color: red; font-size: 12px;"><span class="info-icon">&#9432;</span>Note: Bring this document for verification when claiming the requested document</p></div>
						
						<div class="form-group">
										<label for="id_number" >ID Number: <span class="text-danger">*</span></label>
										<input type="text" class="form-control" name="id_number" value="{{ old('id_number') }}" required style="border: 0.5px solid #B0AEAE;">
									</div>
		
									<div class="form-group">
										<label for="purpose" class="form-label" >Purpose: <span class="text-danger">*</span></label>
										<textarea name="purpose" id="purpose" class="form-control" cols="20" rows="2" required style="border: 0.5px solid #B0AEAE;">{{ old('purpose') }}</textarea>
										<div class="description">I certify that all information on this form is true and correct. I understand that any incorrect, false, or misleading statement is punishable by law.</div>
		
									</div>

						<div class="modal-footer">
							<a href="/residentpage/resident"><button type="button" class="btn btn-secondary">Cancel</button></a>
							<!-- Add a space between buttons -->
							<span style="margin-right: 10px;"></span>
							<button type="submit" class="btn btn-primary">Request</button>
						</div>
						
					</form>
				</div><!--//app-card-body-->
			</div>

						    
						</div><!--//app-card-->
	                </div>
                </div><!--//row-->
                <hr class="my-4">
		    </div><!--//container-fluid-->
	    </div><!--//app-content-->

<!-- Error Modal -->
<div class="modal" id="errorModal" tabindex="-1" role="dialog" aria-labelledby="errorModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="errorModalLabel">Error</h5>
                <button type="button" class="close" aria-label="Close" onclick="closeErrorModal()">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @if ($errors->any())
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" onclick="closeErrorModal()">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
    function openErrorModal() {
        $('#errorModal').modal('show');
    }

    function closeErrorModal() {
        $('#errorModal').modal('hide');
    }

    // Call openErrorModal function when there are errors
    @if($errors->any())
        $(document).ready(function() {
            openErrorModal();
        });
    @endif
</script>


	    
    </div><!--//app-wrapper-->    					
	<center>
    <div class="mt-5">
        @if($errors->any())
            <div class="col-12">
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger">{{$error}}</div>
                @endforeach
                <script>
                    // Show error modal if there are errors
                    $(document).ready(function() {
                        $('#errorModal').modal('show');
                    });
                </script>
            </div>
        @endif

        @if(session()->has('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
    </div>
</center>

		
		
		


	    <footer class="app-footer">
		    <div class="container text-center py-3">
		         <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
            <small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart" style="color: #fb866a;"></i> by <a class="app-link" > FuenToCarlina</a> for developers</small>
		       
		    </div>
	    </footer><!--//app-footer-->
	    
    </div><!--//app-wrapper-->    					

 
 
    <!-- Javascript -->          
    <script src="/plugins/popper.min.js"></script>
    <script src="/plugins/bootstrap/js/bootstrap.min.js"></script>  

    <!-- Charts JS -->
    <script src="/plugins/chart.js/chart.min.js"></script> 
    <script src="/js/index-charts.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>

    <!-- Page Specific JS -->
    <script src="/js/app.js"></script> 
	<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

	<script>

function showOtherField() {
		var idType = document.querySelector('select[name="id_type"]').value;
		var otherField = document.getElementById('otherField');
		
		// Show the field if the selected ID type is "Others"
		otherField.style.display = (idType === 'Others') ? 'block' : 'none';
	}

	// Trigger the function on page load and whenever the ID type changes
	document.addEventListener('DOMContentLoaded', function () {
		showOtherField();  // Show/hide on page load
		document.querySelector('select[name="id_type"]').addEventListener('change', showOtherField);  // Show/hide on change
	});
	document.addEventListener("DOMContentLoaded", function () {
        var dateInput = document.getElementById("document_date");

        // Function to check if a date is a weekend day
        function isWeekend(date) {
            var day = date.getDay();
            return day === 0 || day === 6; // 0 is Sunday, 6 is Saturday
        }

        // Function to check if a date is before today
        function isBeforeToday(date) {
            var today = new Date();
            today.setHours(0, 0, 0, 0); // Set hours to 00:00:00 to compare only dates
            return date < today;
        }

        // Disable weekends, holidays, and dates before today
        dateInput.addEventListener("input", function () {
            var selectedDate = new Date(dateInput.value);

            if (isWeekend(selectedDate)) {
                alert("Weekends are not allowed for document pickup.");
                dateInput.value = ""; // Reset the date input
            }

            if (isBeforeToday(selectedDate)) {
                alert("The document pick up date must be today or a future date.");
                dateInput.value = ""; // Reset the date input
            }

            // You can add logic to check for holidays and disable them here
        });
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Add an input event listener to perform real-time validation for the birthday
        document.querySelector('input[name="birthday"]').addEventListener('input', function () {
            validateBirthday(this);
        });

        // Function to validate the birthday
        function validateBirthday(inputElement) {
            var birthdayValue = inputElement.value;
            var isValidDate = isValidBirthday(birthdayValue);

            // Update the validation message
            var feedbackElement = document.querySelector('.birthday-feedback');
            feedbackElement.innerHTML = isValidDate ? '' : 'Invalid birthday';
            feedbackElement.style.color = 'red';
        }

        // Function to check if the entered birthday is valid
        function isValidBirthday(birthday) {
            var enteredDate = new Date(birthday);
            var currentDate = new Date();
            var minimumValidDate = new Date(currentDate);
            minimumValidDate.setFullYear(currentDate.getFullYear() - 15); // Minimum valid age is 15

            return !isNaN(enteredDate.getTime()) && enteredDate <= minimumValidDate;
        }
    });
</script>

</body>
</html> 

