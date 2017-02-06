<?php
include("../db.php");

session_start();


 if($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form

    $myemail = mysqli_real_escape_string($db,$_POST['form-email']);
    $myfirstname = mysqli_real_escape_string($db,$_POST['form-first-name']);
    $mylastname = mysqli_real_escape_string($db,$_POST['form-last-name']);
    $mycompanyname = mysqli_real_escape_string($db,$_POST['form-company-name']);
    $myvat = mysqli_real_escape_string($db,$_POST['form-vat']);
    $mydescription = mysqli_real_escape_string($db,$_POST['form-description']);

    $sql = "INSERT INTO exhibitors (email, first_name, last_name, company_name, vat, description)
     VALUES ('$myemail', '$myfirstname', '$mylastname',
    '$mycompanyname', '$myvat', '$mydescription')";
    $result = mysqli_query($db,$sql);

    if($result){
      $_SESSION['exhibitsuccess'] = true;
    header('location: exhibit-application.php');
  }else {
      echo mysqli_error($db);
    }
 }
?>
