<?php
    include('top_header.php');
    echo "<title>Product details</title>";
    include('header.php');
?>
<h1>Product Details</h1>
<div class="card mb-3 sm" style="max-width: 540px; margin:20px">
  <div class="row no-gutters">
    <div class="col-md-4 sm-12">
      <img src="images\unnamed.jpg" class="card-img" alt="..." height="100%">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Muffins Cream Sweets Dessert Rose Flower</h5>
        <p class="card-text">You know what I love getting even more than flowers? Pretty cupcakes. If you want to give your sweetie roses for Valentine’s Day, but don’t want to pay ar
          tificially high prices, consi .</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
      <div class="row">
          <button type="button" style="width:40%;margin-left:30px; margin-bottom:10px" class="btn btn-outline-primary">Add to Cart</button>
        <button type="button" style="width:40%; margin-left:10px; margin-bottom:10px" class="btn btn-outline-primary">Buy</button>
      </div>
    </div>
  </div>

</div>
<?php
   $pp=intval($_GET['pid']);
   #echo $pp;
 include('footer.php');
?>
