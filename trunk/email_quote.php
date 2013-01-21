<?php include("header.php"); ?>


<div id="mainContent">

	<h1>Email Sent</h1>
 <?php  
	$to = "info@privilegecleaning.com.au";
	$subject= "Cleaning request";

	$formKeyVals = $_POST;

	$message = "";
	while (list($key,$value) = each($_POST)){
	
		if(substr($key,0,5) == 'form_') 
		{
			$key1 = substr($key,5);
			$message = $message.$key1.": \t".($value=="on"?"needed":$value)."\n";

		}
	}

	$message = "Cleaning request\n"."\n".$message;
	$sent = mail($to, $subject, $message) ;
	if($sent)
	{
		echo "Your mail was sent successfully, we will contact you as soon as possible."; 
	}
	else
	{
		echo "We encountered an error sending your mail, please try again later."; 
	}
  
	?>
 
 <!-- Google Code for quote Conversion Page -->

<script type="text/javascript">

/* <![CDATA[ */

var google_conversion_id = 999534342;

var google_conversion_language = "en";

var google_conversion_format = "2";

var google_conversion_color = "ffffff";

var google_conversion_label = "23OBCNK92AMQht7O3AM";

var google_conversion_value = 0;

/* ]]> */

</script>

<script type="text/javascript" src="http://www.googleadservices.com/pagead/conversion.js">

</script>

<noscript>

<div style="display:inline;">

<img height="1" width="1" style="border-style:none;" alt="" src="http://www.googleadservices.com/pagead/conversion/999534342/?value=0&amp;label=23OBCNK92AMQht7O3AM&amp;guid=ON&amp;script=0"/>

</div>

</noscript>

 
	
</div>

 
<?php include("footer.php"); ?>
