<?php
	include '../app/Node.php';
	include '../app/Language.php';
	include '../app/Session.php';

	$session = new Session();
	
	$language = new Language();
	$language->set_language($session->get_language());
	$lang = $language->get_language();

	$node = new Node();
	$public_node = $node->connect();


	
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

	$after["en"] = 'Now, that you \'ve downloaded and installed cjdns, you can add our node in the configure file of cjdns.
	Information needed is at the bottom of the page. If everything went well, you should be able to reach our site through meshnet.
	Try this <a href="http://h.rethymno-meshnet.tk/">link</a>.';
	$after["gr"] = 'Τώρα που το κατεβάσατε και το εγκαταστήσατε μπορείτε να προσθέσετε τον κόμβο μας στο αρχείο ρυθμίσεων του cjdns.
	Τα στοιχεία βρίσκονται στο κάτω μέρος της σελίδας. Αν όλα έχουν πάει όπως πρέπει μπορείτε πλέον να συνδεθείτε στο site μέσω meshnet.
	Δοκιμάστε αυτό το <a href="http://h.rethymno-meshnet.tk/">link</a>.';

	$further["en"] = '<i class="fi-info"></i> Connect to <i>irc.fc00.io</i> and join <b>#rethymno-meshnet</b> channel.';
	$further["gr"] = '<i class="fi-info"></i> Συνδεθείτε στο <i>irc.fc00.io</i> και μπείτε στο κανάλι <b>#rethymno-meshnet</b> .';


	$info_title["en"] = 'Your information';
	$info_title["gr"] = 'Οι πληροφορίες σου';

	$connect_title["en"] = "Connect to rethymno-meshnet node";
	$connect_title["gr"] = "Συνδεθείτε με τον κόμβο rethymno-meshnet";

	$new_version["en"] = '<p class="new-download">New version availiable. Please update.</p>';
	$new_version["gr"] = '<p class="new-download">Διατίθεται νέα έκδοση. Παρακαλούμε, αναβαθμίστε.</p>';

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
		<div class="lang-menu">
			<form method="post">
			<input class="lang-button button" type="submit" name="language" value="en">
			<input class="lang-button button" type="submit" name="language" value="gr">
			</form>
		</div>
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
					<?php echo $new_version[$lang]; ?>
					<?php echo $download[$lang]; ?>
				</div>
				
				<div><p class="article"><?php echo $after[$lang]; ?></p></div>
				<div><p class="panel info-panel"><?php echo $further[$lang]; ?></p></div>
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
					<pre><?php echo $public_node; ?></pre>
				</div>
			</div>
			<div class="small-3 columns donate">
			
				<p><?php echo $donate[$lang]; ?></p>
				<p><?php echo $address_watch[$lang]; ?></p>
			</div>
		</div>
		<div class="row bot-area">
			<div class="small-4 columns">
				<h4><i class="fi-social-github"></i> Sources</h4>
				<ul class="bot-list">
					<li>
						<a href="https://github.com/kaotisk-hund/rethymno-meshnet-site">rethymno-meshnet-site</a>
					</li>
					<li>
						<a href="https://github.com/cjdelisle/cjdns">cjdns</a>
					</li>
					<li>
						<a href="https://github.com/interfect/cjdns-installer">cjdns-installer</a>
					</li>
				</ul>
			</div>
			<div class="small-4 columns"></div>
			<div class="small-4 columns"></div>
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

