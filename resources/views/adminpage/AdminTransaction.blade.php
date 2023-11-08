<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Barangay Connect </title>
    <link rel="stylesheet" href="/css/Admin.css">
    <link rel="icon" href="{{ asset('img/image (5).png') }}">
    <!-- Boxicons CDN Link -->
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <style>
    .table {
        border-width: 2px; /* Adjust this value as needed */
    }
</style>

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
    <header class="bg-surface-primary border-bottom pt-6">
            <div class="container-fluid">
                <div class="mb-npx">
                    <!-- Nav -->
                    <ul class="nav nav-tabs mt-4 overflow-x border-0">
                        <li class="nav-item">
                            <a href="#" class="nav-link active">All Transactions</a>
                        </li>
                    </ul>
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

        <header class="bg-surface-primary border-bottom pt-6">
            <div class="container-fluid">
                <div class="mb-npx">
                    <!-- Nav -->
                    <ul class="nav nav-tabs mt-4 overflow-x border-0">
                        <li class="nav-item">
                            <a href="#" class="nav-link active">All Pending Requests</a>
                        </li>
                    </ul>
                </div>
            </div>
        </header>
        <table class="table table-bordered table-hover table-nowrap">
    <thead class="thead-light">
        <tr>
            <th scope="col" class="text-center">ID</th>
            <th scope="col" class="text-center">Fullname</th>
            <th scope="col" class="text-center">Date Requested</th>
            <th scope="col" class="text-center">Reference Number</th>
            <th scope="col" class="text-center">Document Requested</th>
            <th scope="col" class="text-center">Action</th>
        </tr>
    </thead>
    <tbody>
    @forelse ($document_requests1 as $request)
        @if ($request->status == 'Pending')
            <tr>
                <td>{{ $request->id }}</td>
                <td>{{ $request->full_name }}</td>
                <td>{{ $request->created_at }}</td>
                <td>{{ $request->tracker_number }}</td>
                <td>{{ $request->document_type }}</td>
                <td class="text-end">
                    <div class="d-flex align-items-center">
                    <form action="{{ route('adminpage.deleteTransaction', $request->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-sm btn-square btn-neutral text-danger-hover" onclick="return confirm('Are you sure you want to delete this document request?');">
            <i class="bi bi-trash"></i>
        </button>
    </form>
                    </div>
                </td>
            </tr>
        @endif
    @empty
        <tr>
            <td colspan="6">No data found</td>
        </tr>
    @endforelse
    </tbody>
</table>


<header class="bg-surface-primary border-bottom pt-6">
            <div class="container-fluid">
                <div class="mb-npx">
                    <!-- Nav -->
                    <ul class="nav nav-tabs mt-4 overflow-x border-0">
                        <li class="nav-item">
                            <a href="#" class="nav-link active">All In Progress Requests</a>
                        </li>
                    </ul>
                </div>
            </div>
        </header>
        <table class="table table-bordered table-hover table-nowrap">
    <thead class="thead-light">
        <tr>
            <th scope="col" class="text-center">ID</th>
            <th scope="col" class="text-center">Fullname</th>
            <th scope="col" class="text-center">Date Requested</th>
            <th scope="col" class="text-center">Reference Number</th>
            <th scope="col" class="text-center">Document Requested</th>
            <th scope="col" class="text-center">Action</th>
        </tr>
    </thead>
    <tbody>
    @forelse ($document_requests3 as $request)
        @if ($request->status == 'In Progress')
            <tr>
                <td>{{ $request->id }}</td>
                <td>{{ $request->full_name }}</td>
                <td>{{ $request->created_at }}</td>
                <td>{{ $request->tracker_number }}</td>
                <td>{{ $request->document_type }}</td>
                <td class="text-end">
                    <div class="d-flex align-items-center">
                    <form action="{{ route('adminpage.deleteTransaction', $request->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-sm btn-square btn-neutral text-danger-hover" onclick="return confirm('Are you sure you want to delete this document request?');">
            <i class="bi bi-trash"></i>
        </button>
    </form>
                    </div>
                </td>
            </tr>
        @endif
    @empty
        <tr>
            <td colspan="6">No data found</td>
        </tr>
    @endforelse
</tbody>

</table>


<header class="bg-surface-primary border-bottom pt-6">
            <div class="container-fluid">
                <div class="mb-npx">
                    <!-- Nav -->
                    <ul class="nav nav-tabs mt-4 overflow-x border-0">
                        <li class="nav-item">
                            <a href="#" class="nav-link active">All Cancelled Requests</a>
                        </li>
                    </ul>
                </div>
            </div>
        </header>
        <table class="table table-bordered table-hover table-nowrap">
    <thead class="thead-light">
        <tr>
            <th scope="col" class="text-center">ID</th>
            <th scope="col" class="text-center">Fullname</th>
            <th scope="col" class="text-center">Date Requested</th>
            <th scope="col" class="text-center">Reference Number</th>
            <th scope="col" class="text-center">Document Requested</th>
            <th scope="col" class="text-center">Action</th>
        </tr>
    </thead>
    <tbody>
    @forelse ($document_requests2 as $request)
        @if ($request->status == 'cancelled')
            <tr>
                <td>{{ $request->id }}</td>
                <td>{{ $request->full_name }}</td>
                <td>{{ $request->created_at }}</td>
                <td>{{ $request->tracker_number }}</td>
                <td>{{ $request->document_type }}</td>
                <td class="text-end">
                    <div class="d-flex align-items-center">
                    <form action="{{ route('adminpage.deleteTransaction', $request->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-sm btn-square btn-neutral text-danger-hover" onclick="return confirm('Are you sure you want to delete this document request?');">
            <i class="bi bi-trash"></i>
        </button>
    </form>
                    </div>
                </td>
            </tr>
        @endif
    @empty
        <tr>
            <td colspan="4">No data found</td>
        </tr>
    @endforelse
</tbody>
</table>
<header class="bg-surface-primary border-bottom pt-6">
            <div class="container-fluid">
                <div class="mb-npx">
                    <!-- Nav -->
                    <ul class="nav nav-tabs mt-4 overflow-x border-0">
                        <li class="nav-item">
                            <a href="#" class="nav-link active">All Claimed Requests</a>
                        </li>
                    </ul>
                </div>
            </div>
        </header>
        <table class="table table-bordered table-hover table-nowrap">
    <thead class="thead-light">
        <tr>
            <th scope="col" class="text-center">ID</th>
            <th scope="col" class="text-center">Fullname</th>
            <th scope="col" class="text-center">Date Requested</th>
            <th scope="col" class="text-center">Reference Number</th>
            <th scope="col" class="text-center">Document Requested</th>
            <th scope="col" class="text-center">Action</th>
        </tr>
    </thead>
    <tbody>
    @forelse ($document_requests4 as $request)
        @if ($request->status == 'Claimed')
            <tr>
                <td>{{ $request->id }}</td>
                <td>{{ $request->full_name }}</td>
                <td>{{ $request->created_at }}</td>
                <td>{{ $request->tracker_number }}</td>
                <td>{{ $request->document_type }}</td>
                <td class="text-end">
                    <div class="d-flex align-items-center">
                    <form action="{{ route('adminpage.deleteTransaction', $request->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-sm btn-square btn-neutral text-danger-hover" onclick="return confirm('Are you sure you want to delete this document request?');">
            <i class="bi bi-trash"></i>
        </button>
    </form>
                    </div>
                </td>
            </tr>
        @endif
    @empty
        <tr>
            <td colspan="4">No data found</td>
        </tr>
    @endforelse
</tbody>
</table> <br><br>


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