<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>credit collection</title>
<?php
include "head.php";
?>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<?php 
include "dbase.php";
include "sqlobj.php";
$myclass=new sqlobj($bdd);
$str1="select * from customer";
$rec=$myclass->getlines($str1);
echo  "count of $rec";
$cno=$myclass->maxacno("customer",array(),"cno");
echo "cno is $cid";
$ck=$_COOKIE["login"]; echo  "cook is $ck";
$ckarr =explode(":",$ck);echo "ulevel is $ckarr[1]";
$ulevel=$ckarr[1];
$str1="select * from ulevel where ulevel like('%$ulevel%')";
$rs2=$bdd->query($str1) or die ("error on $str1");
    echo $str1;
?>
 
<!-- Topbar Start -->
<div class="container-fluid topbar px-0 d-none d-lg-block">
            <div class="container px-0">
                <div class="row gx-0 align-items-center" style="height: 45px;">
                    <div class="col-lg-8 text-center text-lg-start mb-lg-0">
                        <div class="d-flex flex-wrap">
                            <a href="#" class="text-muted me-4"><i class="fas fa-map-marker-alt text-primary me-2"></i>Srilanka</a>
                            <a href="#" class="text-muted me-4"><i class="fas fa-phone-alt text-primary me-2"></i>+09123456789</a>
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
                            <a href="contact.php" class="nav-item nav-link">Contact Us</a>
                            
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
                            <a href="login.php" class="nav-item nav-link">Login</a>
                        </div>
                        <!-- <div class="d-flex align-items-center flex-nowrap pt-xl-0">
                            <button class="btn btn-primary btn-md-square mx-2" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fas fa-search"></i></button>
                            <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 ms-2 flex-wrap flex-sm-shrink-0">Start C3</a>
                        </div> -->
                    </div>
                </nav>
            </div>
        </div>
        <!-- Navbar & Hero End -->
 <!-- Modal Search Start -->
 <!-- <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
        </div> -->
        <!-- Modal Search End -->
               
<body class="img js-fullheight bg-light" style="background-image: url(img/credit.jpeg);">
<form class="card p-4" method="post" id="formcusid" style="background-color: rgba(255, 255, 255, 0.4);">
<!-- <section class=" section-padding bg-info bg-gradient" > -->


  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="sectioner-header text-center ">
          <h1 class="white">Register New Customer</h1>
          <br>
		
<div class="col-sm-12 col-md-12 col-lg-12 text-center">
              <form id="loginform" action="#" method="post">
                <div class="row">
                  <div class="col">
                    <!-- <p class="white"><b>Customer Number</b></p>
                  </div>
                  <div class="col">
                    <input type="" id="cno" class="form-control border-light rounded-pill w-75" name="cno" required>
                  </div>
                </div><br> -->
                <div class="row">
                  <div class="col">
                    <p class="white"><b>Customer Name </b></p>
                  </div>
                  <div class="col">
                    <input type="text" id="cname" class="form-control border-light rounded-pill w-75" name="cname" minlength="5" required>
                  </div>
                </div>
                <br>
				 <div class="row">
                  <div class="col">
                    <p class="white"><b>Address</b></p>
                  </div>
                  <div class="col">
                    <input type="text" id="cadd" class="form-control border-light rounded-pill w-75" name="cadd" required>
                  </div>
                </div><br>
                <div class="row">
                  <div class="col">
                    <p class="white"><b>Telephone Number</b></p>
                  </div>
                  <div class="col">
                    <input type="text" id="ctel" class="form-control border-light rounded-pill w-75" name="ctel" required>
                  </div>
                </div><br>
                
                 <button class="bg-dark-500 hover:bg-dark-700 text-primary font-bold py-2 px-4 rounded shadow-md transition-all duration-200 ease-in-out" type="button" name="button" onclick="custreg()">Register</button>
              </form>
              
              
         

              <br>
			  <div id='creditdata'>  </div>
            
            <div class="container">
        <div class="row">
            <div id="tablelist" class="col-md-12">
            </div>
        </div>
</div>

     </body>

       
</section>

<?php include "foot.php" ?>
<script type="text/javascript">
        $(document).ready(function(){
          showlist()
            $("#formcusid").submit(function(e) {
                e.preventDefault();
                find();
            });
           
        });
        function custreg(){
            var vals = $("input").map(function(){return $(this).val()}).get()
            alert("success");
            $.ajax({
                type:'post',
                data:{pvals:vals},
                url:'custsave.php',
                success:function (json){ $("#creditdata").html(json)   }
            });
        }
        function showlist(){
          $.ajax({
            type:'post',
            data:{ },
            url:'custlist.php',
            success:function(responce){
              $("#tablelist").html(responce);
    }
  })
}
        


</script>
<!-- Footer Start -->
<div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
            <div class="container py-0">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <div class="footer-item">
                                <h4 class="text-white mb-4">Newsletter</h4>
                                <p class="mb-3">Dolor amet sit justo amet elitr clita ipsum elitr est.Lorem ipsum dolor sit amet, consectetur adipiscing elit consectetur adipiscing elit.</p>
                                <div class="position-relative mx-auto rounded-pill">
                                    <input class="form-control rounded-pill w-100 py-3 ps-4 pe-5" type="text" placeholder="Enter your email">
                                    <button type="button" class="btn btn-primary rounded-pill position-absolute top-0 end-0 py-2 mt-2 me-2">SignUp</button>
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
                            <a href=""><i class="fa fa-map-marker-alt me-2"></i> Beverly Street, Colombo , Sri Lanka</a>
                            <a href=""><i class="fas fa-envelope me-2"></i> payglitz@collection.com</a>
                            <a href=""><i class="fas fa-envelope me-2"></i> payzone@credit.com</a>
                            <a href=""><i class="fas fa-phone me-2"></i> +94 3456719</a>
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
         

</body>
</html>