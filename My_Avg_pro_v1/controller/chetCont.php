<?php

include '../Model/chet_bin.php';
include '../Model/chet_utill.php';

session_start();
//Get Data from Clien use ajex
$prp = $_POST["mo"];

if($prp == "sent"){

$chatobj= new chat_bin();
$chatobj->setName($_SESSION["username"]);
$chatobj->setMassage($_POST["msg"]);

$cu= new chet_utill(); 
$WrDB = $cu->set_chet($chatobj);

if($WrDB == "true"){
	echo "ok";

}else{
	echo "no";
}
}else if ($ptp="need") {


}else{
	echo "no";
}


?>