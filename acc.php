<?php include("header.php")?>

  <div id="back1">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h5 class="header">CREATE AN ACCOUNT</h5>
          <hr style="height:2px;border-width:0;color:gray;background-color: #b9bcc4">
          </div>
    <form class="sign-in" action="auth.php" method="post">
      <div class="col-lg-6">
        <div class="form-group">
          <label for="forFullname" class="text">Full Name</label>
          <input type="text" name="name" class="form-control" id="forms" aria-describedby="emailHelp" placeholder="Enter Full Name">
        </div>
        <div class="form-group">
          <label for="forEmail" class="text">Email</label>
          <input type="text" name="email" class="form-control" id="forms" placeholder="Enter Email">
        </div>
        <div class="form-group">
          <label for="forPassword" class="text">Password</label>
          <input type="password" name="password" class="form-control" id="forms" placeholder="Enter Password">
        </div>
        </div>
        <div class="col-lg-6">
          <div class="form-group">
            <label for="forAddress" class="text">Address</label>
            <input type="text" name="address" class="form-control" id="forms" aria-describedby="emailHelp" placeholder="Enter Address">
          </div>
          <div class="form-group">
            <label for="forMobile" class="text">Mobile Number</label>
            <input type="text" name="number" class="form-control" id="forms" placeholder="Enter Mobile Number">
          </div>
          <div class="form-check">
            <input type="checkbox" class="form-check-input">
            <label class="form-check-label text" for="exampleCheck1">Remember Me</label>
          </div>
          <button type="submit" class="btn btn-primary">Create an Account</button>
        </div>
        </form>
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


<?php include("footer.php")?>
