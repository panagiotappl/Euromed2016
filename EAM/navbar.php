
<html>
<body>
  <div class="container-fluid" id="header">
    <div class="container-fluid" id="header2" align="middle">

      <div class="row">
        <div class="col-md-3" align="left">
          <a href="../index/index.php"><img src="../assets/img/logo.png"></a>
        </div>
        <div class="col-md-3">
        </div>
        <div class="col-md-3">
        </div>
        <div class="col-md-3" id="login" >
          <div class="row">
            <?php
            ?>
          <?php  if(! empty($_SESSION['login_user'])){
            echo  ' <div class="dropdown">
  <a href="../profile/profile.php" data-toggle="dropdown">
    <font color="white">
  <i class="fa fa-user" aria-hidden="true"></i> ' .  $_SESSION["login_user"] .'
  <span class="caret"></span></font></a>
  <ul class="dropdown-menu">
    <li><a href="../profile/profile.php">My Profile</a></li>
    <li><a href="../profile/logout.php">Sign Out</a></li>
  </ul>
</div>';}
            else {echo '<a href="../profile/sign.php" >
               <font color="white"><i class="fa fa-user" aria-hidden="true"></i>
            Log In/Sing up</font></a>'; }?>

          </div>
          <div class="row" >
            <form action="../etc/wip.html">
          <input type="search" placeholder="Search..."></input>
        </form>
        </div>

        </div>
      </div>
    </div>



  </div>

  <!-- Navbar -->
  <nav class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="../index/index.php">EUROMED2016</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
  	<li class="dropdown">
      		<a class="dropdown-toggle" type="button" data-toggle="dropdown" href="../aboutUS/aboutUs-euromed2016.php" id="test">ABOUT US
  <i class="fa fa-angle-down" aria-hidden="true"></i>
      		<ul class="dropdown-menu">

        			<li><a href="../aboutUS/aboutUs-euromed2016.php">EUROMED2016</a></li>
        			<li><a href="../aboutUs/aboutUs-committee.php">COMMITTEE</a></li>
  			<li><a href="../aboutUs/aboutUs-practical.php">PRACTICAL INFORMATION</a></li>
  			<li><a href="../aboutUs/aboutUs-previous.php">PREVIOUS EVENTS</a></li>

      		</ul>
    	</a></li>
  	<li class="dropdown">
      		<a class="dropdown-toggle" type="button" data-toggle="dropdown" href="../program/program-full.php">PROGRAM
  <span class="fa fa-angle-down" aria-hidden="true"></span>
      		<ul class="dropdown-menu">

        			<li><a href="../program/program-full.php" >FULL PROGRAM</a></li>
        			<li><a href="../program/program-keynote.php" >KEYNOTE</a></li>
        			<li><a href="../etc/wip.html" >WORKSHOPS</a></li>
  			<li><a href="../etc/wip.html" >PAPER SESSIONS</a></li>
  			<li><a href="../etc/wip.html" >PANEL DISCUSSIONS</a></li>

      		</ul>
    	</a></li>
          <li class="dropdown"><a class="dropdown-toggle" type="button" data-toggle="dropdown" href="../attend/book-information.php">ATTEND
  <i class="fa fa-angle-down" aria-hidden="true"></i>
      		<ul class="dropdown-menu">

        			<li><a href="../attend/book-information.php">GENERAL INFO</a></li>
        			<li><a href="../attend/book-tickets.php">BOOK TICKETS</a></li>


      		</ul></a></li>
           <li class="dropdown"><a class=" dropdown-toggle" type="button" data-toggle="dropdown" href="../submit/submit-information.php">SUBMIT
  <i class="fa fa-angle-down" aria-hidden="true"></i>
      		<ul class="dropdown-menu">

        			<li><a href="../submit/submit-information.php">PAPER SUBMISSION INFO</a></li>
        			<li><a href="../submit/submit-paper.php">SUBMIT A PAPER</a></li>


      		</ul></a></li>
          <li class="dropdown"><a class=" dropdown-toggle" type="button" data-toggle="dropdown" href="../exhibit/exhibit-information.php">EXHIBIT
  <i class="fa fa-angle-down" aria-hidden="true"></i>
      		<ul class="dropdown-menu">

        			<li><a href="../exhibit/exhibit-information.php">EXHIBITING INFO</a></li>
        			<li><a href="../exhibit/exhibit-application.php">APPLY AS EXHIBITOR</a></li>


      		</ul></a></li>

           <li class="dropdown"><a class=" dropdown-toggle" type="button" data-toggle="dropdown" href="../venue/venue-about.php">VENUE
  <i class="fa fa-angle-down" aria-hidden="true"></i>
      		<ul class="dropdown-menu">

        			<li><a href="../venue/venue-about.php">ABOUT</a></li>
        			<li><a href="../venue/venue-cyprus.php">ABOUT CYPRUS</a></li>
        			<li><a href="..//etc/wip.html">TRAVEL</a></li>
        			<li><a href="../venue/venue-accommodations.php">ACCOMMODATIONS</a></li>


      		</ul></a></li>
          <li><a href="../etc/wip.html">NEWS</a></li>

        </ul>
      </div>
    </div>
  </nav>
</body>
</html>
