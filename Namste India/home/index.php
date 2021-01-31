<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="menuToggle.css">

    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    
  

      <header>
        <div class="signUp">
          <?php
            if(isset($_SESSION["username"])){
              echo '<a href="../loginsystem/logout.php"><i class="fa fa-user" aria-hidden="true"></i></a>';
              echo $_SESSION["username"];
            }else{
              echo ' <a href="../loginsystem/index.php"><i class="fa fa-user" aria-hidden="true"></i></a>';
              echo "Login ";
            }
          
          ?>
         
      </div>
        <nav>
          <li><a id="tours-link" href="#tours">Impressions</a></li>
          <li><a href="#packages">Tours</a></li>
          <li><a target="_blank" href="../Covid_guide/ilovepdf_merged (4).pdf">Guidlines_covid</a></li>
          <li><a href="../Attraction/attraction.php">Attractions</a></li>
          <li><a href="../flight_booking/flight.php"></a>Book Your Flight</li>
          <li><a href="../covidFeedback/index.php">comparison</a></li>
          <li><a href="#">About Us</a></li>
        </nav>
      </header>
      
      <section class="hero">
        <div class="bg-img" style="background-image: url('https://i.pinimg.com/originals/24/9e/f6/249ef65fd6865efc0b74f4c4536124a8.jpg');"></div>
        <div class="hero-content">
          <h1>Welcome to the India!</h1>
          <h3>There are many beautiful tourist places in India which are rugged and barren, and there are places which are blessed with lush greenery and amazing forests!</h3>
          <a href="../Attraction/attraction.php" class="btn">Attractions</a>
        </div>
      </section>
      
      <section id="tours">
        <h3 class="title">Some of our Cultures</h3>
        <p>There are cultures which are forward thinking and open to changes, and then there are cultures which strongly hold to their roots. </p>
        <hr>
        <ul class="grid">
          <li class="small" style="background-image: url('https://s3.ap-south-1.amazonaws.com/hsdreams1/pins/2018/07/big/5faa434479a655c8b32f19d1e498320c.jpeg');"></li>
          <li class="large" style="background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQsSAihEFCddmPJKvk-8ljqjrxvQzsQkcPqLg&usqp=CAU');"></li>
          <li class="large" style="background-image: url('https://cms.qz.com/wp-content/uploads/2017/01/india-culture-heritage.jpg?quality=75&strip=all&w=1600&h=900&crop=1');"></li>
          <li class="small" style="background-image: url('https://www.relocatemagazine.com/media/images/India-culture_12865.jpg');"></li>
        </ul>
      </section>
      
      <section id="packages">
        <h3 class="title">Tour Packages</h3>
        <p>what we comfort you with!..</p>
        <hr>
        <ul class="grid">
          <li>
            <i class="fas  fa-4x"></i>
            <h4>Best hotel Experiences</h4>
            <p>Courteous treatment will make a customer a walking advertisement.It’s all about the experience. Something has to happen. Either good or bad.</p>
          </li>
          <li>
            <i class="far  fa-4x"></i>
            <h4>City Trips</h4>
            <p>Say goodbye to scouring the internet in search of inspirational travel quotes to keep you focussed on saving for that next big trip. Instead take a read through our list of every travel quote ever.  </p>
          </li>
          <li>
            <i class="fas fa-4x"></i>
            <h4>Bus Tours</h4>
            <p>No travel agent needed! Wolf’s makes trip planning easy and our wide range of bus tours fit just about any vacation desire. Search for your next adventure by either the length of the trip or by interest. </p>
          </li>
          <li>
            <i class="fas  fa-4x"></i>
            <h4>best restaurants </h4>
            <p>I don’t even have to tell you what restaurants these taglines come from, because you already know! A good tagline can become part of your restaurant’s identity, almost as much as your name and logo.</p>
          </li>
        </ul>
      </section>
      
      <section id="reviews">
        <h3 class="title">Covid situation across world</h3>
        <iframe src="https://ourworldindata.org/grapher/total-cases-covid-19?tab=map" width="100%" height="600px"></iframe>
      </section>
      
      <section id="contact">
        <h3 class="title" >About Us</h3>
        <p>We will comfort you with the best and memorable experience of your life.Plan a honeymoon, a weekend getaway, or an adventure activity. Select from an array of domestic and international destinations well-suited to every spectrum of traveller. Be it flights, hotels, pre-planned itinerary, transport upon arrival/departure or sightseeing - you are covered. Attractive pricing, well-researched itineraries.</p>
        
      </section>
      
</body>
</html>
