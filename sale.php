<?php include("header.php") ?>
<?php
$user = 'root';
$database = 'KassiusCo';
$server = 'localhost';
$password = '';

$con = new mysqli($server, $user, $password, $database) or die("database error:". mysqli_error($con));
?>

  <! Slider>
  <div id="back2">
  <div class="container">
    <div class="carousel slide" id="slider" data-ride="carousel">
      <!Images>
        <div class="carousel-inner">

          <div class="item active">
            <div class="carousel-caption d-none d-md-block w-50 ml-auto mr-auto">
              <h1 class="bheader">SALE UPTO 75% OFF</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis
                ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas
                accumsan lacus vel facilisis.</p>
            </div>
            <img src="img/banner2.png" class="img-responsive">
          </div>
        </div>
      </div>
    </div>
</div>

    <div id="back1">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h3 class="header">FLASH SALES</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 text-center">
            <a class="link" href="#">
              <img src="img/shirt.png" class="center">
            </a>
            <h4 class="header">Bold-KSH113</h4>
          </div>
          <div class="col-lg-6 text-center">
            <a class="link" href="#">
            <img src="img/skirt.png" class="center">
          </a>
            <h4 class="header">Vintage-KSK88</h4>
          </div>
        </div>
      </div>
    </div>

    <?php
    $query="SELECT `id`,`name`, `code`, `price`, `image` FROM `products` WHERE category='Novelties' ORDER BY RAND() LIMIT 3";
    $result=mysqli_query($con, $query);
    ?>

      <div id="back2">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 text-center">
              <h3 class="header">HOT 50% OFF</h3>
            </div>
          </div>
          <div id="arrival" class="row">
            <?php
            while($row = $result -> fetch_assoc())
            { ?>
                <div class="col-lg-4">
                  <div class="card">
                    <img class="card-img-top" src="<?= $row['image']?>" alt="Card image cap">
                    <div class="card-body">
                    <h4 class="card-title"><?php echo $row['name'].'-'.$row['code']; ?></h4>
                    <h5 class="card-body"><?php echo 'Rs.'.$row['price']; ?></h5>
                    <a href="details.php?id=<?= $row['id']?>" class="btn-detail">View Details</a>
                  <a href="mybag.php?id=<?= $row['id']?>" class="btn btn-dark">Add to Bag</a>
                </div>
              </div>
            </div>

          <?php } ?>
          </div>

          <?php
          $query="SELECT `id`, `name`, `code`, `price`, `image` FROM `products` WHERE category='Novelties' ORDER BY RAND() LIMIT 4";
          $result=mysqli_query($con, $query);
          ?>

          <div class="row">
            <div class="col-lg-12">
              <h5 class="header">HOT 25% OFF</h5>
              <hr style="height:2px;border-width:0;color:gray;background-color: #b9bcc4">
            </div>
          </div>
          <div class="row">
            <?php
              while($row = $result -> fetch_assoc())
              {
            ?>
                      <div class="col-lg-3">
                        <div id="mcard" class="card">
                        <img class="card-img-top" src="<?= $row['image'];?>" alt="Card image cap">
                        <div class="card-body">
                        <h4 class="card-title"><?php echo $row['name'].'-'.$row['code']; ?></h4>
                        <h5 class="card-body"><?php echo 'Rs.'.$row['price']; ?></h5>
                        <a href="details.php?id=<?= $row['id'] ?>" class="btn-detail">View Details</a>
                          <a href="mybag.php?id=<?= $row['id']?>" class="btn btn-dark">Add to Bag</a>
                        </div>
                      </div>
                    </div>

            <?php } ?>

          </div>

          <?php
          $query="SELECT `id`,`name`, `code`, `price`, `image` FROM `products` WHERE category='Novelties' ORDER BY RAND() LIMIT 4";
          $result=mysqli_query($con, $query);
          ?>

          <div class="row">
            <div class="col-lg-12">
              <h5 class="header">HOT 15% OFF</h5>
              <hr style="height:2px;border-width:0;color:gray;background-color: #b9bcc4">
            </div>
          </div>
          <div class="row">
            <?php
              while($row = $result -> fetch_assoc())
              {
            ?>
                    <div class="col-lg-3">
                      <div id="mcard" class="card">
                        <img class="card-img-top" src="<?= $row['image'];?>" alt="Card image cap">
                        <div class="card-body">
                        <h4 class="card-title"><?php echo $row['name'].'-'.$row['code']; ?></h4>
                        <h5 class="card-body"><?php echo 'Rs.'.$row['price']; ?></h5>
                        <a href="details.php?id=<?= $row['id']?>" class="btn-detail">View Details</a>
                      <a href="mybag.php?id=<?= $row['id']?>" class="btn btn-dark">Add to Bag</a>
                      </div>
                    </div>
                  </div>

                  <?php }?>

                </div>

          <?php
          $query="SELECT `id`,`name`, `code`, `price`, `image` FROM `products` WHERE category='Novelties' ORDER BY RAND() LIMIT 4";
          $result=mysqli_query($con, $query);
          ?>

          <div class="row">
            <div class="col-lg-12">
              <h5 class="header">HOT 10% OFF</h5>
              <hr style="height:2px;border-width:0;color:gray;background-color: #b9bcc4">
            </div>
          </div>
          <div class="row">

            <?php
              while($row = $result -> fetch_assoc())
              {
            ?>
                    <div class="col-lg-3">
                      <div id="mcard" class="card">
                        <img class="card-img-top" src="<?= $row['image'];?>" alt="Card image cap">
                        <div class="card-body">
                        <h4 class="card-title"><?php echo $row['name'].'-'.$row['code']; ?></h4>
                        <h5 class="card-body"><?php echo 'Rs.'.$row['price']; ?></h5>
                        <a href="details.php?id=<?= $row['id']?>" class="btn-detail">View Details</a>
                        <a href="mybag.php?id=<?= $row['id']?>" class="btn btn-dark">Add to Bag</a>
                        </div>
                      </div>
                    </div>

              <?php }?>

              </div>
            </div>
          </div>

      <div id="back3">
        <div class="container">
          <div class="row">
            <form action="connection.php" class="subs" method="post">
              <div class="col-lg-8">
                <div class="input-group mb-3">
                  <input type="text" name="email" class="form-control" placeholder="Enter your Email" aria-label="Enter Your Email">
                </div>
              </div>
              <div class="col-lg-4" style="padding: 15px;">
                <div class="sbtn"><button type="submit" class="btn-subs" style="width: 250px; padding:10px;">Subscribe</button></div>
              </div>
            </form>
          </div>
        </div>
      </div>

    </body>

   <?php include("footer.php") ?>