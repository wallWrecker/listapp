<?php 
	
	include "../includes/database_config.php";
	
	class Login extends Admin {
		public function verify_admin_credentials ($id, $password) {
			if ($this->isRegistered($id, $password)) {
				return $id;
			} else {
				return false;
			}
		}

		public function callTestCall() {
			return $this->testCall;
		}

		// testfunction
	}
