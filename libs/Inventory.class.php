<?php

class Inventory
{
	public $id;
	public $id_character;
	public $id_item;
	public $amount;

	function __construct(){
		
	}

	function getInventory($id_character){
		$query = $GLOBALS['conn_class']->select("*", "inventory", "WHERE id_character = '".$id_character."'");
		$i = 0;

		while (isset($query[$i])) {
			foreach ($query[$i] as $key => $value) {
				$itens[$i][$key] = $value;
			}
			$i++;
		}
		return $itens;                                                               
	}	

	function getItemOnInventory($id_item, $id_character){
		$query = $GLOBALS['conn_class']->select("*", "inventory", "WHERE id_item = '".$id_item."' AND id_character = '".$id_character."'");
		if (isset($query[0])) {
			return $query;
		}
		else{
			return false;
		}
	}
	

	function addItem($id_item, $amount, $id_character){
		$ret = $this->getItemOnInventory($id_item, $id_character);
		$i = 0;
		if ($ret == false) {
			$col[0] = 'id_item';
			$col[1] = 'id_character';
			$col[2] = 'amount';
			$val[0] = $id_item;
			$val[1] = $id_character;
			$val[2] = $amount;
			$GLOBALS['conn_class']->insert("inventory", $col, $val);
		}else{
			$n_value = $amount + $ret[0]['amount'];
			$query = $GLOBALS['conn_class']->update("inventory", "amount", $n_value, "WHERE id = '".$ret[0]['id']."'");
		}
	}

	function removeItem($id, $amount){
		$query = $GLOBALS['conn_class']->select("*", "inventory", "WHERE id = '".$id."'");
		if ($query[0]['amount'] == $amount) {
			$GLOBALS['conn_class']->delete("inventory", "WHERE id = '".$id."'");
		}else{
			$n_value = $query[0]['amount'] - $amount;
			$query = $GLOBALS['conn_class']->update("inventory", "amount", $n_value, "WHERE id = '".$id."'");
		}
		
	}


}




?>