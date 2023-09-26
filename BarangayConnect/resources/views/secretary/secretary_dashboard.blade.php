<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="/public/css/secretary_modal.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/a5b81c7a03.js" crossorigin="anonymous"></script>
    <script src="/script.js"></script>
    @vite('resources/css/app.css')
  </head>

  <body>
    <div class="w-full max-w-screen-lg mx-auto">
      <table
        class="table-auto w-full border border-gray-300 border-separate border-spacing-x-0 border-spacing-y-3"
      >
        <!-- Your table content goes here -->
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
              <div class="flex items-center">
                
                <div class="ml-2">
                  <p class="text-[#333843] text-left break-all p-0">
                    User's Name
                  </p>
                  <p class="text-[#757575] text-left break-all text-sm p-0">
                    user@example.com
                  </p>
                </div>
              </div>
            </td>
            <td class="text-[#333843] text-left border-b">Custom Data 1</td>
            <td
              class="py-1 block text-center border rounded-full bg-[#FEEDEC] font-medium text-[#F04438] hover:bg-[#fc7f7f] hover:text-[#FEEDEC]"
            >
              In Progress
            </td>
            <td class="text-center border-b">Custom Date 1</td>
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
                
                <div class="ml-2">
                  <p class="text-[#333843] text-left break-all">User's Name</p>
                  <p class="text-[#757575] text-left break-all text-sm">
                    user@example.com
                  </p>
                </div>
              </div>
            </td>
            <td class="text-[#333843] text-left border-b">Custom Data 1</td>
            <td
              class="py-1 block text-center border rounded-full bg-[#E7F4EE] font-medium text-[#0D894F] hover:bg-[#0D894F] hover:text-[#E7F4EE]"
            >
              To be Claimed
            </td>
            <td class="text-center border-b">Custom Date 1</td>
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
                
                <div class="ml-2">
                  <p class="text-[#333843] text-left break-all">User's Name</p>
                  <p class="text-[#757575] text-left break-all text-sm">
                    user@example.com
                  </p>
                </div>
              </div>
            </td>
            <td class="text-[#333843] text-left border-b">Custom Data 1</td>
            <td
              class="px-1 py-1 block text-center border rounded-full bg-[#FEEDEC] font-medium text-[#F04438] hover:bg-[#fc7f7f] hover:text-[#FEEDEC]"
            >
              Claimed
            </td>
            <td class="text-center border-b">Custom Date 1</td>
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
                
                <div class="ml-2">
                  <p class="text-[#333843] text-left break-all">User's Name</p>
                  <p class="text-[#757575] text-left break-all text-sm">
                    user@example.com
                  </p>
                </div>
              </div>
            </td>
            <td class="text-[#333843] text-left border-b">Custom Data 1</td>
            <td
              class="text-center py-1 block border rounded-full bg-[#F5D52B] font-medium text-[#000000] hover:bg-[#000000] hover:text-[#F5D52B]"
            >
              Pending
            </td>
            <td class="text-center border-b">Custom Date 1</td>
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
    </div>

    <!-- Trigger/Open The Modal -->
    <!-- <button id="myBtn" class="border border-black p-2">Open Modal</button> -->
    <!-- The Modal -->
    <div id="myModal" class="modal">
      <!-- Modal content -->
      <div class="modal-content w-1/3">
        <!-- <span class="close">&times;</span> -->
        <div class="bg-white rounded shadow-lg w-full">
          <!-- Modal Header -->

          <!-- Modal Body -->
          <div class="p-3 flex flex-col items-center">
            <img src="" alt="My Image" class="mx-auto w-full md:w-auto" />
            <br />
            <h3 class="text-center">
              <span class="text-xl font-bold text-[#D161A4]"
                >Do you want to Delete this</span
              >
              <br />
              <span class="text-xl font-bold text-[#8742B4]">Request?</span>
            </h3>
          </div>

          <div
            class="flex flex-col sm:flex-row justify-end items-center sm:items-end w-full border-t p-3"
          >
            <button
              class="bg-blue-600 hover:bg-blue-700 px-3 py-1 rounded text-white mb-2 sm:mb-0 sm:mr-1 close"
            >
              Cancel
            </button>
            <button
              class="bg-red-600 hover:bg-red-700 px-3 py-1 rounded text-white"
            >
              Delete
            </button>
          </div>
        </div>
      </div>
    </div>

    <script>
      // Get the modal
      var modal = document.getElementById("myModal");

      // Get the button that opens the modal
      var btn = document.getElementById("myBtn");

      // Get the <span> element that closes the modal
      var span = document.getElementsByClassName("close")[0];

      // When the user clicks on the button, open the modal
      btn.onclick = function () {
        modal.style.display = "block";
      };

      // When the user clicks on <span> (x), close the modal
      span.onclick = function () {
        modal.style.display = "none";
      };

      // When the user clicks anywhere outside of the modal, close it
      window.onclick = function (event) {
        if (event.target == modal) {
          modal.style.display = "none";
        }
      };
    </script>
  </body>
</html>
