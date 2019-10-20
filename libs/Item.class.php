<?php

class Item
{
	public $id;
	public $name;
	public $recipe_id;
	public $buff;
	public $buff_value;

	function getItemById($id){
		$query = $GLOBALS['conn_class']->select("*", "items", "WHERE id = '".$id."' LIMIT 1");
		foreach ($query[0] as $key => $value) {
			$this->$key = $value;
		}

	}


}




?>