<?php include("header.php"); 
error_reporting(E_ERROR | E_WARNING | E_PARSE);
?>
 
<div id="mainContent">
	<h1>Quote Summary</h1>

	<div class="field">
		<label>Your preferred date</label>
		<?php echo trim($_POST['service_date']) ?>
	</div>
		<div class="field">
		<label>Your preferred time</label>
		<?php echo $_POST['service_time'] ; ?>
	</div>
 
	<div class="field">
		<label>Number of bedrooms</label>
		<?php echo trim($_POST['bedroom']) ?>
	</div>
	<div class="field">
		<label>Number of bathrooms</label>
		<?php echo $_POST['bathroom'] ?>
	</div>
	<div class="field">
		<label>Property Type</label>
		<?php echo ($_POST['property_type']) ?>
	</div>
	<div class="field">
		<label>Property Structure</label>
		<?php echo  ($_POST['property_structure'])  ?>
	</div>
	<div class="field">
		<label>Service Type</label>
		<?php echo ($_POST['service_type'])  ?>
	</div>
<form id="form1" method="post" action="email.php">
	<input type="text" name="form_service_date" value="<?php echo $_POST['service_date'] ?>" class="hide" />
	<input type="text" name="form_preferred_time" value="<?php echo $_POST['service_time'] ?>" class="hide" />
	<input type="text" name="form_Number_of_bedrooms" value="<?php echo $_POST['bedroom'] ?>" class="hide" />
	<input type="text" name="form_Number_of_bathroom" value="<?php echo $_POST['bathroom'] ?>" class="hide" />
	<input type="text" name="form_Property_Type" value="<?php echo $_POST['property_type'] ?>" class="hide" />
	<input type="text" name="form_Property_Structure" value="<?php echo $_POST['property_structure'] ?>" class="hide" />		
	<input type="text" name="form_Service_Type" value="<?php echo $_POST['service_type'] ?>" class="hide" />
	
	<h4 class="note">
		Below are the items normally required for the service type you have selected, however you can customize you needs by selecting/deselecting items
	</h4>
	
	<h4>General (applicable to all rooms)</h4> 
	<ul>
		<li><input name="form_Carpet_vacumming" type="checkbox" checked /> Carpet vacumming</li>
		<li><input name="form_Carpet_Steam_Cleaning" type="checkbox" checked /> Carpet Steam Cleaning</li>
		<li><input name="form_Hard_floor_mopping" type="checkbox" checked /> Hard floor mopping</li>
		<li><input name="form_cobwebs_removal" type="checkbox" checked /> cobwebs removal</li>
		<li><input name="form_lightswithes_and_door_handle_cleaning" type="checkbox" checked /> lightswithes and door handle cleaning</li>
		<li><input name="form_Skirts/sills_wiping" type="checkbox" checked /> Skirts/sills wiping</li>
		<li><input name="form_Air_conditioning_ducts_vacuumed" type="checkbox" checked /> Air conditioning ducts vacuumed</li>
		<li><input name="form_Ceiling_fans_dusted_and_wiped" type="checkbox" checked /> Ceiling fans dusted and wiped</li>
		<li><input name="form_Wall_marks_removed_where_possible" type="checkbox" checked /> Wall marks removed where possible</li>
		<li><input name="form_General_dusting" type="checkbox" checked /> General dusting</li>
		<li><input name="form_Bin_changing" type="checkbox" checked /> Bin changing</li>
		<li><input name="form_Main_entry_door_wiping" type="checkbox" /> Main entry door wiping</li>
		<li><input name="form_Sweep_front_back_porch_and_steps" type="checkbox" /> Sweep front/back porch and steps</li>
		<li><input name="form_Sweeping_deck" type="checkbox" /> Sweeping deck</li>
		<li><input name="form_Pictures_dusting_" type="checkbox" /> Pictures dusting</li>
		<li><input name="Wooden_floor_hand_wiping_polishing_available_under_owners_instruction_with_equipments_provided_hours_based" type="checkbox" /> Wooden floor hand wiping(polishing available under owner's instruction with equipments provided) hours based</li>
  	</ul>
	 <h4>Kitchen</h4> 
	<ul>
		<li><input name="form_Cupboard_wiping_surface_only" type="checkbox" checked /> Cupboard wiping(surface only)</li> 
		<li><input name="form_Sink_sanitising_and_polishing" type="checkbox" checked /> Sink sanitising and polishing</li> 
		<li><input name="form_Range_hood_cleaning" type="checkbox"  checked /> Range hood cleaning</li> 
		<li><input name="form_Oven_degreased_and_cleaned" type="checkbox" checked /> Oven degreased and cleaned</li> 
		<li><input name="form_Bench_top_cleaning" type="checkbox"  checked /> Bench top cleaning</li> 
		<li><input name="form_Cooking_top_cleaning" type="checkbox"  checked /> Cooking top cleaning</li> 
		<li><input name="form_Fridge_interior_cleaning" type="checkbox" /> Fridge interior cleaning</li> 
		<li><input name="form_Dishwashing_using_dishwasher" type="checkbox" /> Dishwashing - using dishwasher</li> 
		<li><input name="form_Fridge_cleaning_surface_only" type="checkbox" /> Fridge cleaning(surface only)</li> 
		<li><input name="form_Dishwashing_using_dishwasher_only" type="checkbox" /> Dishwasher/microwave wiping</li> 
	</ul>
	<h4>Bathroom</h4>
	<ul>
		<li><input name="form_Basin_washing_table_cleaning" type="checkbox"  checked /> Basin/washing table cleaning</li> 
		<li><input name="form_Mirror_polishing" type="checkbox"  checked  /> Mirror polishing</li> 
		<li><input name="form_Shower/bath_cleaned_inc_tiles_and_screen" type="checkbox" checked  /> Shower/bath cleaned inc tiles and screen</li> 
		<li><input name="form_Drawers_and_cabinets_vacuumed_and_wiped" type="checkbox" checked  /> Drawers and cabinets vacuumed and wiped</li> 
		<li><input name="form_Toilet_cleaned" type="checkbox"  checked  /> Toilet cleaned</li> 
		<li><input name="form_Mould_Removal" type="checkbox"  checked  /> Mould Removal</li> 
		<li><input name="form_Exhaust_fans_cleaned" type="checkbox" checked  /> Exhaust fans cleaned</li> 
		<li><input name="form_wiping_tiled_wall" type="checkbox" /> wiping tiled wall</li> 
	</ul> 
	<h4>Laundry</h4> 
	<ul> 
		<li><input name="form_Sink_sanitising_and_polishing" type="checkbox" checked /> Sink sanitising and polishing</li> 
		<li><input name="form_Tiled_walls_wiping" type="checkbox"/> Tiled walls wiping</li> 
		<li><input name="form_Washing_maching_drier_wipping" type="checkbox"/> Washing maching/drier wipping</li> 
	</ul> 
 	<h4>Windows</h4> 
	<ul> 

		<li><input name="form_Panes_cleaning_&_sliding_slots_brushing/vacumming" type="checkbox" checked /> Panes cleaning & sliding slots brushing/vacumming</li> 
		<li><input name="form_Flyscreen_cleaning" type="checkbox" checked /> Flyscreen cleaning</li> 
	</ul> 
 
	<h4>Bedroom</h4> 
	<ul> 
		<li><input name="form_Making_bed" type="checkbox"/> Making bed</li> 
		<li><input name="form_Bedside_tables_dusting" type="checkbox"/> Bedside tables dusting</li> 
		<li><input name="form_Dressing_table_dusting" type="checkbox"/> Dressing table dusting</li> 
		<li><input name="form_tidying" type="checkbox"/> tidying</li> 
	</ul> 
 
		<h4>Lounge room</h4> 
	<ul> 
		<li><input name="form_All_appliances_furnitures_dusting" type="checkbox"/> All appliances/furnitures dusting</li> 
		<li><input name="form_Tidying" type="checkbox"/> Tidying</li> 
		<li><input name="form_Leather_sofa_wiping_and_conditioning" type="checkbox"/> Leather sofa wiping and conditioning</li> 
	</ul> 

	<h4>Others</h4> 
	<UL> 
		<li><input name="form_Car_handwashing_open_space_and_water_supply_required_exterior_$40_both_$80" type="checkbox" /> Car handwashing (open space and water supply required) exterior $40 both $80</li> 
		<li><input name="form_Gagage_floor_sweeping_cobwebs_removing" type="checkbox"/> Gagage floor sweeping & cobwebs removing </li> 
	</UL> 
 
	 <h3>Customer Details</h3>
	<div class="field">
		<label for="full name">Full Name *</label>
		<input type="text" name="form_full_name" class=":required" value=""   />
	</div>
 
	<div class="field">
		<label for="contact_number">Contact Number *</label>
		<input type="text"  name="form_contact_number" class=":required" value=""  />
	</div>
	<div class="field">
		<label for="email">Email</label>
		<input type="text"   name="form_email" value="" class=":email" />
	</div>
	<div class="field">
		<label for="address">Address *</label>
		<input type="text"   class=":required" name="form_address" value=""  />
	</div>
	<div class="field">
		<label for="address">Comment/requirement</label>
		<textarea type="text"  name="form_comment" value=""  ></textarea>
	</div>
	<div class="buttonBar">
		<input id="back" name="back" type="submit" value="Back"/>
		<input id="send"name="send" type="submit" value="Send the request to us"/>
	</div>
</form>

	<div class="row"><span class="note">You may want to use "Ctrl + p" to print out the page for future reference and checking purpose before sending the request to us!</span></div>
 
</div>
 
<script language="javascript">
 

$(document).ready(function() {
	$( "#back").click(function(event){

		history.back(-1);
		event.preventDefault();
	});
	
	
	$('#send').bind('click', function(event) {
		return $("#form1").simpleValidate();
	});
 
});
</script>
	 
</script>
 

<?php include("footer.php"); ?>
