<?php
include("../db.php");

session_start();


 if($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form

    $myemail = mysqli_real_escape_string($db,$_POST['form-email']);
    $myfirstname = mysqli_real_escape_string($db,$_POST['form-first-name']);
    $mylastname = mysqli_real_escape_string($db,$_POST['form-last-name']);
    $mymobile = mysqli_real_escape_string($db,$_POST['form-mobile']);
    $mycountry = mysqli_real_escape_string($db,$_POST['form-country']);
    $mydateofbirth = mysqli_real_escape_string($db,$_POST['form-date-of-birth']);
    $myusername = $_SESSION['login_user'];



    $sql = "UPDATE users SET email='$myemail', first_name='$myfirstname', last_name='$mylastname', mobile='$mymobile', country='$mycountry', date_of_birth='$mydateofbirth'
    WHERE username='$myusername'";
    $result = mysqli_query($db,$sql);
if($result){
  header("location: profile.php");
}else{
echo "Error updating record: " . mysqli_error($db);
}
    $sql = "SELECT * FROM users WHERE username = '$myusername'";
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



       //header("location: index.php");
    }else {
       $error = "Your Login Name or Password is invalid";
    }
    // If result matched $myusername and $mypassword, table row must be 1 row

  //  header("location: profile.php");
 }
?>
