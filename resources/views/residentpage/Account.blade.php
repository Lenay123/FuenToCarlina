<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Barangay Connect</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="{{ asset('img/image (5).png') }}">
    <meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
    <link rel="shortcut icon" href="favicon.ico"> 
    
    <!-- FontAwesome JS-->
    <script defer src="/plugins/fontawesome/js/all.min.js"></script>
    
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
							<img  src="{{ asset('image/' . auth()->user()->image) }}" style="max-width: 200px; max-height: 200px; margin-bottom: 10px; border-radius: 50%;">
{{ auth()->user()->first_name }} {{ auth()->user()->last_name }}
							</a>
						</div>
					</div>
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
			    <div class="app-sidepanel-footer">
				    <nav class="app-nav app-nav-footer">
					    <ul class="app-menu footer-menu list-unstyled">
						    <li class="nav-item">
						        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
						        <a class="nav-link active" href="">
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
						        <a class="nav-link"  onclick="return confirm('Are you sure you want to Logout?');" href="{{route('logout')}}">
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
	
    <div class="app-wrapper">
	    @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
	    <div class="app-content pt-3 p-md-3 p-lg-4">
		    <div class="container-xl">			    
			    <h1 class="app-page-title">Account Settings</h1>
			    <hr class="mb-4">
                <div class="row g-4 settings-section">
	                <div class="col-12 col-md-4">
		                <h3 class="section-title">General</h3>
		                <div class="section-intro">Your profile is your canvas; every edit is a stroke of self-expression, a step towards crafting the masterpiece of your digital presence.</div>
					<br>
						<div class="card" id="profileCard">
							<div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
							
							<img  src="{{ asset('image/' . auth()->user()->image) }}" alt="Profile" style="width:100%; height:300px"> <br>
							<h3>{{ auth()->user()->first_name }} {{ auth()->user()->middle_name }} {{ auth()->user()->last_name }}</h3>
							<p>Barangay Resident</p>
							
							</div>
						</div>
					
					</div>
	                <div class="col-12 col-md-8">
		                <div class="app-card app-card-settings shadow-sm p-4">
						    
						    <div class="app-card-body">

								<div >

									  <div class="card-body pt-3">
										<!-- Bordered Tabs -->
										<ul class="nav nav-tabs ">
						  
										  <li class="nav-item">
											<button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview" onclick="showProfileCard()">Overview</button>
										  </li>
						  
										  <li class="nav-item">
											<button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit" onclick="hideProfileCard()">Edit Profile & Change Password</button>
										  </li>
						  
						
						  
										</ul>
										<div class="tab-content pt-2">
						  
										  <div class="tab-pane fade show active profile-overview" id="profile-overview">
											<h5 class="card-title">About</h5>
											<p class="small fst-italic">"Elevate Your Profile: Transform your details and shape your identity. Empower the narrative of who you are with every update, crafting a dynamic and evolving reflection of yourself."</p>
						  
											<h5 class="card-title">Profile Details</h5>
						  
											<div class="row">
											  <div class="col-lg-3 col-md-4 label ">Firstname:</div>
											  <div class="col-lg-9 col-md-8">{{ auth()->user()->first_name }} </div>
											</div>
											<div class="row">
												<div class="col-lg-3 col-md-4 label ">Middlename:</div>
												<div class="col-lg-9 col-md-8">{{ auth()->user()->middle_name }} </div>
											  </div>
											  <div class="row">
												<div class="col-lg-3 col-md-4 label ">Lastname:</div>
												<div class="col-lg-9 col-md-8"> {{ auth()->user()->last_name }} </div>
											  </div>
											  <div class="row">
												<div class="col-lg-3 col-md-4 label ">Birthday:</div>
												<div class="col-lg-9 col-md-8">
													{{ \Carbon\Carbon::createFromFormat('Y-m-d', auth()->user()->birthday)->format('F j, Y') }}
												</div>
												
												</div>
											
											<div class="row">
											  <div class="col-lg-3 col-md-4 label">Address:</div>
											  <div class="col-lg-9 col-md-8">{{ auth()->user()->address }}</div>
											</div>
						  
											<div class="row">
											  <div class="col-lg-3 col-md-4 label">Email:</div>
											  <div class="col-lg-9 col-md-8">{{ auth()->user()->email }}</div>
											</div>
						  
											<div class="row">
											  <div class="col-lg-3 col-md-4 label">Gender</div>
											  <div class="col-lg-9 col-md-8">{{ auth()->user()->gender }}</div>
											</div>
						  
											<div class="row">
											  <div class="col-lg-3 col-md-4 label">Contact Number:</div>
											  <div class="col-lg-9 col-md-8">{{ auth()->user()->contact_number }}</div>
											</div>
						  
										
										  </div>
										  @if ($errors->any())
										  <div class="alert alert-danger">
											  <ul>
												  @foreach ($errors->all() as $error)
													  <li>{{ $error }}</li>
												  @endforeach
											  </ul>
										  </div>
									  @endif
										  <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
						  
											<!-- Profile Edit Form -->
											<form class="settings-form" method="POST" action="{{ route('residentpage.updateProfile') }}" enctype="multipart/form-data">
												@csrf
												<div class="row mb-3">
													<label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
													<div class="col-md-8 col-lg-9">
														<img id="image" src="{{ asset('image/' . auth()->user()->image) }}" style="width:70%; height:300px" alt="Profile">
														<div class="pt-2">
															<a href="#" class="btn btn-primary btn-sm" title="Upload new profile image" onclick="document.getElementById('fileInput').click();"><i class="fas fa-upload"></i></a>
															<input type="file" id="fileInput" name="image" style="display: none;" onchange="previewImage(this);">
															<button type="submit" class="btn btn-success btn-sm" title="Save"><i class="fas fa-save"></i> Save</button>
														</div>
													</div>
												</div>
											  <div class="row mb-3">
												<label for="fullName" class="col-md-4 col-lg-3 col-form-label">Firstname:</label>
												<div class="col-md-8 col-lg-9">
													<input type="text" class="form-control" id="fname" name="first_name" value="{{ auth()->user()->first_name }}" required>												</div>
											  </div>
						  
						  
											  <div class="row mb-3">
												<label for="company" class="col-md-4 col-lg-3 col-form-label">Lastname:</label>
												<div class="col-md-8 col-lg-9">
													<input type="text" class="form-control" id="lname" name="last_name" value="{{ auth()->user()->last_name }}" required>												</div>
											  </div>
						  
											  <div class="row mb-3">
												<label for="Job" class="col-md-4 col-lg-3 col-form-label">Middlename:</label>
												<div class="col-md-8 col-lg-9">
													<input type="text" class="form-control" id="mname" name="middle_name" value="{{ auth()->user()->middle_name }}" required>												</div>
											  </div>
						  
											  <div class="row mb-3">
												<label for="Country" class="col-md-4 col-lg-3 col-form-label">Email:</label>
												<div class="col-md-8 col-lg-9">

													<input type="email" class="form-control" id="email" name="email" value="{{ auth()->user()->email }}" required>												</div>
											  </div>

						  
											  <div class="row mb-3">
												<label for="Phone" class="col-md-4 col-lg-3 col-form-label">Contact Number</label>
												<div class="col-md-8 col-lg-9">
													<input type="number" class="form-control" name="contact_number" value="{{ auth()->user()->contact_number }}" required>										</div>
											  </div>
						  
											  <div class="row mb-3">
												<label for="Email" class="col-md-4 col-lg-3 col-form-label">Gender</label>
												<div class="col-md-8 col-lg-9">
													<select class="form-control" name="gender" required >
														<option value="male" @if (auth()->user()->gender === 'male') selected @endif>Male</option>
														<option value="female" @if (auth()->user()->gender === 'female') selected @endif>Female</option>
													</select>												</div>
											  </div>
						  						  
											  <div class="row mb-3">
												<label for="Address" class="col-md-4 col-lg-3 col-form-label">Address</label>
												<div class="col-md-8 col-lg-9">
													<select class="form-control" name="address" required>
														<option value="Proper Nabunturan Barili Cebu" @if (auth()->user()->address === 'Proper Nabunturan Barili Cebu') selected @endif>Proper Nabunturan, Barili, Cebu</option>
														<option value="Sitio San Roque Nabunturan Barili Cebu" @if (auth()->user()->address === 'Sitio San Roque Nabunturan Barili Cebu') selected @endif>Sitio San Roque Nabunturan, Barili, Cebu</option>
														<option value="Sitio Cabinay Nabunturan Barili Cebu" @if (auth()->user()->address === 'Sitio Cabinay Nabunturan Barili Cebu') selected @endif>Sitio Cabinay Nabunturan, Barili, Cebu</option>
													</select>
												</div>
											</div>
											<div class="row mb-3">
												<label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
												<div class="col-md-8 col-lg-9">
													<input name="current_password" type="password" class="form-control" id="currentPassword">
												</div>
											</div>
									
											<div class="row mb-3">
												<label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
												<div class="col-md-8 col-lg-9">
													<input name="password" type="password" class="form-control" id="newPassword">
												</div>
											</div>
									
											<div class="row mb-3">
												<label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
												<div class="col-md-8 col-lg-9">
													<input name="password_confirmation" type="password" class="form-control" id="renewPassword">
												</div>
											</div>
						  
											  <div class="text-center">
												<button type="submit" class="btn btn-primary">Save Changes</button>
											  </div>
											</form><!-- End Profile Edit Form -->
						  
										  </div>
										</div>
									

									
						  
										</div><!-- End Bordered Tabs -->
						  
									  </div>
									</div>

						    </div><!--//app-card-body-->
						    
						</div><!--//app-card-->
	                </div>
                </div><!--//row-->
                <hr class="my-4">
		    </div><!--//container-fluid-->
	    </div>




		
		<!--//app-content-->
	    
	    <footer class="app-footer">
		    <div class="container text-center py-3">
		         <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
            <small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart" style="color: #fb866a;"></i> by <a class="app-link" href="http://themes.3rdwavemedia.com" target="_blank">Xiaoying Riley</a> for developers</small>
		       
		    </div>
	    </footer><!--//app-footer-->
	    
    </div><!--//app-wrapper-->    					

 
    <!-- Javascript -->          
    <script src="/plugins/popper.min.js"></script>
    <script src="/plugins/bootstrap/js/bootstrap.min.js"></script>  
    
    <!-- Page Specific JS -->
    <script src="/js/app.js"></script> 
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.password-toggle').click(function() {
                var inputField = $(this).prev('input[type="password"]');
                var isPassword = inputField.attr('type') === 'password';

                if (isPassword) {
                    inputField.attr('type', 'text');
                    $(this).children('i').removeClass('fa-eye').addClass('fa-eye-slash');
                } else {
                    inputField.attr('type', 'password');
                    $(this).children('i').removeClass('fa-eye-slash').addClass('fa-eye');
                }
            });
        });

  // Add an event listener to the file input to update the displayed file name
  document.getElementById('fileInput').addEventListener('change', function() {
    const fileName = this.files[0].name;
    document.getElementById('fileName').innerText = fileName;
  });
  function showProfileCard() {
        var card = document.getElementById('profileCard');
        if (card) {
            card.style.display = 'block'; // Set display to 'block' to show the card
        }
    }

    function hideProfileCard() {
        var card = document.getElementById('profileCard');
        if (card) {
            card.style.display = 'none'; // Set display to 'none' to hide the card
        }
    }

	function previewImage(input) {
        var reader = new FileReader();

        reader.onload = function (e) {
            document.getElementById('image').src = e.target.result;
        };

        reader.readAsDataURL(input.files[0]);
    }


    </script>
	
</body>
</html> 

