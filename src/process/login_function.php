<?php 
	include "../includes/init.php";
	
	class Login {
		private $default = [""];
		public $session_class = "";
		public $default_username = "username123";
		private $default_password = "password123";

		public function verify_credentials($username, $password) {
			// Verify admin credentials
			if ($this->default_username === $username && $this->default_password === $password) {
				return true;
			}
			return false;
		}
		public function verifyAdmin($username, $password) {
			// Initiate database.
		}
		
		public function funFind($whatToFind) {
			return array_search($whatToFind, $this->default);
		}

		public function pushToDefault($whatToPush) {
			$toDefaultArray = $this->default;
			array_push($toDefaultArray, $whatToPush);
		}
	}
	
	// Instantiate class Login.

	$expectedUsername = "09364417890";
	$expectedPassword = "agpuon05";

	if (isset($_POST['admin_number']) && isset($_POST['admin_password'])) {
		$username = $_POST['admin_number'];
		$password = $_POST['admin_password'];

		$message = new Message;

		echo $message->success_message("You entered " . $username . " Password: " . md5($password));
	}