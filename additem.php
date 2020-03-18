<?php
    include_once('connection.php');
    include('header.php');
    include('nav.php');
    include('imgside.php');
?>
<h1>Add Foods</h1>
<div class="box-Items">
<form action="additem.php" method="post">
  <div class="form-group row">
    <label for="inputfoodname" class="col-sm-2 col-form-label">Food Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputfoodname" name="foodname">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputquaitity" class="col-sm-2 col-form-label">Quantity</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputquaitity" name="quantity">
    </div>
  </div>
  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Category</legend>
      <div class="col-sm-10">
        <select class="custom-select" name="category" required>
        <option value="Pastyfoods" selected>Pastry Foods</option>
        <option value="Cakes">Cakes</option>
        <option value="Sweets">Sweets</option>
        <option value="Beverages">Beverages</option>
        <option value="Deserts">Deserts</option>
        <option value="Others">Other Foods</option>
        </select>
      </div>
    </div>
  </fieldset>
  <div class="form-group row">
    <label for="inputquaitity" class="col-sm-2 col-form-label">Price Per Unit (Rs.)</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputquaitity" name="price">
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" name="submit" class="btn btn-primary">Add Food</button>
    </div>
  </div>
</form>
<?php
  if(isset($_POST['submit']))
  {
    $foodname=$_POST['foodname'];
    $qty=$_POST['quantity'];
    $category=$_POST['category'];
    $price=$_POST['price'];
    $q1="SELECT * FROM food where foodname='$foodname'";
    $que=mysqli_query($conn,$q1);
    if(mysqli_num_rows($que)==0)
    {
      $query="INSERT INTO food (foodname,quantity,catogory,price) VALUES ('$foodname',$qty,'$category',$price)";
      $result=mysqli_query($conn,$query);
      if(!$result)
        die ('data not inserted..!'.mysqli_error($conn));
      else
        echo "Food item is inserted Successfully...!";
    }
    else
      {
      echo "The given food item is already inserted...!";
      }
    }
?>
</div>
<?php
 include("footer.php");
?>
