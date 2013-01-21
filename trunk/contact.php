<?php include("header.php"); ?>

<style media="screen" type="text/css">
    .defaultText { width: 500px; }
    .defaultTextActive { color: #a1a1a1; font-style: italic; }
</style>

<div id="mainContent">

	<h3>Contact Us:</h3>
	<div class="field"><label>Mobile:</label>0434 192 354</div>
	<div class="field"><label>Email:</label>info@privilegecleaning.com.au</div>
	
	 <h3>You can fill out the form below to request a call back or send a message to us</h3>
	 
<form id="form1"  method="post" action="email_contact.php">
	<div class="field">
		<label for="full name">Full Name *:</label>
		<input type="text" name="form_full_name"  class=":required"  />
	</div>
 
	<div class="field">
		<label for="contact_number">Contact Number *:</label>
		<input type="text" name="form_contact_number"  class=":required" />
	</div>
	<div class="field">
		<label for="email">Email:</label>
		<input type="text" name="form_email" />
	</div>
	<div class="field">
		<label for="address">Address*:</label>
		<input type="text" name="form_address" class=":required" />
	</div>
	<div class="field">
		<label for="comment">Comment:</label>
		<textArea id="form_comment" name="form_comment" title="Please call me back."  class="defaultText"></textarea>
	</div>
 <div class="buttonBar">
		<input id="send"name="send" type="submit" value="Send the request to us"/>
	</div>
</form>

 
</div>

<script language="javascript">

	$(document).ready(function() {

		$("#form_comment").focus(function(srcc)
		{
			if ($(this).val() == $(this)[0].title)
			{
				$(this).removeClass("defaultTextActive");
				$(this).val("");
			}
		});
		
		$("#form_comment").blur(function()
		{
			if ($(this).val() == "")
			{
				$(this).addClass("defaultTextActive");
				$(this).val($(this)[0].title);
			}
		});
		
		$("#form_comment").blur();  
		$('#send').bind('click', function(event) {
			return $("#form1").simpleValidate();
		});
	});
	
	 
</script>
 
 
<?php include("footer.php"); ?>
