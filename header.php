
<!doctype html>
<html lang="en">
<!-- head is executed first -->

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Home</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <!-- JQuery library is called to enable execution of javascript(s) used in website -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>

<body>
 <header>
    <div id="back0">
      <div class="container">
        <div class="row" style="padding:10px;">
          <div class="col-lg-12">
            <ul class="navigation">
              <li><a href="index.php">HOME</a></li>
              <li><a href="aboutus.php">ABOUT US</a></li>
              <li><a href="acc.php">CREATE AN ACCOUNT</a></li>
              <li><a href="signin.php">SIGN IN</a></li>
              <li><a href="admin/login.php">ADMIN PANEL</a></li>
              <li><a href="contact.php">CONTACT US</a></li>
            </ul>
            <form action="searching.php" method="post"> 
              <input type="text" name="searchbar" class="searchbar" placeholder="Search...">
              <button type="submit" name="search"><img src="img/search.png"></button>
            </form>
            <a id="navigation" href="cart.php"><img src="img/bag.png"></a>
          </div>
        </div>
      </div>
    </div>

    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">
            <img class="img-responsive" src="img/logo.png" alt="Logo" title="Kassius Co."/>
            <h5 class="header">Kassius Co.</h5>
            <h6 id="tagline">Premium Goods Only.</h6>
          </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-center">
            <li><a id="optn" href="novelties.php">Novelties<vr class="solid"></vr></a>
            </li>

            <li class="dropdown">
              <a id="optn" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Clothing<span class="caret"></span><vr class="solid"></vr></a>
              <ul class="dropdown-menu">
                <li><a href="outerwear.php">Outer wear</a></li>
                <li><a href="formalwear.php">Formal wear</a></li>
                <li><a href="activewear.php">Active wear</a></li>
              </ul>
            </li>

            <li class="dropdown">
              <a id="optn" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Footwear <span class="caret"></span><vr class="solid"></vr></a>
              <ul class="dropdown-menu">
                <li><a href="boots.php">Boots</a></li>
                <li><a href="shoes.php">Shoes</a></li>
                <li><a href="sandal.php">Sandals</a></li>
              </ul>
            </li>

            <li class="dropdown">
              <a id="optn" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Accessories<span class="caret"></span><vr class="solid"></vr></a>
              <ul class="dropdown-menu">
                <li><a href="shades.php">Shades</a></li>
                <li><a href="waffers.php">Waffers</a></li>
                <li><a href="belts.php">Belts</a></li>
              </ul>
            </li>
            <li>
              <a id="optn" href="sale.php">Sale<vr class="solid"></vr></a>
            </li>
            <li>
              <a id="optn" href="novelties.php">Launches<vr class="solid"></vr></a>
            </li>
            <li>
              <a id="optn" href="novelties.php">Lifestyle<vr class="solid"></vr></a>
            </li>
            <li>
              <a id="optn" href="videos.php">Videos</a>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
  </header>
