<?php
class Session{
	private $language;

	function __construct(){
		session_start();
		if ( isset($_POST['language']) ){
			//echo 'pre: '.$_SESSION["lang"];
			$this->language = $_POST['language'];
			$_SESSION["lang"] = $this->language;
			//echo 'post: '.$_SESSION["lang"];
		}
	}

	function get_language(){
		return $this->language;
	}
}