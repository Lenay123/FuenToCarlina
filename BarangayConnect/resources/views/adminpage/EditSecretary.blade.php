<!DOCTYPE html>
<!-- Coding by CodingNepal | www.codingnepalweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Barangay Connect </title>
    <link rel="stylesheet" href="/css/Admin.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
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
          <a href="/adminpage/ManageSecretary" class="active">
            <i class='bx bx-box' ></i>
            <span class="links_name" class="active">Manage Secretary</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Manage Residents</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">Manage Services</span>
          </a>
        </li>
        <li>
          <a href="#">
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
    </nav> <br><br><br>

    <form style="margin-left: 20px;margin-right: 20px;" class="row g-3">
        <h2 style="background-color: #1074e6; font-size: 15px; padding: 10px; font-family: 'Poppins'; border: none;border-radius: 15px; ">Personal Details</h2>
        <div class="col-md-6">
          <label for="firstname" class="form-label">First Name:</label>
          <input  type="text" class="form-control" id="firstname" required>
        </div>
        <div class="col-md-6">
          <label for="lastname" class="form-label">Last Name:</label>
          <input type="text" class="form-control" id="lastname" required>
        </div>
        <div class="col-md-6">
            <label for="email" class="form-label">Email:</label>
            <input type="text" class="form-control" id="email" required>
          </div>
          <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Phone:</label>
            <input type="text" class="form-control" id="inputPassword4" required>
          </div>
        <div class="col-md-6">
          <label for="inputAddress" class="form-label">Address:</label>
          <input type="text" class="form-control" id="inputAddress" placeholder="Place your address here" required>
        </div>
        <div class="col-md-6">
          <label for="Photo" class="form-label">Photo:</label>
          <input type="file" class="form-control" id="Photo" required>
        </div>
        <div class="col-md-6">
          <label for="dateOfBirth" class="form-label">Date of Birth:</label>
          <input type="date" class="form-control" id="dateOfBirth" required>
        </div>
        <div class="col-md-6">
            <label for="placeOfBirth" class="form-label">Place of Birth:</label>
            <input type="text" class="form-control" id="placeOfBirth" required>
        </div>
        <br><br><br><br>
        <h2 style="background-color: #1074e6; font-size: 15px; color: white;padding: 10px; font-family: 'Poppins'; border: none;border-radius: 15px; ">Education</h2>
        <div class="col-md-6">
            <label for="dateOfBirth" class="form-label">University:</label>
            <input type="text" class="form-control" id="dateOfBirth" required>
        </div>
        <div class="col-md-6">
            <label for="placeOfBirth" class="form-label">Degree:</label>
            <input type="text" class="form-control" id="placeOfBirth" required>
        </div>
        <div class="col-md-3">
            <label for="startDate" class="form-label">Start Date:</label>
            <input type="date" class="form-control" id="startDate" required>
        </div>
        <div class="col-md-3">
            <label for="endDate" class="form-label">End Date:</label>
            <input type="date" class="form-control" id="endDate" required>
        </div>
        <div class="col-md-6">
            <label for="placeOfBirth" class="form-label">City:</label>
            <input type="text" class="form-control" id="placeOfBirth" required>
        </div>
        <center>
        <div  class="col-md-2">
            <a href="" class="btn btn-primary">Cancel</a>
            <a href="" class="btn btn-primary">UPDATE</a>
        </div>
    </center>
      </form>

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