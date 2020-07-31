<?php
include("config.php");
include("register.php");
if($_POST){
    


    $name=$_POST['name'];

    $email=$_POST['email'];
    $password=$_POST['psd'];
    $occupation=$_POST['occupation'];
      
    $sell="SELECT * FROM `register` WHERE email='".$email."'";
     $aa=mysqli_query($con,$sell);
    if(mysqli_num_rows($aa))
    {
        ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Email already exist!</strong>
  <br>Check the email once again.Registration with this email is already done.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
  <?php
    }
  elseif(strlen($password)<4){
?>
 <div class="alert alert-warning alert-dismissible fade show"  role="alert">
  <strong>Please enter strong password</strong>
  <br>Your password should be atleast more than 4 characters.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

 
<?php
    }
    else{
    $sql="INSERT INTO `register`(`name`,`email`,`password`,`occupation`) VALUES('".$name."','".$email."','".$password."','".$occupation."')";
    $conn=mysqli_query($con,$sql);
    if($conn)
    {
        session_start();
        $_SESSION['name']=$name;
        header("location:chat_page.php");
    }
    else{
        echo "not connecting";
    }
}
}