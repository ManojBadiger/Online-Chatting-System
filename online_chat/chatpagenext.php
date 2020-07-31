<?php 
include("config.php");
include("verify.php");
session_start();
if(isset($_SESSION['name'])){



$sel="SELECT * FROM `chat`";
$se=mysqli_query($con,$sel);


?>
<html>
<title>
Chat room
</title>
<body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<center>
<h1>


 

 Welcome to Chat room
</h1>

</center>




<div  class="container">
<?php
if(mysqli_num_rows($se))
{
  while($rows=mysqli_fetch_assoc($se))
  {
    ?>
    <span><?php echo $rows['name']?>: </span>
  
  <h6 class="img-rounded" alt="Cinque Terre" id="cont"><?php echo $rows['message']?></h6>
    <br>
    <?php
  }
}

else{
  ?>
  <p>No chats available</p>
  <?php
}
?>

<form action="sendmessage.php" method="post">
<br><br><br><br><br><br>
<br><br><br><br><br><br>
<br><br><br>
<center>
<textarea class="texx" rows="2" cols="30" name="msg" required></textarea>

  <button type="submit" class="btn btn-primary">Send</button>

  </center>
  </form>
  </div>
  <center>
  <a href="logout.php" class="btn btn-primary">Logout</a>
  </center>
</body>
<style>
body{
    background-image: url('images/img5.png');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
.container {
    margin-top: 9%;
    width: 70%;
    length:60%;
    background-color:#26262b9e;
    padding-top:2%;
    padding-bottom:2%;
  }
.name{
    color:white;
}
.email{
    color:white;
}
.psw
{
    color:white;
}
.form-check-label
{
    color:white;
}
a
{
  position:relative;
bottom:78px;
  left:210px;
}
span{
  color:white;
}
#cont{
  length="2%";
  width="10%";
  padding-top:2%;
  background-color:#26262b9e;
  color:white;
 
  border-radius: 10px;
}
.texx{
  position:relative;
  top:20px;
  background-color:#26262b9e;
  color:white;
}
h1{
  color:#067D6E;
  text-shadow: 2px 2px 4px #000000;
}
</style>
</html>
<?php
}
else
{
  header("location: index.php");
}
?>