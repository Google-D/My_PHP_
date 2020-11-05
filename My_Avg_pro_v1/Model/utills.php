<?php
include('DBcon.php');


class utills{

	public function login_check($user_data){
		$DB=new DBcon();
		$out="false";
	    $uname=$user_data->getUsername();
	    $pss=$user_data->getPassword();
		
		$conn=$DB->get_connection();

		if (!$conn) {
			  //die("Connection failed: " . mysqli_connect_error());	
			}else{
				//echo "[+]Connected successfully <br>";
				$sql = "select * from  team_ID where Username='$uname' and Password='$pss'";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
					  // output data of each row
					  while($row = $result->fetch_assoc()) {
					    //echo "id: " . $row["ID"]. " - Name: " . $row["Username"]. " " . $row["Password"]. "<br>";
					    if($row['Username'] == $uname && $row['Password'] == $pss){
							$out="true";
						}else{
							$out="false";
						}
					  }
					} else {
					  //echo "0 results";
						$out="false";
						$conn->close();
					}
					$conn->close();
					return $out;
			 }
	}
}

?>