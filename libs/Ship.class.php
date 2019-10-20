<?php

class Ship
{
	public $id;
	public $HP;
	public $fuel;	
	public $id_character;

	function __contruct(){
		$this->API = new API();

	}

	function getShip($id_character){
		$query = $GLOBALS['conn_class']->select("*", "ships", "WHERE id_character = '".$id_character."' LIMIT 1");

		foreach ($query[0] as $key => $value) {
			$this->$key = $value;
		}
	
	}

	function incrementStatus($type, $value){
		$query = $GLOBALS['conn_class']->select($type, "ships", "WHERE id = '".$this->id."'  LIMIT 1");
		$n_value = $query[0][$type] + $value;
		if ($n_value > 100) {
			$n_value = 100;
		}
		$query = $GLOBALS['conn_class']->update("ships" , $type, $n_value, "WHERE id = '".$this->id."'");
		$this->$type = $n_value;

	}

	function decrementStatus($type, $value){
		$query = $GLOBALS['conn_class']->select($type, "ships", "WHERE id = '".$this->id."'");
		$n_value = $query[0][$type] - $value; 
		if ($n_value < 0) {
			$n_value = 0;
		}
		$query = $GLOBALS['conn_class']->update("ships", $type, $n_value, "WHERE id = '".$this->id."'");
		$this->$type = $n_value;
	}

	function setStatus($type, $value){
		if ($value < 0) {
			$value = 0;
		}
		if ($value > 100) {
			$value = 100;
		}
		$query = $GLOBALS['conn_class']->update("ships", $type, $value, "WHERE id = '".$this->id."'");
		$this->$type = $value;
	}



}




?>