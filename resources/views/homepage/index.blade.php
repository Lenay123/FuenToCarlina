<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Barangay Connect</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link rel="icon" href="{{ asset('img/image (5).png') }}">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>
<style>
body {
    font-family: 'Poppins', sans-serif;
 }
 </style>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-light d-none d-lg-block">
        <div class="row align-items-center top-bar">
            <div class="col-lg-3 col-md-12 text-center text-lg-start">
                <a href="" class="navbar-brand m-0 p-0">
                    <h1 class="text-primary m-0">Barangay Connect</h1>
                </a>
            </div>
            <div class="col-lg-9 col-md-12 text-end">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <i class="fa fa-map-marker-alt text-primary me-2"></i>
                    <p class="m-0">Nabunturan, Barili, Cebu</p>
                </div>
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <i class="far fa-envelope-open text-primary me-2"></i>
                    <p class="m-0">nabunturan.barili@gmail.com</p>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <a class="btn btn-sm-square bg-white text-primary me-1" href="https://www.facebook.com/profile.php?id=100084244796789"><i class="fab fa-facebook-f"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid nav-bar bg-light">
        <nav class="navbar navbar-expand-lg navbar-light bg-white p-3 py-lg-0 px-lg-4">
            <a href="" class="navbar-brand d-flex align-items-center m-0 p-0 d-lg-none">
                <h1 class="text-primary m-0">Barangay Connect</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav me-auto">
                    <a href="/" class="nav-item nav-link active">Home</a>
                    <a href="{{route('about')}}" class="nav-item nav-link">About</a>
                    <a href="{{route('service')}}" class="nav-item nav-link">Services</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu fade-up m-0">
                            <a href="{{route('barangayofficials')}}" class="dropdown-item">Barangay Officials</a>
                            <a href="{{route('testimonial')}}" class="dropdown-item">Testimonial</a>
                            <a href="{{route('activities')}}" class="dropdown-item">Activities</a>
                        </div>
                    </div>
                    <a href="{{route('contact')}}" class="nav-item nav-link">Contact</a>
                    <div class="nav-item dropdown">
                    <a href="{{ route('login') }}" class="nav-item nav-link" target="_blank">LOGIN</a>         
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="{{ asset('img/Home3.jpg')}}" style="object-fit: cover;">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(68, 65, 65, 0.4);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h1 class="display-3 text-white animated slideInDown mb-4">Welcome to Barangay Connect.</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2">Providing long-lasting impact to communities by enabling a holistic and data-driven transformation of local leaderships from the Barangays to LGU's.</p>
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">YOU CAN APPLY,  ANYTIME,  ANYWHERE</h5>
                                <a href="homepage/login" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Request Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Additional slides -->
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="{{ asset('/img/bg2.jpg')}}" style="object-fit: cover;">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(68, 65, 65, 0.4);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h1 class="display-3 text-white animated slideInDown mb-4">Welcome to Barangay Connect.</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2">Empowering Communities, Transforming Leadership: A Data-Driven Journey from Barangays to LGUs for Lasting Impact</p>
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">YOU CAN APPLY,  ANYTIME,  ANYWHERE</h5>
                                <a href="homepage/login" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Request Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="{{ asset('/img/budgetmanage.jpg')}}" style="object-fit: cover;">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(68, 65, 65, 0.4);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h1 class="display-3 text-white animated slideInDown mb-4">Welcome to Barangay Connect.</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2">Simplify Your Document Requests: Easy Online Process for Quick and Convenient Transactions.</p>
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">YOU CAN APPLY,  ANYTIME,  ANYWHERE</h5>
                                <a href="homepage/login" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Request Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
            <!-- Add more slides as needed -->
    
        </div>
    </div>
    
    <!-- Carousel End -->



    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-secondary text-uppercase">About Us</h6>
                    <h1 class="mb-4">Our Mission and Vision</h1>
                    <p class="mb-4">To design, develop, and implement an automated document processing system to streamline and improve the efficiency of document requests in Barangay Nabunturan, Barili, Cebu. The system aims to simplify the manual process and provide a user-friendly platform for residents to submit, track, and receive their requested documents.</p>
                    <p class="fw-medium text-primary"><i class="fa fa-check text-success me-3"></i>Hassle-free Services</p>
                    <p class="fw-medium text-primary"><i class="fa fa-check text-success me-3"></i>Quality Services</p>
                    <p class="fw-medium text-primary"><i class="fa fa-check text-success me-3"></i>Immediate 24/ 7 services</p>
                </div>
                <div class="col-lg-6 pt-4" style="min-height: 500px;">
                    <div class="position-relative h-100 wow fadeInUp" data-wow-delay="0.5s">
                        <img class="position-absolute img-fluid w-100 h-100" src="img/about-1.jpg" style="object-fit: cover; padding: 0 0 50px 100px;" alt="">
                        <img class="position-absolute start-0 bottom-0 img-fluid bg-white pt-2 pe-2 w-50 h-50" src="img/about-2.jpg" style="object-fit: cover;" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Fact Start -->
    <div class="container-fluid fact bg-dark my-5 py-5" style="background: linear-gradient(rgba(89, 86, 86, 0.4), rgba(0, 0, 0, 0.4)), url('/img/bg2.jpg') center center no-repeat;">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                    <i class="fa fa-check fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">Over 1000</h2>
                    <p class="text-white mb-0">Residents</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                    <i class="fa fa-users-cog fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">20</h2>
                    <p class="text-white mb-0">Barangay Officials</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                    <i class="fa fa-users fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">800</h2>
                    <p class="text-white mb-0">Satisfied Clients</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Fact End -->


    <!-- Service Start -->
    <div class="container-fluid py-5 px-4 px-lg-0">
        <div class="row g-0">
            <div class="col-lg-3 d-none d-lg-flex">
                <div class="d-flex align-items-center justify-content-center bg-primary w-100 h-100">
                    <h1 class="display-3 text-white m-0" style="transform: rotate(-90deg);">Barangay Connect</h1>
                </div>
            </div>
            <div class="col-md-12 col-lg-9">
                <div class="ms-lg-5 ps-lg-5">
                    <div class="text-center text-lg-start wow fadeInUp" data-wow-delay="0.1s">
                        <h6 class="text-secondary text-uppercase">Our Services</h6>
                        <h1 class="mb-5">Explore Our Services</h1>
                    </div>
                    <div class="" data-wow-delay="0.1s">
                        <div class="bg-light p-4">
                            <div class="d-flex align-items-center justify-content-center border border-5 border-white mb-4" style="width: 75px; height: 75px;">
                                <i class="fa fa-water fa-2x text-primary"></i>
                            </div>
                            <h4 class="mb-3">Barangay Business Permit</h4>
                            <p>This is a critical document required for individuals or entities engaging in business activities within a specific barangay in the Philippines. This permit holds paramount importance as it signifies compliance with local regulations and allows businesses to operate legally at the community level. It is a fundamental prerequisite for obtaining higher-level business permits and licenses from municipal or city offices.</p>
                            <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Quality Service</p>
                            <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Customer Satisfaction</p>
                            <a href="{{route('login')}}" class="btn bg-white text-primary w-100 mt-2">Request Now<i class="fa fa-arrow-right text-secondary ms-2"></i></a>
                        </div>
                        <div class="bg-light p-4">
                            <div class="d-flex align-items-center justify-content-center border border-5 border-white mb-4" style="width: 75px; height: 75px;">
                                <i class="fa fa-toilet fa-2x text-primary"></i>
                            </div>
                            <h4 class="mb-3">Barangay Indigency</h4>
                            <p>This is a document issued by the barangay in the Philippines to certify that an individual or family qualifies as indigent or financially disadvantaged. It plays a crucial role in ensuring that those in need receive the necessary support, promoting inclusivity and addressing socio-economic disparities at the grassroots level.
</p>
                            <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Quality Service</p>
                            <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Customer Satisfaction</p>
                            <a href="{{route('login')}}" class="btn bg-white text-primary w-100 mt-2">Request Now<i class="fa fa-arrow-right text-secondary ms-2"></i></a>
                        </div>
                        <div class="bg-light p-4">
                            <div class="d-flex align-items-center justify-content-center border border-5 border-white mb-4" style="width: 75px; height: 75px;">
                                <i class="fa fa-shower fa-2x text-primary"></i>
                            </div>
                            <h4 class="mb-3">Barangay Certificate</h4>
                            <p>This certificate holds significant importance as it serves as proof of residency within Barangay Nabunturan. It is frequently required for various transactions, such as employment, business permits, and government-related services. This also plays a vital role in local governance, facilitating community engagement, participation in elections, and access to emergency services.</p>
                            <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Quality Service</p>
                            <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Customer Satisfaction</p>
                            <a href="{{route('login')}}" class="btn bg-white text-primary w-100 mt-2">Request Now<i class="fa fa-arrow-right text-secondary ms-2"></i></a>
                        </div>
                        <div class="bg-light p-4">
                            <div class="d-flex align-items-center justify-content-center border border-5 border-white mb-4" style="width: 75px; height: 75px;">
                                <i class="fa fa-tint fa-2x text-primary"></i>
                            </div>
                            <h4 class="mb-3">Barangay ID</h4>
                            <p>This is a valuable document that serves as proof of residence within Barangay Nabunturan, carrying significant importance in various aspects of daily life. It is essential for transactions such as opening a bank account, availing local community services, participating in elections and contributing to the efficient functioning of local governance structures.</p>
                            <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Quality Service</p>
                            <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Customer Satisfaction</p>
                            <a href="{{route('login')}}" class="btn bg-white text-primary w-100 mt-2">Request Now<i class="fa fa-arrow-right text-secondary ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="text-secondary text-uppercase">Testimonial</h6>
                <h1 class="mb-5">Our Clients Say!</h1>
            </div>
            <div class="" data-wow-delay="0.1s">
                <div class="testimonial-item text-center">
                    <div class="testimonial-text bg-light text-center p-4 mb-4">
                        <p class="mb-0">It's not just about the services they provide; it's the way Barangay Nabunturan Barili Cebu builds relationships. Their team is responsive, knowledgeable, and always willing to go the extra mile.</p>
                    </div>
                    <img class="bg-light rounded-circle p-2 mx-auto mb-2" src="{{ asset('img/user.png') }}" style="width: 80px; height: 80px;">
                    <div class="mb-2">
                        <small class="fa fa-star text-secondary"></small>
                        <small class="fa fa-star text-secondary"></small>
                        <small class="fa fa-star text-secondary"></small>
                        <small class="fa fa-star text-secondary"></small>
                        <small class="fa fa-star text-secondary"></small>
                    </div>
                    <h5 class="mb-1">Evelyn Fuentes</h5>
                    <p class="m-0">Barangay Resident</p>
                </div>

                <div class="testimonial-item text-center">
                    <div class="testimonial-text bg-light text-center p-4 mb-4">
                        <p class="mb-0">It's not solely about the services they offer; it's the manner in which Barangay Nabunturan Barili Cebu cultivates relationships. Their team is not only responsive and knowledgeable but consistently goes the extra mile.</p>
                    </div>
                    <img class="bg-light rounded-circle p-2 mx-auto mb-2" src="{{ asset('img/user.png') }}" style="width: 80px; height: 80px;">
                    <div class="mb-2">
                        <small class="fa fa-star text-secondary"></small>
                        <small class="fa fa-star text-secondary"></small>
                        <small class="fa fa-star text-secondary"></small>
                        <small class="fa fa-star text-secondary"></small>
                        <small class="fa fa-star text-secondary"></small>
                    </div>
                    <h5 class="mb-1">Froilan Llanes</h5>
                    <p class="m-0">Barangay SK Chairman</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Address</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Nabunturan, Barili, Cebu</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>nabunturan.barili@gmail.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href="https://www.facebook.com/profile.php?id=100084244796789"><i class="fab fa-facebook-f"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Opening Hours</h4>
                    <h6 class="text-light">Monday - Friday:</h6>
                    <p class="mb-4">09.00 AM - 05.00 PM</p>

                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Services</h4>
                    <a class="btn btn-link" href="">Barangay Certificate</a>
                    <a class="btn btn-link" href="">Barangay Indigency</a>
                    <a class="btn btn-link" href="">Barangay Clearance</a>
                    <a class="btn btn-link" href="">Barangay ID</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Newsletter</h4>
                    <p>Nabunturan is a barangay in the municipality of Barili, in the province of Cebu. Its population as determined by the 2020 Census was 877. This represented 1.09% of the total population of Barili.</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">Barangay Connect</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a class="border-bottom" href="https://htmlcodex.com">FuenToCarlina</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script>
    // Initialize Owl Carousel
    $(document).ready(function(){
        $('.header-carousel').owlCarousel({
            items: 1,
            loop: true,
            autoplay: true,
            autoplayTimeout: 4000, // Set the autoplay interval in milliseconds (5 seconds in this example)
            animateOut: 'fadeOut', // Set the animation type
            dots: false, // Set to true if you want to show navigation dots
        });
    });
</script>
</body>

</html>