<?php
class Language {
	private $langs = ["en", "gr"];
	private $defaultLanguage = "en";
	private $language;
	
	function __construct(){
		$this->language = $this->defaultLanguage;
	}

	function get_default_language(){
		return $this->defaultLanguage;
	}

	function validate_requested_language($lang){
		foreach ($this->langs as $key => $value) {
			if ( $lang == $value ){
				return true;
			}
		}
	}

	function set_language($lang){
		if ( $this->validate_requested_language($lang) ){
			$this->language = $lang;
		}
	}

	function get_language(){
		return $this->language;

	}
}