$(document).ready(function(){

	// Footer Toggle
	$('#pull-tab').click(function(){
		$('#footer').toggleClass('footer-visible');
	});

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

	// Mobile Menu Toggling
	$('#menu-icon').click(function(){
		$('#menu-icon').toggleClass('menu-icon-open');
		$('#menu-links').slideToggle(300);
	});

	function clearClasses() {
		$('#menu-icon').toggleClass('menu-icon-open');
		$('#deck').removeClass('view-left');
		$('#deck').removeClass('view-right');
		$('#deck').removeClass('view-bottom');
		$('#nav-right').removeClass('nav-right-return');
		$('#nav-left').removeClass('nav-left-return');
		$('#nav-bottom').removeClass('nav-bottom-return');
	}

	$('#menu-home').click(function(){
		clearClasses();
		$('#menu-links').slideToggle(300);
	});

	$('#menu-contact').click(function(){
		clearClasses();
		$('#menu-links').slideToggle(300);
		$('#deck').toggleClass('view-bottom');
		$('#nav-bottom').toggleClass('nav-bottom-return');
	});

	$('#menu-portfolio').click(function(){
		clearClasses();
		$('#menu-links').slideToggle(300);
		$('#deck').toggleClass('view-right');
		$('#nav-right').toggleClass('nav-right-return');
	});

	$('#menu-resume').click(function(){
		clearClasses();
		$('#menu-links').slideToggle(300);
		$('#deck').toggleClass('view-left');
		$('#nav-left').toggleClass('nav-left-return');
	});

	// form alert
	$('#hide-form-alert').click(function(){
		$('#form-alert').fadeOut(300);
	});

	$('.input').each(function(){
		$(this).focus(function(){
			$(this).addClass('raise-label');
		});

		$(this).blur(function(){
			if($(this).val()!=""){
		    	
			}else{
				$(this).removeClass('raise-label');
			}
		});
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
			    $('.input').removeClass('input-clicked');
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