<div style="width:100% ; background-color:#222f3e ">
<div style="margin-left:10% ; margin-right: 10%;">

<nav class="navbar navbar-expand-lg navbar navbar "  style="background-color:#222f3e " >

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="main.php">Home <span class="sr-only">(current)</span></a>
      </li>


      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          View
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="product.php">View Items</a>
          <a class="dropdown-item" href="outlets.php">View Outlets</a>

          <?php if(isset($_SESSION['login']) && ($_SESSION['role']=='admin')){  ?>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">View Users</a>
        </div>
      <?php } ?>
      </li>
      <?php if(isset($_SESSION['login']) && ($_SESSION['role']=='admin')){  ?>
      <li class="nav-item">
        <a class="nav-link" href="additem.php">Add Items</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Add Outlets</a>
      </li>
    <?php } ?>
      <!-- <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Logout</a>
      </li> -->

    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>

</nav>
</div>
</div>
