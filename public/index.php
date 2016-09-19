<?php
	include '../app/Node.php';
	include '../app/Language.php';
	include '../app/Session.php';
	include '../app/TunStats.php';

	$session = new Session();
	
	$language = new Language();
	$language->set_language($session->get_language());
	$lang = $language->get_language();

	$node = new Node();
	$public_node = $node->connect();

	$stats = new TunStats();
	
	/*if(isset($_GET['lang']) && )){
		$lang = $_GET['lang'];
	}
	else{
		$lang = $default_lang;
	}*/
	
	include '../app/GeneralText.php';
	include '../app/Functions.php';
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
		<div class="row top-bar-menu">
			<div class="small-12 column">
				<div class="top-bar">
					<div class="top-bar-left">
						<ul class="dropdown menu" data-dropdown-menu>
							<li class="menu-text">Rethymno Meshnet</li>
							<li><a href=""><?php echo $info_title[$lang]; ?></a>
								<ul class="menu vertical">
									<li><p class="panel"><?php	echo $remote_address[$lang]; ?></p></li>
								</ul>
							</li>
							<li><p><?php echo routeFind(); ?></p></li>
						</ul>
					</div>
					<div class="top-bar-right">
						<ul class="menu"><form method="post">
							<li><input class="lang-button button" type="submit" name="language" value="en"></li>
							<li><input class="lang-button button" type="submit" name="language" value="gr"></li>
							</form>
						</ul>
					</div>
				</div>
			</div>
		</div>
		
		<div class="row logo">
			<div class="small-12 column">
				<div class="row">
					<div class="small-12 column">
						<img class="logo" src="img/meshnet_logo72-wh.png" height="12.5%" width="12.5%">
					</div>
				</div>
				<div class="row">
					<div class="small-12 column">
						<h1><?php echo $title[$lang]; ?></h1>
					</div>
				</div>
			</div>
		</div>
		<div class="hide row">
			<div class="small-12 column">
				<p>
					<?php echo $stats->getStats(); ?>
				</p>
			</div>
		</div>
		<div class="row content">
			<div class="small-12 columns">
				<p class="article"><?php echo $about[$lang]; ?></p>
				<div class="download">
					<?php echo $download[$lang]; ?>
				</div>
				
				<div><p class="article"><?php echo $after[$lang]; ?></p></div>
				<div><?php echo $further[$lang]; ?></div>
			</div>
		</div>
				
		<div class="row donate">
			<div class="small-6 columns">
				<p><?php echo $donate[$lang]; ?></p>
			</div>
			<div class="small-6 columns">
				<p><?php echo $address_watch[$lang]; ?></p>
			</div>
		</div>
		<div class="row bot-area">
			<div class="small-3 columns">
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
			<div class="small-3 columns">
				<h4><i class="fi-folder"></i> Files</h4>
				<ul class="bot-list">
					<li><a href="<?php echo $local_download_link; ?>"><?php echo $local_dl_text[$lang]; ?></a>
					</li>
				</ul>
				<h4><i class="fi-mail"></i> Support</h4>
				<ul class="bot-list">
					<li><a href="https://toxme.io/u/kaotisk-hund">Find me on tox</a></li>
				</ul>
			</div>
			<div class="small-6 columns">
				<h4><i class="fi-list"></i> Statistics</h4>
				<pre class="code"><?php include '../app/cjdns/peerStats.php'; ?></pre>
			</div>
		</div>
		<div class="row footer">
			<div class="small-4 columns">
				<p class="footer">Active branch: <?php echo siteVersion(); ?></p>
			</div>
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

