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
<style>
/* Add this CSS to your stylesheet or a style tag in your HTML */

/* Styles for larger screens */
.content-box {
    border: 1px solid #ddd;
    padding: 20px;
    margin: 20px auto;
    max-width: 800px;
    background-color: #f9f9f9;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

/* Responsive styles for smaller screens */
@media screen and (max-width: 768px) {
    .content-box {
        padding: 10px;
    }

    .modal-title {
        font-size: 20px;
    }

    .description {
        font-size: 14px;
    }

    #modal-image {
        max-width: 100%;
        height: auto;
    }
}



</style>
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
</section> <br><br><br> <br> <br>

<div class="content-box">
    <div class="container">
        <div class="form-group">
            <center><img src="../img/successfully.png" alt="Successfully Requested" id="modal-image" style= "width:100px"></center>
            <center>
                <p class="modal-title"><strong>Successfully Requested</strong></p>
                <p>Here is your Reference Number:</p>
                @if ($tracker_number)
    <p><h1><b>{{ $tracker_number->tracker_number }}</b></h1></p>
@else
    <p>No tracker number found.</p>
@endif
            </center>
            <div class="description">
                <strong>Note:</strong> We are processing your request, please check your SMS Notifications from time to time and also check your request STATUS on the TRANSACTIONS page. <br>
            </div>
        </div>
        <div class="form-group">
            <h7><b>Reminder:</b></h7>
            <div class="description" style= "text-align:justify;">
           Please Take a Screenshot of your Reference Number!
                     Your REFERENCE NUMBER shall serve as your GATE PASS when you enter the Barangay Document Processing Area.
                To avoid inconvenience and long lines, please bring your REFERENCE NUMBER to the BARANGAY HALL. Thank you!
            </div>
        </div>
       <center><a href="/residentpage/transactions"><button type="button" class="btn btn-primary">OK</button> </a></center> 

    </div>
</div>


<script>
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