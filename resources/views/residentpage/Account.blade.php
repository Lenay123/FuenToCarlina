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
    

	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">


	<!-- App CSS -->  
	<link id="theme-style" rel="stylesheet" href="/css/portal.css">
	
	</head> 
	<style>
	body {
		font-family: 'Poppins', sans-serif;
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
							<img src="{{ asset('image/' . auth()->user()->image) }}" style="max-width: 200px; max-height: 200px; margin-bottom: 10px; border-radius: 50%;">
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
		            <a class="app-logo" href="index.html"><img class="logo-icon me-2" src="{{ asset('img/image (5).png') }}" alt="logo"><span class="logo-text" style="font-size:1rem">Barangay Connect</span></a>
	
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
											  <div class="col-lg-9 col-md-8" >{{ auth()->user()->first_name }} </div>
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
													<input type="text" class="form-control" id="fname" name="first_name" value="{{ auth()->user()->first_name }}" required style="border: 0.5px solid #B0AEAE;">												</div>
											  </div>
						  
						  
											  <div class="row mb-3">
												<label for="company" class="col-md-4 col-lg-3 col-form-label">Lastname:</label>
												<div class="col-md-8 col-lg-9">
													<input type="text" class="form-control" id="lname" name="last_name" value="{{ auth()->user()->last_name }}" required style="border: 0.5px solid #B0AEAE;">												</div>
											  </div>
						  
											  <div class="row mb-3">
												<label for="Job" class="col-md-4 col-lg-3 col-form-label">Middlename:</label>
												<div class="col-md-8 col-lg-9">
													<input type="text" class="form-control" id="mname" name="middle_name" value="{{ auth()->user()->middle_name }}" required style="border: 0.5px solid #B0AEAE;">												</div>
											  </div>
						  
											  <div class="row mb-3">
												<label for="Country" class="col-md-4 col-lg-3 col-form-label">Email:</label>
												<div class="col-md-8 col-lg-9">

													<input type="email" class="form-control" id="email" name="email" value="{{ auth()->user()->email }}" required style="border: 0.5px solid #B0AEAE;">												</div>
											  </div>

											  <div class="row mb-3">
													<label for="Phone" class="col-md-4 col-lg-3 col-form-label">Contact Number</label>
													<div class="col-md-8 col-lg-9">
														<input type="number" class="form-control" name="contact_number" value="{{ auth()->user()->contact_number }}" required style="border: 0.5px solid #B0AEAE;">
														<!-- Add a new div for validation feedback -->
														<div class="text-danger contact-number-feedback"></div>
													</div>
												</div>

						  
											  <div class="row mb-3">
												<label for="Email" class="col-md-4 col-lg-3 col-form-label">Gender</label>
												<div class="col-md-8 col-lg-9">
													<select class="form-control" name="gender" required style="border: 0.5px solid #B0AEAE;">
														<option value="male" @if (auth()->user()->gender === 'male') selected @endif>Male</option>
														<option value="female" @if (auth()->user()->gender === 'female') selected @endif>Female</option>
													</select>												</div>
											  </div>
						  						  
											  <div class="row mb-3">
												<label for="Address" class="col-md-4 col-lg-3 col-form-label">Address</label>
												<div class="col-md-8 col-lg-9">
													<select class="form-control" name="address" required style="border: 0.5px solid #B0AEAE;">
														<option value="Proper Nabunturan Barili Cebu" @if (auth()->user()->address === 'Proper Nabunturan Barili Cebu') selected @endif>Proper Nabunturan, Barili, Cebu</option>
														<option value="Sitio San Roque Nabunturan Barili Cebu" @if (auth()->user()->address === 'Sitio San Roque Nabunturan Barili Cebu') selected @endif>Sitio San Roque Nabunturan, Barili, Cebu</option>
														<option value="Sitio Cabinay Nabunturan Barili Cebu" @if (auth()->user()->address === 'Sitio Cabinay Nabunturan Barili Cebu') selected @endif>Sitio Cabinay Nabunturan, Barili, Cebu</option>
													</select>
												</div>
											</div>
											<div class="row mb-3">
												<label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
												<div class="col-md-8 col-lg-9">
													<input name="current_password" type="password" class="form-control" id="currentPassword"  style="border: 0.5px solid #B0AEAE;">
												</div>
											</div>
									
											<div class="row mb-3">
												<label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
												<div class="col-md-8 col-lg-9">
													<input name="password" type="password" class="form-control" id="newPassword"  style="border: 0.5px solid #B0AEAE;">
												</div>
											</div>
									
											<div class="row mb-3">
												<label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
												<div class="col-md-8 col-lg-9">
													<input name="password_confirmation" type="password" class="form-control" id="renewPassword"  style="border: 0.5px solid #B0AEAE;">
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
            <small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart" style="color: #fb866a;"></i> by <a class="app-link" >FuenToCarLina</a> for developers</small>
		       
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
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Add an input event listener to perform real-time validation for the contact number
        document.querySelector('input[name="contact_number"]').addEventListener('input', function () {
            validateContactNumber(this);
        });

        // Function to validate the contact number
        function validateContactNumber(inputElement) {
            var contactNumber = inputElement.value;

            // Use the provided function to validate the phone number
            var isValidFormat = validatePhoneNumber(contactNumber);

            // Update the validation message
            var feedbackElement = inputElement.nextElementSibling;
            feedbackElement.innerHTML = isValidFormat ? '' : 'Invalid phone number format';
            feedbackElement.style.color = 'red';
        }

        // Function to validate the phone number format
        function validatePhoneNumber(input_str) {
            var re = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;
            return re.test(input_str);
        }
    });
</script>


	
</body>
</html> 

