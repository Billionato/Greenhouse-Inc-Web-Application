// JavaScript Document
$(document).ready(function() {
	$('#optNextPage').click(function() {
		$('.phForm').fadeIn('fast');
		$('.phMenu').hide();	
	});	
});

$(document).on('click', '#optMenuBack', function() {
	$('.phMenu').fadeIn('fast');
	$('.phForm').hide();
});

$(document).on('focus', '#txtUsername', function() {
	$('#infoMsg').fadeIn('fast');
});

$(document).on('blur', '#txtUsername', function() {
	$('#infoMsg').hide('fast');
});

