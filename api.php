<?php
	
	//@future add token to auth
	require "libs/config.php";


	


	$tgb = new User();
	if(isset($_POST['r_password'])){
		$ret = $tgb->register($_POST);
		
			$_SESSION['msg'] = $ret['msg'];
			$_SESSION['ok'] = $ret['ok'];	
			
			header('location: register.php');
		
	}else{
		$ret = $tgb->login($_POST);
		
			$_SESSION['msg'] = $ret['msg'];
			$_SESSION['ok'] = $ret['ok'];
			
			header('location: login.php');
		
	}
		
	


	/*
	$data['login'] = "jonas";
	$data['password'] = "lsindo";
	$ret = $tgb->login($data);
	*/

	/*
	$data['login'] = "jonasearth";
	$data['password'] = "lindo";	
	$data['r_password'] = "lindo";	
	$data['name'] = "Jonas lee ";
	$ret = $tgb->register($data);
	var_dump($ret['msg']);
	*/

	/*
	$char = new Character();
	$char->getCharacter('1');
	
	$ship = new Ship();
	$ship->getShip($char->id);
	
	$inventory = new Inventory();
	$inventory->addItem(2, 22, $char->id);
	$inventory->removeItem(2, 22, $char->id);
	
	var_dump($inventory->getInventory($char->id));
	
	*/