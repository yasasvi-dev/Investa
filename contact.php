<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>PayGlitz - Credit Collection Center</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <?php
        include "head.php";
        ?>
    </head>

    <body>

        <!-- Spinner Start -->
        <!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div> -->
        <!-- Spinner End ->


        <!-- Topbar Start -->
        <div class="container-fluid topbar px-0 d-none d-lg-block">
            <div class="container px-0">
                <div class="row gx-0 align-items-center" style="height: 45px;">
                    <div class="col-lg-8 text-center text-lg-start mb-lg-0">
                        <div class="d-flex flex-wrap">
                            <a href="#" class="text-muted me-4"><i class="fas fa-map-marker-alt text-primary me-2"></i>Srilanka</a>
                            <a href="#" class="text-muted me-4"><i class="fas fa-phone-alt text-primary me-2"></i>+091 234 567 89</a>
                            <a href="#" class="text-muted me-0"><i class="fas fa-envelope text-primary me-2"></i>PayGlitz@gmail.com</a>
                        </div>
                    </div>
                    <div class="col-lg-4 text-center text-lg-end">
                        <div class="d-flex align-items-center justify-content-end">
                            <a href="#" class="btn btn-primary btn-square rounded-circle nav-fill me-3"><i class="fab fa-facebook-f text-white"></i></a>
                            <a href="#" class="btn btn-primary btn-square rounded-circle nav-fill me-3"><i class="fab fa-twitter text-white"></i></a>
                            <a href="#" class="btn btn-primary btn-square rounded-circle nav-fill me-3"><i class="fab fa-instagram text-white"></i></a>
                            <a href="#" class="btn btn-primary btn-square rounded-circle nav-fill me-0"><i class="fab fa-linkedin-in text-white"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar End -->


        <!-- Navbar & Hero Start -->
        <div class="container-fluid sticky-top px-0">
            <div class="position-absolute bg-dark" style="left: 0; top: 0; width: 100%; height: 100%;">
            </div>
            <div class="container px-0">
                <nav class="navbar navbar-expand-lg navbar-dark bg-white py-3 px-4">
                    <a href="index.php" class="navbar-brand p-0">
                        <h1 class="text-primary m-0"><i class="fas fa-donate me-3"></i>PayGlitz</h1>
                        <!-- <img src="img/logo.png" alt="Logo"> -->
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="navbar-nav ms-auto py-0">
                            <a href="index.php" class="nav-item nav-link active">Home</a>
                            <a href="dashboard.php" class="nav-item nav-link">Dashboard</a>
                            <a href="service.php" class="nav-item nav-link">Services</a>
                            <!-- <a href="project.php" class="nav-item nav-link">Projects</a> -->
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Client Portal</a>
                                <div class="dropdown-menu m-0">
                                    <a href="customer.php" class="dropdown-item">Customer</a>
                                    <a href="creditbill.php" class="dropdown-item">Credit Bill</a>
                                    <a href="collection.php" class="dropdown-item">Collection</a>
                                    <a href="report.php" class="dropdown-item">Report</a>
                                    <a href="ccc.php" class="dropdown-item">ccc</a>
                                </div>
                            </div>
                            <a href="contact.php" class="nav-item nav-link">Contact Us</a>
                            <a href="login.php" class="nav-item nav-link">Login</a>
                            
                        </div>
                        <div class="d-flex align-items-center flex-nowrap pt-xl-0">
                            <button class="btn btn-primary btn-md-square mx-2" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fas fa-search"></i></button>
                            <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 ms-2 flex-wrap flex-sm-shrink-0">Start C3</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Navbar & Hero End -->

        <!-- Modal Search Start -->
        <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h4 class="modal-title mb-0" id="exampleModalLabel">Search by keyword</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center">
                        <div class="input-group w-75 mx-auto d-flex">
                            <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
                            <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Search End -->
         <body>

         <div class="container">
            <h1><b>Contact</b></h1>
        
        <h4>Get connected to get paid</h4>
        <br>
        <div class="col-sm-6 col-md-6 col-lg-6 text-left">
        <h6>We are more than happy to share our expertise with you.<br> We at PayGlitz are devoted to the prompt and professional
         recovery of past due accounts. We have built our infrastructure with the technological and personnel capacity for
          exponential growth while maintaining a high standard of personal account service.</h6>
</div>
<br>


<div class="container py-5">
  <div class="row g-5">
    <div class="col-md-6 col-lg-6">  <i class="fas fa-map-marker-alt text-primary me-2"></i>
      <b>Head Office</b><br>
      PayGlitz (Private) Limited<br>
      No: 111,<br>
      Beverly Street,<br>
      Negombo,<br>
      Sri Lanka.
      <br>
    </div>
    <div class="col-md-6 col-lg-6">  <i class="far fa-file-alt text-primary me-2"></i>
      <b>Other Inquiries</b><br>
      General Line: +091 234 567 89<br>
      E-mail: sassociates@sltnet.lk<br>
    </div>
  </div>
</div>



<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.2477914287215!2d79.85019281018958!3d7.212549192763101!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2eeeb4b5b7a97%3A0xef540f20b270e553!2sBeverly%20St%2C%20Negombo!5e0!3m2!1sen!2slk!4v1726665974576!5m2!1sen!2slk" width="1100" height="450" style="border:1;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> 
    <br>   
<!-- Footer Start -->
<div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <div class="footer-item">
                                <h4 class="text-white mb-4">PayGlitz</h4>
                                <p class="mb-3">Most organizations, as practiced globally, solicit the services of External Collection Agencies to handle their collection and recovery functions. It is important that a Collection Agency with expertise and credentials is selected for this task</p>
                                <div class="position-relative mx-auto rounded-pill">
                                    <!-- <input class="form-control rounded-pill w-100 py-3 ps-4 pe-5" type="text" placeholder="Enter your email">
                                    <button type="button" class="btn btn-primary rounded-pill position-absolute top-0 end-0 py-2 mt-2 me-2">SignUp</button> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="text-white mb-4">Explore</h4>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Home</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Services</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> About Us</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Latest Projects</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> testimonial</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Our Team</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Contact Us</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="text-white mb-4">Contact Info</h4>
                            <a href=""><i class="fa fa-map-marker-alt me-2"></i> Beverly Street, Negombo , Sri Lanka</a>
                            <a href=""><i class="fas fa-envelope me-2"></i> payglitz@collection.com</a>
                            <a href=""><i class="fas fa-envelope me-2"></i> payzone@credit.com</a>
                            <a href=""><i class="fas fa-phone me-2"></i> +091 234 567 89</a>
                            <a href="" class="mb-3"><i class="fas fa-print me-2"></i> +62 3416789</a>
                            <div class="d-flex align-items-center">
                                <a class="btn btn-light btn-md-square me-2" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-light btn-md-square me-2" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-light btn-md-square me-2" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-light btn-md-square me-0" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item-post d-flex flex-column">
                            <h4 class="text-white mb-4">Popular Post</h4>
                            <div class="d-flex flex-column mb-3">
                                <p class="text-uppercase text-primary mb-2">Investment</p>
                                <a href="#" class="text-body">Revisiting Your Investment & Distribution Goals</a>
                            </div>
                            <div class="d-flex flex-column mb-3">
                                <p class="text-uppercase text-primary mb-2">Business</p>
                                <a href="#" class="text-body">Dimensional Fund Advisors Interview with Director</a>
                            </div>
                            <div class="footer-btn text-start">
                                <a href="#" class="btn btn-light rounded-pill px-4">View All Post <i class="fa fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        
        <!-- Copyright Start -->
        <div class="container-fluid copyright py-4">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-md-6 text-center text-md-start mb-md-0">
                        <span class="text-body"><a href="#" class="border-bottom text-primary"><i class="fas fa-copyright text-light me-2"></i>PayGlitz</a>, All right reserved.</span>
                    </div>
                    <div class="col-md-6 text-center text-md-end text-body">
                        <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                        <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                        <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                        Designed By <a class="border-bottom text-primary" href="https://htmlcodex.com">sasvi</a> Distributed By <a class="border-bottom text-primary" href="https://themewagon.com">Payzone</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>