<?php include("header.php"); ?>

<form id='form1' method="post" action="report.php">
<div id="mainContent">
	<h1>Quick Quote</h1>
 

	<p>Our standard flat rate is $35/hr per cleaner</p>
	<p>Alternatively you can fill out the following form to get a fixed price quote</p>
	
	<h3>Prefered serviced date</h3>
	<div class="field">
		<label for="service_date">Preferred date</label>
		<input type="text" id="service_date" class=":required" name="service_date"/>
	</div>
	
	<div class="field">
		<label for="service_time">Preferred time</label>
		<select id="service_time" name="service_time">
			<option >08:00 AM</option>
			<option >09:00 AM</option>
			<option >10:00 AM</option>
			<option >11:00 AM</option>
			<option >12:00 AM</option>
			<option disabled="disabled">=======</option>
			<option >01:00 PM</option>
			<option >02:00 PM</option>
			<option >03:00 PM</option>
			<option >04:00 PM</option>
			<option >05:00 PM</option>
			<option >06:00 PM</option>
			<option >07:00 PM</option>
			<option >08:00 PM</option>
		</select>

	</div>
	
	<h3>Property details</h3>
	<div class="field">
		<label for="bedroom">Bedrooms</label>
		<select id="bedroom" name="bedroom">
			<option>1 bedroom</option>
			<option>2 bedrooms</option>
			<option>3 bedrooms</option>
			<option>4 bedrooms</option>
			<option>5 bedrooms</option>
			<option>6 bedrooms</option>
		</select>
	</div>
	<div class="field">
		<label for="bathroom">Bathrooms (inc ensuite)</label>
		<select id="bathroom" name="bathroom">
			<option>1 bathroom</option>
			<option>2 bathrooms</option>
			<option>3 bathrooms</option>
			<option>4 bathrooms</option>
		</select>
	</div>
 
	<div class="field">
		<label for="property_type">Property Type</label>
		<select id="property_type" name="property_type">
			<option>House</option>
			<option>Townhouse</option>
			<option>Unit</option>
			<option>Other</option>
		</select>
	</div>
 	<div class="field">
		<label for="property_structure">Property Structure</label>
		<select id="property_structure" name="property_structure">
			<option>1 Storey</option>
			<option>2 Storeys</option>
			<option>Other</option>
			
		</select>
	</div>
 
	<div class="field">
		<label for="service_type">Service Type</label>
		<select id="service_type" name="service_type">
			<option>End Of Lease Cleaning</option>
			<option>Bond Back Cleaning</option>
			<option>Spring House Cleaning</option>
			<option>Move In Cleaning</option>
			<option>Move Out Cleaning</option>
			<option>Pre-inspection Cleaning</option>
			<option>Office/Shopfront Cleaning</option>
			<option>Commercial Cleaning</option>
			<option>Other</option>
		</select>
	</div>

	<div class="buttonBar">
		<input id="next" name="quote" type="submit" value="Next Step"/>
	</div>
 
</div>
</form>
<script language="javascript">

	$(document).ready(function() {
 		$( "#service_date" ).datepicker({ "dateFormat":'dd MM yy'});
 
		 $('#next').bind('click', function(event) {
			return $("#form1").simpleValidate();
		});
		
		 
		
	});

	 
</script>
 
 
<?php include("footer.php"); ?>
