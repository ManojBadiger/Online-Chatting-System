<?php



if($_POST){
    include("config.php");


$em=$_POST['email'];
$sels="INSERT INTO `source`(`email`) VALUES('".$em."')";
$c=mysqli_query($con,$sels);
if(isset($c)){
    include("source.php");
    ?>
     <div class="alert alert-success" id="as" role="alert">
    <br>
    <h4 class="alert-heading">Seccessfully sent!</h4>
    <p><strong> Your email address is recorded. We will send you the source code within 24 hours directly to your email address.</strong></p>
    <hr>
    <a href="login.php" class="btn btn-primary">Login Here</a>
  </div>
  <?php
}
?>
<?php
}
else{
    header("location: source.php");
}
?>