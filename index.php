<?php
	$title = '<h1><img class="logo" src="img/meshnetlogo-2.svg"/> Welcome to Rethymno Mesh Network</h1>';
	$about = '<p>hi! this is a front page for h.rethymno-meshnet.tk a site about the local mesh network in Rethymno, Greece</p>'.
	 '<p>so let\'s talk... this is a node, a meshnet node. you can use this node to connect to hyperboria. You can check if you are connected '.
'on hyperboria at the bottom of the page. Also, this is one page. You can see the same page through http://h.rethymno-meshnet.tk/ and http://rethymno-meshnet.tk/ .'.
'But the thing is that the link that starts with h. links to the hyperboria site.</p>';
	$warnings = '<pre style="text-align: center;">everything is ok</pre>';
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
	$todo = "
	<h4><i class=\"fi-clipboard-notes\"></i> ToDo</h5>
	<ul>
			<li class=\"done\">Site up</li>
			<li class=\"done\">Publish peer info</li>
			<li class=\"done\">Upload compiled cjdns</li>
			<li>Upload scripts</li>
			<li>OpenVpn link for depedencies (Windows)</li>
		</ul>";
	$download = '<a class="featured button" href="./cjdns-win32.zip"><i class="fi-download"></i> Download cjdns-win32 now!</a>';
	$donate = '<a class="donate" href="bitcoin:1zzSnCvLRLw4ft8KbmH6rawLyZgFVDBrv?label=Rethymno%20Meshnet">
		<i class="fi-bitcoin-circle"></i> Donate for this project</a>';
	$address_watch = '<a class="donate" href="https://blockchain.info/address/1zzSnCvLRLw4ft8KbmH6rawLyZgFVDBrv">
		<img class="blockchain-logo" src="img/blockchain-b-logo.png"/>
		Donations so far</a>';
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
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rethymno MeshNet</title>
    <link rel="shortcut icon" href="img/meshnet_logo72-2.svg" />
    <link rel="stylesheet" href="foundation-icons/foundation-icons.css" />

    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/app.css" />
    <style>
			body {
				background-color: rgb(138,138,138);
				padding: 0;
				width: auto;
			}
			div {
				padding: 5px;
			}
			.logo {
				padding: 7px;
				background-color: #3c9be0;
				text-align: center;
			}
			img.logo {
				width: 128px;
			}

			.content {
				padding: 23px;
				background-color: #d8d8d8;
			}
			.sidebar {
			}
			.warning {
				background-color: rgba(255,40,40,0.3);
			}
			.code {
				padding: 10px;
				color: #c0d2d7;
				background-color: #353535;
			}
			.info {
			}
			.todo {
				background-color: #f3f3f3;
				border-radius: 5px;

			}
			.done {
				text-decoration: line-through;
			}
			a.featured {
				background-color: #3999f8;
				padding: 20px;
				color: white;
				font-size: 150%;
				text-align: center;
				text-decoration: none;
				border-radius: 5px;
			}
			i.fi-download {
				font-size: 210%;
				vertical-align: middle;
				border-radius: 700px;
				border-width: 3px;
				border-style: solid;
				border-color: #00d46e;
				padding: 20px;
				padding-right: 30px;
				padding-left: 30px;
				width: 15px;
				background-color: #02ad5b;
			}
			i.fi-bitcoin-circle {
				vertical-align: middle;
				color: #FF8940;
				font-size: 64px;
			}
			.panel {
				padding: 10px;
				border-radius: 5px;
			}
			.success2 {
				background-color: #00bb62;
				color: white;
			}
			
			a.donate {
				text-align: center;
			}
			.footer {
				padding: 17px;
			}
			.blockchain-logo {
				width: 48px;
			}
			.donate {
				text-align: left;
			}
			.footer {
				background-color: rgb(44, 43, 43);
				color: rgb(192, 210, 215);
				padding: 0;
			}
			p.footer {
				margin-bottom: 0;
				font-size: 70%;
				text-align: right;
			}

		</style>
  </head>
	<body>
		<div class="row logo">
			<div class="small-12 column">
			<?php echo $title; ?>
			</div>
		</div>
		<div class="row content">
			<div class="small-7 columns">

			<?php echo $about; ?>
			<div>
				<?php echo $download; ?>
			</div>
			</div>
			<div class="small-5 columns">
			<div class=" panel success2">
				<?php echo $warnings; ?>
			</div>
			<div>
			<h3>Your information</h3>
			<p>
			<?php
				echo $remote_address;
				?></p>
				<p><?php 
				echo routeFind();
			?></p>
			</div>
			<div class="todo">
				<?php echo $todo; ?>
			</div>
		</div>
		</div>
		
		
		<div class="row code">
			<div class="small-9 columns">
				<div class="code">
					<h2>Connect to rethymno-meshnet node</h2>
					<?php include "public-node.php";
						echo $public_node; ?>
				</div>
			</div>
			<div class="small-3 columns donate">
			
				<p><?php echo $donate; ?></p>
				<p><?php echo $address_watch; ?></p>
			</div>
		</div>
		<div class="row footer">
			<div class="small-4 columns"></div>
			<div class="small-4 columns"></div>
			<div class="small-4 columns">
				<p class="footer">Proudly brought to you by <a href="http://www.kaotisk-hund.tk/">kaotisk-hund</a> !</p>
			</div>
		</div>


		


	<script src="js/vendor/jquery.min.js"></script>
    <script src="js/vendor/what-input.min.js"></script>
    <script src="js/foundation.min.js"></script>
    <script src="js/app.js"></script>
	</body>
</html>

