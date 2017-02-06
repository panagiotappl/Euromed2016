<?php
session_start();
$_SESSION['post'] = $_POST;

 ?>
<html lang="en">
<head>

  <title>Euromed2016 | Register Information</title>
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
  <div class='row'>
<h2><font color="#D9853B">Ticket Registration Overview</font></h2>
<h3>Personal information</h3>
<?php echo $_POST['form-email'] . '</br>';
echo $_POST['form-first-name'] . '</br>';
echo $_POST['form-last-name'] . '</br>';
echo $_POST['form-country'] . '</br>';
echo $_POST['form-mobile'] . '</br>'; ?>
<h3>Ticket information</h3>

<?php if($_POST['students-full'] != 0){
  echo 'Students full day pass: '. $_POST['students-full'] . '</br>';
}?>
<?php if($_POST['non-students-full'] != 0){
  echo 'Non students full day pass: '. $_POST['non-students-full'] . '</br>';
}?>

<?php if($_POST['student-days'] != 0){
  echo 'Students daily: '. $_POST['student-days'] . '</br>';
  echo 'Number of days: ' . $_POST['num-of-days'] . '</br>';
}?>

<?php if($_POST['non-student-days'] != 0){
  echo 'Non students daily: '. $_POST['non-student-days'] . '</br>';
  echo 'Number of days: ' . $_POST['num-of-days'] . '</br>';
}?>
<h3>Total Cost: €
<?php echo  $_POST['students-full'] * 450 + $_POST['non-students-full']*500
 + $_POST['student-days'] * $_POST['num-of-days'] * 155
 + $_POST['non-student-days'] * $_POST['num-of-days'] * 190; ?> </h3>
</div>
<div class="row">
  <h2><font color="#D9853B">Payment Options</font></h2>
  <h3>Please choose your payment option here</h3>
  <div class="row">
    <form action="">
    <div class="col-md-2">
      <input type="radio" name="pay" value="credit"> Credit Card
    </div>
    <div class="col-md-2">
      <input type="radio" name="pay" value="paypal"> Paypal
    </div>
  </form>
</div>
</div>

<div class='row'>
  <div class='col-md-7'>
<form id='show-me' style='display:none' class="form-horizontal"
 action="pay.php" method='POST'>
  <br><p><b>Payment by Credit Card</b></p>
  <p>Please enter your credit card information below:</p>
  <div class="form-group">
      <label class="col-sm-4 control-label">*Card Number</label>
      <div class="col-md-8">
        <input class="form-control" id="focusedInput" type="text" >
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword" class="col-sm-4 control-label">*Expiration Date</label>
      <div class="col-md-2">
        <select  class="form-control">
        <option>Month</option>
        <option>Jan</option>
        <option>Feb</option>
        <option>Mar</option>
        <option>Apr</option>
        <option>May</option>
        <option>Jun</option>
        <option>Jul</option>
        <option>Aug</option>
        <option>Sep</option>
        <option>Oct</option>
        <option>Nov</option>
        <option>Dec</option>


        </select>
      </div>
      <div class="col-md-2">
        <select  class="form-control">
        <option>Day</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
        <option>7</option>
        <option>8</option>
        <option>9</option>
        <option>10</option>
        <option>11</option>
        <option>12</option>

        <option>13</option>
        <option>14</option>
        <option>15</option>
        <option>16</option>
        <option>17</option>
        <option>18</option>
        <option>19</option>
        <option>20</option>
        <option>21</option>
        <option>22</option>
        <option>23</option>
        <option>24</option>
        <option>25</option>
        <option>26</option>
        <option>27</option>
        <option>28</option>
        <option>29</option>
        <option>30</option>
        <option>31</option>

        </select>
      </div>

    </div>
    <div class="form-group">

    <label class="col-sm-4 control-label">*Security Code</label>
    <div class="col-md-3">
      <input class="form-control" id="focusedInput" type="text" >
    </div>
  </div>
  <div class="form-group">

  <label class="col-sm-4 control-label">*Cardholder Name</label>
  <div class="col-md-8">
    <input class="form-control" id="focusedInput" type="text" >
  </div>
</div>
<button type='submit' class="btn btn-mine">Confirm Payment</button>
</form>
</div>

</div>
<div class="row" id='show-me2' style='display:none'>
  <br>
After you click the confirm button you will be transfered to Paypal's secure pay.
<br><br>
<form action="pay.php" method='POST'>
<button class="btn btn-mine" >Confirm Payment</button>
</form>
</div>
<script>
$("input[name='pay']").click(function () {
    $('#show-me').css('display', ($(this).val() === 'credit') ? 'block':'none');
    $('#show-me2').css('display', ($(this).val() === 'paypal') ? 'block':'none');


});


</script>

</div>
<?php include ("../footer.html");?>
</body>
