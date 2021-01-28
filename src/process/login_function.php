<?php 
	
	include "../includes/database_config.php";
	
	class Login extends Admin {
		public function verify_admin_credentials (string $id, string $password) {
			if ($this->isRegistered($id, $password)) {
				return true;
			} else {
				return false;
			}
		}

		public function setSeesionUId(string $id): void {
			$_SESSION['ui'] = $id;
		}
	}

	// $l = new Login();
	// echo $l->verify_admin_credentials("639364417890", "agpuon055");