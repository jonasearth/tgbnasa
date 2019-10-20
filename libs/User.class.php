<?php 

/**
 * 
 */
	class User{
		
		public $id;
		public $name;
		public $login;
		public $password;
		public $treatment;

		function __construct(){
			$this->treatment = new Treatment();
		}

		function login($data){

			if ($this->treatment->testCont($data) === false) {
				$return['ok'] = false;
				$return['msg'] = $GLOBALS['error']['ERROR_POST_EMPTY'];
			}else{
				$data = $this->treatment->clear($data);
				$seach = $GLOBALS['conn_class']->select("*", "users", "WHERE login = '".$data['login']."' AND password = '".$data['password']."'  LIMIT 1");
				if ($seach !== false) {
					$this->setAll($seach[0]);
					$return['ok'] = true;
					$return['msg'] = $GLOBALS['success']['LOGIN_SUCCESS'];
				}else{
					$return['ok'] = false;
					$return['msg'] = $GLOBALS['error']['LOGIN_FAIL'];
				}
				
			}
			return $return;
		}

		function setAll($data){
			foreach ($data as $key => $value) {
				$_SESSION['account'][$key] = $value;
				$this->$key = $value;
			}
			$_SESSION['account']['is_loged'] = 1;
			
		}

		function createColsReg(){
			$data[0] = "login";
			$data[1] = "password";
			$data[2] = "name";
			return $data;
		}
		function createValuesReg($values){
			$data[0] = $values['login'];
			$data[1] = $values['password'];
			$data[2] = $values['name'];
			return $data;
		}

		function register($data){

				if ($this->treatment->testCont($data) === false){
					$return['ok'] = false;
					$return['msg'] = $GLOBALS['error']['ERROR_POST_EMPTY'];
				}else{
					if ($data['password'] !== $data['r_password']) {
						$return['ok'] = false;
						$return['msg'] = $GLOBALS['error']['DIFFERENT_PASSWORDS'];
					}else{
						$data = $this->treatment->clear($data);

						$test = $GLOBALS['conn_class']->select("login", "users", "WHERE login = '".$data['login']."'");
						if ($test != false) {
							$return['ok'] = false;
							$return['msg'] = $GLOBALS['error']['ERROR_ACCOUNT_EXIST'];
						}else{
							$cols = $this->createColsReg();
							$values = $this->createValuesReg($data);
							
							$run = $GLOBALS['conn_class']->insert("users", $cols, $values);
							if ($run =! false) {
								$return['ok'] = true;
								$return['msg'] = $GLOBALS['success']['ACCOUNT_CREATED'];
							}else{
								$return['ok'] = false;
								$return['msg'] = $GLOBALS['conn_class']->error;
							}
						}
					}
					
				}
				return $return;
		}

	}