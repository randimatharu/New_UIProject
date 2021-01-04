$(document).ready(function() {
    //toggle the component with class accordion_body
    $(".accordion_head").click(function() {
        if ($('.accordion_body').is(':visible')) {
            $(".accordion_body").slideUp(300);
            $(".plusminus").text('+');
        }
        if ($(this).next(".accordion_body").is(':visible')) {
            $(this).next(".accordion_body").slideUp(300);
            $(this).children(".plusminus").text('+');
        } else {
            $(this).next(".accordion_body").slideDown(300);
            $(this).children(".plusminus").text('-');
        }
    });
});

$(document).ready(function() {
	var max_fields      = 10; //maximum input boxes allowed
	var wrapper   		= $(".input_fields_wrap"); //Fields wrapper
	var add_button      = $(".add_field_button"); //Add button ID
	
	var x = 1; //initlal text box count
	$(add_button).click(function(e){ //on add input button click
		e.preventDefault();
		if(x < max_fields){ //max input box allowed
			x++; //text box increment
			$(wrapper).append('<div class="row"><div class="col-md-6"><div class="form-group row"><label for="name" class="col-sm-3 col-form-label"></label><div class="col-sm-9"><input type="text" class="form-control" name="email[]" placeholder="email@example.com" id="email[]"></div></div></div><div class="col-md-6"><div class="form-check form-check-inline"><input class="form-check-input" type="radio" name="primary" id="primary" value="Primary"><label class="form-check-label" for="inlineRadio1">Primary</label></div><div class="form-check form-check-inline"><input class="form-check-input" type="checkbox" id="opted_out" name="opted_out" value="opted_out"><label class="form-check-label" for="inlineCheckbox2">Opted Out</label></div><div class="form-check form-check-inline"><input class="form-check-input" type="checkbox" id="invalid" name="invalid" value="invalid"><label class="form-check-label" for="inlineCheckbox3">Invalid</label></div></div><a href="#" class="remove_field btn btn-danger">-</a></div > ');  
		}
	});
	
	$(wrapper).on("click",".remove_field", function(e){ //user click on remove text
		e.preventDefault(); $(this).parent('div').remove(); x--;
	})
});

