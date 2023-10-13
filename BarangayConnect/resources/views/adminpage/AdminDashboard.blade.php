<!DOCTYPE html>
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
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i><img src="/img/logo.png" alt="" style="margin-top:3px"></i>
      <span class="logo_name">Barangay Connect</span>
    </div>
      <ul class="nav-links" style="margin-left: -14%">
        <li>
          <a href="/adminpage/AdminDashboard" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name" class="active">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="/adminpage/ManageSecretary" >
            <i class='bx bx-box' ></i>
            <span class="links_name" >Manage Secretary</span>
          </a>
        </li>
        <li>
          <a href="/adminpage/ManageResidents">
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
      <!-- <div class="search-box">
        <input type="text" placeholder="Search...">
        <i class='bx bx-search' ></i>
      </div> -->
      <div class="profile-details">
        <img src="images/profile.jpg" alt="">
        <span class="admin_name">Prem Shahi</span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav> <br><br><br>

    <section>
      <main class="py-6 bg-surface-secondary">
            <div class="container-fluid">
                <!-- Card stats -->
                <div class="row g-6 mb-6">
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="card shadow border-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                    <span class="h6 font-semibold text-muted text-sm d-block mb-2">Clearance</span>
    @php
        $barangayIdCount = 0; // Initialize the count to 0
    @endphp
    @foreach ($document_requests as $count)
        @if ($count->document_type === 'Barangay Clearance')
            @php
                $barangayIdCount = $count->count; // Update the count if a record is found
            @endphp
        @endif
    @endforeach
    <span class="h3 font-bold mb-0">{{ $barangayIdCount }}</span>
</div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-tertiary text-white text-lg rounded-circle">
                                            <i class="bi bi-credit-card"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="card shadow border-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                    <span class="h6 font-semibold text-muted text-sm d-block mb-2">Indigency</span>
    @php
        $barangayIdCount = 0; // Initialize the count to 0
    @endphp
    @foreach ($document_requests as $count)
        @if ($count->document_type === 'Barangay Indigency')
            @php
                $barangayIdCount = $count->count; // Update the count if a record is found
            @endphp
        @endif
    @endforeach
    <span class="h3 font-bold mb-0">{{ $barangayIdCount }}</span>
</div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-primary text-white text-lg rounded-circle">
                                            <i class="bi bi-people"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="card shadow border-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                    <span class="h6 font-semibold text-muted text-sm d-block mb-2"> Business Permit</span>
    @php
        $barangayIdCount = 0; // Initialize the count to 0
    @endphp
    @foreach ($document_requests as $count)
        @if ($count->document_type === 'Barangay Business Permit')
            @php
                $barangayIdCount = $count->count; // Update the count if a record is found
            @endphp
        @endif
    @endforeach
    <span class="h3 font-bold mb-0">{{ $barangayIdCount }}</span>
</div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-info text-white text-lg rounded-circle">
                                            <i class="bi bi-clock-history"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="card shadow border-0">
                            <div class="card-body">
                                <div class="row">
                                <div class="col">
    <span class="h6 font-semibold text-muted text-sm d-block mb-2">Barangay ID</span>
    @php
        $barangayIdCount = 0; // Initialize the count to 0
    @endphp
    @foreach ($document_requests as $count)
        @if ($count->document_type === 'Barangay ID')
            @php
                $barangayIdCount = $count->count; // Update the count if a record is found
            @endphp
        @endif
    @endforeach
    <span class="h3 font-bold mb-0">{{ $barangayIdCount }}</span>
</div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-warning text-white text-lg rounded-circle">
                                            <i class="bi bi-minecart-loaded"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="card shadow border-0">
                            <div class="card-body">
                                <div class="row">
                                <div class="col">
    <span class="h6 font-semibold text-muted text-sm d-block mb-2">Barangay Secretary</span>
    <span class="h3 font-bold mb-0">{{ empty($secretary) ? 0 : $secretary }}</span>
</div>

                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-warning text-white text-lg rounded-circle">
                                            <i class="bi bi-person"></i> <!-- Replace with user icon class -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12">
                      <div class="card shadow border-0">
                          <div class="card-body">
                              <div class="row">
                              <div class="col">
    <span class="h6 font-semibold text-muted text-sm d-block mb-2">Barangay Residents</span>
    <span class="h3 font-bold mb-0">{{ $user > 0 ? $user : '0' }}</span>
</div>

                                  <div class="col-auto">
                                      <div class="icon icon-shape bg-warning text-white text-lg rounded-circle">
                                          <i class="bi bi-people"></i> <!-- Replace with multiple users icon class -->
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-xl-3 col-sm-6 col-12">
                      <div class="card shadow border-0">
                          <div class="card-body">
                              <div class="row">
                                  <div class="col">
                                      <span class="h6 font-semibold text-muted text-sm d-block mb-2">Barangay Admin</span>
                                      <span class="h3 font-bold mb-0">{{ $admin > 0 ? $admin : '0' }}</span>
                                  </div>
                                  <div class="col-auto">
                                      <div class="icon icon-shape bg-warning text-white text-lg rounded-circle">
                                          <i class="bi bi-person-fill"></i> <!-- Replace with secret user icon class -->
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>

                </div>
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
<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

</body>
</html>