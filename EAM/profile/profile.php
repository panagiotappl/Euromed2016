<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>

  <title>Euromed2016 | My Profile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../assets/css/main.css">
<link rel="stylesheet" href="../assets/css/attendee.css">
<link rel="stylesheet" href="../assets/css/style.css">
<link rel="stylesheet" href="../assets/css/footer-distributed-with-address-and-phones.css">



</head>
<body>
<?php include '../navbar.php';?>
<div class="container-fluid " id="mainBody">
<div class="row">
  <div class="col-md-2" style="margin-top:20px;"align="right">
    <img src="../assets/img/user.png" class="img-responsive" style='color:red;'>
  </div>
  <div class="col-md-8">
  <div class="form-box">
    <div class="form-top">
      <div class="form-top-left">
        <h2><font color="#D9853B"><?php echo $_SESSION["login_user"]?></font></h2>
      </div>

      </div>
      <div class="form-bottom">

        <div class="row">
          <div class="col-md-3">
          <label>E-mail:</label></div>
          <div class="col-md-6" align="left"><?php echo $_SESSION['email'] ?>
          </div>
        </div>
        <div class="row"><div class="col-md-3">
          <label>First Name:</label></div>
          <div class="col-md-6" align="left"><?php echo $_SESSION['first_name'] ?>
          </div>
        </div>
        <div class="row"><div class="col-md-3">
          <label>Last Name:</label></div>
          <div class="col-md-6" align="left"><?php echo $_SESSION['last_name'] ?>
          </div>
        </div>
        <div class="row"><div class="col-md-3">
          <label>Mobile:</label></div>
          <div class="col-md-6" align="left"><?php echo $_SESSION['mobile'] ?>
          </div>
        </div>
        <div class="row"><div class="col-md-3">
          <label>Country:</label></div>
          <div class="col-md-6" align="left"><?php echo $_SESSION['country'] ?>
          </div>
        </div>
        <div class="row"><div class="col-md-3">
          <label>Date of Birth:</label></div>
          <div class="col-md-6" align="left"><?php echo $_SESSION['birth'] ?>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
          <font size="1">Registered on: <?php echo $_SESSION['reg'] ?> </font>
        </div>
        </div>
        <a href="profile-edit.php"><button type="submit" class="btn" >Edit Profile</button></a>

  </div>
  </div>
</div>
</div>
</div>
<?php include("../footer.html");?>
</body>
