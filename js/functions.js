$(document).ready(function(){
	// set starting states
	$('.hud-caption').hide();
	$('#hud-item-2').css({
		top: 'calc(50vh - 100px)',
		right: 'calc(50vw - 100px)'
	});
	$('#hud-item-3').css({
		bottom: 'calc(50vh - 100px)',
		left: 'calc(50vw - 100px)'
	});
	$('#hud-item-4').css({
		bottom: 'calc(50vh - 100px)',
		right: 'calc(50vw - 100px)'
	});
	// fade out welcome
	$('#welcome-message').delay(2000).fadeOut(500, function(){
		// fade in icons
		$('#hud-icon-1').fadeIn(500);
		$('#hud-icon-2').delay(500).fadeIn(500);
		$('#hud-icon-3').delay(1000).fadeIn(500);
		$('#hud-icon-4').delay(1500).fadeIn(500);
		// place icons in corners
		// move icons to corners
		$('#hud-item-1').delay(2000).animate({
			top: '0',
			left: '0'
		}, 500);
		$('#hud-item-2').delay(2000).animate({
			top: '0',
			right: '0'
		}, 500);
		$('#hud-item-3').delay(2000).animate({
			bottom: '0',
			left: '0'
		}, 500);
		$('#hud-item-4').delay(2000).animate({
			bottom: '0',
			right: '0'
		}, 500);
	});
	// animate captions
	$('#welcome').delay(6000).fadeOut(1000, function(){
		$('.hud-caption').show();
		$('.hud-caption-container').css({margin: '0 10px'});
		$('.hud-caption').css({
			opacity: '1',
			transform: 'translateX(0%)'
		});
		$('.hud-caption-right').css({
			opacity: '1',
			transform: 'translateX(0%)'
		});
		$('#blurb').fadeIn(1000);
	});
	// icon animations
	$('#hud-item-4').mouseover(function(){
		$('#letter').css({
			transform: 'translateY(-25%)'
		});
	});
	$('#hud-item-4').mouseout(function(){
		$('#letter').css({
			transform: 'translateY(0%)'
		});
	});
	$('#hud-item-3').mouseover(function(){
		$('#arrow').css({
			transform: 'translateY(25%)'
		});
	});
	$('#hud-item-3').mouseout(function(){
		$('#arrow').css({
			transform: 'translateY(0%)'
		});
	});
	$('#hud-item-2').mouseover(function(){
		$('#iris').css({
			transform: 'translateX(-50%)'
		});
	});
	$('#hud-item-2').mouseout(function(){
		$('#iris').css({
			transform: 'translateX(0%)'
		});
	});


	// modal toggling
	$('#portfolio').hide();
	$('#hud-item-2').click(function(){
		$('#modal-dimmer').fadeIn(300);
		$('#portfolio').slideToggle(300);
	});
	$('#close-portfolio').click(function(){
		$('#modal-dimmer').fadeOut(300);
		$('#portfolio').slideToggle(300);
	});

	$('#contact').hide();
	$('#hud-item-4').click(function(){
		$('#modal-dimmer').fadeIn(300);
		$('#contact').slideToggle(300);
	});
	$('#close-contact').click(function(){
		$('#modal-dimmer').fadeOut(300);
		$('#contact').slideToggle(300);
	});
});