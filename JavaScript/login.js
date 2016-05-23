$(document).ready(function() {
		$('#toggleAdmin').click(function() {
				$('#loginAdmin').slideToggle('slow');
			});
});

$(document).on('click', '#signUp_button', function() {
		$('#phSignUpForm').fadeIn('fast');
		$('#msg').hide();
		
});

$(document).on('click', '#cmdSignUp', function() {
		/*$('#phSignUpForm').hide();*/
		$('#msg').fadeIn('fast');
		
});