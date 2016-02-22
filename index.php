<?php
	$title = '<h1>Welcome to Rethymno Mesh Network</h1>';
	$about = '<p>hi! this is a front page for h.rethymno-meshnet.tk a site about the local mesh network in Rethymno, Greece</p>'.
	 '<p>so let\'s talk... this is a node, a meshnet node. you can use this node to connect to hyperboria. You can check if you are connected '.
'on hyperboria at the bottom of the page. Also, this is one page. You can see the same page through http://h.rethymno-meshnet.tk/ and http://rethymno-meshnet.tk/ .'.
'But the thing is that the link that starts with h. links to the hyperboria site.</p>';
	$warnings = '<pre>everything is ok</pre>';
	$some_notes = 'The thing is to make a free network for all people.';
	$location = 'Rethymno, Greece';
	$node_ipv6 = 'fc47:fa91:dfc5:d6a4:c428:be6b:d16:bdef';
	$domain = 'rethymno-meshnet.tk';
	$cjdns_port = '38295';
	$public_key = 'wb3pt76psbt28mt9t2wzyudyh9zkqwq9z3jqb3t06y53g6f5qzh0.k';
	$password = 'wgs9k7n7j5yh0kx7kyl5m7cpp71ls4y';
	$login = 'default-login';
	$peer_name = 'your-name-goes-here';
	$remote_address =  "you are accessing this site through: " .$_SERVER["REMOTE_ADDR"];
	$todo = "<ul>
			<li class=\"done\">Site up</li>
			<li class=\"done\">Publish peer info</li>
			<li class=\"done\">Upload compiled cjdns</li>
			<li>Upload scripts</li>
			<li>OpenVpn link for depedencies (Windows)</li>
		</ul>";
	$download = '<a class="featured" href="./cjdns-win32.zip">Download cjdns-win32 now!</a>';
	$donate = '<a class="donate" href="bitcoin:1zzSnCvLRLw4ft8KbmH6rawLyZgFVDBrv?label=Rethymno%20Meshnet">Donate for this project</a>';
	$address_watch = '<a class="donate" href="https://blockchain.info/address/1zzSnCvLRLw4ft8KbmH6rawLyZgFVDBrv">Click here to see the donations so far</a>';
	function routeFind(){
		if ($_SERVER["HTTP_HOST"] == "h.rethymno-meshnet.tk"){
			$route = 'on hyperboria';
		}
		else {
			$route = 'on internet';
		}
		return $route;
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Rethymno MeshNet</title>
		<style>
			body {
				background-color: rgb(109,163,150);
				padding: 10px;
				width: auto;
			}
			div {
				padding: 5px;
			}
			.logo {
				padding: 3px;
				background-color: #CED980;
				text-align: center;
			}
			.wrap {	
				width: 100%;
			}

			.content {
				float: left;
				padding: 23px;
				width: 60%;
				background-color: #AEBFA1;
			}
			.sidebar {
				float: right;
				width: 30%;
			}
			.warning {
				background-color: rgba(255,40,40,0.3);
			}
			.code {
				float: left;
				padding: 10px;
				color: green;
				background-color: black;
			}
			.info {
				float: left;
			}
			.todo {
				background-color: #CED980;
			}
			.done {
				text-decoration: line-through;
			}
			a.featured {
				background-color: #FF8940;
				padding: 20px;
				color: white;
				text-align: center;
				text-decoration: none;
			}
			.success {
				background-color: #AEBFA1;
			}
			a.donate {
				text-align: center;
				background-color: grey;
			}
			.footer {
				float: left;
				width: 80%;
				padding: 17px;
			}
		</style>
	</head>
	<body>
		<section class="logo">
			<?php echo $title; ?>
		</section>
		<section class="content">
			<?php echo $about; ?>
			<div>
				<?php echo $download; ?>
			</div>
		</section>
		<section class="sidebar success">
			<?php echo $warnings; ?>
		</section>
		<section class="sidebar">
			<h2>Your information</h2>
			<?php
				echo $remote_address;
				echo "<br>";
				echo routeFind();
			?>
		</section>
		<section class="sidebar todo">
			<?php echo $todo; ?>
		</section>

		<section class="code">
			<h2>Connect to rethymno-meshnet node</h2>
			<?php include "public-node.php";
				echo $public_node; ?>
		</section>
		<section class="sidebar ">
			<p><?php echo $donate; ?></p>
			<p><?php echo $address_watch; ?></p>
		</section>
	</body>
</html>

