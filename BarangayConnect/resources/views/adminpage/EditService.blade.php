<!DOCTYPE html>
<!-- Coding by CodingNepal | www.codingnepalweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Barangay Connect </title>
    <link rel="stylesheet" href="/css/Admin.css">
    <!-- Boxicons CDN Link -->
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i><img src="/img/logo.png" alt="" style="margin-top:3px"></i>
      <span class="logo_name">Barangay Connect</span>
    </div>
      <ul class="nav-links" style="margin-left: -14%">
        <li>
          <a href="/adminpage/AdminDashboard" >
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="/adminpage/ManageSecretary">
            <i class='bx bx-box' ></i>
            <span class="links_name">Manage Secretary</span>
          </a>
        </li>
        <li>
          <a href="/adminpage/ManageResidents"  class="active">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Manage Residents</span>
          </a>
        </li>
        <li>
          <a href="{{ route('adminpage.index') }}">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">Manage Services</span>
          </a>
        </li>
        <li>
          <a href="">
            <i class='bx bx-coin-stack' ></i>
            <span class="links_name">View Transactions</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-book-alt' ></i>
            <span class="links_name">Logout</span>
          </a>
        </li>

      </ul>
  </div>

  <section class="home-section">
    <nav>
      <div class="sidebar-button" style="color: black">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
      <div class="search-box">
        <input type="text" placeholder="Search...">
        <i class='bx bx-search' ></i>
      </div>
      <div class="profile-details">
        <img src="images/profile.jpg" alt="">
        <span class="admin_name">Prem Shahi</span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav> <br><br><br> <br><br>
    <section>
    @if ($errors->any())
        <div class="alert alert-danger">
        There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="" method="POST" enctype="multipart/form-data" style="margin-left: 20px;margin-right: 20px;" class="row g-3">
        <h2 style="background-color: #1074e6; font-size: 15px; color: white;padding: 10px; font-family: 'Poppins'; border: none;border-radius: 15px; ">Service Details</h2>
			<div class="col-md-6">
			  <label for="firstname" class="form-label">Service Name:</label>
			  <input style=" border: 1px solid rgb(96, 90, 90);" type="text" class="form-control" name="name" value="{{ $service->name }}" required>
			</div>
			<div class="col-md-6">
				<label for="Photo" class="form-label">Photo:</label>
				<input style=" border: 1px solid rgb(96, 90, 90);" type="file" class="form-control" name="image"  required>
        <img src="/image/{{ $service->image }}" width="300px">
			</div>
			<div class="col-md-12">
				<label for="serviceDescription" class="form-label">Service Description:</label>
				<textarea style=" border: 1px solid rgb(96, 90, 90);" class="form-control" name="detail" rows="5" required>{{ $service->detail }}</textarea>
			</div>
			<div style="margin-left: 35%;margin-bottom: 2px;" class="col-md-2">
				<a href="{{ route('adminpage.index') }}" class="btn btn-primary" >Cancel</a>
                <button type="submit" class="btn btn-primary">Update</button>
			</div>
			
			</div>
		</form>
   
        </section>

<script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}

 </script>
</body>
</html>