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
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Chat</title>
  <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="data/style.css">
<link rel="stylesheet" type="text/css" href="data/google_d.css">

</head>
<body>

<ul class="ul_D" style="margin:1px ">
  <li><a href="home.php" >Home</a></li>
  <li><a href="come.php" > Cass Genarater</a></li>
  <li><a href="come.php">Case manager</a></li>
  <li><a href="chat.php" class="active">Chats</a></li>
   <li style="float:right;"><a href="logout.php" class="active"><?php echo " @".$user ; ?></a></li>
</ul>


<!-- partial:index.partial.html -->
<section class="msger">
  <header class="msger-header">
    <div class="msger-header-title">
    <i class="fas fa-comment-alt"></i><?php echo " @".$user ; ?><input type="hidden" id="PhpValue" value="<?php echo $user; ?>" />
    </div>
    <div class="msger-header-options">
      <span><i class="fas fa-cog"></i></span>
    </div>
  </header>

  <main class="msger-chat">
   <!---Chat_section starting-----> 
   <!---Chat_section end-----> 
  </main>

  <form class="msger-inputarea">
    <input type="text" class="msger-input"  placeholder="Enter your message...">
    <button type="submit" class="msger-send-btn">Send</button>
  </form>
</section>
<!-- partial -->

  <script src='https://use.fontawesome.com/releases/v5.0.13/js/all.js'></script>
  <script  src="data/script.js"> </script>

</body>
</html>