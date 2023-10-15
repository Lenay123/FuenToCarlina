<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/resident.css">
    <link rel="icon" href="{{ asset('img/image (5).png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/515e3f1675.js" crossorigin="anonymous"></script>
    <title>Barangay Connect</title>
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
    </div>
  </div>
</div>
<div class="container-fluid ng-scope">
  <div class="row">
    <!-- Left column-->
    <div style="font-weight: 800" class="col-md-7 col-lg-8">
      <form  class="card ng-pristine ng-valid">
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
        @foreach ($services as $service)
        <div class="mda-list">
            <div class="mda-list-item"><img src="/image/{{ $service->image }}" alt="List user"
                    class="mda-list-item-img">
                <div class="mda-list-item-text mda-2-line">
                    <h3 style="font-weight: 800">{{$service->name}}</h3>
                    <div class="text-muted text-ellipsis" style="text-align: justify; font-weight: 800; color: black;">
                        {{$service->detail}}</div>
                </div>
                <center>
                    <div class="card-body pv0 text-right"><button class="btn btn-flat btn-info"
                            style="font-weight: 800;" onclick="openModal1()">Request Now</button></div>
                </center>
            </div>
        </div>
        @endforeach
    </div>
</div>

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
            
            <form action="{{ route('resident.store') }}" method="POST">
            @csrf
            <div class="form-group">
              <div class="mb-3">
                <label for="exampleInputName1" class="form-label" required>Full name:</label>
                <input type="name" class="form-control" name= "full_name" value=""> 
              </div>

              <label for="document_type" required>Type of Document:</label>
              <select id="document_type" name="document_type">
                    <option value="">Select a Document</option>
                    <option value="Barangay Indigency">Barangay Indigency</option>
                    <option value="Barangay Clearance">Barangay Clearance</option>
                    <option value="Barangay Business Permit">Barangay Business Permit</option>
                </select>
                <br> <br>
              <div class="mb-3">
                <label for="purpose" class="form-label" required>Purpose</label>
                <textarea name="purpose" id="" cols="30" rows="10"></textarea>
              </div>
               <label for="id_type" required>Type of ID:</label>
              <select id="id_type" name="id_type">
                  <option value="">Select an ID</option>
                  <option value="NSO with School ID">NSO with School ID</option>
                  <option value="NBI Clearance">NBI Clearance</option>
                  <option value="Voters ID">Voters ID</option>
                  <option value="Drivers License">Drivers License</option>
                  <option value="Voters Certificate">Voters Certificate</option>
                  <option value="National ID">National ID</option>
                  <option value="SSS">SSS</option>
              </select>
                <div class="description">Note: Bring this document for verification</div>
              </div>
            <div class="form-group">
              <label for="id_number" required>ID Number:</label>
              <input type="text" class="form-control" name="id_number">
              <div class="description">I certify that all information on this form are true and correct. I understand that any incorrect, false or misleading statement is punishable by law.</div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" onclick="closeModal1()">Cancel</button>
            <button type="submit" class="btn btn-primary" onclick="return confirm('Are you sure you want to Request this document?');">Request</button>
          </div>
        </form>        
        </div>
      </div>
</div>

@endauth
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script>
     // Open the modal
     function openModal1() {
      const modal1 = document.getElementById("myModal1");
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
    function closeModal6(){
      const modal1 = document.getElementById("myModal6");
      modal1.style.display = "none";
      
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