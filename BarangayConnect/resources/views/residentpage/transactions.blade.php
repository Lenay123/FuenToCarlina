<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/resident.css">
    <link rel="icon" href="{{ asset('img/image (5).png') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/515e3f1675.js" crossorigin="anonymous"></script>
    <title>Barangay Connect</title>
</head>
<style>
    /* navigation bar */
  header {
    position: fixed;
    width: 100%;
    top: 0px;
    height: 15vh;
    background-color: #11273a;
    padding: 3rem 5rem;
    z-index: 1000;
  }
  nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
  }
  nav ul {
    list-style: none;
    display: flex;
    gap: 2rem;
    align-items: center;
    justify-content: center;
    margin-top: -10px;
  }
  nav a {
    font-size: 1.8rem;
    text-decoration: none;
  }
  nav a#logo {
    color: #000000;
    font-weight: 700;
    margin-top: -2%;
  }
  nav ul a {
    color: #ffffff;
    font-weight: 600;
    font-size: 1rem;

  }
  nav ul a:hover {
    border-bottom: 2px solid #ffffff;
  }
  section#home {
    height: 100vh;
    display: grid;
    place-items: center;
  }
  h1 {
    font-size: 2rem;
  }
  #ham-menu {
    display: none;
  }
  nav ul.active {
    left: 0;
  }
  @media only screen and (max-width: 991px) {
    html {
      font-size: 56.25%;
    }
    header {
      padding: 2.2rem 5rem;
    }
  }
  @media only screen and (max-width: 767px) {
    html {
      font-size: 50%;
    }
    #ham-menu {
      display: block;
      color: #ffffff;
    }
    nav a#logo,
    #ham-menu {
      font-size: 3.2rem;
    }
    nav ul {
      background-color: black;
      position: fixed;
      left: -100vw;
      top: 73.6px;
      width: 100vw;
      height: calc(100vh - 73.6px);
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: space-around;
      transition: 1s;
      gap: 0;
    }
    
  }
  @media only screen and (max-width: 575px) {
    html {
      font-size: 50.87%;
    }
    header {
      padding: 2rem 3rem;
      height: 8vh;
    }
    nav ul {
      top: 65.18px;
      height: calc(40vh - 65.18px);
      /* height: 100px; */
    }
    #for-content{
        padding-top: 10%;
    }
    #image{
        height: 30px;
        width: 30px;
    }
    nav a#logo{
        font-size: 15px;
    }
    #containers{
        padding-top: 30px;

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
    </section>
  
    <div class="container" id="containers" style="margin-top: 10%;">
    
    <div class="container">
        @if (count($errors) >0)
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach

                </ul>
            </div>
        @endif

        @if (\Session::has('success'))
            <div class="alert alert-success">
                <p>{{ \Session::get('success') }}</p>

            </div>
        @endif
        <h2><b>Transactions</b></h2>
        <p>These are the lists of documents you had requested:</p>            
        <div class="container">
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Requested Documents</th>
                            <th>Date Requested</th>
                            <th>Reference Number</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    @if(!empty($document_requests) && $document_requests->count())
                        @foreach ($document_requests as $document_request)
                        <tr>
                            <td>{{$document_request->document_type}}</td>
                            <td>{{$document_request->created_at}}</td>
                            <td>{{$document_request->tracker_number}}</td>
                            <td>{{$document_request->status}}</td>

                            <td>
                            <form method="POST" action="{{ route('document_requests.cancel', $document_request) }}">
                                  @csrf
                                  @method('PATCH')
                                  @if (!in_array($document_request->status, ['cancelled', 'In Progress', 'Claimed']))
    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#cancelConfirmationModal{{ $document_request->id }}">Cancel</button>
@endif

                    <div class="modal fade" id="cancelConfirmationModal{{ $document_request->id }}" tabindex="-1" role="dialog" aria-labelledby="cancelConfirmationModalLabel{{ $document_request->id }}" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Are you sure you want to cancel this request?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                                <button type="submit" class="btn btn-danger">Yes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                                <!-- <button type="button" class="btn btn-warning">Cancel</button> -->
                                <form action="{{ route('residentpage.destroy',$document_request->id) }}" method="POST">
                    
                                  @csrf
                                  @method('DELETE')
                                  <!-- Modal -->
                               <div class="modal fade" id="deleteModal">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Are you sure you want to delete?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                                <button type="submit" class="btn btn-danger">Yes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-danger" data-target="#deleteModal" data-toggle="modal"><i class="far fa-trash-alt"></i></button>

                                </form>                              
                            </td>
                        </tr>
                        @endforeach
                        @else
                <tr>
                    <td colspan="10">There are no Requests.</td>
                </tr>
                @endif
                    </tbody>
                </table>
            </div>
        </div>
</div>
    <div class="pagination-container">
        {{ $document_requests->links() }}
    </div>
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