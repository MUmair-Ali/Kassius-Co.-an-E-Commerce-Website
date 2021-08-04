<?php include("header.php") ?>

  <div id="back1">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h5 class="header1">For Online Store</h5>
          <hr style="height:2px;border-width:0;color:gray;background-color: #b9bcc4">
          <ul>
            <li><a id="qlink" href="#"><img src="img/loc.png" style="margin: 10px;">ABC Street, XYZ Area,City.</a></li>
            <li><a id="qlink" href="#"><img src="img/mail.png" style="margin: 10px;">info@kassius.com</a></li>
            <li><a id="qlink" href="#"><img src="img/phone.png" style="margin: 10px;">+92-3211-2897-4311</a></li>
            </ul>
            <h5 class="header1">For Outlet Inquries</h5>
            <hr style="height:2px;border-width:0;color:gray;background-color: #b9bcc4">
            <ul>
              <li><a id="qlink" href="#"><img src="img/loc.png" style="margin: 10px;">ABC Street, XYZ Area,City.</a></li>
              <li><a id="qlink" href="#"><img src="img/mail.png" style="margin: 10px;">info@kassius.com</a></li>
              <li><a id="qlink" href="#"><img src="img/phone.png" style="margin: 10px;">+92-3211-2897-4311</a></li>
              </ul>
      </div>
      <div class="col-lg-6">
        <h5 class="header1">Contact Us</h5>
        <hr style="height:2px;border-width:0;color:gray;background-color: #b9bcc4">
        <form class="sign-in" action="contactDB.php" method="post">
          <div class="form-group">
            <label for="exampleInputName" class="text">Name</label>
            <input type="text" name="name" class="form-control" id="forms" placeholder="Enter Name">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1" class="text">Email address</label>
            <input type="email" name="email" class="form-control" id="forms" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group">
            <label for="exampleInputNumber" class="text">Phone Number</label>
            <input type="text" name="number" class="form-control" id="forms" placeholder="Enter Phone Number">
          </div>
          <div class="form-group">
            <label for="exampleInputNumber" class="text">Whats on your mind?</label>
            <input type="text" name="feedback" class="form-control" id="forms" placeholder="Whats on your mind?">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
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
