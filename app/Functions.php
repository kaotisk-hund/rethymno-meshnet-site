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