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
      <div class="card btn " id="product" style="margin:20px; padding:5px;">
      <a href="product_details.php">  <img src="images\unnamed.jpg" class="card-img-top" alt="..."></a>
          <div class="card-body">
            <h4><a href="product_details.php">Muffins Cream Sweets Dessert Rose Flower</a></h4>
          <p class="card-text"><a href="product_details.php">You know what I love getting even more than flowers? Pretty cupcakes. If you want to give your sweetie roses for Valentine’s Day, but don’t want to pay ar
            tificially high prices, consi .</a></p>
            <div class="row">
                <label class="col-6" ><a href="product_details.php?pid=1" ><span class="
                  color: #fff;
                  text-decoration: none;">price</span></a></label>
                <label class="col-6"><a href="product_details.php">Rs 500.00/= </a></label>
            </div>
            <div class="row">
              <button class="col-6 btn-primary" type="submit" name="button">Buy</button>
              <button class="col-6 btn-primary" type="button" name="button">Favorirs</button>
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
