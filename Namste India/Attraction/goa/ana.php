<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head> 
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" type="text/css" href="ana.css">
      <link rel="stylesheet" type="text/css" href="../../menuToggle.css">

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <title>Namaste india</title>
</head>
<body>
  <nav role="navigation">
      <div id="menuToggle">
        <!--
        A fake / hidden checkbox is used as click reciever,
        so you can use the :checked selector on it.
        -->
        <input type="checkbox" />
        
        <!--
        Some spans to act as a hamburger.
        
        They are acting like a real hamburger,
        not that McDonalds stuff.
        -->
        <span></span>
        <span></span>
        <span></span>
        
        <!--
        Too bad the menu has to be inside of the button
        but hey, it's pure CSS magic.
        -->
        <ul id="menu">
          <li><a href="../../home/index.php">Home</a></li>
          <li><a href="../../Covid_guide/ilovepdf_merged (4).pdf" target="_blank">Guidlines_covid</a></li>
          <li><a href="../attraction.php">Attraction</a></li>
          <li><a href="../../covidFeedback/index.php">comparison</a></li>
          <li><a href="../../contact/contact.php">About Us</a></li>
        </ul>
      </div>
    </nav>
          <!-- NAVIGATION BAR -->
  <header class="header">
      <ul class="menu">
      <li><a class="active" href="../kerala/kerala.php">Kerala</a></li>
      <li><a href="#">Tamil nadu</a></li>
      <li><a href="#">Assam</a></li>
      <li><a href="#">Delhi</a></li>
      <li><a href="#">Utter pradesh</a></li>
      <li><a href="#">Goa</a></li>
      <li><a href="#">Tamil nadu</a></li>
      <li><a href="#">Bihar</a></li>
      <li><a href="#">Punjab</a></li>
      <li><a href="#">West Bengal</a></li>
      <li><a href="#">Assam</a></li>
      <li><a href="#">Delhi</a></li>

      </ul>
  </header>
  <div class="quote-box">
      <h1>Goa</h1>

<h3 class="quote-text">"There are innumerable reasons to travel. And this is your one stop place."</h3>
  </div>

<div class="row">
<div class="container">
<img class="left" src="https://ihpl.b-cdn.net/pictures/tourgallery/175/romantic-goa-honeymoon-tour-7905.jpg" width="350" height="250"/>
  <h1 class="headings">romantic-goa-honeymoon-tour</h1>
  <p class="box-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam mollis magna nunc, a condimentum mauris ultrices vel. Pellentesque lobortis, neque ut rutrum vehicula, turpis quam tincidunt nisl, a placerat est justo vitae nibh. Fusce eleifend varius lorem et vulputate. Nullam pellentesque metus eros, et pretium mauris placerat nec. Suspendisse at est at enim condimentum dapibus. Vivamus eu cursus tellus, nec aliquam sapien.</p>
      <a href="../../booking/plans.php?state=Goa">
        <button class="read-more" >Book_Now Hurry!</button>
      </a>
    <div style="clear: both"></div>      
</div>

</div>

<div class="row">
<div class="container">
<img class="right" src="https://assets.traveltriangle.com/blog/wp-content/uploads/2016/08/Hard-rock-hotel-in-Goa.jpg" width="350" height="250" />
  <h1 class="headings">Hard-rock-hotel-in-Goa</h1>
  <p class="box-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam mollis magna nunc, a condimentum mauris ultrices vel. Pellentesque lobortis, neque ut rutrum vehicula, turpis quam tincidunt nisl, a placerat est justo vitae nibh. Fusce eleifend varius lorem et vulputate. Nullam pellentesque metus eros, et pretium mauris placerat nec. Suspendisse at est at enim condimentum dapibus. Vivamus eu cursus tellus, nec aliquam sapien.</p>
    <a href="#">
  <button class="read-more">Book_Now Hurry!</button>
      </a>
    <div style="clear: both"></div>      
</div>
</div>

<div class="row">
<div class="container">
<img class="left" src="https://www.goantravels.in/uploads/images/tours/slider/687011_buterfly-island-goa.jpg" width="350" height="250" />
  <h1 class="headings">buterfly-island-goa</h1>
  <p class="box-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam mollis magna nunc, a condimentum mauris ultrices vel. Pellentesque lobortis, neque ut rutrum vehicula, turpis quam tincidunt nisl, a placerat est justo vitae nibh. Fusce eleifend varius lorem et vulputate. Nullam pellentesque metus eros, et pretium mauris placerat nec. Suspendisse at est at enim condimentum dapibus. Vivamus eu cursus tellus, nec aliquam sapien.</p>
    <a href="#">
  <button class="read-more">Book_Now Hurry!</button>
      </a>
    <div style="clear: both"></div>      
</div>

</div>

<div class="row">
<div class="container">
<img class="right" src="https://img.traveltriangle.com/blog/wp-content/uploads/2017/02/honeymoon-in-goa.jpg" width="350" height="250" />
  <h1 class="headings">holidays-spot</h1>
  <p class="box-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam mollis magna nunc, a condimentum mauris ultrices vel. Pellentesque lobortis, neque ut rutrum vehicula, turpis quam tincidunt nisl, a placerat est justo vitae nibh. Fusce eleifend varius lorem et vulputate. Nullam pellentesque metus eros, et pretium mauris placerat nec. Suspendisse at est at enim condimentum dapibus. Vivamus eu cursus tellus, nec aliquam sapien.</p>
    <a href="#">
  <button class="read-more">Book_Now Hurry!</button>
      </a>
    <div style="clear: both"></div>      
</div>
</div>

<div class="row">
<div class="container">
<img class="left" src="https://assets.traveltriangle.com/blog/wp-content/uploads/2015/12/shutterstock_700.jpg" width="350" height="250" />
  <h1 class="headings">Beaches in Goa</h1>
  <p class="box-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam mollis magna nunc, a condimentum mauris ultrices vel. Pellentesque lobortis, neque ut rutrum vehicula, turpis quam tincidunt nisl, a placerat est justo vitae nibh. Fusce eleifend varius lorem et vulputate. Nullam pellentesque metus eros, et pretium mauris placerat nec. Suspendisse at est at enim condimentum dapibus. Vivamus eu cursus tellus, nec aliquam sapien.</p>
    <a href="#">
  <button class="read-more">Book_Now Hurry!</button>
      </a>
    <div style="clear: both"></div>      
</div>

</div>

<!-- FOOTER -->
<footer class="footer-distributed">
  <h3 >Compare crona situation in Goa with other states</h3>
  <iframe src="https://maps.mapmyindia.com/corona?state_corona_stats" width="100%" height="600px"> </iframe>

</footer>

</body>
</html>