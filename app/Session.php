<?php
class Session{
	private $language;

	function __construct(){
		if ( isset($_POST['language']) ){
			$this->language = $_POST['language'];
		}
	}

	function get_language(){
		return $this->language;
	}
}