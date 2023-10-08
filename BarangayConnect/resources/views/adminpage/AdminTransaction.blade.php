<!DOCTYPE html>
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
          <a href="/adminpage/ManageResidents"  >
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
          <a href="/adminpage/AdminTransaction" class="active">
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
    </nav> <br><br> <br>

    <section>
        <!-- Main content -->
        <section class="main-course">
            <nav class="course-nav">
                <a style="" href="#" class="nav-link" data-section="in-progress">In Progress</a>
                <a href="#" class="nav-link" data-section="pending">Pending</a>
                <a href="#" class="nav-link" data-section="cancelled" >Cancelled</a>
                <a href="#" class="nav-link" data-section="claimed" >Claimed</a>
                <a href="#" class="nav-link" data-section="to-be-claimed">To be Claimed</a>
            </nav> <br><br><br> <br>
            <div class="container" style="max-width: 1200px;margin: 20px auto;padding: 20px;background-color: #fff;border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.4);">
                <div class="table-section active-section" id="in-progress">
                    <h2>In Progress</h2>
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Document</th>
                            </tr>
                        </thead>
                        <tbody>
                           <tr>
                            <td>1</td>
                            <td>Elena</td>
                            <td>Barangay ID</td>
                           </tr>
                        </tbody>
                    </table>
                </div>
                <div class="table-section" id="pending">
                    <h2>Pending</h2>
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Add your table rows for "Pending" here -->
                        </tbody>
                    </table>
                </div>
                <div class="table-section" id="cancelled">
                    <h2>Cancelled</h2>
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Add your table rows for "Cancelled" here -->
                        </tbody>
                    </table>
                </div>
                <div class="table-section" id="claimed">
                    <h2>Claimed</h2>
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Add your table rows for "Claimed" here -->
                        </tbody>
                    </table>
                </div>
                <div class="table-section" id="to-be-claimed">
                    <h2>To be Claimed</h2>
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Add your table rows for "To be Claimed" here -->
                        </tbody>
                    </table>
                </div>
            </div>
          </section>

        <div class="h-screen flex-grow-1 overflow-y-lg-auto">
        <!-- Header -->
        <header class="bg-surface-primary border-bottom pt-6">
            <div class="container-fluid">
                <div class="mb-npx">
                    <div class="row align-items-center">
                        <div class="col-sm-6 col-12 mb-4 mb-sm-0">
                            <!-- Title -->
                            {{-- <h1 class="h2 mb-0 ls-tight">Transactions here...</h1> --}}
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="grid-container">
            <!-- Grid item 1 -->
            <div class="grid-item">
                <div class="design"></div>
                <h2 class="text">Barangay Indigency</h2>
                <p class="text">Click the View below to view transactions</p>
                <button class="viewbutton" data-toggle="modal" data-target="#viewTransactionModal">View</button>
            </div>
    
            <!-- Grid item 2 -->
            <div class="grid-item">
                <div class="design"></div>
                <h2 class="text">Barangay Certificate</h2>
                <p class="text">Click the View below to view transactions</p>
                <button class="viewbutton" data-toggle="modal" data-target="#viewTransactionModal1">View</button>
            </div>

            <div class="grid-item">
                <div class="design"></div>
                <h2 class="text">Barangay Business Permit</h2>
                <p class="text">Click the View below to view transactions</p>
                <button class="viewbutton" data-toggle="modal" data-target="#viewTransactionModal2">View</button>
            </div>
            <div class="grid-item">
                <div class="design"></div>
                <h2 class="text">Barangay ID</h2>
                <p class="text">Click the View below to view transactions</p>
                <button class="viewbutton" data-toggle="modal" data-target="#viewTransactionModal3">View</button>
            </div>
        </div>

        {{-- Barangay Indigency Modal --}}
        <div class="modal fade" id="viewTransactionModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Barangay Indigency Transactions</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" >
                        <table class="table table-bordered" >
                            <thead >
                                <tr >
                                    <th  style="border: 1px solid #111111">Transaction ID</th>
                                    <th  style="border: 1px solid #111111">Date</th>
                                    <th  style="border: 1px solid #111111">Requested Document</th>
                                    <th  style="border: 1px solid #111111">Status</th>
                                    <th  style="border: 1px solid #111111">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>2</td>
                                    <td>2023-09-10</td>
                                    <td>Transaction 2</td>
                                    <td>Barangay Indigency</td>
                                    <td>
                                        <button type="button" class="btn btn-danger btn-sm">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

                {{-- Barangay Certificate Modal --}}
                <div class="modal fade" id="viewTransactionModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Barangay Certificate Transactions</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body" >
                                <table class="table table-bordered" >
                                    <thead >
                                        <tr >
                                            <th  style="border: 1px solid #111111">Transaction ID</th>
                                            <th  style="border: 1px solid #111111">Date</th>
                                            <th  style="border: 1px solid #111111">Status</th>
                                            <th  style="border: 1px solid #111111">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>2</td>
                                            <td>2023-09-10</td>
                                            <td>Transaction 2</td>
                                            <td>
                                                <button type="button" class="btn btn-danger btn-sm">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
           {{-- Barangay Business Permit Modal --}}
           <div class="modal fade" id="viewTransactionModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Barangay Business Permit <br> Transactions</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" >
                        <table class="table table-bordered" >
                            <thead >
                                <tr >
                                    <th  style="border: 1px solid #111111">Transaction ID</th>
                                    <th  style="border: 1px solid #111111">Date</th>
                                    <th  style="border: 1px solid #111111">Status</th>
                                    <th  style="border: 1px solid #111111">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>2</td>
                                    <td>2023-09-10</td>
                                    <td>Transaction 2</td>
                                    <td>
                                        <button type="button" class="btn btn-danger btn-sm">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

                {{-- Barangay ID Modal --}}
                <div class="modal fade" id="viewTransactionModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Barangay ID Transactions</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body" >
                                <table class="table table-bordered" >
                                    <thead >
                                        <tr >
                                            <th  style="border: 1px solid #111111">Transaction ID</th>
                                            <th  style="border: 1px solid #111111">Date</th>
                                            <th  style="border: 1px solid #111111">Status</th>
                                            <th  style="border: 1px solid #111111">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>2</td>
                                            <td>2023-09-10</td>
                                            <td>Transaction 2</td>
                                            <td>
                                                <button type="button" class="btn btn-danger btn-sm">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
        // JavaScript to handle navigation between sections
        const navLinks = document.querySelectorAll('.nav-link');
        const tableSections = document.querySelectorAll('.table-section');

        navLinks.forEach(link => {
            link.addEventListener('click', () => {
                const sectionId = link.getAttribute('data-section');

                tableSections.forEach(section => {
                    section.classList.remove('active-section');
                });

                document.getElementById(sectionId).classList.add('active-section');
            });
        });
 </script>
<script src="/js/adminDash.js"></script>
</body>
</html>