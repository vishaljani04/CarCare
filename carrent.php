<?php
session_start();
include('config.php');
if (!isset($_SESSION['email']) )
{
    header("Location: login.php");
    exit();
} 

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>CarCare - Home</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/car.svg" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@600;700&family=Ubuntu:wght@400;500&display=swap"
        rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-light p-0">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-map-marker-alt text-primary me-2"></small>
                    <small>123 Street, New York, USA</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center py-3">
                    <small class="far fa-clock text-primary me-2"></small>
                    <small>Mon - Fri : 09.00 AM - 09.00 PM</small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-phone-alt text-primary me-2"></small>
                    <small>+012 345 6789</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i
                            class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-3" href=""><i class="fab fa-instagram"></i></a>
                    <!-- <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i class="fas fa-sign-out-alt"></i></a> -->
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><i class="fa fa-car me-3"></i>CarCare</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.php" class="nav-item nav-link ">Home</a>
                <a href="about.php" class="nav-item nav-link">About</a>
                <a href="service.php" class="nav-item nav-link">Services</a>
                <a href="booking.php" class="nav-item nav-link">Booking</a>
                <a href="team.php" class="nav-item nav-link">Team</a>
                <a href="contact.php" class="nav-item nav-link">Contact</a>
                <a href="contact.php" class="nav-item nav-link ">Cars</a>
            </div>
            <div class="nav-item dropdown">
                <?php
                if (isset($_SESSION['email'])) {
                    $email = $_SESSION['email'];
                    $query = "SELECT * FROM register WHERE email='$email'";
                    $query_run = mysqli_query($conn, $query);
                    $checki = mysqli_num_rows($query_run) > 0;

                    if ($checki) {
                        while ($row = mysqli_fetch_array($query_run)) {
                            ?>
                            <a href="" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">
                                <?php echo $row['name']; ?>
                            </a>
                            <div class="dropdown-menu fade-up m-0">
                                <?php if (isset($_SESSION['email'])) { ?>
                                    <a href="logout.php" class="btn btn-secondary py-4 px-lg-5 d-none d-lg-block">Logout<i
                                            class="fa fa-arrow-right ms-3"></i></a>
                                <?php } ?>
                            </div>
                            <?php
                        }
                    } else {
                        header("Location:404.php");
                    }
                } else {
                    ?>
                    <a href="login.php" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Login</a>
                    <?php
                }
                ?>
            </div>

        </div>
    </nav>

    <br><br><br><br>


    <div class="container-fluid p-0 mb-5">

    <div class="col-lg-8 " style="margin-left:350px">
                    <div class="bg-primary h-100 d-flex flex-column justify-content-center text-center p-5 wow zoomIn" data-wow-delay="0.6s">
                        <h1 class="text-white mb-4">Rent A Car</h1>
                        <form action="bookingcode.php" method="post">
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" placeholder="Your First Name" style="height: 55px;" name="fname">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" placeholder="Your last name" style="height: 55px;" name="lname">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <!-- <select class="form-select border-0" style="height: 55px;" name="services">
                                        <option selected>Choose services</option>
                                        <option value="Waterless Car Wash">Waterless car Wash</option>
                                        <option value="Car Services">Car Services (test,oil,etc)</option>
                                        <option value="Car Rent">Car Rent</option>
                                    </select> -->
                                    <input type="email" class="form-control border-0" placeholder="Your Email" style="height: 55px;" name="email">

                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="number" id="" data-target-input="nearest">
                                        <!-- <input type="text"
                                            class="form-control border-0 datetimepicker-input"
                                            placeholder="Service Date" data-target="#date1" data-toggle="datetimepicker" style="height: 55px;" name="date"> -->
                                            <input type="text" class="form-control border-0" placeholder="Your Mobile.no" style="height: 55px;" name="num">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <!-- <textarea class="form-control border-0" placeholder="Special Request" name="message"></textarea> -->
                                     <input type="date"
                                            class="form-control border-0 datetimepicker-input"
                                            placeholder="Birth Date" data-target="#date1" data-toggle="datetimepicker" style="height: 55px;" name="date">
                                </div>
                                <div class="col-12">
                                 <select class="form-select border-0" style="height: 55px;" name="state">
                                 <option value="Andhra Pradesh" selected>Andhra Pradesh</option>
                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                        <option value="Assam">Assam</option>
                        <option value="Bihar">Bihar</option>
                        <option value="Chhattisgarh">Chhattisgarh</option>
                        <option value="Goa">Goa</option>
                        <option value="Gujarat">Gujarat</option>
                        <option value="Haryana">Haryana</option>
                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                        <option value="Jammu Kashmir">Jammu Kashmir</option>
                        <option value="Jharkhand">Jharkhand</option>
                        <option value="Karnataka">Karnataka</option>
                        <option value="kerala">kerala</option>
                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                        <option value="Maharashtra">Maharashtra</option>
                        <option value="Manipur">Manipur</option>
                        <option value="Meghalaya">Meghalaya</option>
                        <option value="Mizoram">Mizoram</option>
                        <option value="Nagaland">Nagaland</option>
                        <option value="Odisha">Odisha</option>
                        <option value="Punjab">Punjab</option>
                        <option value="Rajasthan">Rajasthan</option>
                        <option value="Sikkim">Sikkim</option>
                        <option value="Tamil Nadu">Tamil Nadu</option>
                        <option value="Telangana">Telangana</option>
                        <option value="Tripura">Tripura</option>
                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                        <option value="Uttarakhand">Uttarakhand</option>
                        <option value="West Bengal">West Bengal</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                <select class="form-select border-0" style="height: 55px;" name="cars" required>
                                    <option >Car Name</option>
                                    <option >Car Name</option>
                                    <option >Car Name</option>
                                    <option >Car Name</option>
                                    <option >Car Name</option>
                                    <option >Car Name</option>
                                    <option >Car Name</option>
                                    <option >Car Name</option>
                                    <option >Car Name</option>
                                    <option >Car Name</option>
                                </select> 
                                </div>

                                <div class="col-12">
                                <input type="text" class="form-control border-0" placeholder="Your City" style="height: 55px;" name="city">
                                </div>

                                <div class="col-12">
                                 <textarea class="form-control border-0" placeholder="Address.." name="address"></textarea>
                                </div>

                                <div class="col-12">
                                <select class="form-select border-0" style="height: 55px;" name="gender" required>
                                    <option value="Choice gender"  >Choice A Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Tranzander">Tranzander</option>
                                </select> 
                                </div>
                                
                                <div class="col-12">
                                    <button class="btn btn-secondary w-100 py-3" type="submit" name="carrent">Book Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
        </div>



    </div>
    <!-- Navbar End -->





    <div class="container-fluid fact bg-dark my-5 py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                    <i class="fa fa-check fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">15</h2>
                    <p class="text-white mb-0">Years Experience</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                    <i class="fa fa-users-cog fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">128</h2>
                    <p class="text-white mb-0">Expert Technicians</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                    <i class="fa fa-users fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">812</h2>
                    <p class="text-white mb-0">Satisfied Clients</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                    <i class="fa fa-car fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">286</h2>
                    <p class="text-white mb-0">Compleate Projects</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel Start -->

    <!-- Carousel End -->


    <!-- Service Start -->

    <!-- Service End -->


    <!-- About Start -->

    <!-- About End -->


    <!-- Fact Start -->

    <!-- Fact End -->


    <!-- Service Start -->

    <!-- Service End -->


    <!-- Booking Start -->

    <!-- Booking End -->


    <!-- Team Start -->

    <!-- Team End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Address</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Opening Hours</h4>
                    <h6 class="text-light">Monday - Friday:</h6>
                    <p class="mb-4">09.00 AM - 09.00 PM</p>
                    <h6 class="text-light">Saturday - Sunday:</h6>
                    <p class="mb-0">09.00 AM - 12.00 PM</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Services</h4>
                    <a class="btn btn-link" href="">Diagnostic Test</a>
                    <a class="btn btn-link" href="">Engine Servicing</a>
                    <a class="btn btn-link" href="">Tires Replacement</a>
                    <a class="btn btn-link" href="">Oil Changing</a>
                    <a class="btn btn-link" href="">Vacuam Cleaning</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Newsletter</h4>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button"
                            class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">Car Care</a>, All Right Reserved.

                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a class="border-bottom" href="https://www.linkedin.com/in/vishaljanidev07" target="_blank">Vish Jani</a>
                        <br>Distributed For: <a class="border-bottom" href="https://themewagon.com" >CarCare Team</a>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="">Home</a>
                            <a href="">Cookies</a>
                            <a href="">Help</a>
                            <a href="">FQAs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


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


</body>


</html>