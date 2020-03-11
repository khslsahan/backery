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
      <input type="text" class="form-control is-valid" id="validationServer01" placeholder="First name" name="fname" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <label for="validationServer02">Last name</label>
      <input type="text" class="form-control is-valid" id="validationServer02" placeholder="Last name" name="lname" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <label for="validationServerUsername">Email</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend3">@</span>
        </div>
        <input type="text" class="form-control is-invalid" id="validationServerUsername" name="email" placeholder="email" aria-describedby="inputGroupPrepend3" required>
        <div class="invalid-feedback">
          Please choose a valid email.
        </div>
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-4 mb-4">
      <label for="validationServer03">Contact no</label>
      <input type="text" class="form-control is-invalid" id="validationServer03" placeholder="Contact No" name="contact_no" required>
      <div class="invalid-feedback">
        Please provide a valid contact number.
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <label for="validationServer04">Password</label>
      <input type="password" class="form-control is-invalid" id="validationServer04" placeholder="password" name="password" required>
      <div class="invalid-feedback">
        Please provide a valid password.
      </div>
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
      <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" required>
      <label class="form-check-label" for="invalidCheck3">
        Agree to terms and conditions
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
  <button class="btn btn-primary" type="submit" name="submit">login</button>
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
