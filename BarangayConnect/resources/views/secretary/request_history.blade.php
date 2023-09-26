<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <title>Barangay Connect</title>
    <link rel="stylesheet" href="css/secretary.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script
      src="https://kit.fontawesome.com/a5b81c7a03.js"
      crossorigin="anonymous"
    ></script>
    <!-- Boxicons CDN Link -->
    <link
      href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
      rel="stylesheet"
    />
    @vite('resources/css/app.css')
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  </head>
  <body>
    <div class="sidebar">
      <div class="logo-details">
        <i><img src="/img/logo.png" alt="" /></i>
        <span class="logo_name">Barangay Connect</span>
      </div>
      <ul class="nav-links">
        <li>
          <a href="/secretary/html/secretary_dashboard.html" class="active">
            <i class="bx bx-grid-alt"></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="/secretary/html/manage_request.html">
            <i class="bx bx-box"></i>
            <span class="links_name">Manage Request</span>
          </a>
        </li>
        <li>
          <a href="/secretary/html/request_history.html">
            <i class="bx bx-list-ul"></i>
            <span class="links_name">Request History</span>
          </a>
        </li>
        <li>
          <a href="/secretary/html/print_document.html">
            <i class="bx bx-pie-chart-alt-2"></i>
            <span class="links_name">Print Document</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bx bx-book-alt"></i>
            <span class="links_name">Logout</span>
          </a>
        </li>
      </ul>
    </div>
    <section class="home-section">
      <nav>
        <div class="sidebar-button">
          <i class="bx bx-menu sidebarBtn"></i>
          <span class="dashboard">Dashboard</span>
        </div>
        <div class="search-box">
          <input type="text" placeholder="Search..." />
          <i class="bx bx-search"></i>
        </div>
        <div class="profile-details">
          <img src="images/profile.jpg" alt="" />
          <span class="admin_name">Secretary</span>
          <i class="bx bx-chevron-down"></i>
        </div>
      </nav>

      <div class="home-content">
        <div class="overview-boxes">
          <div class="box" style="background-color: #355b57">
            <div class="right-side">
              <div class="box-topic text-[#99F2C8]">Claimed</div>
              <div class="number text-[#99F2C8]">1,000</div>
            </div>
          </div>
          <div class="box" style="background-color: #355b57">
            <div class="right-side">
              <div class="box-topic text-[#99F2C8]">To Be Claimed</div>
              <div class="number text-[#99F2C8]">2</div>
            </div>
          </div>
          <div class="box" style="background-color: #355b57">
            <div class="right-side">
              <div class="box-topic text-[#99F2C8]">In Progress</div>
              <div class="number text-[#99F2C8]">15</div>
            </div>
          </div>
          <div class="box" style="background-color: #355b57">
            <div class="right-side">
              <div class="box-topic text-[#99F2C8]">Pending</div>
              <div class="number text-[#99F2C8]">36</div>
            </div>
          </div>
        </div>

        <div class="sales-boxes">
          <div class="w-full max-w-screen-lg mx-auto overflow-x-scroll">
            <table
              class="table-auto w-full border border-gray-300 border-separate border-spacing-x-0 border-spacing-y-3 overflow-x-scroll"
            >
              <thead>
                <tr>
                  <th class="w-1/4 text-left text-[#757575] px-4 py-2">
                    <span class="flex items-center">
                      Date of Request
                      <button class="ml-2">
                        <i class="fas fa-sort text-lg"></i>
                      </button>
                    </span>
                  </th>
                  <!-- Add more headers as needed -->
                  <th class="w-1/4 text-left text-[#757575] py-2">
                    <span>
                      Requestor
                      <button class="ml-2">
                        <i class="fas fa-sort text-lg"></i>
                      </button>
                    </span>
                  </th>
                  <th class="w-2/12 text-center text-[#757575] py-2">
                    <span>
                      Type of Request
                      <button class="ml-2">
                        <i class="fas fa-sort text-lg"></i>
                      </button>
                    </span>
                  </th>
                  <th class="w-1/4 text-center text-[#757575] py-2">
                    <span>
                      Date Claimed
                      <button class="ml-2">
                        <i class="fas fa-sort text-lg"></i>
                      </button>
                    </span>
                  </th>
                  <th class="text-[#757575] px-4 py-2">Action</th>
                </tr>
              </thead>

              <tbody class="">
                <!-- Customize table data rows as needed -->
                <tr class="text-justify">
                  <td>
                    <div class="items-center">
                      <div class="text-left pl-9"><p class="">12/01/23</p></div>
                    </div>
                  </td>
                  <td class="text-[#333843] text-left border-b">
                    <div class="flex items-center">
                      <div class="">
                        <p class="text-[#333843] text-left break-all p-0">
                          User's Name
                        </p>
                        <p
                          class="text-[#757575] text-left break-all text-sm p-0"
                        >
                          user@example.com
                        </p>
                      </div>
                    </div>
                  </td>
                  <td
                    class="text-center"
                  >
                    Barangay Indigency
                  </td>
                  <td class="text-center border-b">12/01/24</td>
                  <td class="text-center">
                    <button id="myBtn" class="py-1 px-3 rounded-full bg-red-500">
                      <i
                        class="fa-solid fa-x""
                        style="color: #ffffff"
                      ></i>
                    </button>
                  </td>
                </tr>

                <tr class="text-justify">
                  <td>
                    <div class="items-center">
                      <div class="text-left pl-9"><p class="">12/01/23</p></div>
                    </div>
                  </td>
                  <td class="text-[#333843] text-left border-b">
                    <div class="flex items-center">
                      <div class="">
                        <p class="text-[#333843] text-left break-all p-0">
                          User's Name
                        </p>
                        <p
                          class="text-[#757575] text-left break-all text-sm p-0"
                        >
                          user@example.com
                        </p>
                      </div>
                    </div>
                  </td>
                  <td
                    class="text-center"
                  >
                    Barangay Indigency
                  </td>
                  <td class="text-center border-b">12/01/24</td>
                  <td class="text-center">
                    <button id="myBtn" class="py-1 px-3  rounded-full bg-red-500">
                      <i
                        class="fa-solid fa-x""
                        style="color: #ffffff"
                      ></i>
                    </button>
                  </td>
                </tr>

                <tr class="text-justify">
                  <td>
                    <div class="items-center">
                      <div class="text-left pl-9"><p class="">12/01/23</p></div>
                    </div>
                  </td>
                  <td class="text-[#333843] text-left border-b">
                    <div class="flex items-center">
                      <div class="">
                        <p class="text-[#333843] text-left break-all p-0">
                          User's Name
                        </p>
                        <p
                          class="text-[#757575] text-left break-all text-sm p-0"
                        >
                          user@example.com
                        </p>
                      </div>
                    </div>
                  </td>
                  <td
                    class="text-center"
                  >
                    Barangay Indigency
                  </td>
                  <td class="text-center border-b">12/01/24</td>
                  <td class="text-center">
                    <button id="myBtn" class="py-1 px-3 bg-red-500 rounded-full">
                      <i
                      class="fa-solid fa-x"
                        style="color: #ffffff"
                      ></i>
                    </button>
                  </td>
                </tr>

                <tr class="text-justify">
                  <td>
                    <div class="items-center">
                      <div class="text-left pl-9"><p class="">12/01/23</p></div>
                    </div>
                  </td>
                  <td class="text-[#333843] text-left border-b">
                    <div class="flex items-center">
                      <div class="">
                        <p class="text-[#333843] text-left break-all p-0">
                          User's Name
                        </p>
                        <p
                          class="text-[#757575] text-left break-all text-sm p-0"
                        >
                          user@example.com
                        </p>
                      </div>
                    </div>
                  </td>
                  <td
                    class="text-center"
                  >
                    Barangay Indigency
                  </td>
                  <td class="text-center border-b">12/01/24</td>
                  <td class="text-center">
                    <button id="myBtn" class="py-1 px-3 rounded-full bg-red-500">
                      <i
                        class="fa-solid fa-x""
                        style="color: #ffffff"
                      ></i>
                    </button>
                  </td>
                </tr>
              </tbody>
            </table>
            <!-- Add this modal HTML code after the table code -->

            <!-- Modal -->
            <div class="w-1/3">
              <div
                id="myModal"
                class="fixed inset-0 flex items-center justify-center z-50 hidden"
              >
                <div class="fixed inset-0 bg-gray-900 opacity-70"></div>
                <!-- Background Overlay -->
                <div class="bg-white rounded shadow-lg relative">
                  <!-- Modal Header -->

                  <!-- Modal Body -->
                  <div class="p-3 flex flex-col items-center">
                    <img
                      src="img/bg-delete.png"
                      alt="Delete Photo"
                      class="mx-auto w-full md:w-auto mr-2  "
                    />
                    <br />
                    <h3 class="text-center">
                      <span class="text-xl font-bold text-[#D161A4]"
                        >Do you want to Delete this</span
                      >
                      <br />
                      <span class="text-xl font-bold text-[#8742B4]"
                        >Request?</span
                      >
                    </h3>
                  </div>

                  <div
                    class="flex flex-col sm:flex-row justify-center items-center sm:items-end w-full border-t p-3"
                  >
                    <button
                      id="closeModal"
                      class="bg-blue-500 hover:bg-blue-700 px-3 py-1 rounded text-white mb-2 sm:mb-0 sm:mr-1 close"
                    >
                      No
                    </button>
                    <button
                      class="bg-red-500 hover:bg-red-700 px-3 py-1 ml-2 rounded text-white"
                    >
                      Yes
                    </button>
                  </div>
                </div>
              </div>
            </div>

            <!-- End of Modal -->

            <script>
              // JavaScript code to handle modal functionality

              // Get the modal element
              const modal = document.getElementById("myModal");

              // Get the button that opens the modal
              const btn = document.getElementById("myBtn");

              // Get the close button inside the modal
              const closeBtn = document.getElementById("closeModal");

              // Function to open the modal
              function openModal() {
                modal.classList.remove("hidden");
              }

              // Function to close the modal
              function closeModal() {
                modal.classList.add("hidden");
              }

              // Event listener for opening the modal
              btn.addEventListener("click", openModal);

              // Event listener for closing the modal
              closeBtn.addEventListener("click", closeModal);
            </script>
          </div>
        </div>
      </div>
    </section>

    <script>
      let sidebar = document.querySelector(".sidebar");
      let sidebarBtn = document.querySelector(".sidebarBtn");
      sidebarBtn.onclick = function () {
        sidebar.classList.toggle("active");
        if (sidebar.classList.contains("active")) {
          sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
        } else sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
      };
    </script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
  </body>
</html>
