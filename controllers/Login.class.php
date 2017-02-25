<?php
class Login extends Application {
	
	public function formLogin() {
		parent::setTitle("Login");
	}
	public function logging() {
		if($_POST['email'] == "aa@aa" && $_POST['password'] == "aa")  {
			$this->session->setSession('email','aa');
			parent::redirect($this->home_path);
		}
		else {
			parent::redirect($this->home_path);
		}
	}
	public function logout() {
		$this->session->destroy();
		parent::redirect($this->home_path);
	}
}
?>