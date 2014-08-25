<html>
<head>
<head>
	<title>Cleaning Service | Commercial Cleaning | Professional Cleaning Services</title>
	<meta charset="UTF-8" />
	<meta name="keywords" content="Cleaning Service, Cleaning, Commercial Cleaning, Cleaners, Professional Cleaning Services" />
	<meta name="description" content=" Privilege Cleaning, one of the renowned cleaners in Canberra, ACT offers professional cleaning services for commercial and residential properties" />
	<meta name="author" content="chao Jiang" />
	<link rel="stylesheet" type="text/css"  href="css/main.css" media="screen" /> 
	<link rel="stylesheet" type="text/css"  href="css/print.css" media="print" /> 
	<link rel="stylesheet" href="css/ui-lightness/jquery.ui.all.css" type="text/css" media="screen" />
	<script src="js/jquery-1.7.2.min.js"></script>
	<script src="js/jquery.ui.core.js"></script>
	<script src="js/jquery.ui.widget.js"></script>
	<script src="js/jquery.ui.datepicker.js"></script>
	<script src="js/jquery.ae.image.resize.js"></script>
     
	<script src="js/simple-validate.js" type="text/javascript"></script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-31932407-1', 'privilegecleaning.com.au');
  ga('send', 'pageview');

</script>
 
</head>

<body>
<div id="mainContainer">
	<div id="banner">
		<img src="img/clean_logo.gif" />
		<div class="contact">
			<p>Mobile: <span class="thick">0434 192 354</span></p>
			<p>Email: info@privilegecleaning.com.au</p>
		</div>
	</div>
	<div id="nav">
	
	<?php 
			$pageName = str_replace(".php", "", basename($_SERVER["SCRIPT_NAME"])); 
	?>
	
		<a href="index.php" <?php if(strcasecmp($pageName , "index") == 0	) { echo ("class='currentPageFont'"); }?>>Home</a>
		<a href="service.php" <?php if(strcasecmp($pageName , "service") == 0	) { echo ("class='currentPageFont'"); }?>>Service</a>
		<a href="quote.php" <?php if(strcasecmp($pageName , "quote") == 0 || strcasecmp($pageName , "report") == 0	) { echo ("class='currentPageFont'"); }?>>Quote</a>
		<a href="special_offer.php" <?php if(strcasecmp($pageName , "special_offer") == 0	) { echo ("class='currentPageFont'"); }?>>Special Offer</a>
		<a href="customers.php" <?php if(strcasecmp($pageName , "customers") == 0	) { echo ("class='currentPageFont'"); }?>>Customers</a>
		<a href="contact.php" <?php if(strcasecmp($pageName , "contact") == 0	) { echo ("class='currentPageFont'"); }?>>Contact</a>
	</div>
