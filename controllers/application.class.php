<?php
require "Session.class.php";
class Application {
	public $session = null;
	public $home_path = "/";
	function __construct() {
		$this->session = new Session();
	}
	public function redirect($path) {
		header('Location: '.$path);
	}
	public function setTitle($newtitle) {
		global $title;
		$title = $title . " - " . $newtitle;
	}
}
?>