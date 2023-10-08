<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/resident.css">
    <link rel="icon" href="../img/image (5).png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/515e3f1675.js" crossorigin="anonymous"></script>
    <title>Residents</title>
</head>
<body>

<section id="forHeader">
    <header>
      <nav>
          <a class="logo" href="#home" id="logo" style="color: white;" ><img src="../img/image (5).png" id="image" height="80px" width="80px">Barangay Connect</a>
          <i class="fas fa-bars" id="ham-menu"></i>
          <ul id="nav-bar">
              <li>
                  <a href="/residentpage/resident">Application</a>
              </li>
              <li>
                  <a href="/residentpage/transactions">Transaction</a>
              </li>
              <li>
                  <a href="{{route('logout')}}">Logout</a>
              </li>
          </ul>
      </nav>
  </header>
</section>


<section id="for-content" class="container ng-scope ng-fadeInLeftShort" style="margin-top: 10%;">
<!-- uiView:  --><div class="ng-fadeInLeftShort ng-scope" >
<div class="container-overlap bg-blue-500 ng-scope">
  <div class="media m0 pv">
    {{-- <div class="media-left"><a href="#"><img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="User" class="media-object img-circle thumb64"></a></div> --}}
    <div class="media-body media-middle">
      <h1 class="media-heading text-white"> Welcome
        @auth
     <b>{{auth()->user()->first_name}}  {{auth()->user()->middle_name}}  {{auth()->user()->last_name}} </b>   

      </h1>
      {{-- <span class="text-white">Sed eget lacus quis diam molestie mollis.</span> --}}
    </div>
  </div>
</div>
<div class="container-fluid ng-scope">
  <div class="row">
    <!-- Left column-->
    <div style="font-weight: 800" class="col-md-7 col-lg-8">
      <form  class="card ng-pristine ng-valid">
        {{-- <h5 class="card-heading pb0">
            About
        </h5> --}}
        {{-- <div class="card-body">
          <p class="ng-scope ng-binding editable"></div> --}}
        {{-- <div class="card-divider"></div> --}}
        {{-- <div class="card-offset"> --}}
          <div class="card-offset-item text-right">
            {{-- <button type="button"  class="btn-raised btn btn-warning btn-circle btn-lg"><i class="fa-solid fa-pen-to-square" onclick="openModal()"></i></button> --}}
            {{-- <div id="editProfileModal" class="modal">
                <div class="modal-content">
                  <div class="modal-header">
                    <h2 class="modal-title">Edit Profile</h2>
                    <span class="close" onclick="closeModal()">&times;</span>
                  </div>
                  <!-- Form for editing profile -->
                  <form id="profileForm" action="#" method="POST">
                    <div class="form-group">
                      <label for="name">Name:</label>
                      <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                      <label for="email">Email:</label>
                      <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                      <label for="bio" required>Bio:</label>
                      <textarea id="bio" name="bio"></textarea>
                    </div>
                    <div class="image-upload">
                      <img src="../img/user.png" alt="Uploaded Image" class="uploaded-image" id="uploadedImage">
                      <input type="file" accept="image/*" id="imageInput">
                      <button class="remove-button" id="removeButton" style="display: none;">Remove</button>
                    </div>

                    <div class="modal-footer">
                      <button type="submit" class="btn btn-primary">Save</button>
                      <button type="button" class="btn btn-secondary" onclick="closeModal()">Cancel</button>
                    </div>
                  </form>
                </div>
              </div>

          </div> --}}
        </div>
        <h5  style="font-weight: 800" class="card-heading pb0">Contact Information</h5>
        <div class="card-body">
          <table style="font-weight: 800" class="table table-striped">
            <tbody>
              <tr>
                <td><em class="ion-egg icon-fw mr"></em>Birthday</td>
                <td><span class="ng-scope ng-binding editable">{{auth()->user()->birthday}}</span></td>
              </tr>
              <tr>
                <td><em class="ion-man icon-fw mr"></em>Gender</td>
                <td><span class="ng-scope ng-binding editable">{{auth()->user()->gender}}</span></td>
              </tr>
              <tr>
                <td><em class="ion-android-home icon-fw mr"></em>Address</td>
                <td><span class="ng-scope ng-binding editable">{{auth()->user()->address}}</span></td>
              </tr>
              <tr>
                <td><em class="ion-email icon-fw mr"></em>Email</td>
                <td><span class="ng-scope editable"><a href="" class="ng-binding">{{auth()->user()->email}}</a></span></td>
              </tr>
              <tr>
                <td><em class="ion-ios-telephone icon-fw mr"></em>Contact phone</td>
                <td><span class="ng-scope ng-binding editable">{{auth()->user()->contact_number}}</span></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="card-divider"></div>
      </form>
    </div>

    <!-- Right column-->
    <div class="col-md-5 col-lg-4">
      
      <div class="card">
        <h5 style="font-weight: 800" class="card-heading">
            LISTS OF DOCUMENTS
        </h5>
        <div class="mda-list">
          @foreach ($services as $service)
          <div class="mda-list-item"><img src="/image/{{ $service->image }}" alt="List user" class="mda-list-item-img">
            <div class="mda-list-item-text mda-2-line">
              <h3 style="font-weight: 800">{{$service->name}}</h3>
              <div class="text-muted text-ellipsis" style="text-align: justify; font-weight: 800; color: black;">{{$service->detail}}</div>
            </div>
            <center><div class="card-body pv0 text-right"><button class="btn btn-flat btn-info" style="font-weight: 800;" onclick="openModal1()">Request Now</button></div></center>
            <!-- <button onclick="openModal1()">sample</button> -->
          </div>
          @endforeach
</div>
</div>
</section>
<section id="forModal">
    <div id="myModal1" class="modal">
        <div class="modal-content">
          <div class="modal-header">
            <h2 class="modal-title">Request Form</h2>
            <span class="close" onclick="closeModal1()">&times;</span>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label for="name">Notice:</label>
              <div class="description">Hello {{auth()->user()->first_name}}! You are requesting a Barangay Nabunturan Document!</div>
            </div>
            
            <form action="">
            <div class="form-group">
              <div class="mb-3">
                <label for="exampleInputName1" class="form-label" required>Full name</label>
                <input type="name" class="form-control" id="exampleInputName" value="{{auth()->user()->first_name}} {{auth()->user()->middle_name}} {{auth()->user()->last_name}}"> 
              </div>
                <label for="ID" required>Type of ID:</label>
                <select id="ID" name="ID">
                  <option value="">Select an ID</option>
                  <option value="NSO with School ID">NSO with School ID</option>
                  <option value="NBI CLearance">NBI Clearance</option>
                  <option value="Voter's ID">Voter's ID</option>
                  <option value="Driver's Licensw">Driver's License</option>
                  <option value="Voter's Certificate">Voter's Certificate</option>
                  <option value="National ID">National ID</option>
                  <option value="SSS">SSS</option>
                </select>
                <div class="description">Note: Bring this document for verification</div>
              </div>
            <div class="form-group">
              <label for="message" required>ID Number:</label>
              <input type="text" class="form-control" name="id_number">
              <div class="description">I certify that all information on this form are true and correct. I understand that any incorrect, false or misleading statement is punishable by law.</div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" onclick="closeModal1()">Cancel</button>
            <button type="button" class="btn btn-primary" onclick="openModalProceed()">I Agree</button>
          </div>
        </form>
          <!-- Modal for Proceed -->
          
        </div>
      </div>
      <div id="myModal3" class="modal">
        <div class="modal-content">
          <div class="modal-header">
            <h2 class="modal-title">IMPORTANT REMINDER</h2>
            <span class="close" onclick="closeModal3()">&times;</span>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label for="name">Note:</label>
              <div class="description">Your REGISTRATION CODE or REFERENCE NUMBER will be provided after you SUBMIT your request. <br> <br> 
                Your REFERENCE NUMBER shall served as your GATE PASS when you enter the Barangay Document Processing Area.     <br> <br>           
                To avoid inconvenience and long lines, please bring your REFERENCE NUMBER at the BARANGAY HALL .Thank you! <br> <br>
                DO YOU WANT TO PROCEED?
                
                </div>
            </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" onclick="closeModal3()">Cancel</button>
            <button type="button" class="btn btn-primary" onclick="openModal6()">Proceed</button>
          </div>
        </div>
      </div>
      </div>
    
  <!-- modal 6 -->
<div id="myModal6" class="modal">
  <div class="modal-content">
    <div class="modal-header">
      <h2 class="modal-title"></h2>
      <span class="close" onclick="closeModal6()">&times;</span>
    </div>
    <div class="modal-body">
         <div class="form-group">
          <center>  <img src="../img/successfully.png" height="30%" width="30%" alt="">    </center>
          <center>   <p><strong>Successfully Request </strong><br>
          Barangay Indigency! Here is your Reference Number:  <br> <strong>MP9AZSCQTE</strong></p> </center>
        <!-- <label for="name">Note:</label> -->
        <div class="description"><strong>Note:</strong> We are processing your request,  please check your SMS Notifcations from time to time and also check your request STATUS in the TRANSACTIONS page. <br><br>
            And to avoid inconvenience and long lines, please bring your REFERENCE NUMBER at the BARANGAY HALL .Thank you!
          </div>
      </div>

    <div class="modal-footer">
   <button type="button" class="btn btn-primary" onclick="closeModal6()">OK</button>
    </div>
  </div>
</div>
</div>
@endauth
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script>
    // Open the modal
    function openModal() {
      const modal = document.getElementById("editProfileModal");
      modal.style.display = "block";
    }

    // Close the modal
    function closeModal() {
      const modal = document.getElementById("editProfileModal");
      modal.style.display = "none";
    }

    imageInput.addEventListener("change", function () {
    const file = this.files[0];

    if (file) {
      const reader = new FileReader();

      reader.onload = function (e) {
        uploadedImage.src = e.target.result;
        uploadedImage.style.display = "block";
        removeButton.style.display = "block";
      };

      reader.readAsDataURL(file);
    }
  });

  removeButton.addEventListener("click", function () {
    uploadedImage.src = "#";
    uploadedImage.style.display = "none";
    removeButton.style.display = "none";
    imageInput.value = "";
  });

    // Remove the preview image
    function removePreview() {
      const previewImage = document.getElementById("preview");
      const fileInput = document.getElementById("profile-image");
      const uploadedFileName = document.querySelector(".uploaded-file-name");

      previewImage.src = "#";
      previewImage.style.display = "none";
      fileInput.value = "";
      uploadedFileName.textContent = "";
    }
     // Open the modal
     function openModal1() {
      const modal1 = document.getElementById("myModal1");
      modal1.style.display = "block";
    }
    function openModalProceed() {
      const sample = document.getElementById("myModal1");
      const modal1 = document.getElementById("myModal3");
      sample.style.display = "none";
      modal1.style.display = "block";
    }
    function submitInput(){
        const sample = document.getElementById("myModal3");
      const modal1 = document.getElementById("myModal4");
      sample.style.display = "none"
      modal1.style.display = "block";
    }
    function openModal6() {
      const sample = document.getElementById("myModal3");
      const modal1 = document.getElementById("myModal6");
      sample.style.display = "none"
      modal1.style.display = "block";
    }

    // Close the modal
    function closeModal1(){
      const modal1 = document.getElementById("myModal1");
      modal1.style.display = "none";
    }
    function closeModal3(){
      const modal1 = document.getElementById("myModal3");
      modal1.style.display = "none";
    }
    function closeModal5(){
      const modal1 = document.getElementById("myModal5");
      modal1.style.display = "none";
      

    }

    function closeModal6(){
      const modal1 = document.getElementById("myModal6");
      modal1.style.display = "none";
      
    }
 
    
    
    // Save changes
    function saveChanges1() {
    //   const name = document.getElementById("name").value;
    //   const email = document.getElementById("email").value;
      const country = document.getElementById("country").value;
      const message = document.getElementById("message").value;
      
      // Perform actions with the form data (e.g., send it to a server)
      
      // Close the modal
      closeModal1();
    }

        // Open the modal
    function openModal4() {
        const modal1 = document.getElementById("myModal3");
      const modal = document.getElementById("myModal4");
      modal1.style.display = "none";
      modal.style.display = "block";
    }

    // Close the modal
    function closeModal4(){
      const modal = document.getElementById("myModal4");
      modal.style.display = "none";
    }
    
    // Save changes
    function saveChanges4() {
      const name = document.getElementById("name").value;
      const email = document.getElementById("email").value;
      const country = document.getElementById("country").value;
      const message = document.getElementById("message").value;
      closeModal();
    }
// fornav

let hamMenuIcon = document.getElementById("ham-menu");
        let navBar = document.getElementById("nav-bar");
        let navLinks = navBar.querySelectorAll("li");
        hamMenuIcon.addEventListener("click", () => {
            navBar.classList.toggle("active");
            hamMenuIcon.classList.toggle("fa-times");
        });
        navLinks.forEach((navLinks) => {
            navLinks.addEventListener("click", () => {
                navBar.classList.remove("active");
                hamMenuIcon.classList.toggle("fa-times");
            });
        });

  </script>
</body>
</html>