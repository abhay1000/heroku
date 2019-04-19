<!DOCTYPE html>
<html>
    <head>
	    <style>
		    body
			{
				background-image: linear-gradient(to right,DodgerBlue,white);
			}
			    form#form-control-handle
				{
					 width: 300px;
					 background-color: white;
					 padding: 50px;
					 font-family: Roboto,sans-serif;
					 font-size: 20px;
					 margin: 250px auto 0 auto;
					 /*border: 5px solid white;*/
					 font-weight: bold;
					 color: black;
					 /*box-shadow: 5px 5px 5px grey;*/
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
				.link-style-all
				{
				 text-decoration: none;
				}
				 a:visited
				 {
				  color: black;
				 }
				.company-logo
				{
				 font-weight: normal;
				 color: white;
				 font-family: Roboto,Montserrat,"Helvetica Neue";
				}
				a:visited
				{
					color: black;
				}
		      
				
		
		
		
		
	    </style>
	</head>
	<body>
	 <!--<div class="company-logo">RISE & ADVERTISE</div>-->
 <!--T R B L-->
    <form id="form-control-handle">
	   <label style="margin-left:auto;margin-right:auto">Login</label><br/><br/>
	   <div class="alert-hidden-box"></div>
	   <br/>
	   <label class="label-back">Email</label><br/><br/>
	   <input class="box-style-input" placeholder="Email" type="text"/><br/><br/>
	   <label class="label-back">Password</label><br/><br/>
	   <input class="box-style-input" placeholder="Password" type="password"/><br/><br/>
	   <input class="button-style-all" value="Login" type="submit"/><br/><br/>
	   <label class="label-back">New Here?<a style="text-decoration:none;a:visited{color:black;}" href="register.php">Register Here</a></label>
	</form>
	
	</body>
</html>