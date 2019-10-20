<?php

class Character
{
	public $account_id;

	public $id;
	public $name;
	public $last_name;
	public $HP;
	public $stamina;
	public $hygiene;
	public $hunger;
	public $happiness;
	public $level;
	public $engineer;
	public $doctor;
	public $explorer;
	public $chemical;
	public $programmer;

	public $steve;
	public $julie;
	public $david;
	public $robert;
	public $bryan;



	public $API;

	function __contruct(){
		$this->API = new API();
		
	}

	function getCharacter($id){
		$query = $GLOBALS['conn_class']->select("*", "characters", "WHERE id = '".$id."' LIMIT 1");
		foreach ($query[0] as $key => $value) {
			$this->$key = $value;
		}
	}

	function incrementStatus($type, $value){
		$query = $GLOBALS['conn_class']->select($type, "characters", "WHERE id = '".$this->id."'  LIMIT 1");
		$n_value = $query[0][$type] + $value;
		
		$query = $GLOBALS['conn_class']->update("characters", $type, $n_value, "WHERE id = '".$this->id."'");
		$this->$type = $n_value;

	}

	function decrementStatus($type, $value){
		$query = $GLOBALS['conn_class']->select($type, "characters", "WHERE id = '".$this->id."'");
		$n_value = $query[0][$type] - $value; 
		if ($n_value < 0) {
			$n_value = 0;
		}
		$query = $GLOBALS['conn_class']->update("characters", $type, $n_value, "WHERE id = '".$this->id."'");
		$this->$type = $n_value;
	}

	function setStatus($type, $value){
		if ($value < 0) {
			$value = 0;
		}
		$query = $GLOBALS['conn_class']->update("characters", $type, $value, "WHERE id = '".$this->id."'");
		$this->$type = $n_value;
	}





}
?>