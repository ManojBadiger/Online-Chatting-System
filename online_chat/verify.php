<?php
if($_POST){
include("config.php");
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['psd'];
$verify="SELECT * FROM `register` WHERE email='".$email."' and  password='".$password."' and name='".$name."'";
$sql=mysqli_query($con,$verify);
if(mysqli_num_rows($sql)){
    $arr=mysqli_fetch_assoc("$verify");
    session_start();
    $_SESSION['name']=$name;
    header("location:chat_page.php");
}
else{
    include("login.php")
    ?>
     <div class="alert alert-warning alert-dismissible fade show" id="sa"role="alert">
  <strong>Incorrect details</strong>
  <br>Please verify your email,name and password once again.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<style>

    #sa{
    margin-top:2%;

}
</style>

<?php
}
}
?>