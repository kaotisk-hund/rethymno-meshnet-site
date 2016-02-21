<?php
$message = '<h1>welcome</h1>';
$about = '<p>hi! this is a front page for h.rethymno-meshnet.tk a site about the local mesh network in Rethymno, Greece</p>';
$warnings = '<pre>system under maintenance</pre>';
?>
<html>
<head>
<title>rethymno meshnet</title>
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
<div class="logo"><?php echo $message; ?></div>
<div class="content"><?php echo $about; ?></div>
<div class="special"><?php echo $warnings; ?></div>

<div class="test"><?php include "public-node.php"; ?></div>
</body>
</html>
