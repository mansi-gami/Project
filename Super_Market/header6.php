<?php 
ob_start();
session_start();
//include "connection.php"
?>
<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">

  <title>
    Super Market
  </title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="index.html">
          <span>
            Super Market
          </span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav  ">
            <li class="nav-item">
              <a class="nav-link" href="index.php" style="color: white;">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item  ">
              <a class="nav-link" href="variety.php" style="color: white;">
                Shopping
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="cart.php" style="color: white;">
                Cart
              </a>
            </li>
		<li class="nav-item">
              <a class="nav-link" href="feedback.php" style="color: white;">
                Feedback
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php" style="color: white;">
                About Us
              </a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="contact.php">Contact Us</a>
            </li>
             <li>
      
          <?php 
          if(!isset($_SESSION['u_nm']))

          //if($_SESSION['u_nm']=="")

          {
          ?> 
          <li class="nav-item">
	  <a href="login.php" style="font-size:22px;"><font color="white" >
<?php echo "Login";
          }
          else 
            
	  { 
?> 
              </a></li >
              <a href="logout.php" style="font-size:22px;"><font color="white">
              <?php   echo "Logout";
            }
                ?>
          </a>
        </li>
          </ul>
         
        </div>
      </nav>
    </header>
  </div>
</body>
</html>