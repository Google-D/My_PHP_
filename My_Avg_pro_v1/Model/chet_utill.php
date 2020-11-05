<?php 
include 'DBcon.php';

class chet_utill{

 function get_chet(){


 }

 function set_chet($chd){
 	$DB=new DBcon();
 	$re="false";
 	$unm=$chd->getName();
 	$mag= $chd->getMassage();

 	$conn=$DB->get_connection();
 	if (!$conn) {
			  //die("Connection failed: " . mysqli_connect_error());	
			}else{
				//echo "[+]Connected successfully <br>";
				$sql = "INSERT INTO chet_room (username_name,massage) VALUES ('$unm','$mag') ";
				//$result = $conn->query($sql);
				if ($conn->query($sql)) {
					  $re="true";
					} else {
					  //echo "0 results";
						$re="false";
						$conn->close();
					}
					$conn->close();
					return $re;
			 }
 		}//set_chet function end 
 		
}
 ?>