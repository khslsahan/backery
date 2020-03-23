<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Login</title>
</head>
<body>
 <?php
      include("header.php");
 ?>

 <h1 style="text-align:center">Login</h1>
<center>
<div class="box-login col-md-4 col-md-3">
<form action="Login.php" method="post">
<div class="form-group">
 <label for="exampleInputEmail1">Email address</label>
 <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="Enter email">
</div>
<div class="form-group">
 <label for="exampleInputPassword1">Password</label>
 <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
</div>
<p>Don't you have an account? Click here to <a href="signup.php">Create acconut.</a></p>
<button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
<?php
  include_once('connection.php');
  if(isset($_POST['submit']))
  {
    $email=$_POST['email'];
      $password=md5($_POST['password']);
    $que="SELECT * FROM user WHERE email='$email' AND password='$password'" or die ('failed to get result'.mysqli_error($conn));
    $result=mysqli_query($conn,$que);
    $row=mysqli_fetch_assoc($result);
    if($row['email']==$email && $row['password']==$password && $row['role']=='Customer')
      header('location:customer.php');
    else if($row['email']==$email && $row['password']==$password && $row['role']=='Admin')
      header('location:admin.php');
      else {
        echo "Invalid username or Password";
      }

  }
 ?>
</div>
</center>
<br>


 <?php
  include("footer.php");
 ?>
</body>
</html>
