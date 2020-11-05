<?php 

session_start();

if($_SESSION['username'] != ""){	
	
	$user=$_SESSION['username'];

}else{
	$_SESSION['error'] = "Session Expired !";
	header("Location: login.php");
}


//$user="";
?>
<!DOCTYPE html>
<html>
<head>
<title>Avenger</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="data/google_d.css">
<link rel="stylesheet" type="text/css" href="data/google_d2.css">
<style type="text/css">    

</style>
</head>
<body>
<div class="div_d" style="margin: -5px">
<ul class="ul_D">
  <li><a href="home.php" class="active">Home</a></li>
  <li><a href="come.php" > Cass Genarater</a></li>
  <li><a href="come.php">Case manager</a></li>
  <li><a href="chat.php">Chats</a></li>
   <li style="float:right;"><a href="logout.php" class="active"><?php echo " @".$user ; ?></a></li>
</ul>
</div>
 <!-- My Animation -->
 <div class="content">
  <div class="content__container">
    <p class="content__container__text">
      Hello
    </p>
    
    <ul class="content__container__list">
      <li class="content__container__list__item">world !</li>
      <li class="content__container__list__item"><?php echo " @".$user ; ?> !</li>
      <li class="content__container__list__item">PHP !</li>
      <li class="content__container__list__item">Byju's !</li>
        
    </ul>
  </div>
</div>  
 
 
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>