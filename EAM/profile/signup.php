<?php
include("../db.php");

session_start();


 if($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form

    $myusername = mysqli_real_escape_string($db,$_POST['form-username']);
    $mypassword = mysqli_real_escape_string($db,$_POST['form-password']);
    $myemail = mysqli_real_escape_string($db,$_POST['form-email']);
    $myfirstname = mysqli_real_escape_string($db,$_POST['form-first-name']);
    $mylastname = mysqli_real_escape_string($db,$_POST['form-last-name']);
    $mymobile = mysqli_real_escape_string($db,$_POST['form-mobile']);
    $mycountry = mysqli_real_escape_string($db,$_POST['form-country']);
    $mydateofbirth = mysqli_real_escape_string($db,$_POST['form-date-of-birth']);
    $myregistration = date ("Y-m-d H:i:s");

    $sql = "SELECT * FROM users WHERE username = '$myusername'";
    $result = mysqli_query($db,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

    $active = $row['active'];

    $count = mysqli_num_rows($result);

    if($count >= 1){
      $_SESSION['regfail'] = true;
      header('location: sign.php');
    }
    $sql = "INSERT INTO users (username, email, password, first_name, last_name, mobile, country, date_of_birth,
    registration_date) VALUES ('$myusername', '$myemail', '$mypassword', '$myfirstname', '$mylastname',
    '$mymobile', '$mycountry', '$mydateofbirth', '$myregistration')";
    $result = mysqli_query($db,$sql);
     if($result){
     header('location: ../index/index.php');
   }
 }
?>
