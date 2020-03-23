
<?php
    include('top_header.php');
    echo "<title>Add Items</title>";
    include('connection.php');
    include('header.php');
?>

<h1>Add products</h1>
<center>
<div class="box-Items col-md-6 col-sm-12">
<form action="additem.php" method="post" enctype='multipart/form-data'>
  <div class="form-group row">
    <label for="inputproductname" class="col-sm-2 col-form-label">Product Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputfoodname" name="productname">
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
    <div class="col-6 ">
      <button type="reset" name="reset" class="btn btn-primary">Reset</button>
    </div>
    <div class="col-6 ">
      <button type="submit" name="submit" class="btn btn-primary">Add Food</button>
    </div>
  </div>
</form>
<?php
  if(isset($_POST['submit']))
  {
    $productname=$_POST['productname'];
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
          // $query="INSERT INTO food (image) VALUES ('.$image.')";
          // mysqli_query($conn,$query);
          $q1="SELECT * FROM product where product_name='$productname'";
          $que=mysqli_query($conn,$q1);
          if(mysqli_num_rows($que)==0)
          {
            $query="INSERT INTO products (product_name,product_quantity,category_id,	product_price,product_image) VALUES ('$productname',$qty,01,$price,'.$image.')";
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
        }
      }
    }

?>
</div>
</center>
<?php
 include("footer.php");
?>
</body>
</html>
