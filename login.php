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


<body class="img js-fullheight bg-light" style="background-image: url(img/credit.jpeg);">
<form class="card p-4" method="post" id="formfacid" style="background-color: rgba(255, 255, 255, 0.4);">
<!-- <section class=" section-padding bg-info bg-gradient" > -->

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="sectioner-header text-center ">
          <h1 class="white"> LOGIN</h1>
          <br>
		
<div class="col-sm-12 col-md-12 col-lg-12 text-center">
              <form id="loginform" action="#" method="post">
                <div class="row">
                  <div class="col">
                    <p class="white"><b>Username <span class="text-danger">* </span></b></p>
                  </div>
                  <div class="col">
                    <input type="text" id="cname" class="form-control border-light rounded-pill w-75" name="cname" minlength="5" required>
                  </div>
                </div>
                <br>
				 <div class="row">
                  <div class="col">
                    <p class="white"><b>Password</b></p>
                  </div>
                  <div class="col">
                    <input type="password" id="cpword" class="form-control border-light rounded-pill w-75" name="cpword" required>
                  </div>
                </div><br>
                 <button class="btn btn-grad w-25 text-uppercase" type="submit" name="button">Sign in</button>
				 </div>
				</form>
			  <div id='creditdata'></div> 
            </div>

	   </div>
      </div>
      
    </div>
  </div>
</section>

<?php include "foot.php" ?> 
<script>

	wow = new WOW();
	wow.init();
$(document).ready(function(e) {
$("#loginform").submit( function (e){
	
	e.preventdefault();
	var vals =$("input").map(function(){ return $(this).val() }).get();
	// alert(vals);
$.ajax({
	type:'post',
	data:{vals:vals},
	url:'logdata.php',
	success: function (json){   $('#creditdata').html(json); alert(json) ;     } 
})
	})
	
});
    
$(window).on("scroll",function () {

	var bodyScroll = $(window).scrollTop(),
	navbar = $(".navbar");
	
	if(bodyScroll > 50){
	$('.navbar-logo img').attr('src','images/logo-black.png');
	navbar.addClass("nav-scroll");

}else{
	$('.navbar-logo img').attr('src','images/logo.png');
	navbar.removeClass("nav-scroll");
}

});
$(window).on("load",function (){
	var bodyScroll = $(window).scrollTop(),
	navbar = $(".navbar");
	
	if(bodyScroll > 50){
	$('.navbar-logo img').attr('src','images/logo-black.png');
	navbar.addClass("nav-scroll");
	}else{
	$('.navbar-logo img').attr('src','images/logo-white.png');
	navbar.removeClass("nav-scroll");
	}

	$.scrollIt({
	
	easing: 'swing',      // the easing function for animation
	scrollTime: 900,       // how long (in ms) the animation takes
	activeClass: 'active', // class given to the active nav element
	onPageChange: null,    // function(pageIndex) that is called when page is changed
	topOffset: -63
	});
});

</script>
</body>
</html>