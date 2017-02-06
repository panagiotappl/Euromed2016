<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>

  <title>Euromed2016 | Paper Submission</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
  <a href="submit-information.php">PAPER SUBMISSION INFORMATION</a></div>
  <div class="row">
  <a href="submit-paper.php"><font color="#D9853B">SUBMIT A PAPER</font></a></div>

  </div>
  <div class="col-md-6 verticalLine pad-left">
    <div class="row">
      <h1><font color="#555555">Submit a paper</font></h1>
    </div>
    <div class="row">

          <div class="form-box">



              <div class="form-bottom">
            <form role="form" action="upload.php" method="post" enctype="multipart/form-data" class="registration-form">
              <div class="form-group">
                <?php if(!empty($_SESSION['submitsuccess']) && $_SESSION['submitsuccess']){
                echo  '<div class="alert alert-success">
                      Paper uploaded successfully.
                    </div>';
                    $_SESSION['submitsuccess'] = false;} ?>
                <div class="form-group">
                  <label class="sr-only" for="form-email">Email</label>
                  <input type="text" name="form-email" placeholder="Email..." class="form-email form-control" id="form-email">
                </div>



                <div class="form-group">

                        <label class="sr-only" for="form-first-name">First name</label>
                             <input type="text" name="form-first-name" placeholder="First name..." class="form-first-name form-control" id="form-first-name">
                </div>
                <div class="form-group">
                  <label class="sr-only" for="form-last-name">Last name</label>
                  <input type="text" name="form-last-name" placeholder="Last name..." class="form-last-name form-control" id="form-last-name">
                </div>



                <div class="form-group">
                  <label class="sr-only" for="form-article-title">Article Title</label>
                  <input type="text" name="form-article-title" placeholder="Article Title..." class="form-username form-control" id="form-username">
                </div>

                <div class="form-group">
                  <label class="sr-only" for="form-description">Description</label>
                  <textarea rows="5"  style="resize: none;" name="form-description" placeholder="Description..." class="form-username form-control" id="form-username"></textarea>
                </div>
                <div class="form-group">
                  Select file to upload (pdf format):
                  <input type="file" name="file" id="fileToUpload">
                </div>

                <button type="submit" class="btn">Apply!</button>
            </form>
          </div>
          </div>

        </div>
    </div>




  </div>
            </div>
        </div>








<?php include ("../footer.html");?>

</body>
</html>
