<?php 

session_start();

if($_SESSION['username'] != ""){	
	
	$user=$_SESSION['username'];

}else{
	$_SESSION['error'] = "Session Expired !";
	header("Location: login.php");
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<style type="text/css">
		#a { 
            text-decoration: none; 
        } 

	</style>
</head>
<body>
	<h3>Hi ,<?php echo " @".$user ; ?> </h3>
	<form action="../controller/controller.php" method="post">
	<input type="submit" name="button" value="Logout">
	</form>

</body>
</html>