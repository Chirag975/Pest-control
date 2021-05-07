<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta name="description" content="Contact ABC Pest control for a free survey or quote and obtain expert advice on pest control.">
  <meta name="keywords" content="ABC pest control pvt. ltd., abc pest control , abc, abc customer care, pest management services, pest treatment and control service, pest control services, residential pest control services, commercial pest control services, pest control services, cockroaches control, wood borer/powder control, termite control, pest control in patna, pest control in bihar , pest control in india , pest, termite, bed bus, mosquitoes, coronavirus, covid-19, corona, sanitization, contact abc pest control">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Contact | ABC PEST Control</title>
  <!-- MDB icon -->
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="css/mdb.min.css">
  
  

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-180097493-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-180097493-1');
</script>

</head>
<style>
    html, body {
    overflow-x: hidden;
    width: 100%;
}
</style>
<body style="overflow-x:hidden;     position:relative;">
<?php

if(isset($_POST["submit"])) {
    $recipient="abcpestcontrolpatna@gmail.com";
    $subject="Service";
    $sender=$_POST["sender"];
    $senderEmail=$_POST["senderEmail"];
    $message=$_POST["message"];

    $mailBody="Name:  $_POST[first] $_POST[last]\n\n
    Email: $_POST[email]\n\n
    Phone: $_POST[phone]\n\n
    Address: $_POST[address] $_POST[city] $_POST[state]\n\n
    Solution For: $_POST[solution]\n\n
    Service : $_POST[service]";

    mail($recipient, $subject, $mailBody, "From: $_POST[first] $_POST[last] <$_POST[email]>");
echo "<script>alert('Your details have been successfully submited. We will cotact you soon')</script>";
    
}

?>




  <!-- Start your project here-->  
<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-light white">

  <div class="container"> 

    <a class="navbar-brand" href="https://www.abcpestcontrol.co.in">
<b>ABC Pest Control</b>
    </a>

    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
            aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Links -->
    <div class="collapse navbar-collapse" id="basicExampleNav">

      <!-- Left -->
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link waves-effect" href="https://www.abcpestcontrol.co.in">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link waves-effect" href="https://www.abcpestcontrol.co.in/services.html" >Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link waves-effect" href="about.html" >Why choose us?</a>
        </li>
        
      </ul>

      <!-- Right -->
      <ul class="navbar-nav nav-flex-icons">
        <li class="nav-item">
          <a href="contact.html"
             class="nav-link border border-light rounded waves-effect mr-2" >
            <i class="fas fa-phone mr-1"></i>Contact Us
          </a>
        </li>
      </ul>

    </div>

  </div>

</nav>
<!--/.Navbar-->












<div class="container my-5 py-5 z-depth-1">


  <!--Section: Content-->
  <section class="px-md-5 mx-md-5 text-center text-lg-left dark-grey-text">

    <h3 class="font-weight-bold">Contact Us</h3>

    <p class="text-muted">Complete the quick form below and one of our experts will get back to you SHORTLY. We will never share your information with third parties. All fields are required unless indicated as optional.</p>

    <hr class="my-5">

    <!--Grid row-->
    <div class="row">

      <!--Grid column-->
      <div class="col-lg-5 col-md-12 mb-0 mb-md-0">

        <h4 class="font-weight-bold">Call or email</h4>

        <p class="text-muted mb-4">Contact ABC Pest control for a free survey or quote and obtain expert advice on pest control.</p>

        <p class="font-weight-bold">Phone:</p>

        <p class="mb-2"><a href="tel:8210189879">+91 8210189879</a></p>

        <p class="font-weight-bold">Email:</p>
        <p class="mb-2"><a href="mailto:abcpestcontrolpatna@gmail.com">abcpestcontrolpatna@gmail.com</a></p>


      </div>
      <!--Grid column-->
      <!--Grid column-->
      <div class="col-lg-7 col-md-12 mb-4 mb-md-0">
<form method="post" action="contact.php">

        <!--Grid row-->
        <div class="row">

          <!--Grid column-->
          <div class="col-md-6">

            <!-- Material outline input -->
            <div class="md-form md-outline mb-0">
              <input required  type="text" id="form-first-name" name="first" class="form-control">
              <label for="form-first-name">First name</label>
            </div>

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-6">

            <!-- Material outline input -->
            <div class="md-form md-outline mb-0">
              <input required  type="text" id="form-last-name" name="last" class="form-control">
              <label for="form-last-name">Last name</label>
            </div>

          </div>
          <!--Grid column-->

        </div>
        <!--Grid row-->



        <!-- Material outline input -->
        <div class="md-form md-outline mt-3">
          <input required  type="email" id="form-email" name="email" class="form-control">
          <label for="form-email">E-mail</label>
        </div>

        <!-- Material outline input -->
        <div class="md-form md-outline mt-3">
          <input required  type="number" id="form-number" name="phone" class="form-control">
          <label for="form-number">Phone</label>
        </div>

  <!-- Material outline input -->
        <div class="md-form md-outline">
          <input required  name="address" type="text" id="form-subject" class="form-control">
          <label for="form-subject">House/Street Number</label>
        </div>


        <div class="md-form md-outline">
          <input required  name="city" type="text" id="form-subject" class="form-control">
          <label for="form-subject">City</label>
        </div>


        <div class="md-form md-outline">
          <input required  type="text" name="state" id="form-subject" class="form-control">
          <label for="form-subject">State</label>
        </div>



        <!-- Material outline input -->
        <div class="md-form md-outline">
            
        
          <select required  name="solution" class="form-control">
              
              <option value="for home">For Home</option>
              <option value="for office">For Office</option>
              
              <option value="for Others">Other</option>
              </select>
        </div>


        <!-- Material outline input -->
        <div class="md-form md-outline">
            
            
          <select required  name="service" class="form-control">
              
              <option value="pest">Pest Control</option>
              <option value="bed bugs">Bed Bugs Control</option>
              
              <option value="termite">Termite Control</option>
              <option value="mosquito">Mosquitoes Control</option>
              <option value="other">Other</option>
              </select>
        </div>



        <button type="submit" name="submit" class="btn btn-info btn-sm ml-0">Submit<i class="far fa-paper-plane ml-2"></i></button>

</form>
      </div>
      <!--Grid column-->
    </div>
    <!--Grid row-->


  </section>
  <!--Section: Content-->


</div>







<!-- Footer -->
<footer class="page-footer font-small indigo darken-4 py-4" style="background:#3a3a3a !important">

  <!-- Footer Elements -->
  <div class="container">

    <div class="row">
      <div class="col-md-6 d-flex justify-content-start">
        <!-- Copyright -->
        <div class="footer-copyright text-center bg-transparent">

Have a question? Call us now : <a href="tel:8210189879" style="color:white">+91 8210189879</a>


        </div>
        <!-- Copyright -->
      </div>
      <div class="col-md-6 d-flex justify-content-end">
        <ul class="list-unstyled d-flex mb-0">
        
          <li>
          	<a href="https://www.facebook.com/Abcpestcontrol-112286457310486" class="mr-3" role="button"><i class="fab fa-facebook-f"></i></a>
          </li>
          <li>
          	<a target="_blank" href="https://twitter.com/abcpestcontrol1" class="mr-3" role="button"><i class="fab fa-twitter"></i></a>
          </li>
          <li>
          	<a target="_blank"  href="https://www.instagram.com/abcpestcontrolpatna" class="mr-3" role="button"><i class="fab fa-instagram"></i></a>
          </li>
          
        </ul>
      </div>
    </div>

  </div>
  <!-- Footer Elements -->

</footer>
<!-- Footer -->




  <!-- Copyright -->
  <div class="footer-copyright text-center py-3" style="background:#2f2f2f;color:white">© 2020 Copyright:
    <a href="https://www.abcpestcontrol.co.in">ABC Pest Control</a>
  </div>
  <!-- Copyright -->


    
    
    
    
    
    
    



  <script type="text/javascript" src="js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript"></script>

</body>
</html>
