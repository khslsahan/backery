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
    <title>Add Items</title>
</head>
<body>
<?php
    include_once('connection.php');
    include('header.php');
    include('nav.php');
    include('imgside.php');
?>
<h1>Add Foods</h1>
<div class="box-Items">
<form action="additem.php" method="post" enctype='multipart/form-data'>
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
    <label for="inputquaitity" class="col-sm-2 col-form-label">Image</label>
    <div class="col-sm-10">
      <input type="file" name="file" value="Upload Image">
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
    $filename=$_FILES['file']['name'];
    $target_dir="upload/";
    if($filename!='')
    {
      $target_file=$target_dir.basename($_FILES['file']['name']);
      //file extension
      $extension=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
      //valid file extension
      $extension_arr=array("jpg","gif","png","jpeg");
      //check extension
      if(in_array($extension,$extension_arr))
      {
        //convert to base64
        $image_base64=base64_encode(file_get_contents($_FILES['file']['tmp_name']));
        $image="data::/image/".$extension.";base64,".$image_base64;
        //store image in upload folder
        if(move_uploaded_file($_FILES['file']['tmp_name'],$target_file))
        {
          $query="INSERT INTO food (image) VALUES ('.$image.')";
          mysqli_query($conn,$query);
        }
      }
    }
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
</body>
</html>
