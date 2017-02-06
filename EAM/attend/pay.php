<?php
include("../db.php");

session_start();


 if($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form

    $myemail =$_SESSION['post']['form-email'];
    $myfirstname = $_SESSION['post']['form-first-name'];
    $mylastname = $_SESSION['post']['form-last-name'];
    $mycountry = $_SESSION['post']['form-country'];
    $mymobile = $_SESSION['post']['form-mobile'];
    $mytotalcost = $_SESSION['post']['students-full'] * 450 +  $_SESSION['post']['non-students-full']*500
     +  $_SESSION['post']['student-days'] *  $_SESSION['post']['num-of-days'] * 155
     +  $_SESSION['post']['non-student-days'] * $_SESSION['post']['num-of-days'] * 190;
    $sql = "INSERT INTO registrations (email, first_name, last_name, country, mobile,  total_cost)
     VALUES ('$myemail', '$myfirstname', '$mylastname',
    '$mycountry', '$mymobile', '$mytotalcost')";
    $result = mysqli_query($db,$sql);

    if($result){
    //  echo $_SESSION['post']['form-first-name'];
      header('location:register-success.php');
  }else {
      echo mysqli_error($db);
    }
 }
?>
