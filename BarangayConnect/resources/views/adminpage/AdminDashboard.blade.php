<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Barangay Connect </title>
    <link rel="stylesheet" href="/css/dashboard.css">
    
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i><img src="/img/logo.png" alt=""></i>
      <span class="logo_name">Barangay Connect</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="/adminpage/AdminDashboard" class="active">
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
      <div class="sidebar-button">
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
    </nav>

    <div class="home-content">
      <div class="overview-boxes">
        <div class="box" style=" background-color: #31323364;">
          <div class="right-side">
            <div class="box-topic">Total Users</div>
            <div class="number">1,000</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">January 2023</span>
            </div>
          </div>
          <box-icon name='git-pull-request'></box-icon>
        </div>
        <div class="box" style=" background-color: #31323364;">
          <div class="right-side">
            <div class="box-topic">Total Secretary</div>
            <div class="number">2</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">January 2023</span>
            </div>
          </div>
          <box-icon name='child'></box-icon>
        </div>
        <div class="box" style=" background-color: #31323364;">
          <div class="right-side">
            <div class="box-topic">Total Officials</div>
            <div class="number">15</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">September 2022</span>
            </div>
          </div>
          <box-icon name='child'></box-icon>
        </div>
        <div class="box" style=" background-color: #31323364;">
          <div class="right-side">
            <div class="box-topic">Visitors</div>
            <div class="number">36</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">September 2023</span>
            </div>
          </div>
          <box-icon name='child'></box-icon>
        </div>
      </div>

      <div class="sales-boxes">
        <div class="recent-sales box">
          <div class="title">Recent Sales</div>
          <div class="sales-details">
            <ul class="details">
              <li class="topic">Date</li>
              <li><a href="#">02 Jan 2021</a></li>
              <li><a href="#">02 Jan 2021</a></li>
              <li><a href="#">02 Jan 2021</a></li>
              <li><a href="#">02 Jan 2021</a></li>
              <li><a href="#">02 Jan 2021</a></li>
              <li><a href="#">02 Jan 2021</a></li>
              <li><a href="#">02 Jan 2021</a></li>
            </ul>
            <ul class="details">
            <li class="topic">Customer</li>
            <li><a href="#">Alex Doe</a></li>
            <li><a href="#">David Mart</a></li>
            <li><a href="#">Roe Parter</a></li>
            <li><a href="#">Diana Penty</a></li>
            <li><a href="#">Martin Paw</a></li>
            <li><a href="#">Doe Alex</a></li>
            <li><a href="#">Aiana Lexa</a></li>
            <li><a href="#">Rexel Mags</a></li>
             <li><a href="#">Tiana Loths</a></li>
          </ul>
          <ul class="details">
            <li class="topic">Sales</li>
            <li><a href="#">Delivered</a></li>
            <li><a href="#">Pending</a></li>
            <li><a href="#">Returned</a></li>
            <li><a href="#">Delivered</a></li>
            <li><a href="#">Pending</a></li>
            <li><a href="#">Returned</a></li>
            <li><a href="#">Delivered</a></li>
             <li><a href="#">Pending</a></li>
            <li><a href="#">Delivered</a></li>
          </ul>
          <ul class="details">
            <li class="topic">Total</li>
            <li><a href="#">$204.98</a></li>
            <li><a href="#">$24.55</a></li>
            <li><a href="#">$25.88</a></li>
            <li><a href="#">$170.66</a></li>
            <li><a href="#">$56.56</a></li>
            <li><a href="#">$44.95</a></li>
            <li><a href="#">$67.33</a></li>
            <li><a href="#">$23.53</a></li>
            <li><a href="#">$46.52</a></li>
          </ul>
          </div>
          <div class="button">
            <a href="#">See All</a>
          </div>
        </div>
        <div class="top-sales box">
          <div class="title">Top Seling Product</div>
          <ul class="top-sales-details">
            <li>
            <a href="#">
              <img src="https://bisayatraveler.com/wp-content/uploads/2019/04/DLAY0110.jpg" alt="">
              <span class="product">Vuitton Sunglasses</span>
            </a>
            <span class="price">$1107</span>
          </li>
          <li>
            <a href="#">
               <img src="https://sugbo.ph/wp-content/uploads/2020/07/Blue-Space-Resort-Barili-Cebu-4.jpg" alt="">
              <span class="product">Hourglass Jeans </span>
            </a>
            <span class="price">$1567</span>
          </li>
          <li>
            <a href="#">
             <img src="https://images.unsplash.com/photo-1610271340738-726e199f0258?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80" alt="">
              <span class="product">Nike Sport Shoe</span>
            </a>
            <span class="price">$1234</span>
          </li>
          <li>
            <a href="#">
              <img src="https://bisayatraveler.com/wp-content/uploads/2019/04/DLAY0110.jpg" alt="">
              <span class="product">Hermes Silk Scarves.</span>
            </a>
            <span class="price">$2312</span>
          </li>
          <li>
            <a href="#">
              <img src="https://images.unsplash.com/photo-1610878722345-79c5eaf6a48c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80" alt="">
              <span class="product">Succi Ladies Bag</span>
            </a>
            <span class="price">$1456</span>
          </li>
          <li>
            <a href="#">
              <img src="https://sugbo.ph/wp-content/uploads/2020/09/Anahaw-Beach-Barili-Cebu-11.jpg" alt="">
              <span class="product">Gucci Womens's Bags</span>
            </a>
            <span class="price">$2345</span>
          <li>
            <a href="#">
              <img src="https://images.unsplash.com/photo-1612422656768-d5e4ec31fac0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80" alt="">
              <span class="product">Addidas Running Shoe</span>
            </a>
            <span class="price">$2345</span>
          </li>
<li>
            <a href="#">
             <img src="https://nopostcode.com/wp-content/uploads/2021/10/Ibo-Falls-11-1024x682.jpg" alt="">
              <span class="product">Bilack Wear's Shirt</span>
            </a>
            <span class="price">$1245</span>
          </li>
          </ul>
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