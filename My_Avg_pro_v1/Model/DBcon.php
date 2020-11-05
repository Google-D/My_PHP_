<?php

class DBcon{

	public function get_connection(){

		 $servername="149.81.150.2:8995";
		 $username="deepak";
		 $password="';F5W@@4243#(adaaS`a`` `";
		 $dbname="dy";
		
		$conn = new mysqli($servername, $username, convert_uudecode($password), $dbname);

		return $conn;
	}
}

?>
