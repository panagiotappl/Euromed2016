<?php
  include("db.php");

  session_start();

   if($_SERVER["REQUEST_METHOD"] == "POST") {
     $myemail =  mysqli_real_escape_string($db,$_POST['form-email']);
     $myfirstname =  mysqli_real_escape_string($db,$_POST['form-first-name']);
     $mylastname =  mysqli_real_escape_string($db,$_POST['form-last-name']);
     $myarticletitle = mysqli_real_escape_string($db,$_POST['form-article-title']);
     $mydescription =  mysqli_real_escape_string($db,$_POST['form-description']);
     $myfilelink = 'C:/xampp/htdocs/EAM/uploads/'. $_FILES['file']['name'];

     $sql = "INSERT INTO papers (email, first_name, last_name, article_title, description, file_link)
      VALUES ('$myemail', '$myfirstname', '$mylastname',
     '$myarticletitle', '$mydescription', '$myfilelink')";
  $result = mysqli_query($db,$sql);

     $targetfolder = "uploads/";

     $targetfolder = $targetfolder . basename( $_FILES['file']['name']) ;

     $ok=1;

     $file_type=$_FILES['file']['type'];

     if ($file_type=="application/pdf" ) {

       if(move_uploaded_file($_FILES['file']['tmp_name'], $targetfolder)){
         echo "The file ". basename( $_FILES['file']['name']). " is uploaded";
       }else {
         echo "Problem uploading file";
       }
     }else {
       echo "You may only upload PDFs, JPEGs or GIF files.<br>";
     }

     $_SESSION['submitsuccess'] = true;
     header('location: submit-paper.php');
   }


?>
