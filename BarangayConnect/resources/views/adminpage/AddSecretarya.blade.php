<!DOCTYPE html>
<!-- Coding by CodingNepal | www.codingnepalweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Barangay Connect </title>
    <link rel="stylesheet" href="/css/Admin.css">
    <link rel="icon" href="{{ asset('img/image (5).png') }}">
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
          <a href="/adminpage/ManageResidents">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Manage Residents</span>
          </a>
        </li>
        <li>
          <a href="/adminpage/ManageServices">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">Manage Services</span>
          </a>
        </li>
        <li>
          <a href="/adminpage/AdminTransaction">
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
    </nav> <br><br><br> <br>

    <div class="mt-5">
            @if($errors->any())
                <div class="col-12">
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger">{{$error}}</div>

                    @endforeach
                </div>
            @endif

            @if(session()->has('error'))
            <div class="alert alert-danger">{{session('error')}}</div>

            @endif

            @if(session()->has('success'))
            <div class="alert alert-success">{{session('success')}}</div>

            @endif
        </div>

    <form style="margin-left: 20px; margin-right: 20px;" class="row g-3" action="{{ route('adminpage.storeSecretary') }}" method="POST" enctype="multipart/form-data">
        @csrf
            <h2 style="background-color: #1074e6; font-size: 15px; color: white;padding: 10px; font-family: 'Poppins'; border: none;border-radius: 15px; ">Personal Details</h2>
            <div class="col-md-6">
              <label for="firstname" class="form-label">First Name:</label>
              <input style=" border: 1px solid rgb(96, 90, 90);"  type="text" class="form-control" name="first_name" required>
            </div>
            <div class="col-md-6">
              <label for="lastname" class="form-label">Last Name:</label>
              <input style=" border: 1px solid rgb(96, 90, 90);" type="text" class="form-control" name="last_name" required>
            </div>
            <div class="col-md-6">
              <label for="lastname" class="form-label">Middle Name:</label>
              <input style=" border: 1px solid rgb(96, 90, 90);" type="text" class="form-control" name="middle_name" required>
            </div>
            <div class="col-md-6">
                <label for="email" class="form-label">Email:</label>
                <input style=" border: 1px solid rgb(96, 90, 90);" type="text" class="form-control" name="email" required>
              </div>
              <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Phone:</label>
                <input style=" border: 1px solid rgb(96, 90, 90);" type="text" class="form-control" name="contact_number" required>
              </div>
              <div class="col-md-6">
                    <label for="address" >Address:</label>
                    <select class="form-control" name="address" required style=" border: 1px solid rgb(96, 90, 90);">
                        <option value="Proper Nabunturan Barili Cebu">Proper Nabunturan, Barili, Cebu</option>
                        <option value="Sitio San Roque Nabunturan Barili Cebu">Sitio San Roque Nabunturan, Barili, Cebu</option>
                        <option value="Sitio Cabinay Nabunturan Barili Cebu">Sitio Cabinay Nabunturan, Barili, Cebu</option>
                    </select>
                </div>
                <div class="col-md-6">
                <label for="birthday">Birthday:</label>
                <input type="date" class="form-control" name="birthday" required  style=" border: 1px solid rgb(96, 90, 90);">
            </div>
                <div class="col-md-6">
                    <label for="gender">Gender:</label>
                    <select class="form-control" name="gender" required style=" border: 1px solid rgb(96, 90, 90);">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>
            <div class="col-md-6">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" name="password" required style=" border: 1px solid rgb(96, 90, 90);">
                </div>

                <div class="col-md-6">
                    <label for="password_confirmation">Confirm Password:</label>
                    <input type="password" class="form-control" name="password_confirmation" required style=" border: 1px solid rgb(96, 90, 90);">
                </div>
            <br><br><br><br>
            <div class="container">
        <div class="row">
            <div class="col-md-12 d-flex"> <!-- For centering content and displaying buttons in a flex container -->
                <div class="col-md-2 col-sm-4 float-left"> <!-- Adjust column size for different screen sizes and align to the left -->
                    <a href="/adminpage/ManageSecretary" class="btn btn-primary btn-block">Cancel</a>
                </div>
                <div class="col-md-2 col-sm-4 float-left"> <!-- Adjust column size for different screen sizes and align to the left -->
                <button type="submit"> <a  class="btn btn-primary btn-block">ADD</a></button>
                </div>
            </div>
        </div>
    </div>
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