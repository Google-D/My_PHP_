<?php
include '../Model/Get_var.php';
include '../Model/utills.php';


if ($_POST['button'] == "login") {

$Login = new Get_var();
$Login->setUsername($_POST['uname']);
$Login->setPassword($_POST['pass']);

//echo $Login->getUsername()."<br>";
//echo $Login->getPassword()."<br>";
  
$DB = new utills();
$DBstate=$DB->login_check($Login);   

 // echo $DBstate."<br>";

  if($DBstate == "true"){

  		session_start();
  		//$_SESSION['username']= $_POST['uname'];
  		$_SESSION['username']= $_POST['uname'];
  		header("Location: ../view/home.php");

  }else{
      session_start();
  		$_SESSION['error'] = "Username OR password Incorect.";
  		header("Location: ../view/login.php");
  }
}else if ($_POST['button'] == "Logout") {  
      
      //reset session
      session_unset();
      session_destroy();
      session_start();
      $_SESSION['error'] = "Session Closed by Dy-Server !";
      header("Location: ../view/login.php");

}

?>