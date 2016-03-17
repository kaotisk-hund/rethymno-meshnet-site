<?php
	$default_lang = "en";
	$lang = $default_lang;
	/*if(isset($_GET['lang']) && )){
		$lang = $_GET['lang'];
	}
	else{
		$lang = $default_lang;
	}*/
	
	$site_title = "Rethymno Mesh Network";
	
	$title["gr"] = "Καλώς ήρθατε στο ". $site_title;
	$title["en"] = "Welcome to ". $site_title;
	
	$about["en"] = 'Hi! This is the front page for Rethymno MeshNet. At this particular space you can learn how to be a part of the network!
For start, we use cjdns for connecting to each other. This is how our computers communicate. If you feel like connecting with us
give it a try! Or two! If you have not installed OpenVPN yet, please do so or cjdns won\'t work. Choose from the official page the installation media for your platform.
<a href="https://openvpn.net/index.php/open-source/downloads.html">Download OpenVPN</a>.
So after downloading and install OpenVPN software we can proceed to the next step!
Here you can download cjdns for Windows.';
	$about["gr"] = 'Γεια χαρά! Βρίσκεστε στη σελίδα του Rethymno MeshNet. Εδώ μπορείτε να μάθετε τι χρειάζεται να κάνετε για να συνδεθείτε στο δίκτυο!
Αρχικά, χρησιμοποιούμε το cjdns για να συνδεθούμε μεταξύ μας. Έτσι, επικοινωνούν οι συσκεύες μας. Αν επιθυμείτε να συνδεθείτε μαζί μας, κάν\'τε
μια προσπάθεια ή και δύο. Εαν δεν έχετε εγκαταστήσεί το OpenVPN ακόμα, παρακαλούμε κάν\'τε το αλλιώς το cjdns δεν θα δουλέψει. Διαλέξτε από την 
επίσημη σελίδα το αρχείο εγκατάστασης ανάλογα το λειτουργικό σας σύστημα.
<a href="https://openvpn.net/index.php/open-source/downloads.html">Κατεβάστε το OpenVPN</a>.
Εφόσον κατεβάσατε και εγκαταστήσατε το OpenVPN μπορούμε να προχωρήσουμε στο επόμενο βήμα!
Εδώ μπορείτε να κατεβάσατε το cjdns για Windows.';
	
	$warnings["en"] = '<pre style="text-align: center;">everything is ok</pre>';
	$warnings["gr"] = '<pre style="text-align: center;">Όλα ok</pre>';

	$some_notes["en"] = 'The thing is to make a free network for all people.';
	$some_notes["gr"] = 'Το θέμα είναι να φτιαχτεί ένα δωρεάν δίκτυο για όλο τον κόσμο.';
	
	$location["en"] = 'Rethymno, Greece';
	$location["gr"] = 'Ρέθυμνο, Ελλάδα';
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
\t\"peerName\":\"".$this->peer_name."\",
\t\"contact\":\"kaotisk@irc.fc00.io\"
	}";
		return $out;
	}
}
	$remote_address["en"] =  "you are accessing this site through: " .$_SERVER["REMOTE_ADDR"];
	$remote_address["gr"] =  "Πρόσβαση στο site από: " .$_SERVER["REMOTE_ADDR"];


	$todo["en"] = "
	<h4><i class=\"fi-clipboard-notes\"></i> ToDo</h5>
	<ul>
			<li class=\"done\">Site up</li>
			<li class=\"done\">Publish peer info</li>
			<li class=\"done\">Upload compiled cjdns</li>
			<li>Upload scripts</li>
			<li class=\"done\">OpenVpn link for depedencies (Windows)</li>
			<li class=\"done\">Add greek language to the site</li>
		</ul>";
	$todo["gr"] = "
	<h4><i class=\"fi-clipboard-notes\"></i> ToDo</h5>
	<ul>
			<li class=\"done\">Site up</li>
			<li class=\"done\">Publish peer info</li>
			<li class=\"done\">Upload compiled cjdns</li>
			<li class=\"done\">Upload scripts [Not needed]</li>
			<li class=\"done\">OpenVpn link for depedencies (Windows)</li>
			<li class=\"done\">Add greek language to the site</li>
			<li class=\"done\">Removed old link and redirected to interfect's cjdns-installer</li>
		</ul>";
		
	$download["en"] = '<a class="featured button" target="_new" href="https://github.com/interfect/cjdns-installer/releases/latest"><i class="fi-download"></i> Download cjdns-installer now!</a>';
	$download["gr"] = '<a class="featured button" target="_new" href="https://github.com/interfect/cjdns-installer/releases/latest"><i class="fi-download"></i> Κατεβάστε το cjdns-installer!</a>';

	$donate["en"] = '<a class="donate" href="bitcoin:1zzSnCvLRLw4ft8KbmH6rawLyZgFVDBrv?label=Rethymno%20Meshnet">
		<i class="fi-bitcoin-circle"></i> Donate for this project</a>';
	$donate["gr"] = '<a class="donate" href="bitcoin:1zzSnCvLRLw4ft8KbmH6rawLyZgFVDBrv?label=Rethymno%20Meshnet">
		<i class="fi-bitcoin-circle"></i> Δώστε κάτι για το project...</a>';

	$address_watch["en"] = '<a class="donate" href="https://blockchain.info/address/1zzSnCvLRLw4ft8KbmH6rawLyZgFVDBrv">
		<img class="blockchain-logo" src="img/blockchain-b-logo.png"/>
		Donations so far</a>';
	$address_watch["gr"] = '<a class="donate" href="https://blockchain.info/address/1zzSnCvLRLw4ft8KbmH6rawLyZgFVDBrv">
		<img class="blockchain-logo" src="img/blockchain-b-logo.png"/>
		Τα έσοδά μας μέχρι στιγμής</a>';

	$after["en"] = '<p>Now, that you \'ve downloaded and installed cjdns, you can add our node in the configure file of cjdns.
	Information needed is at the bottom of the page. If everything went well, you should be able to reach our site through meshnet.
	Try this <a href="http://h.rethymno-meshnet.tk/">link</a>.</p>';
	$after["gr"] = '<p>Τώρα που το κατεβάσατε και το εγκαταστήσατε μπορείτε να προσθέσετε τον κόμβο μας στο αρχείο ρυθμίσεων του cjdns.
	Τα στοιχεία βρίσκονται στο κάτω μέρος της σελίδας. Αν όλα έχουν πάει όπως πρέπει μπορείτε πλέον να συνδεθείτε στο site μέσω meshnet.
	Δοκιμάστε αυτό το <a href="http://h.rethymno-meshnet.tk/">link</a>.</p>';


	$info_title["en"] = 'Your information';
	$info_title["gr"] = 'Οι πληροφορίες σου';

	$connect_title["en"] = "Connect to rethymno-meshnet node";
	$connect_title["gr"] = "Συνδεθείτε με τον κόμβο rethymno-meshnet";

	function routeFind(){
		if ($_SERVER["HTTP_HOST"] == "h.rethymno-meshnet.tk"){
			$route = '<p class="panel success2">on hyperboria</p>';
		}
		else {
			$route = '<p class="panel warning">on internet</p>';
		}
		return $route;
	}
?>
<!doctype html>
<html class="no-js" lang="<?php echo $lang; ?>">
 	<head>
	    <meta charset="utf-8" />
	    <meta http-equiv="x-ua-compatible" content="ie=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	    <title>Rethymno MeshNet</title>
	    <link rel="shortcut icon" href="img/meshnet_logo72-2.png" />
	    <link rel="stylesheet" href="foundation-icons/foundation-icons.css" />

	    <link rel="stylesheet" href="css/foundation.css" />
	    <link rel="stylesheet" href="css/app.css" />
	    <link rel="stylesheet" type="text/css" href="css/custom.css" />
	</head>
	<body>
		<div class="row logo">
			<div class="small-12 column">
				<img src="img/meshnetlogo-2.svg" height="12.5%" width="12.5%">

			<h1><?php echo $title[$lang]; ?></h1>
			</div>
		</div>
		<div class="row content">
			<div class="small-8 columns">
				<p class="article"><?php echo $about[$lang]; ?></p>
				<div>
				
					<?php echo $download[$lang]; ?>
				</div>
				
				<div><?php echo $after[$lang]; ?></div>
			</div>
			<div class="small-4 columns">
				<div class=" panel success2">
					<?php echo $warnings[$lang]; ?>
				</div>
				<div>
					<h3><?php echo $info_title[$lang]; ?></h3>
					<p>
					<?php
						echo $remote_address[$lang];
						?></p>
						<p><?php 
						echo routeFind();
					?></p>
				</div>
				<div class="todo">
					<?php echo $todo[$lang]; ?>
				</div>
			</div>
		</div>
		
		
		<div class="row code">
			<div class="small-9 columns">
				<div class="code">
					<h2><?php echo $connect_title[$lang]; ?></h2>
					<?php include "public-node.php";
						echo $public_node; ?>
				</div>
			</div>
			<div class="small-3 columns donate">
			
				<p><?php echo $donate[$lang]; ?></p>
				<p><?php echo $address_watch[$lang]; ?></p>
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
