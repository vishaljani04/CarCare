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
                <a href="cars.php" class="nav-item nav-link active">Cars</a>
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

        <div class="container">
            <div class="row  mb-5">
                <div class="card mb-4" style="width: 16rem;">
                    <img class="card-img-top" src="./img/card1.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Land Rover Range Rover Velar</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <br><br>
                            <a href="carbook.php" class="btn btn-primary">Book</a>
                            <a href="carrent.php" class="btn btn-success">Rent</a>

                        
                    </div>

                </div>


                <div class="card mb-4" style="width: 16rem;">
                    <img class="card-img-top" src="./img/card2.jpg  " alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Mercedes-Benz A-Class Limousine</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <br><br>
                            <a href="carbook.php" class="btn btn-primary">Book</a>
                            <a href="carrent.php" class="btn btn-success">Rent</a>
                    </div>
                </div>
                <div class="card mb-4" style="width: 16rem;">
                    <img class="card-img-top" src="./img/card3.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Lamborghini Huracan STO</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <i class="fa-regular fa-star"></i>
                            <br><br>
                            <a href="carbook.php" class="btn btn-primary">Book</a>
                            <a href="carrent.php" class="btn btn-success">Rent</a>
                    </div>
                </div>
                <div class="card mb-4" style="width: 16rem;">
                    <img class="card-img-top" src="./img/card4.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">BMW M2</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <br><br>
                            <a href="carbook.php" class="btn btn-primary">Book</a>
                            <a href="carrent.php" class="btn btn-success">Rent</a>
                        <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->

                    </div>
                </div>
                <div class="card mb-4" style="width: 16rem;">
                    <img class="card-img-top" src="./img/card5.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Porsche 911</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <i class="fa-regular fa-star"></i>
                            <br><br>
                            <a href="carbook.php" class="btn btn-primary">Book</a>
                            <a href="carrent.php" class="btn btn-success">Rent</a>
                        <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                    </div>
                </div>
                <div class="card mb-4" style="width: 16rem;">
                    <img class="card-img-top" src="./img/card6.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Rolls-Royce Phantom</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <i class="fa-regular fa-star"></i>
                            <br><br>
                            <a href="carbook.php" class="btn btn-primary">Book</a>
                            <a href="carrent.php" class="btn btn-success">Rent</a>
                        <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->

                    </div>
                </div>
                <div class="card mb-4" style="width: 16rem;">
                    <img class="card-img-top" src="./img/card7.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Ferrari F8 Tributo</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <br><br>
                            <a href="carbook.php" class="btn btn-primary">Book</a>
                            <a href="carrent.php" class="btn btn-success">Rent</a>
                        <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                    </div>
                </div>
                <div class="card mb-4" style="width: 16rem;">
                    <img class="card-img-top" src="./img/card8.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">McLaren 720S</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <i class="fa-regular fa-star"></i>
                            <br><br>
                            <a href="carbook.php" class="btn btn-primary">Book</a>
                            <a href="carrent.php" class="btn btn-success">Rent</a>
                        <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->

                    </div>
                </div>

                <div class="card mb-4" style="width: 16rem;">
                    <img class="card-img-top" src="./img/card8.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">McLaren 720S</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <i class="fa-regular fa-star"></i>
                            <br><br>
                            <a href="carbook.php" class="btn btn-primary">Book</a>
                            <a href="carrent.php" class="btn btn-success">Rent</a>
                        <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->

                    </div>
                </div>

                <div class="card mb-4" style="width: 16rem;">
                    <img class="card-img-top" src="./img/card8.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">McLaren 720S</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <i class="fa-regular fa-star"></i>
                            <br><br>
                            <a href="carbook.php" class="btn btn-primary">Book</a>
                            <a href="carrent.php" class="btn btn-success">Rent</a>
                        <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->

                    </div>
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
                        Designed By <a class="border-bottom" href="https://www.linkedin.com/in/vishaljanidev07/" target="_blank">Vish Jani</a>
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