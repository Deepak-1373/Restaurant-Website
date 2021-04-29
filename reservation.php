<?php 
$conn=mysqli_connect("localhost","root","","Restaurant");

if (isset($_POST['submit'])) {
 $fullname=$_POST['fullname'];
 $gender=$_POST['gender'];
 $phonenumber=$_POST['phonenumber'];
 $location=$_POST['location'];
 $extrapeople=$_POST['extrapeople'];
 $email=$_POST['email'];

 $insert="INSERT INTO reservation(`fullname`,`gender`,`phonenumber`,`location`,`extrapeople`,`email`) VALUES('$fullname','$gender','$phonenumber','$location','$extrapeople','$email')";

 $iq=mysqli_query($conn,$insert);
 if ($iq) {
    ?>
    <script type="text/javascript">
      alert("RESERVATION HAS BEEN SUCCESFULLY RECORDED");
      window.location="index.php";
    </script>
    <?php
  } 
  else{
    ?>
    <script type="text/javascript">
      alert("NOT RECORDED");
    </script>
    <?php    
  }

}

?>

<!DOCTYPE html>
<html>
  <title>Reservation Details</title>
  <!-- Meta encoding -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial scale=1.0">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <!-- BOOTSTRAP CDN -->
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- BOOTSTRAP CDN END -->
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3" id="form">
          <center><b class="signup">Reservation</b></center>
          <form method="POST">
            <div class="form-group">
              <label>Full Name</label>
              <input type="text" class="form-control text" name="fullname" placeholder="Enter Your Full Name">
            </div>
            
            <div class="form-group">
              <label>Select Gender</label>
              <select name="gender" class="form-control text">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
              </select>
            </div>
            <div class="form-group">
              <label>Phone Number</label>
              <input type="tel" class="form-control text" name="phonenumber" placeholder="Enter Your Phone No."  required="required">
            </div>
            
            <div class="form-group">
              <label>Enter Your Location</label>
              <input type="text" class="form-control text" name="location" placeholder="Enter Your Location" required="required">
            </div>
            <div class="form-group">
              <label>Number Of Person's</label>
              <input type="number" class="form-control text" name="extrapeople"  required="required" placeholder="No. Of Person's">
            </div>
            <div class="form-group">
              <label>E-mail</label>
              <input type="email" class="form-control text" name="email" placeholder="Enter Your E-mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required="required">
            </div>
            
            <div class="form-group">
              <input type="submit" class="btn btn-primary" name="submit">
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>