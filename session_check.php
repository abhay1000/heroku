<!DOCTYPE html>
<html>
    <head>
	</head>
	<body>
	    <?php
		session_start();
		echo "session:".$_SESSION["vendor_email"]."<br/>";
		if(isset($_SESSION["vendor_email"]))
		{
			echo "Session is Created";
			
		}
		else
		{
			
			echo "Session is not define or emoty";
			
		}
		
		?>
	</body>
</html>