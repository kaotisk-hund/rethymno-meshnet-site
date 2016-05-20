<?php
class Node {
	private $node_ipv6 = 'fc47:fa91:dfc5:d6a4:c428:be6b:d16:bdef';
	private $domain = 'rethymno-meshnet.tk';
	private $cjdns_port = '38295';
	private $public_key = 'wb3pt76psbt28mt9t2wzyudyh9zkqwq9z3jqb3t06y53g6f5qzh0.k';
	private $password = 'wgs9k7n7j5yh0kx7kyl5m7cpp71ls4y';
	private $login = 'default-login';
	private $peer_name = 'gr-rethymno-meshnet';

	function connect(){
		$out =
		"\"".$this->domain.":".$this->cjdns_port."\": {
\t\"login\": \"".$this->login."\",
\t\"password\":\"".$this->password."\",
\t\"publicKey\":\"".$this->public_key."\",
\t\"peerName\":\"".$this->peer_name."\"
}";
		return $out;
	}
}