<?php
@session_start();
class Session {

	public function setSession($attrib,$value) {
		$_SESSION[$attrib] = $value;
	}

	public function getSession($attrib) {
		if (isset($_SESSION[$attrib]))
			return $_SESSION[$attrib];
		else
			return null;
	}

	public function destroy() {
		$_SESSION = array();
		session_destroy();
	}
}

?>