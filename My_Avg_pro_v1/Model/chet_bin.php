<?php

class chat_bin{

	private $id;
	private $name;
	private $massage;
	private $time;

	function getId(){
		return $this->id;
	}	
	function getName(){
		return $this->name;
	}	
	function getMassage(){
		return $this->massage;
	}
	function getTime(){
		return $this->time;
	}

	function setId($id){
		$this->id = $id;
	}	
	function setName($name){
		$this->name = $name;
	}
	function setMassage($massage){
		$this->massage = $massage;
	}
	function setTime($time){
		$this->time = $time;
	}








}

?>