<!--Tested-->
<!--Cricket Website-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Rise & Advertise
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="./assets/css/now-ui-kit.css?v=1.2.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="./assets/demo/demo.css" rel="stylesheet" />
  <style>
    body
	{
		background-image: linear-gradient(to left,blue,green,orange);
	}
	.ft-black
	{
		color: black;
	}
  </style>
</head>

<body class="index-page sidebar-collapse">
  <!--Navbar-->
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-transparent " color-on-scroll="400">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" rel="tooltip" data-placement="bottom">
          Rise & Advertise
        </a>
        <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar top-bar"></span>
          <span class="navbar-toggler-bar middle-bar"></span>
          <span class="navbar-toggler-bar bottom-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="./assets/img/blurred-image-1.jpg">
        <ul class="navbar-nav">
          <li onclick="backChange()" ondblclick="recoverChange()" class="nav-item">
            <a class="nav-link" href="realindex.php" onclick="scrollToDownload()">
              <!--<i class="now-ui-icons arrows-1_cloud-download-93"></i>-->
              <p>HOME</p>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a href="trending_player.php" class="nav-link" id="navbarDropdownMenuLink1">
              <!--<i class="now-ui-icons design_app"></i>-->
              <p>Trending Player</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="search_ajax.php">
              <!--<i class="now-ui-icons arrows-1_share-66"></i>-->
              <p>Popular Face List</p>
            </a>
          </li>
		  
		  <?php
		    session_start();
			if(isset($_SESSION["vendor_email"]))
			{
			  echo "<li class='nav-item dropdown'>";
              echo "<a href='#' class='nav-link dropdown-toggle' id='navbarDropdownMenuLink1' data-toggle='dropdown'>";
              echo "<p>$_SESSION[vendor_email]</p>";
              echo "</a>";
              echo "<div class='dropdown-menu dropdown-menu-right' aria-labelledby='navbarDropdownMenuLink1'>";
              echo "<a class='dropdown-item' href='profile.php'>Profile</a>";
              echo "<a class='dropdown-item' href='payment_gateway.php' target='_blank'>Payment</a>";
			  echo "<a class='dropdown-item' onclick='logoutRedirect()' href='logout.php'>Logout</a>";
              echo "</div>";
              echo "</li>";
			}
			else
			{
				echo "<li class='nav-item'>";
				echo "<a class='nav-link' href='index.php'>";
				echo "<p>USER PANEL</p>";
				echo "</a>";
				echo "</li>";	
			}
		  
		  ?>
		  
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <!--Onscreen Menu-->  
   <div class="container text-center ft-black">
        <div class="content-center brand">
          <h2>Cricket Youtube Videos</h2>
		  <h4><a style="a:link{ color:black; }" href="https://www.youtube.com/user/CricketICC">ICC</a></h4>
		  <h4><a href="https://www.youtube.com/user/ecbcricket">England and Wales Cricket Board</a></h4>
		  <h4><a href="https://www.youtube.com/user/ecbcricket">cricket.com.au</a></h4>
		  
		  
		  
		  
        </div>
      </div>
  


      
    <footer class="footer">
      <div class="container">
        <nav>
          <ul>
            <li>
              <a href="">
                Rise & Advertise
              </a>
            </li>
          </ul>
        </nav>
        <div class="copyright" id="copyright">
          &copy;
          <script>
            document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
          </script>
          <a href="" target="_blank">Rise & Advertise</a>.
        </div>
      </div>
    </footer>
  </div>
  <!--   Core JS Files   -->
  <script src="./assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="./assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="./assets/js/plugins/bootstrap-switch.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="./assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
  <script src="./assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
  <script src="./assets/js/now-ui-kit.js?v=1.2.0" type="text/javascript"></script>
</body>

</html>