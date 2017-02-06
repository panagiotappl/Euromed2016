<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>

  <title>Euromed2016 | Register</title>
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
  <a href="book-information.php">GENERAL INFORMATION</a></div>
  <div class="row">
  <a href="book-tickets.php"><font color="#D9853B">BOOK TICKETS</font></a></div>
  </div>
  <div class="col-md-6 verticalLine pad-left">
    <div class="row">
      <h1><font color="#555555">BOOK YOUR TICKETS</font></h1>
    </div>
    <div class="row">
       <form action="confirm.php" method="POST">

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
             <label class="sr-only" for="form-country">Country</label>
             <input type="text" name="form-country" placeholder="Country..." class="form-username form-control" id="form-username">
           </div>
           <div class="form-group">
             <label class="sr-only" for="form-mobile">Mobile</label>
             <input type="text" name="form-mobile" placeholder="Mobile..." class="form-username form-control" id="form-username">
           </div>

           <h3><font color="#D9853B">Registration fees (Entire Program)</font></h3>

      <table class="table table-striped table-bordered">
    <thead>
      <tr>
        <th>Description</th>
        <th>Early Bird<br><font color="#8D8B8B">Until 24 Oct. 2016</font></th>
        <th>Regular<br><font color="#8D8B8B">25 Oct. 2016</font></th>
        <th>Quantity</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Students</td>
        <td><strike>€ 360</strike></td>
        <td>€ 450</td>

        <td>
          <div class="form-group">
  <select name="students-full" onchange="change()" class="form-control" id="sel1">
    <option>0</option>

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

  </select>
</div></td>
      </tr>
      <tr>
        <td>Non students</td>
        <td><strike>€ 440</strike></td>
        <td>€ 500</td>

        <td> <div class="form-group">
  <select name="non-students-full" onchange="change()" class="form-control" id="sel2">
    <option>0</option>

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

  </select>
</div></td>
      </tr>

    </tbody>
  </table>

</div>
<h3><font color="#D9853B">Registration fees (Daily Program)</font></h3>
<div class="row">
  <div class="col-md-4">
<h4>Number of days:</h4>
</div>
<div class="col-md-2">
  <select name="num-of-days" onchange="change()" class="form-control" id="sel3">
    <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
    <option>5</option>
    <option>6</option>


  </select>
  <div class="row">
</div>
</div>

  <table class="table table-striped table-bordered">
<thead>
  <tr>
    <th>Description</th>
    <th>Early Bird
    <br><font color="#8D8B8B">Until 24 Oct. 2016</font></th>
    <th>Regular<br><font color="#8D8B8B">25 Oct. 2016</font></th>
    <th>Quantity</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td>Students</td>
    <td><strike>€ 125</strike></td>
    <td>€ 155</td>

    <td> <div class="form-group">
<select name="student-days" onchange="change()" class="form-control" id="sel4">
  <option>0</option>

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

</select>
</div></td>
  </tr>
  <tr>
    <td>Non students</td>
    <td><strike>€ 180</strike></td>
    <td>€ 190</td>

    <td> <div class="form-group">
<select name="non-student-days" onchange="change()" class="form-control" id="sel5">
<option>0</option>
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

</select>
</div></td>
  </tr>

</tbody>
</table>
</div>
  <div align="left">Total: € <span id="total">0</span></div>
  <div class="row" align="right">
    <button class="btn btn-mine" type="submit">Register</button>
  </div>
</form>
    </div>

  </div>




</div>



<?php include ("../footer.html");?>

<script>
    function change() {
        var sum = $('#sel1')[0].selectedIndex*450 + $('#sel2')[0].selectedIndex*500 +
                ($('#sel3')[0].selectedIndex+1) * ($('#sel4')[0].selectedIndex*155 + $('#sel5')[0].selectedIndex*190);
        $('#total').html(''+sum);
    }
</script>

</body>
</html>
