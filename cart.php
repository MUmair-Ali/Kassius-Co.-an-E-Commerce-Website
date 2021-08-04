<?php include("header.php") ?>
<?php
$user = 'root';
$database = 'KassiusCo';
$server = 'localhost';
$password = '';

$con = new mysqli($server, $user, $password, $database) or die("database error:". mysqli_error($con));
?>
<?php
$query="SELECT `products`.`id`, `products`.`name`, `products`.`code`, `products`.`price`, `products`.`image` FROM `products` join `bag`
 on `products`.`id` = `bag`.`productid`";
$result=mysqli_query($con, $query)or die($con -> error);
?>

<div id="back1">
  <div class="container">
    <div class="row">
        <div class="col-lg-9">
          <h3 class="header">SHOPPING BAG</h3>
          <hr style="height:2px;border-width:0;color:gray;background-color: #b9bcc4">
        </div>
        <div class="col-lg-3">
          <h3 class="header">SUMMARY</h3>
          <hr style="height:2px;border-width:0;color:gray;background-color: #b9bcc4">
        </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-9">
      <table class="table">
        <thead class="thead-light">
          <tr>
            <th scope="col">Product</th>
            <th scope="col">Quantity</th>
            <th scope="col">SubTotal</th>
          </tr>
        </thead>
        <?php
          $total = 0;
          while($row = $result -> fetch_assoc())
          {
        ?>
        <tbody>
          <tr>
            <td class="text">
              <div class="cart-info">
                <img src="<?= $row['image'] ?>">
                <div>
                  <h5><?= $row['name'].'-'.$row['code']?></h5>
                  <small><?= 'Rs.'.$row['price'].'/-' ?></small>
                  <br>
                  <a href="removeitem.php?id=<?= $row['id']?>">Remove</a>
                </div>
              </div>
            </td>
            <td class="text"><input type="number" name="count" min="1" max="20" value="1"></td>
            <td class="text"><?php $qty = $row['price'] * 1; $total = $total + $row['price']; ?><?= 'Rs.'.$qty.'/-' ?></td>
          </tr>
        </tbody>
        <?php
        }
        ?>
      </table>
    </div>
    <div class="col-lg-3">
      <form style="float:right;">
        <h4 class="text" style="float:right;"><?= 'Total Cost: Rs.'.$total.'/-' ?></h4>
      <a href="checkout.php" class="btn btn-dark" style="float:right; margin-top:10px;">Proceed to Checkout</a>
    </form>
    </div>
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
