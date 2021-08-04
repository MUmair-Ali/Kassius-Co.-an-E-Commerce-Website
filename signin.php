  <?php include("header.php") ?>

  <div id="back1">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h5 class="header1">CUSTOMER SIGN-IN</h5>
          <hr style="height:2px;border-width:0;color:gray;background-color: #b9bcc4">
      <form class="sign-in" action="sign.php" method="post">
        <div class="form-group">
          <label for="exampleInputEmail1" class="text">Email address</label>
          <input type="email" name="email" class="form-control" id="forms" aria-describedby="emailHelp" placeholder="Enter email">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1" class="text">Password</label>
          <input type="password" name="password" class="form-control" id="forms" placeholder="Password">
        </div>
        <div class="form-check">
          <input type="checkbox" class="form-check-input">
          <label class="form-check-label text" for="exampleCheck1">Remember Me</label>
        </div>
        <button type="submit" class="btn btn-primary">Sign in</button>
      </form>
      </div>
      <div class="col-lg-6">
        <h5 class="header1">NEW CUSTOMERS</h5>
        <hr style="height:2px;border-width:0;color:gray;background-color: #b9bcc4">
        <form class="sign-in">
        <p class="text">Creating an account has many benefits: check out faster, keep more than one address, track orders and more.</p>
        <a class="btn btn-primary" href="acc.html">Create an Account</a>
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
