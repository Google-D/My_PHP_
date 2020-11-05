<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<style type="text/css">
     
     .mai{
     	width: 300px;
     	margin: auto;
     	background-color: #bbeaed;


     }
     .as{

     	  width: 300px;
     	  
     	  margin: auto;
     	  border-left: 12px solid #8efab0;
     	  padding: 9px;
     	  display: inline-block;
        }


	</style>
</head>
<body>
<div class="mai">
<div class="as">
<h4>Login</h4>
<form action="../controller/controller.php" method="POST">
<label>UserName: </label><input type="text" name="uname" required><br><br>
<label>Password  : </label><input type="text" name="pass" required><br><br>
<input type="submit" name="button" value="login" ><br>
<span style="color: red;"><?php  
	 session_start(); 
     if ($_SESSION["error"] == " ") {
         echo " ";
     }else{
        echo $_SESSION["error"];
     }
	 

      ?></span>
</form>
</div>

</div>
<?php
//reset session
session_unset();
session_destroy();

session_start(); 
$_SESSION['error'] = " ";
?>
</body>
</html>