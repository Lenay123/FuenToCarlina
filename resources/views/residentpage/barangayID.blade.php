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
							<a  id="user-dropdown-toggle" href="#" role="button" aria-expanded="false">
								<i class="fas fa-user"></i> {{ auth()->user()->first_name }} {{ auth()->user()->last_name }}
							</a>
						</div>
					</div>
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
			    <div class="app-sidepanel-footer">
				    <nav class="app-nav app-nav-footer">
					    <ul class="app-menu footer-menu list-unstyled">
						    <li class="nav-item">
						        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
						        <a class="nav-link" href="{{ route('residentpage.Account') }}">
							        <span class="nav-icon">
							            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-gear" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
	  <path fill-rule="evenodd" d="M8.837 1.626c-.246-.835-1.428-.835-1.674 0l-.094.319A1.873 1.873 0 0 1 4.377 3.06l-.292-.16c-.764-.415-1.6.42-1.184 1.185l.159.292a1.873 1.873 0 0 1-1.115 2.692l-.319.094c-.835.246-.835 1.428 0 1.674l.319.094a1.873 1.873 0 0 1 1.115 2.693l-.16.291c-.415.764.42 1.6 1.185 1.184l.292-.159a1.873 1.873 0 0 1 2.692 1.116l.094.318c.246.835 1.428.835 1.674 0l.094-.319a1.873 1.873 0 0 1 2.693-1.115l.291.16c.764.415 1.6-.42 1.184-1.185l-.159-.291a1.873 1.873 0 0 1 1.116-2.693l.318-.094c.835-.246.835-1.428 0-1.674l-.319-.094a1.873 1.873 0 0 1-1.115-2.692l.16-.292c.415-.764-.42-1.6-1.185-1.184l-.291.159A1.873 1.873 0 0 1 8.93 1.945l-.094-.319zm-2.633-.283c.527-1.79 3.065-1.79 3.592 0l.094.319a.873.873 0 0 0 1.255.52l.292-.16c1.64-.892 3.434.901 2.54 2.541l-.159.292a.873.873 0 0 0 .52 1.255l.319.094c1.79.527 1.79 3.065 0 3.592l-.319.094a.873.873 0 0 0-.52 1.255l.16.292c.893 1.64-.902 3.434-2.541 2.54l-.292-.159a.873.873 0 0 0-1.255.52l-.094.319c-.527 1.79-3.065 1.79-3.592 0l-.094-.319a.873.873 0 0 0-1.255-.52l-.292.16c-1.64.893-3.433-.902-2.54-2.541l.159-.292a.873.873 0 0 0-.52-1.255l-.319-.094c-1.79-.527-1.79-3.065 0-3.592l.319-.094a.873.873 0 0 0 .52-1.255l-.16-.292c-.892-1.64.902-3.433 2.541-2.54l.292.159a.873.873 0 0 0 1.255-.52l.094-.319z"/>
	  <path fill-rule="evenodd" d="M8 5.754a2.246 2.246 0 1 0 0 4.492 2.246 2.246 0 0 0 0-4.492zM4.754 8a3.246 3.246 0 1 1 6.492 0 3.246 3.246 0 0 1-6.492 0z"/>
	</svg>
							        </span>
			                        <span class="nav-link-text">Settings</span>
						        </a><!--//nav-link-->
					    </ul><!--//footer-menu-->
				    </nav>
					<nav class="app-nav app-nav-footer">
					    <ul class="app-menu footer-menu list-unstyled">
						    <li class="nav-item">
						        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
						        <a class="nav-link" href="{{route('logout')}}">
							        <span class="nav-icon">
										<i class="fa-solid fa-right-from-bracket"></i>
							        </span>
			                        <span class="nav-link-text">Logout</span>
						        </a><!--//nav-link-->
					    </ul><!--//footer-menu-->
				    </nav>
			    </div><!--//app-sidepanel-footer-->
		       
	        </div><!--//sidepanel-inner-->
	    </div><!--//app-sidepanel-->
    </header><!--//app-header-->
    <center>
	<div class="mt-5">
		@if($errors->any())
			<div class="col-12">
				@foreach($errors->all() as $error)
					<div class="alert alert-danger">{{$error}}</div>
				@endforeach
			</div>
		@endif
	
		@if(session()->has('error'))
			<div class="alert alert-danger">{{ session('error') }}</div>
		@endif
	
		@if(session()->has('success'))
			<div class="alert alert-success">{{ session('success') }}</div>
		@endif
	</div>
</center>
    <div class="app-wrapper">
	    
	    <div class="app-content pt-3 p-md-3 p-lg-4">
		    <div class="container-xl">			    
			    <h1 class="app-page-title">Barangay ID</h1>
			    <hr class="mb-4">
                <div class="row g-4 settings-section">
	                <div class="col-12 col-md-4">
		                <h3 class="section-title">General</h3>
		                <div class="section-intro">Settings section intro goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </div>
	                </div>
	                <div class="col-12 col-md-8">
		                <div class="app-card app-card-settings shadow-sm p-4">
						<form class="settings-form" action="{{ route('resident.store') }}" method="POST" enctype="multipart/form-data">
									@csrf
									<div class="form-group">
										<label for="exampleInputName1" class="form-label" >Full name:</label>
										<input type="name" class="form-control" name="full_name" value="" required>
									</div>
									<div class="form-group">
										<label for="Photo" class="form-label">Photo:</label>
										<input type="file" class="form-control" name="image" required>
									</div>
									<div class="form-group">
										<label for="birthday">Birthday:</label>
										<input type="date" class="form-control" name="birthday" required>
									</div>
									<div class="form-group">
										<label for="contact_number">Contact Number:</label>
										<input type="text" class="form-control" name="contact_number" required>
									</div>

									<div class="form-group">
										<label for="address">Address:</label>
										<select class="form-control" name="address" required>
											<option value="Proper Nabunturan Barili Cebu">Proper Nabunturan, Barili, Cebu</option>
											<option value="Sitio San Roque Nabunturan Barili Cebu">Sitio San Roque Nabunturan, Barili, Cebu</option>
											<option value="Sitio Cabinay Nabunturan Barili Cebu">Sitio Cabinay Nabunturan, Barili, Cebu</option>
										</select>
									</div>
									<div class="form-group">
										<label for="civil_status">Civil Status:</label>
										<select class="form-control" name="civil_status" required>
											<option value="Single">Single</option>
											<option value="Married">Married</option>
											<option value="Widowed">Widowed</option>
											<option value="Divorced">Divorced</option>
										</select>
									</div>


									<div class="form-group">
										<label for="civil_status">Gender:</label>
										<select class="form-control" name="gender" required>
											<option value="Male">Male</option>
											<option value="Female">Female</option>
										</select>
									</div>

									<label for="document_type" >Type of Document:</label>
									<select id="document_type" name="document_type" class="form-control">
										<option value="Barangay ID">Barangay ID</option>
									</select> <br>

									<div class="form-group">
										<label for="document_date">Date for Document Pickup:</label>
										<input type="date" class="form-control" name="document_date" required>
										<p style="color: red; font-size: 12px;"><span class="info-icon">&#9432;</span> You cannot claim your requested document during WEEKENDS (Saturday & Sunday) and HOLIDAYS</p>
									</div>

				
									<label for="id_type" >Type of ID:</label>
									<select id="id_type" name="id_type" class="form-control" required>
										<option value="">Select an ID</option>
										<option value="NSO with School ID">NSO with School ID</option>
										<option value="NBI Clearance">NBI Clearance</option>
										<option value="Voters ID">Voters ID</option>
										<option value="Drivers License">Drivers License</option>
										<option value="Voters Certificate">Voters Certificate</option>
										<option value="National ID">National ID</option>
										<option value="SSS">SSS</option>
									</select>
									<div class="description"><p style="color: red; font-size: 12px;"><span class="info-icon">&#9432;</span> Note: Bring this document for verification</p></div> 
				
									<div class="form-group">
										<label for="id_number" >ID Number:</label>
										<input type="text" class="form-control" name="id_number" required>
									</div>
		
									<div class="form-group">
										<label for="purpose" class="form-label" >Purpose:</label>
										<textarea name="purpose" id="purpose" class="form-control" cols="20" rows="2" required></textarea>
										<div class="description">I certify that all information on this form is true and correct. I understand that any incorrect, false, or misleading statement is punishable by law.</div>
		
									</div>
				
									<div class="modal-footer">
									<a href="/residentpage/resident"><button type="button" class="btn btn-secondary">Cancel</button></a>
										<button type="submit" class="btn btn-primary" onclick="return confirm('Are you sure you want to Request this document?');">Request</button>
									</div>
								</form>
						    </div><!--//app-card-body-->
						    
						</div><!--//app-card-->
	                </div>
                </div><!--//row-->
                <hr class="my-4">
		    </div><!--//container-fluid-->
	    </div><!--//app-content-->



	    <footer class="app-footer">
		    <div class="container text-center py-3">
		         <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
            <small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart" style="color: #fb866a;"></i> by <a class="app-link" href="http://themes.3rdwavemedia.com" target="_blank"> FuenToCarlina</a> for developers</small>
		       
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
<script>
	
</script>
</body>
</html> 

