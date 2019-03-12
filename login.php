<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.hassandesigns.top/html/lawfirm/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 31 Jan 2019 04:15:09 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Law Info</title>

<!-- Fav Icon -->
<link rel="shortcut icon" href="favicon.ico">

<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="rs-plugin/css/settings.css">
<link href="css/font-awesome.css" rel="stylesheet">
<link href="css/owl.carousel.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
</head>
<body>


  <!-- Header Start-->
<?php include('header/header.php'); ?>
<!-- Header End-->

<!--Inner Heading start-->
<div class="inner-heading">
  <div class="container">
    <h3>Login</h3>
  </div>
</div>
<!--Inner Heading end--> 

<!--inner-content start-->
<div class="inner-content innerbg">
  <div class="container"> 
    
    <!-- Login start -->
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6">
        <div class="login">
          <div class="contctxt">User <span>Login</span></div>
          <div class="formint conForm">
          <h2 class="error-msg"><?php include_once('includes/message.php'); ?></h2>
            <form action="login_confirm.php" method="post">
              <div class="input-wrap">
                <label class="input-group-addon">Email</label>
                <input type="text" name="email" placeholder="User Name" class="form-control">
              </div>
              <div class="input-wrap">
                <label class="input-group-addon">Password</label>
                <input type="password" name="password" placeholder="Password" class="form-control" required id="myInput">
              </div>
              
              <div class="input-group-addon"><b>Show password<b></div>
              <input  type="checkbox" onclick="myFunction()">
            </div>
              <div class="sub-btn">
                <input type="submit" class="sbutn" value="Login">
              </div>
              
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-3"></div>
    </div>
    
    <!-- Login end --> 
    
  </div>
</div>
<!--inner-content end--> 


<!-- footer start -->
<?php include('header/footer.php')?>
<!-- footer end --> 
 

<!--page scroll start-->
<div class="page-scroll scrollToTop"><a href="#"><i class="fa fa-arrow-up" aria-hidden="true"></i></a></div>
<!--page scroll start-->

<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/jquery-2.1.4.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<!-- Load JS siles --> 
<script src="js/owl.carousel.js"></script> 
<!-- SLIDER REVOLUTION SCRIPTS  --> 
<script src="rs-plugin/js/jquery.themepunch.tools.min.js"></script> 
<script src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script> 
<!-- general script file --> 
<script src="js/script.js"></script> 
<script>
        function myFunction() {
          var x = document.getElementById("myInput");
          if (x.type === "password") {
            x.type = "text";
          } 
          else {
             x.type = "password";
          }
        }
      </script>

</body>

<!-- Mirrored from www.hassandesigns.top/html/lawfirm/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 31 Jan 2019 04:15:09 GMT -->
</html>