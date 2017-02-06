<?php
include("../db.php");

session_start();


 if($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form

    $myusername = mysqli_real_escape_string($db,$_POST['username']);
    $mypassword = mysqli_real_escape_string($db,$_POST['password']);

    $sql = "SELECT * FROM users WHERE username = '$myusername' and password = '$mypassword'";
    $result = mysqli_query($db,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

    $active = $row['active'];

    $count = mysqli_num_rows($result);

    // If result matched $myusername and $mypassword, table row must be 1 row

    if($count == 1) {
       $_SESSION['login_user'] = $row['username'];
       $_SESSION['email'] = $row['email'];
       $_SESSION['first_name'] = $row['first_name'];
       $_SESSION['last_name'] = $row['last_name'];
       $_SESSION['mobile'] = $row['mobile'];
       $_SESSION['country'] = $row['country'];
       $_SESSION['birth'] = $row['date_of_birth'];
       $_SESSION['reg'] = $row['registration_date'];



       header("location: ../index/index.php");
    }else {
      $_SESSION['fail'] = true;
      header("location: sign.php");
    }
 }
?>
