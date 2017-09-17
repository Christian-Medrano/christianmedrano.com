$(document).ready(function(){

	var atHome = true;

	// set date for welcome message
	var d = new Date();
	var n = d.getHours();

	if (n < 12){
		$('#welcome-message').text('Good Morning');
	} else if (n > 12 && n < 18) {
		$('#welcome-message').text('Good Afternoon');
	} else if (n > 18) {
		$('#welcome-message').text('Good Evening');
	} else {
		$('#welcome-message').text('Hello');
	}

	// navigation
	$('#nav-left').click(function(){
		$('#deck').toggleClass('view-left');
		$('#nav-left').toggleClass('nav-left-return');
	});

	$('#nav-right').click(function(){
		$('#deck').toggleClass('view-right');
		$('#nav-right').toggleClass('nav-right-return');
	});

	$('#nav-bottom').click(function(){
		$('#deck').toggleClass('view-bottom');
		$('#nav-bottom').toggleClass('nav-bottom-return');
	});

	// AJAX email

	$(function() {
	    // Get the form.
	    var form = $('#ajax-contact');

	    // Get the messages div.
	    var formMessages = $('#form-alert-text');
	    var formAlert = $('#form-alert');

	    // Set up an event listener for the contact form.
	    $(form).submit(function(event) {
	        // Stop the browser from submitting the form.
	        event.preventDefault();

	        // Serialize the form data.
	        var formData = $(form).serialize();

	        // Submit the form using AJAX.
	        $.ajax({
	            type: 'POST',
	            url: $(form).attr('action'),
	            data: formData
	        }).done(function(response) {
			    // Make sure that the formMessages div has the 'success' class.
			    $(formAlert).removeClass('error');
			    $(formAlert).addClass('success');

			    // Set the message text.
			    $(formMessages).text(response);

			    // Clear the form.
			    $('#name').val('');
			    $('#email').val('');
			    $('#message').val('');
			}).fail(function(data) {
			    // Make sure that the formMessages div has the 'error' class.
			    $(formAlert).removeClass('success');
			    $(formAlert).addClass('error');

			    // Set the message text.
			    if (data.responseText !== '') {
			        $(formMessages).text(data.responseText);
			    } else {
			        $(formMessages).text('Oops! An error occured and your message could not be sent.');
			    }
			});
	    });
	});
	
});