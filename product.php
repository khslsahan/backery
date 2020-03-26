<?php
    include('top_header.php');
    echo "<title>Outletdetails</title>";
    include('header.php');
?>
<center>
    <div class="container-fluid " >
      <div class="col-md-9">
        <div class=" col-md-7   col-sm-12">
              <img src="images\our-products.jpg" alt="" width="100%" height="100%">
        </div>

    <div class="row" align="center">
      <?php  for($x=0 ; $x<9 ; $x++){  ?>
    <div class="col-md-4 sm-12">
      <div class="card btn" id="product" style="margin:20px; padding:5px;">
      <a href="product_details.php">  <img src="images\unnamed.jpg" class="card-img-top" alt="..."></a>
          <div class="card-body">
            <h4><a href="product_details.php" style="text-decoration:none">Muffins Cream Sweets Dessert Rose Flower</a></h4>
          <p class="card-text">You know what I love getting even more than flowers? Pretty cupcakes. If you want to give your sweetie roses for Valentine’s Day, but don’t want to pay ar
            tificially high prices, consi .</p>
            <div class="row">
                <label class="col-6" ><span class="
                  color: #fff;
                  text-decoration: none;">price</span></label>
                <label class="col-6">Rs 500.00/=</label>
            </div>
            <div class="row">
                <button type="button" style="width:100%" class="btn btn-outline-primary">Add to Cart</button>
              <button type="button" style="width:100%" class="btn btn-outline-primary">Buy</button>
            </div>
        </div>
    </div>
    </div>
      <?php } ?>
</div>
</div>
</div>
</div>


</center>

<?php
    include("footer.php");
?>
