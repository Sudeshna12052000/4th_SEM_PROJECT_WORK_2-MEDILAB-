<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Medilab➕</title>
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
    
    
  <style>
      #lgd{
          color: white;
          font-family:sans-serif;
      }
        #dc{
             text-align: center;   
            }
            
             a{
                color: aliceblue;
                font-size:20px;
            }
/*
            a:hover{
                color: ghostwhite;
                font-size: 30px;
                font-family: cursive;
                text-decoration: none;
            }
*/
        
    </style>
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
  <!--banner-->
  <section id="banner" class="banner">
    <div class="bg-color">
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="col-md-12">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>
              <a class="navbar-brand" href="#"><img src="img/logo.png" class="img-responsive" style="width: 140px; margin-top: -16px;"><h4 id="lgd"><?php
include("connection.php");
    error_reporting(0);
session_start();

echo "Welcome  ".$_SESSION['Email_ID'];
                  ?></h4></a>
            </div>
            <div class="collapse navbar-collapse navbar-right" id="myNavbar">
              <ul class="nav navbar-nav">
                <li class=""><a href="#">Home</a></li>
                <li class=""><a href="indexlog.php">Services</a></li>
                <li class="active"><a href="viewrepo.php">Lab-Report</a></li>
                <li class=""><a href="indexlog.php">About</a></li>
                <li class=""><a href="#contact">Contact</a></li>
                <li class=""><a href="index.html">Logout</a></li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
      <div class="container">
        <div class="row">
          <div class="banner-info">
            <div class="banner-logo text-center">
              <img src="img/logo.png" class="img-responsive">
            </div>
            <div class="banner-text text-center">
              <h1 class="white">Best diagnostic lab of the City!!</h1>
              <p>We provide the best service of all kind of diagnosis process and scaniing <br> Best lab technicians are available in us.</p>
              <a href="#report" class="btn btn-appoint">View Report</a>
            </div>
            <div class="overlay-detail text-center">
              <a href="#service"><i class="fa fa-angle-down"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ banner-->  
   
<!--Report-->
    <section id="report" class="section-padding">
    <div class="col-md-4"></div>
    <div class="col-md-3 jumbotron">
   <form id="form" action="genrepo.php" method="POST">
    
    <div class="form-group">
    <label for="Sl_no">Enter Patient ID</label>
    <input type="number" class="form-control" id="Sl_no" name="Sl_no" required>
  </div>

    <button type="submit" class="btn btn-info btn-sm btn-block" name="submit">Generate</button>
             
</form>
    </div>
    <div class="col-md-4"></div>
    </section>
    
<!--/Report-->


    
  <!--contact-->
  <section id="contact" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="ser-title">Contact us</h2>
          <hr class="botm-line">
        </div>
        <div class="col-md-4 col-sm-4">
          <h3>Contact Info</h3>
          <div class="space"></div>
          <p><i class="fa fa-map-marker fa-fw pull-left fa-2x"></i>SJM Institue of Technology<br/> Chitradurga, Karnataka 577-501</p>
          <div class="space"></div>
          <p><i class="fa fa-envelope-o fa-fw pull-left fa-2x"></i>medilab@gmail.com</p>
          <div class="space"></div>
          <p><i class="fa fa-phone fa-fw pull-left fa-2x"></i>+91 7899279622</p>
          <br>   
          <p><i class="fa fa-phone fa-fw pull-left fa-2x"></i>+91 6362654822</p>
        </div>
        <div class="col-md-8 col-sm-8 marb20">
          <div class="contact-info">
            <h3 class="cnt-ttl">Having Any Query! Feel free to contact us😊</h3>
<!--            <div class="space"></div>-->
<!--            <div id="sendmessage">Your message has been sent. Thank you!</div>-->
<!--            <div id="errormessage"></div>-->
    <form id="form" action="contact.php" method="post">
   <div class="form-group">
    <label for="fname">Your Name</label>
    <input type="text" class="form-control" id="fname" name="Name" required>
  </div>
    
    <div class="form-group">
    <label for="email">Email ID</label>
    <input type="email" class="form-control" id="email" name="Email_ID" required>
  </div>
    
  <div class="form-group">
    <label for="create_password">Subject</label>
    <input type="text" class="form-control" id="subject" name="Subject" required>
  </div>    

  <div class="form-group">
    <label for="confirm_password">Message</label>
    <input type="text" class="form-control" id="message" name="Message" required>
  </div>
  
    
    <button type="submit" class="btn btn-primary btn-sm btn-block" name="submit"><h5>Send</h5></button>
             
</form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ contact-->
  <!--footer-->
  <footer id="footer">
    <div class="top-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-4 marb20">
            <div class="ftr-tle">
              <h4 class="white no-padding">About Us</h4>
            </div>
            <div class="info-sec">
              <p>We provide the best service of all kind of diagnosis process and scaniing, best lab technicians are available in us.</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 marb20">
            <div class="ftr-tle">
              <h4 class="white no-padding">Quick Links</h4>
            </div>
            <div class="info-sec">
              <ul class="quick-info">
                <li><a href="index.html"><i class="fa fa-circle"></i>Home</a></li>
                <li><a href="report.php"><i class="fa fa-circle"></i>Lab Report</a></li>
                <li><a href="signup.html"><i class="fa fa-circle"></i>Signup</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 marb20">
            <div class="ftr-tle">
              <h4 class="white no-padding">Follow us</h4>
            </div>
            <div class="info-sec">
              <ul class="social-icon">
                <li class="bglight-blue"><i class="fa fa-facebook"></i></li>
                <li class="bgred"><i class="fa fa-google-plus"></i></li>
                <li class="bgdark-blue"><i class="fa fa-linkedin"></i></li>
                <li class="bglight-blue"><i class="fa fa-twitter"></i></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-line">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            © Copyright Medilab. All Rights Reserved
            <div class="credits">
             
              Developed by <a href="https://tecnico-mdn.blogspot.com/" target="_blank">tecnico-mdn</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--/ footer-->

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>

    </body>

</html>
