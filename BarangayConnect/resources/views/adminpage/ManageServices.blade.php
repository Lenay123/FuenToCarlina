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
          <a href="/adminpage/ManageServices" class="active">
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
                            <h1 class="h2 mb-0 ls-tight">Barangay Services</h1>
                        </div>
                        <!-- Actions -->
                        <div class="col-sm-6 col-12 text-sm-end">
                            <div class="mx-n1">
                                <a href="/adminpage/add/AddService" class="btn d-inline-flex btn-sm btn-primary mx-1">
                                    <span class=" pe-2">
                                        <i class="bi bi-plus"></i>
                                    </span>
                                    <span>Add New Services</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Nav -->
                    <ul class="nav nav-tabs mt-4 overflow-x border-0">
                        <li class="nav-item">
                            <a href="#" class="nav-link active">All Residents</a>
                        </li>
                    </ul>
                </div>
            </div>
        </header>
<br>
        <article class="we-offer-area text-center bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="site-heading text-center">
                            <h2>Services we <span style="color:blue">Offer</span></h2>
                            <h4>The system will automate the processes and transactions in the barangay.</h4>
                        </div>
                    </div>
                </div>
        </article>  <br><br>

        <div class="team-cards">
            <div class="team-card">
                <img src="/img/image (5).png" alt="User 1">
                <h3>Barangay ID</h3>
                <p>
                    Proof of a one person that is really and true belonging to that particular Barangay.
                </p>
                <div class="card-icons">
                  <a href="/adminpage/edit/EditService" class="icon-link"><i class="fas fa-edit edit-icon"></i></a>
                  <i class="fas fa-trash delete-icon"  data-toggle="modal" data-target="#confirmationModal"></i>
                </div>
                <div class="modal fade" id="confirmationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                              </button>
                          </div>
                          <div class="modal-body">
                              Are you sure you want to proceed?
                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                              <button type="button" class="btn btn-primary">Confirm</button>
                          </div>
                      </div>
                  </div>
            </div>
            </div>
            <div class="team-card">
                <img src="/img/image (5).png" alt="User 1">
                <h3>Barangay ID</h3>
                <p>
                    Proof of a one person that is really and true belonging to that particular Barangay.
                </p>
                <div class="card-icons">
                  <a href="/adminpage/edit/EditService" class="icon-link"><i class="fas fa-edit edit-icon"></i></a>
                  <i class="fas fa-trash delete-icon"  data-toggle="modal" data-target="#confirmationModal"></i>
                </div>
                <div class="modal fade" id="confirmationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                              </button>
                          </div>
                          <div class="modal-body">
                              Are you sure you want to proceed?
                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                              <button type="button" class="btn btn-primary">Confirm</button>
                          </div>
                      </div>
                  </div>
            </div>
            </div>
            <div class="team-card">
                <img src="/img/image (5).png" alt="User 1">
                <h3>Barangay ID</h3>
                <p>
                    Proof of a one person that is really and true belonging to that particular Barangay.
                </p>
                <div class="card-icons">
                  <a href="/adminpage/edit/EditService" class="icon-link"><i class="fas fa-edit edit-icon"></i></a>
                  <i class="fas fa-trash delete-icon"  data-toggle="modal" data-target="#confirmationModal"></i>
                </div>
                <div class="modal fade" id="confirmationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                              </button>
                          </div>
                          <div class="modal-body">
                              Are you sure you want to proceed?
                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                              <button type="button" class="btn btn-primary">Confirm</button>
                          </div>
                      </div>
                  </div>
            </div>
            </div>
            <div class="team-card">
                <img src="/img/image (5).png" alt="User 1">
                <h3>Barangay ID</h3>
                <p>
                    Proof of a one person that is really and true belonging to that particular Barangay.
                </p>
                <div class="card-icons">
                  <a href="/adminpage/edit/EditService" class="icon-link"><i class="fas fa-edit edit-icon"></i></a>
                  <i class="fas fa-trash delete-icon"  data-toggle="modal" data-target="#confirmationModal"></i>
                </div>
                <div class="modal fade" id="confirmationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                              </button>
                          </div>
                          <div class="modal-body">
                              Are you sure you want to proceed?
                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                              <button type="button" class="btn btn-primary">Confirm</button>
                          </div>
                      </div>
                  </div>
            </div>
            </div>
        </div>
        



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
 <script src="/js/adminDash.js"></script>
</body>
</html>