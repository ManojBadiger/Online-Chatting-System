<html>
<title>
Register
</title>
<body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<center>
<h1>
Don't Have an account Signup Here</h1>
</center>


<div class="container">
<form action="add_user.php" method="post">
<div class="form-group">
    <label for="exampleInputEmail1" class="name">Name:</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail1"  placeholder="Your Name" required>
   
  </div>
<div class="form-group">
    <label for="exampleInputEmail1" class="email">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="xyz@gmail.com" required>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
 
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1" class="psw">Password</label>
    <input type="password" class="form-control" name="psd" placeholder="Password" required>
  </div>
<div class="form-group">
<select class="form-control" name="occupation" required>
<option disabled="">Select your occupation</option>
<option>Student</option>
<option>Teacher</option>
<option>Other</option>
</select>
</div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input"  required>
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Create Account</button>
  </form>
  </div>
</body>
<style>
body{
    background-image: url('images/img5.png');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
.container {
    margin-top: 4%;
    width: 70%;
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
h1{
  color:#067D6E;
  text-shadow: 2px 2px 4px #000000;
}

</style>
</html>