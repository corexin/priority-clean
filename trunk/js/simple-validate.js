/**
	@author Chao Jiang
	@email Stevenjiang.au@hotmail.com
	@version 1.0.0 - only support textfield and textArea at the moment.
	Example:
	1. Add ":required" as class to input,textarea field, e.g. <input class=":required" />
	2. Add the template code as follows to your jquery domReady code.
	(send is submit button id, form1 is form id which needs to be validated)
	$('#send').bind('click', function(event) {
		return $("#form1").simpleValidate();
	});
	Feel free to add more function or modify, please mention my name if you think my code is useful:)
*/

(function( $ ){

  $.fn.simpleValidate = function() {
	var parentObj = $(this);
	
	var valid = true;
	var CLASS_MSG_MAP = {
		":required":{"condition":/^\s*$/,"msg":"This field is required"}
	};
	$(parentObj).find('input[type=text],input[type=checkbox],input[type=radio], textarea, select').each(function(){
	
		var element = $(this);
		$.each(CLASS_MSG_MAP, function(key, value) {
			
					if($(element).hasClass(key)){
						if($(element).val().match(value["condition"]) !=null){
							insertErrorMessage(element, value["msg"]);
							valid = false;
						} else {
							removeErrorMessage(element, value["msg"]);
						}
					}
		});

	});
	
	function insertErrorMessage(formElementObj, msg){
		if($(formElementObj).next().html() != msg){
			$(formElementObj).after("<span style='padding-left:5px;color:red'>"+ msg + "</span>");
		}
	}
	function removeErrorMessage(formElementObj, msg){
		if($(formElementObj).next().html() == msg){
			$(formElementObj).next().remove();
		}
	}
	
    return valid;
  };
})( jQuery );