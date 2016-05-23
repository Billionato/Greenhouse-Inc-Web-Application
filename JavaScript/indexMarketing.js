$(document).ready(function() {
	$('#txtRomano').focus(function() {
			$('#label_txtRomano').fadeIn('fast');	
		});
});

$(document).on('focusout', '#txtRomano', function() {
	$('#label_txtRomano').hide();	
})
//End of Tomatoe Section

$(document).on('focus', '#txtCorazon', function() {
	$('#label_txtCorazon').fadeIn('fast');	
})

$(document).on('focusout', '#txtCorazon', function() {
	$('#label_txtCorazon').hide();	
})
//End of Cherry Tomatoe Section

$(document).on('focus', '#txtPepper', function() {
	$('#label_txtPepper').fadeIn('fast');	
})

$(document).on('focusout', '#txtPepper', function() {
	$('#label_txtPepper').hide();	
})
//End of Green Pepper Section

$(document).on('focus', '#txtChili', function() {
	$('#label_txtChili').fadeIn('fast');	
})

$(document).on('focusout', '#txtChili', function() {
	$('#label_txtChili').hide();	
})
//End of Onion Section

$(document).on('focus', '#txtBag', function() {
	$('#label_txtBag').fadeIn('fast');	
})

$(document).on('focusout', '#txtBag', function() {
	$('#label_txtBag').hide();	
})
//End of Bag Section

$(document).on('mouseenter', '#cmdCheckout', function() {
	$('#txtRomano, #txtCorazon, #txtChili, #txtPepper, #txtBag').focusout();	
})