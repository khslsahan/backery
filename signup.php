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
    <title>Sign Up</title>
</head>
<body>
 <?php
    include("header.php");
    include_once("connection.php");
  ?>
  <h1 style="text-align:center">Sign Up</h1>
  <center>
  <div class="box-signup">
    <form action="signup.php" method="post">
  <div class="form-row">
    <div class="col-md-4 mb-4">
      <label for="validationServer01">First name</label>
      <input type="text" class="form-control" id="validationServer01" placeholder="First name" name="fname" required>

    </div>
    <div class="col-md-4 mb-4">
      <label for="validationServer02">Last name</label>
      <input type="text" class="form-control" id="validationServer02" placeholder="Last name" name="lname" required>

    </div>
    <div class="col-md-4 mb-4">
      <label for="validationServerUsername">Email</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend3">@</span>
        </div>
        <input type="text" class="form-control" id="validationServerUsername" name="email" placeholder="email" aria-describedby="inputGroupPrepend3" required>

      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-4 mb-4">
      <label for="validationServer03">Contact no</label>
      <input type="text" class="form-control" id="validationServer03" placeholder="Contact No" name="contact_no" required>

    </div>
    <div class="col-md-4 mb-4">
      <label for="validationServer04">Password</label>
      <input type="password" class="form-control" id="validationServer04" placeholder="password" name="password" required>

    </div>
    <div class="col-md-4 mb-4">
      <label for="validationServer05">Role</label>
      <select class="custom-select" name="role" required>
      <option value="Customer" selected>Customer</option>
      <option value="Admin">Admin</option>
      </select>
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input type="checkbox" value="" id="invalidCheck3" required>
      <label class="form-check-label" for="invalidCheck3">
        Agree to terms and conditions
      </label>

    </div>
  </div>
  <button class="btn btn-primary" type="submit" name="submit">Sign Up</button>
</form>
<?php
  if(isset($_POST['submit']))
  {
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $contact_no=$_POST['contact_no'];
    $password=md5($_POST['password']);
    $role=$_POST['role'];
    $q1="SELECT * FROM user where email='$email'";
    $que=mysqli_query($conn,$q1);
    if(mysqli_num_rows($que)==0)
    {
      $query="INSERT INTO user (fname,lname,email,contact_no,password,role) VALUES ('$fname','$lname','$email','$contact_no','$password','$role')";
      $result=mysqli_query($conn,$query);
      if(!$result)
        die('data not inserted'.mysqli_error($conn));
        else {
          echo "Data insertd";
        }
    }
    else {
      echo "Email already inserted";
    }


  }
 ?>
  </div>
</center>
    <?php
      include("footer.php")
    ?>
  </body>
  </html>
