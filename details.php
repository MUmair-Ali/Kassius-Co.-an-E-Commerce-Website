<?php include("header.php") ?>
<?php
$user = 'root';
$database = 'KassiusCo';
$server = 'localhost';
$password = '';

$con = new mysqli($server, $user, $password, $database) or die("database error:". mysqli_error($con));
?>
<?php $id=$_GET['id'];
  ?>
  <?php
  $query="SELECT * FROM `products` WHERE id='$id'";
  $result=mysqli_query($con, $query);
  ?>
<div id="back1">
  <div class="container">
    <div class="row">
          <?php
            while($row = $result -> fetch_assoc())
            {
          ?>
          <div class="col-lg-5">
            <img class="img-responsive" src="<?= $row['image']?>" style="margin-top:25px; width:360px; height:360px;"/>
          </div>
          <div class="col-lg-7">
            <h2 class="detail-title"><?= $row['name'].'-'.$row['code'];?></h2>
            <h6 class="detail-text">In-Stock</h6>
            <h3 class="detail-title"><?= 'Rs.'.$row['price'].'/-';?></h3>
            <hr style="height:2px;border-width:0;color:gray;background-color: #b9bcc4">
            <p class="detail-text" style="margin-bottom:10px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
              sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              <a href="mybag.php?id=<?= $row['id']?>" class="btn btn-dark" style="margin-top:25px;">Add to Bag</a>
              <h4 class="detail-title" style="margin-top:25px;">More Information</h4>
              <hr style="height:2px;border-width:0;color:gray;background-color: #b9bcc4">
              <h6 class="detail-text"><?= 'Category: '.$row['category'];?></h6>
              <h6 class="detail-text"><?= 'Gender: '.$row['gender']?></h6>
          </div>

        <?php } ?>
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
