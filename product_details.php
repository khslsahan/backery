<?php
    include('top_header.php');
    echo "<title>Product details</title>";
    include('header.php');
?>
<h1>product details</h1>

<?php
   $pp=intval($_GET['pid']);
   echo $pp;
 include('footer.php');
?>
