<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8" />
        <title>Barangay Connect</title>
        <link rel="stylesheet" href="css/secretary.css" />
        <link rel="stylesheet" href="/dist/output.css" />
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
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        @vite('resources/css/app.css')
      </head>
    <body>
        <div class="sidebar">
            <div class="logo-details">
                <i><img src="/img/logo.png" alt="" /></i>
                <span class="logo_name">Barangay Connect</span>
            </div>
            <ul class="nav-links">
                <li>
                    <a
                        href="/secretary/html/secretary_dashboard.html"
                        class="active"
                    >
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
                <div class="sales-boxes">
                    <div
                        class="w-full max-w-screen-lg mx-auto overflow-x-scroll"
                    >
                        <table
                            class="table-auto w-full border border-gray-300 border-separate border-spacing-x-0 border-spacing-y-3 overflow-x-scroll"
                        >
                            <thead>
                                <tr>
                                    <th
                                        class="w-1/4 text-left text-[#757575] px-4 py-2"
                                    >
                                        <span class="flex items-center">
                                            Requestors
                                            <button class="ml-2">
                                                <i
                                                    class="fas fa-sort text-lg"
                                                ></i>
                                            </button>
                                        </span>
                                    </th>
                                    <!-- Add more headers as needed -->
                                    <th
                                        class="w-1/4 text-left text-[#757575] py-2"
                                    >
                                        <span>
                                            Request Document
                                            <button class="ml-2">
                                                <i
                                                    class="fas fa-sort text-lg"
                                                ></i>
                                            </button>
                                        </span>
                                    </th>
                                    <th
                                        class="w-2/12 text-center text-[#757575] py-2"
                                    >
                                        <span>
                                            Request Status
                                            <button class="ml-2">
                                                <i
                                                    class="fas fa-sort text-lg"
                                                ></i>
                                            </button>
                                        </span>
                                    </th>
                                    <th
                                        class="w-1/4 text-center text-[#757575] py-2"
                                    >
                                        <span>
                                            Date Requested
                                            <button class="ml-2">
                                                <i
                                                    class="fas fa-sort text-lg"
                                                ></i>
                                            </button>
                                        </span>
                                    </th>
                                    <th class="text-[#757575] px-4 py-2">
                                        Action
                                    </th>
                                </tr>
                            </thead>

                            <tbody class="">
                                <!-- Customize table data rows as needed -->
                                <tr class="text-justify">
                                    <td>
                                        <div class="flex items-center">
                                            <img
                                                src="img/profile.jpg"
                                                alt="My Image"
                                                class="border border-black rounded-full h-8 w-8 mr-2 ml-2"
                                            />
                                            <div class="ml-2">
                                                <p
                                                    class="text-[#333843] text-left break-all p-0"
                                                >
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
                                        class="text-[#333843] text-left border-b"
                                    >
                                        Custom Data 1
                                    </td>
                                    <td
                                        class="py-1 block text-center border rounded-full bg-[#FEEDEC] font-medium text-[#F04438] hover:bg-[#fc7f7f] hover:text-[#FEEDEC]"
                                    >
                                        In Progress
                                    </td>
                                    <td class="text-center border-b">
                                        Custom Date 1
                                    </td>
                                    <td class="text-center">
                                        <button id="myBtn" class="py-1 px-3">
                                            <i
                                                class="fa-solid fa-file-pen fa-xl"
                                                style="color: #667085"
                                            ></i>
                                        </button>
                                    </td>
                                </tr>

                                <tr class="text-justify">
                                    <td>
                                        <div class="flex items-center">
                                            <img
                                                src="img/profile.jpg"
                                                alt="My Image"
                                                class="border border-black rounded-full h-8 w-8 mr-2 ml-2"
                                            />
                                            <div class="ml-2">
                                                <p
                                                    class="text-[#333843] text-left break-all"
                                                >
                                                    User's Name
                                                </p>
                                                <p
                                                    class="text-[#757575] text-left break-all text-sm"
                                                >
                                                    user@example.com
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td
                                        class="text-[#333843] text-left border-b"
                                    >
                                        Custom Data 1
                                    </td>
                                    <td
                                        class="py-1 block text-center border rounded-full bg-[#E7F4EE] font-medium text-[#0D894F] hover:bg-[#0D894F] hover:text-[#E7F4EE]"
                                    >
                                        To be Claimed
                                    </td>
                                    <td class="text-center border-b">
                                        Custom Date 1
                                    </td>
                                    <td class="text-center">
                                        <button id="myBtn" class="py-1 px-3">
                                            <i
                                                class="fa-solid fa-file-pen fa-xl"
                                                style="color: #667085"
                                            ></i>
                                        </button>
                                    </td>
                                </tr>

                                <tr class="text-justify">
                                    <td>
                                        <div class="flex items-center">
                                            <img
                                                src="img/profile.jpg"
                                                alt="My Image"
                                                class="border border-black rounded-full h-8 w-8 mr-2 ml-2"
                                            />
                                            <div class="ml-2">
                                                <p
                                                    class="text-[#333843] text-left break-all"
                                                >
                                                    User's Name
                                                </p>
                                                <p
                                                    class="text-[#757575] text-left break-all text-sm"
                                                >
                                                    user@example.com
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td
                                        class="text-[#333843] text-left border-b"
                                    >
                                        Custom Data 1
                                    </td>
                                    <td
                                        class="px-1 py-1 block text-center border rounded-full bg-[#FEEDEC] font-medium text-[#F04438] hover:bg-[#fc7f7f] hover:text-[#FEEDEC]"
                                    >
                                        Claimed
                                    </td>
                                    <td class="text-center border-b">
                                        Custom Date 1
                                    </td>
                                    <td class="text-center">
                                        <button id="myBtn" class="py-1 px-3">
                                            <i
                                                class="fa-solid fa-file-pen fa-xl"
                                                style="color: #667085"
                                            ></i>
                                        </button>
                                    </td>
                                </tr>

                                <tr class="text-justify">
                                    <td style="vertical-align: top">
                                        <div class="flex items-center">
                                            <img
                                                src="img/profile.jpg"
                                                alt="My Image"
                                                class="border border-black rounded-full h-8 w-8 mr-2 ml-2"
                                            />
                                            <div class="ml-2">
                                                <p
                                                    class="text-[#333843] text-left break-all"
                                                >
                                                    User's Name
                                                </p>
                                                <p
                                                    class="text-[#757575] text-left break-all text-sm"
                                                >
                                                    user@example.com
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td
                                        class="text-[#333843] text-left border-b"
                                    >
                                        Custom Data 1
                                    </td>
                                    <td
                                        class="text-center py-1 block border rounded-full bg-[#F5D52B] font-medium text-[#000000] hover:bg-[#000000] hover:text-[#F5D52B]"
                                    >
                                        Pending
                                    </td>
                                    <td class="text-center border-b">
                                        Custom Date 1
                                    </td>
                                    <td class="text-center">
                                        <button id="myBtn" class="py-1 px-3">
                                            <i
                                                class="fa-solid fa-file-pen fa-xl"
                                                style="color: #667085"
                                            ></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- Add this modal HTML code after the table code -->

                        <!-- Modal -->
                        <div class="w-2/3">
                            <div
                                id="myModal"
                                class="fixed inset-0 flex items-center justify-center z-50 hidden"
                            >
                                <div
                                    class="fixed inset-0 bg-gray-900 opacity-70"
                                ></div>
                                <!-- Background Overlay -->
                                <div
                                    class="bg-white rounded shadow-lg relative w-2/5"
                                >
                                    <!-- Modal Header -->

                                    <!-- Modal Body -->
                                    <div class="p-3 flex flex-col items-center">
                                        <h3 class="text-center w-full">
                                            <span
                                                class="text-xl font-bold text-[#D161A4]"
                                                >Edit Request Status</span
                                            >

                                            <form action="" class="mt-2">
                                                <div class="text-left">
                                                    Type of Document:
                                                    <div
                                                        class="text-center border border-gray-300 rounded-md py-2 mt-2"
                                                    >
                                                        Barangay Certificate
                                                    </div>
                                                </div>
                                                <div class="mt-2">
                                                    <label
                                                        for="dropdown"
                                                        class="block text-left"
                                                        >Select an
                                                        option:</label
                                                    >
                                                    <select
                                                        id="dropdown"
                                                        name="dropdown"
                                                        class="mt-1 block w-full border pl-5 pr-10 py-2 rounded-md"
                                                    >
                                                        <option value="option1">
                                                            In Progress
                                                        </option>
                                                        <option value="option2">
                                                            To Be Claimed
                                                        </option>
                                                        <option value="option3">
                                                            Received
                                                        </option>
                                                    </select>
                                                </div>
                                            </form>
                                        </h3>
                                    </div>

                                    <div
                                        class="flex flex-col sm:flex-row justify-end items-center sm:items-end w-full border-t p-3"
                                    >
                                        <button
                                            id="saveModal"
                                            class="bg-[#9649B1] hover:bg-[#] px-3 py-1 rounded text-white mb-2 sm:mb-0 sm:mr-1 close"
                                        >
                                            Save
                                        </button>
                                        <button
                                            id="closeModal"
                                            class="bg-[#C85EA6] hover:bg-[#] px-3 py-1 rounded text-white"
                                        >
                                            Cancel
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div
                                id="successModal"
                                class="fixed inset-0 flex items-center justify-center z-50 hidden"
                            >
                                <div
                                    class="fixed inset-0 bg-gray-900 opacity-70"
                                ></div>
                                <!-- Background Overlay -->
                                <div
                                    class="bg-white rounded shadow-lg relative w-1/3"
                                >
                                    <div class="p-3 flex flex-col items-center">
                                        <h3 class="text-center">
                                            <img
                                                src="img/Success.png"
                                                alt="Success Photo"
                                                class="mx-auto w-full md:w-auto"
                                            />
                                            <span
                                                class="text-xl font-bold text-[#D161A4]"
                                                >Successfully</span
                                            >
                                            <br />
                                            <span class="text-lg text-[#8742B4]"
                                                >Updated the Request
                                                Status</span
                                            >
                                        </h3>
                                    </div>

                                    <div
                                        class="flex flex-row justify-center items-center w-full border-t p-3"
                                    >
                                        <button
                                            id="closeSuccessModal"
                                            class="bg-[#9649B1] hover:bg-[#] px-3 py-1 rounded text-white"
                                        >
                                            Close
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- End of Modal -->

                        <script>
                            // JavaScript code to handle modal functionality

                            // Get the modal elements
                            const modal = document.getElementById("myModal");
                            const successModal =
                                document.getElementById("successModal");

                            // Get the button that opens the modal
                            const btn = document.getElementById("myBtn");
                            const saveBtn =
                                document.getElementById("saveModal");

                            // Get the close buttons inside the modals
                            const closeBtn =
                                document.getElementById("closeModal");
                            const closeSuccessBtn =
                                document.getElementById("closeSuccessModal");

                            // Function to open the modal
                            function openModal() {
                                modal.classList.remove("hidden");
                            }

                            // Function to close the modal
                            function closeModal() {
                                modal.classList.add("hidden");
                            }

                            // Function to open the success modal
                            function openSuccessModal() {
                                successModal.classList.remove("hidden");
                            }

                            // Function to close the success modal
                            function closeSuccessModal() {
                                successModal.classList.add("hidden");
                            }

                            // Event listener for opening the modal
                            btn.addEventListener("click", openModal);

                            // Event listener for closing the modal
                            closeBtn.addEventListener("click", closeModal);

                            // Event listener for saving and opening the success modal
                            saveBtn.addEventListener("click", function () {
                                closeModal();
                                openSuccessModal();
                            });

                            // Event listener for closing the success modal
                            closeSuccessBtn.addEventListener(
                                "click",
                                closeSuccessModal
                            );
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
                    sidebarBtn.classList.replace(
                        "bx-menu",
                        "bx-menu-alt-right"
                    );
                } else
                    sidebarBtn.classList.replace(
                        "bx-menu-alt-right",
                        "bx-menu"
                    );
            };
        </script>
        <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    </body>
</html>
