<?php include("header.php"); ?>


<div id="mainContent">

	<h1>Email Sent</h1>
 <?php  
	$to = "stevenjiang.au@hotmail.com,freemanW@hotmail.com";
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
		echo "Your mail was sent successfully."; 
	}
	else
	{
		echo "We encountered an error sending your mail, please try again later."; 
	}
 
 
$pizza = "service_date=16+May+2012&preferred_time=08%3A00+AM&Number_of_bedrooms=1+bedroom&Number_of_bathroom=1+bathroom&Property_Type=House&Property_Structure=1+Storey&Service_Type=End+Of+Lease+Cleaning&Carpet_vacumming=on&Carpet_Steam_Cleaning=on&Hard_floor_mopping=on&cobwebs_removal=on&lightswithes_and_door_handle_cleaning=on&Skirts%2Fsills_wiping=on&Air_conditioning_ducts_vacuumed=on&Ceiling_fans_dusted_and_wiped=on&Wall_marks_removed_where_possible=on&General_dusting=on&Bin_changing=on&Cupboard_wiping_surface_only=on&Sink_sanitising_and_polishing=on&Range_hood_cleaning=on&Oven_degreased_and_cleaned=on&Bench_top_cleaning=on&Cooking_top_cleaning=on&Basin_washing_table_cleaning=on&Mirror_polishing=on&Shower%2Fbath_cleaned_inc_tiles_and_screen=on&Drawers_and_cabinets_vacuumed_and_wiped=on&Toilet_cleaned=on&Mould_Removal=on&Exhaust_fans_cleaned=on&Sink_sanitising_and_polishing=on&Panes_cleaning_%26_sliding_slots_brushing%2Fvacumming=on&Flyscreen_cleaning=on";
 	$serializedArray = explode("&" ,$pizza);
	 
 
	
	
	
	?>
	
</div>

 
<?php include("footer.php"); ?>
