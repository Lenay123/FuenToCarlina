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
    </nav> <br><br><br>

    <section>
        <!-- Main content -->
        <div class="h-screen flex-grow-1 overflow-y-lg-auto">
        <!-- Header -->
        <header class="bg-surface-primary border-bottom pt-6">
            <div class="container-fluid">
                <div class="mb-npx">
                    <div class="row align-items-center">
                        <div class="col-sm-6 col-12 mb-4 mb-sm-0">
                            <!-- Title -->
                            <h1 class="h2 mb-0 ls-tight">Barangay Secretary</h1>
                        </div>
                        <!-- Actions -->
                        <div class="col-sm-6 col-12 text-sm-end">
                            <div class="mx-n1">
                                <a href="/adminpage/AddSecretary" class="btn d-inline-flex btn-sm btn-primary mx-1">
                                    <span class=" pe-2">
                                        <i class="bi bi-plus"></i>
                                    </span>
                                    <span>Add New Secretary</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Nav -->
                    <ul class="nav nav-tabs mt-4 overflow-x border-0">
                        <li class="nav-item">
                            <a href="#" class="nav-link active">All Secretaries</a>
                        </li>
                    </ul>
                </div>
            </div>
        </header>
             @if(session('success'))
       <div class="alert alert-success">
              {{ session('success') }}
       </div>
   @endif
   <table class="table table-bordered table-hover table-nowrap">
    <thead class="thead-light">
        <tr>
            <th scope="col" class="text-center">ID</th>
            <th scope="col" class="text-center">Fullname</th>
            <th scope="col" class="text-center">Date Created</th>
            <th scope="col" class="text-center">Sitio/Purok</th>
            <th scope="col" class="text-center">Action</th>
        </tr>
    </thead>
    <tbody>
    @if($secretaries->count() > 0)
        @foreach ($secretaries as $secretary)
        <tr>
            <td>{{$secretary->id}}</td>
            <td>{{$secretary->first_name}} {{$secretary->last_name}}</td>
            <td>{{$secretary->created_at}}</td>
            <td>{{$secretary->address}}</td>

            <td class="text-end">
    <div class="d-flex align-items-center">
        <a href="{{ route('adminpage.editSecretary', ['id' => $secretary->id]) }}" class="btn btn-sm btn-neutral me-2">
            <i class="bi bi-pencil"></i> <!-- Assuming "bi-pencil" is the class for your edit icon -->
        </a>
        <form action="{{ route('adminpage.deleteSecretary', ['id' => $secretary->id]) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-sm btn-square btn-neutral text-danger-hover" onclick="return confirm('Are you sure you want to delete this secretary?');">
                <i class="bi bi-trash"></i>
            </button>
        </form>
    </div>
</td>

</form>
            </td>
        </tr>
        @endforeach
    @else
        <tr>
            <td colspan="5">There are no Secretaries.</td>
        </tr>
    @endif
</tbody>

</table>

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