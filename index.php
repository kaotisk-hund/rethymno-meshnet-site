<?php
	$message = '<h1>welcome</h1>';
	$about = '<p>hi! this is a front page for h.rethymno-meshnet.tk a site about the local mesh network in Rethymno, Greece</p>';
	$warnings = '<pre>system under maintenance</pre>';
	$some_notes = 'The thing is to make a free network for all people.';
	$location = 'Rethymno, Greece';
	$node_ipv6 = 'fc47:fa91:dfc5:d6a4:c428:be6b:d16:bdef';
	$domain = 'rethymno-meshnet.tk';
	$cjdns_port = '38295';
	$public_key = 'wb3pt76psbt28mt9t2wzyudyh9zkqwq9z3jqb3t06y53g6f5qzh0.k';
	$password = 'wgs9k7n7j5yh0kx7kyl5m7cpp71ls4y';
	$login = 'default-login';
	$peer_name = 'your-name-goes-here';

	echo var_dump($_GET);
?>
<html>
	<head>
		<title>Rethymno MeshNet</title>
		<style>
			.logo {
				text-align: center;
			}
			.about {}
			.special {
				background-color: rgba(255,40,40,0.3);
			}
			.test {
				color: green;
				background-color: black;
			}
		</style>
	</head>
	<body>
		<div class="logo">
			<?php echo $message; ?>
		</div>
		<div class="content">
			<?php echo $about; ?>
		</div>
		<div class="special">
			<?php echo $warnings; ?>
		</div>

		<div class="test">
			<?php include "public-node.php"; ?>
		</div>
	</body>
</html>
