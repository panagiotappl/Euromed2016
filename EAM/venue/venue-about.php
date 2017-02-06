<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>

  <title>Euromed2016 | Venue About</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../assets/css/main.css">
<link rel="stylesheet" href="../assets/css/attendee.css">
<link rel="stylesheet" href="../assets/css/footer-distributed-with-address-and-phones.css">


</head>
<body>
  <?php include '../navbar.php';?>

<!-- First Container -->
<div class="container-fluid " id="mainBody">
<div class="row">
  <div class="col-md-4 pad-right " align="right">
    <div class="row ">
  <a href="venue-about.php"><font color="#D9853B">ABOUT</font></a></div>
  <div class="row">
  <a href="venue-cyprus.php">ABOUT CYPRUS</a></div>
    <div class="row">
  <a href="../etc/wip.html">TRAVEL</a></div>
    <div class="row">
  <a href="venue-accommodations.php">ACCOMMODATIONS</a></div>
  </div>
  <div class="col-md-6 verticalLine pad-left">
      <h1><font color="#D9853B"> Conference Venue</font></h1>
<img src="../assets/img/108.png" class="img-responsive">
<br><br><h4>Filoxenia Conference Centre</h4>

<br><br>“Filoxenia” is a cherished concept in Cyprus, one that has deep roots and a rich cultural heritage.

<br><br>Hospitality, the official English translation of ‘Filoxenia', doesn't do justice to the concept as it does not encompass its main element, which is generosity of spirit. What is certain is that it is one of the attributes of the Cypriot character and culture that we take pride in.

<br><br>True to its name, the Filoxenia Conference Centrewas completely renovated to welcome guests from all over Europe during the Cypriot Presidency of the EU in 2012. Now it’s a modern conference facility, which hosts a wide range of events and honor the timeless tradition of Cypriot hospitality.



<br><br>The Filoxenia Conference Centre is conveniently located, with easy access to the highway and central roads of Nicosia. If you are located in Nicosia, you can reach the center via bus. Filoxenia Conference Centre is completely wheelchair accessible and is fully equipped to accommodate people with special access needs.

<br><br>If you are traveling via car, a large parking space outside the Centre provides easy access to the venue. A parking space for approximately 70 vehicles is also available within the Centre’s premises.
<div id="map" style="overflow: visible;"></div>

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>

        <li data-target="#myCarousel" data-slide-to="5"></li>

        <li data-target="#myCarousel" data-slide-to="6"></li>

      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="../assets/img/slide1.jpg" class="img-responsive" alt="Chania">
        </div>

        <div class="item">
          <img src="../assets/img/slide2.jpg" class="img-responsive" alt="Chania">
        </div>

        <div class="item">
          <img src="../assets/img/slide3.jpg" class="img-responsive"  alt="Flower">
        </div>

        <div class="item">
          <img src="../assets/img/slide4.jpg" class="img-responsive" alt="Flower">
        </div>
        <div class="item">
          <img src="../assets/img/slide5.jpg" class="img-responsive" alt="Flower">
        </div>
        <div class="item">
          <img src="../assets/img/slide6.jpg" class="img-responsive" alt="Flower">
        </div>
        <div class="item">
          <img src="../assets/img/slide7.jpg" class="img-responsive" alt="Flower">
        </div>

      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
</div>

    </div>

  </div>







<?php include("../footer.html");?>

    <script>
          function initMap() {
            var uluru = {lat: 35.1546928, lng: 33.37952819999998};
            var map = new google.maps.Map(document.getElementById('map'), {
              zoom: 16,
              center: uluru
            });
            var marker = new google.maps.Marker({
              position: uluru,
              map: map
            });
          }
        </script>
        <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDGCMFF-aRHar7gVFZwE6OWvGJreB0zv9A&callback=initMap">
        </script>

</body>
</html>
