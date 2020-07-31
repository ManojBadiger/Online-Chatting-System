<?php
if($_POST)
{?>
<html>
<title>
Recover Password</title>
<body>
<center>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<?php

include("config.php");
include("forgot.php");

$_SESSION['email']=$_POST['email'];

$s="SELECT * FROM `register` WHERE email='".$_SESSION['email']."'";

$co=mysqli_query($con,$s);
$fet=mysqli_fetch_assoc($co);

   if(isset($fet))
   {
       ?>
     
    <div class="alert alert-success" id="as" role="alert">
    <br>
    <h4 class="alert-heading">Well done!</h4>
    <p>Your password is.</p><strong><?php echo $fet['password']?></strong>
    <hr>
    <a href="login.php" class="btn btn-primary">Login Here</a>
  </div>
 <?php
   }
   else
   {
       ?>
      
    <div class="alert alert-warning alert-dismissible fade show" id="as" role="alert">
    <br>
    <strong>Please enter Valid Password</strong>
    <br>Your entered password is wrong you can register again
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    
      <span aria-hidden="true">&times;</span>
    </button>
    <a href="register.php" class="btn btn-primary">Register Here</a>
  </div>
  <?php
   }
   ?>
    
</body>
</center>
<style>
body{
    background-image:url("images/img5.png");
    background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  
}
#as{
    margin-top:6%;
}


</style>
</html>
<?php
}
else{
    header("location: forgot.php");
}