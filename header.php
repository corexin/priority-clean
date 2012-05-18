<html>
<head>
<head>
	<title>Privilege Cleaning</title>
	<meta charset="UTF-8" />
	<meta name="keywords" content="Canberra, Priority home, cleaning" />
	<meta name="description" content="Privilege Cleaning" />
	<meta name="author" content="chao Jiang" />
 
	<link rel="stylesheet" type="text/css"  href="css/main.css" media="screen" /> 
	<link rel="stylesheet" type="text/css"  href="css/print.css" media="print" /> 
	<link rel="stylesheet" href="css/ui-lightness/jquery.ui.all.css" type="text/css" media="screen" />
	<script src="js/jquery-1.7.2.min.js"></script>
	<script src="js/jquery.ui.core.js"></script>
	<script src="js/jquery.ui.widget.js"></script>
	<script src="js/jquery.ui.datepicker.js"></script>
     
	<script src="js/simple-validate.js" type="text/javascript"></script>
 
</head>

<body>
<div id="mainContainer">
	<div id="banner">
		<img src="img/clean_logo.gif" />
	</div>
	<div id="nav">
	
	<?php 
			$pageName = str_replace(".php", "", basename($_SERVER["SCRIPT_NAME"])); 
	?>
	
		<a href="index.php" <?php if(strcasecmp($pageName , "index") == 0	) { echo ("class='currentPageFont'"); }?>>Home</a>
		<a href="service.php" <?php if(strcasecmp($pageName , "service") == 0	) { echo ("class='currentPageFont'"); }?>>Service</a>
		<a href="quote.php" <?php if(strcasecmp($pageName , "quote") == 0 || strcasecmp($pageName , "report") == 0	) { echo ("class='currentPageFont'"); }?>>Quote</a>
		<a href="contact.php" <?php if(strcasecmp($pageName , "contact") == 0	) { echo ("class='currentPageFont'"); }?>>Contact</a>
	</div>
