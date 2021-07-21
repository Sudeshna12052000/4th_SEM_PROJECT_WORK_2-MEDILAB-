<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Medilab➕</title>
  <meta name="description">
  <meta name="keywords">

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
    
  <style>
      #lgd{
          color: white;
          font-family:sans-serif;
      }
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
                <li class="active"><a href="#banner">Home</a></li>
                <li class=""><a href="#service">Services</a></li>
                <li class=""><a href="viewrepo.php">Lab-Report</a></li>
                <li class=""><a href="#about">About</a></li>
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
<!--              <a href="#contact" class="btn btn-appoint">Make an Appointment.</a>-->
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
  <!--service-->
  <section id="service" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-4">
          <h2 class="ser-title">Our Service</h2>
          <hr class="botm-line">
          <p>We provide the best service of all kind of diagnosis process and scaniing, best lab technicians are available in us. We provide the best service of all kind of diagnosis process and scaniing, best lab technicians are available in us.</p>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="service-info">
            <div class="icon">
              <i class="fa">🕑</i>
            </div>
            <div class="icon-info">
              <h4>24 Hour Support</h4>
              <p>To provide the best of all services with at low cost and with high accurate results and make sure our clients get there services properly.</p>
            </div>
          </div>
          <div class="service-info">
            <div class="icon">
              <i class="fa">🔬</i>
            </div>
            <div class="icon-info">
              <h4>Lab Test Services</h4>
              <p>To provide the best of all services with at low cost and with high accurate results and make sure our clients get there services properly.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="service-info">
            <div class="icon">
              <i class="fa">👨‍🔬👩‍🔬</i>
            </div>
            <div class="icon-info">
              <h4>Best Technicians</h4>
              <p>To provide the best of all services with at low cost and with high accurate results and make sure our clients get there services properly.</p>
            </div>
          </div>
          <div class="service-info">
            <div class="icon">
              <i class="fa">🩸</i>
            </div>
            <div class="icon-info">
              <h4>Blood Test </h4>
              <p>To provide the best of all services with at low cost and with high accurate results and make sure our clients get there services properly.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ service-->
  <!--cta-->
  <section id="cta-1" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="schedule-tab">
          <div class="col-md-4 col-sm-4 bor-left">
            <div class="mt-boxy-color"></div>
            <div class="medi-info">
              <h3>Emergency Case</h3>
              <p>In case of emergency we try to provide the best and fast service to our clients and make sure we provide the best offerd service if reached to the client.</p>
              <a href="#contact" class="medi-info-btn">Contact Us</a>
            </div>
          </div>
          <div class="col-md-4 col-sm-4">
            <div class="medi-info">
              <h3>View Your Report</h3>
              <p>If you have given any test samples, you can check the lab report by clicking the below button and enter your patient ID. </p>
              <a href="report.php" class="medi-info-btn">Check Here!</a>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 mt-boxy-3">
            <div class="mt-boxy-color"></div>
            <div class="time-info">
              <h3>Opening Hours</h3>
              <table style="margin: 8px 0px 0px;" border="1">
                <tbody>
                  <tr>
                    <td>Monday - Friday</td>
                    <td>7AM - 10PM</td>
                  </tr>
                  <tr>
                    <td>Sat - sun</td>
                    <td>8AM - 8PM</td>
                  </tr>
                  <tr>
                    <td>Emergency</td>
                    <td>24 X 7</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--cta-->
  <!--about-->
  <section id="about" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-4 col-xs-12">
          <div class="section-title">
            <h2 class="head-title lg-line">The Medilab <br>Ultimate Dream</h2>
            <hr class="botm-line">
            <p class="sec-para">To provide the best of all services with at low cost and with high accurate results and make sure our clients get there services properly.</p>
            <a href="#contact" style="color: #0cb8b6; padding-top:10px;">Know more..</a>
          </div>
        </div>
        <div class="col-md-9 col-sm-8 col-xs-12">
          <div style="visibility: visible;" class="col-sm-9 more-features-box">
            <div class="more-features-box-text">
              <div class="more-features-box-text-icon"> <i class="fa fa-angle-right" aria-hidden="true"></i> </div>
              <div class="more-features-box-text-description">
                <h3>It's something important you want to know.</h3>
                <p>To provide the best of all services with at low cost and with high accurate results and make sure our clients get there services properly.</p>
              </div>
            </div>
            <div class="more-features-box-text">
              <div class="more-features-box-text-icon"> <i class="fa fa-angle-right" aria-hidden="true"></i> </div>
              <div class="more-features-box-text-description">
                <h3>It's something important you want to know.</h3>
                <p>To provide the best of all services with at low cost and with high accurate results and make sure our clients get there services properly.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ about-->
    <!--cta 2-->
  <section id="cta-2" class="section-padding">
    <div class="container">
      <div class=" row">
        <div class="col-md-2"></div>
        <div class="text-right-md col-md-4 col-sm-4">
          <h2 class="section-title white lg-line">« A few words<br> about us »</h2>
        </div>
        <div class="col-md-4 col-sm-5">
          We provide the best service of all kind of diagnosis process and scaniing, best lab technicians are available in us. We provide the best service of all kind of diagnosis process and scaniing, best lab technicians are available in us.<p class="text-right text-primary"><i>— Medilab</i></p>
        </div>
        <div class="col-md-2"></div>
      </div>
    </div>
  </section>
  <!--cta-->
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
          <p><i class="fa fa-map-marker fa-fw pull-left fa-2x"></i>BMS Institue of Technology<br/> Bengaluru, Karnataka</p>
          <div class="space"></div>
          <p><i class="fa fa-envelope-o fa-fw pull-left fa-2x"></i>medilab@gmail.com</p>
          <div class="space"></div>
          <p><i class="fa fa-phone fa-fw pull-left fa-2x"></i>+91 7762803897</p>
          <br>   
        
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
             
              Designed by <a href="https://tecnico-mdn.blogspot.com/" target="_blank">tecnico-mdn</a>
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
