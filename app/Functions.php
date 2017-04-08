<?php

	function routeFind(){
		if ($_SERVER["HTTP_HOST"] == "h.rethymno-meshnet.tk"){
			$route = '<p class="panel">on hyperboria <i class="fi-check success-text"></i></p>';
		}
		else {
			$route = '<p class="panel">on internet</p>';
		}
		return $route;
	}
	
	function cjdnsVersion(){
		$i = shell_exec('cjdroute -v');
		return $i;
	}
	
	function siteVersion(){
		$i = shell_exec('git branch');
		return $i;
	}
