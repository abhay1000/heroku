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
		background-image: linear-gradient(to right,blue,gray,black);
		/*background-image: url('./assets/img/header.jpg');*/
		/*background-image: linear-gradient(to top,black,gray,white,black);*/
	}
	.pad-all
	{
		padding: 40px;
	}
	.bg-white
	{
		background-color: white;
	}
	
  </style>
</head>

<body class="index-page sidebar-collapse">
  <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed navbar-transparent" color-on-scroll="400">
        <div class="container">
		      <!--Navbar-Left-->
			  <div class="navbar-translate">
				<a class="navbar-brand" href="" rel="tooltip" data-placement="bottom">Rise & Advertise</a>
				<button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-bar top-bar"></span>
				  <span class="navbar-toggler-bar middle-bar"></span>
				  <span class="navbar-toggler-bar bottom-bar"></span>
				</button>
			  </div>
			  <!--Navbar-Right-->
			  <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="./assets/img/blurred-image-1.jpg">
				<ul class="navbar-nav">
				  <li class="nav-item">
					<a class="nav-link" href="#">
					  <p>HOME</p>
					</a>
				  </li>
				  <li class="nav-item dropdown">
					<a href="trending_player.php" class="nav-link" id="navbarDropdownMenuLink1">
					  <p>TRENDING PLAYER</p>
					</a>
				  </li>
				  <li class="nav-item dropdown">
					<a href="search_ajax.php" class="nav-link" id="navbarDropdownMenuLink1">
					  <p>POPULAR FACE LIST</p>
					</a>
				  </li>
				   <li class="nav-item">
					<a class="nav-link" href="login_ajax.php">
					  <p>USER PANEL</p>
					</a>
				  </li>  
				</ul>
			  </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <!--Onscreen Menu-->  
    <div class="container bg-white pad-all">
		<div class="container">
            <label>Ads Category</label>		
            <div class="row">
                <div class="col-sm-4">			
					
					<select class="form-control" id="ad_category" onclick="loadDoc()">
						<option>Shoes</option>
						<option>FACEWASH</option>
						<option>PERFUME</option>
						<option>SOFTDRINKS</option>
						<option>SPORTSHOES</option>
						<option>CHIPS</option>
						<option>TELECOM</option>
						<option>CHOCOLATE</option>
						<option>MOBILE</option>
						<option>BAGS</option>
						<option>CAR</option>
						<option>BIKE</option>
						<option>WATCH</option>
						<option>GEL</option>
						<option>SHAMPOO</option>
					</select>
				</div>
				<div class="col-sm-4">
				  <select class="form-control" id="amount_range" onclick="loadDoc()">
					<option value="0">1,00,000-50,00,000</option>
					<option value="1">50,00,001-1,00,00,000</option>
					<option value="2">1,00,00,000-2,00,00,000</option>
					<option value="3">2,00,00,000-4,00,00,000</option> 
	               </select> 
				</div>
				<div class="col-sm-4">
					<select id="country" class="form-control" onclick="loadDoc()">
						<option>INDIA</option>
						<option>ENGLAND</option>
						<option>AUSTRALIA</option>
						<option>NEW ZEALAND</option>
						<option>PAKISTAN</option>
						<option value="WINDIES">WEST INDIES</option>
						<option>AFGHANISTAN</option>
						<option>SOUTH AFRICA</option>
						<option>SRI LANKA</option>
						<option>BANGLADESH</option>
					</select>
				</div>
            </div>			
	    </div>			
	</div>
	<div id="res-table-hide" style="display:none;" class="container bg-white">
	  <div class="container">
	    <div id="demo" class="demo">
		</div>
	  </div>
	</div>
    <!--Onscreen End-->  
    <footer class="footer" data-background-color="transparent">
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
          </script>,
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
    <script>
	/*search ajax engine*/
    function loadDoc()
	{
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() {
			if(this.readyState == 4 && this.status == 200)
			{
				table_hidder.style.display = "block";
				document.getElementById("demo").innerHTML = this.responseText;				
			}
		  };
		  //ad category
		  var adc = document.getElementById("ad_category").value;
		  //amout range
		  var ar = document.getElementById("amount_range").value;
		  //country;
		  var country = document.getElementById("country").value;
		  //result table hidder
		  var table_hidder = document.getElementById("res-table-hide");
		  //to get first half amount range
		  var r1 = [10000,5000001,10000001,20000001];
		  //to get second half amount range
		  var r2 = [5000000,10000000,20000000,45000000];
		  var sr1 = r1[ar];
		  var sr2 = r2[ar]; 
		  var rtext = "search_ajax_serve.php?q="+adc+"&ar1="+sr1+"&ar2="+sr2+"&coun="+country;
		  xhttp.open("GET",rtext,true);
		  xhttp.send();
	}
    </script>
</body>

</html>