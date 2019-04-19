<!DOCTYPE html>
<html>
    <head>
	 <title>Rise & Advertise</title>
	 <style>
	    body
		{
		 background-image: linear-gradient(to right,green,DodgerBlue,blue);
		}
		/*form element*/
		form#form-control-handle
		{
		 width: 300px;
		 background-color: white;
		 padding: 50px;
		 font-family: Roboto,sans-serif;
		 font-size: 20px;
		 margin: 150px auto 0 auto;
		 border: 5px solid white;
		 font-weight: bold;
		 color: black;
		 box-shadow: 5px 5px 5px grey;
		}
		.box-style-input
		{
		padding: 10px;
		outline: 0px;
		border: 1px solid blue;
		width: 250px;
		}
		.button-style-all
		{
		 width: 270px;
		 padding: 10px;
		 font-family: Roboto,sans-serif;
		 background-color: Dodgerblue;
		 color: white;
		 font-size: 20px;
		 font-weight: bold;
		 border: 0px;
		}
		/*anchor tag underline removal*/
		.link-style-all
		{
		 text-decoration: none;
		}
		 a:visited
		 {
		  color: black;
		 }
	 </style>
	</head>
	<body>
	<?php
	
	$vend_email = $com_name = $temp_pass = $per_pass = "";
	if(isset($_POST["submit"]))
	{
	$vend_email = $_POST["vemail"];
	$com_name = $_POST["cname"];
	$temp_pass = $_POST["temppass"];
	$per_pass = $_POST["perpass"];
	}
	//echo $vend_email . $com_name . $temp_pass . $per_pass;
	include("dbcon.php");
	if(!empty($vend_email) && !empty($com_name) && !empty($per_pass))
	{
		if(isset($_POST["submit"]))
		{
			$add_user = "INSERT INTO credentials(email_id,password,company_name) VALUES('$vend_email','$per_pass','$com_name')";
			$q_add_user = mysqli_query($conn,$add_user);
		}
	}
	
	?>
	<!--T R B L-->
    <form action="register.php" method="post" id="form-control-handle">
	   <label style="margin-left:auto;margin-right:auto">Register As Vendor</label><br/>
	   <div height="30" id="alert-hidden-box"></div>
	   <br/>
	   <label>
	    <?php
		if(isset($_POST["submit"]) && !empty($q_add_user))
		{
			if($q_add_user==1)
			{
			 echo "User Created Successfully";
			}
			else
			{
			 echo "User Exist";
			} 
		}		
	    ?>
	   </label><br/><br/>
	   <label>Vendor Email</label><br/><br/>
	   <input class="box-style-input" name="vemail" placeholder="Vendor Email" type="text"/><br/><br/>
	   <label>Company Name</label><br/><br/>
	   <input class="box-style-input" name="cname" placeholder="Company Name" type="text"/><br/><br/>
	   <label>Password</label><br/><br/>
	   <input id="pass1" class="box-style-input" name="temppass" placeholder="Password" type="password"/><br/><br/>
	   <label>Confirm Password</label><br/><br/>
	   <input id="pass2" class="box-style-input" name="perpass" placeholder="Password" type="password"/><br/><br/>
	   <input id="block-submit" class="button-style-all" value="Register" name="submit" type="submit"/><br/><br/>
	   <label>Existing User?<a class="link-style-all" href="login.php">Login here</a></label>
	</form>
	
	
	

	
	 
	</body>
</html>
