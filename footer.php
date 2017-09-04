<!-- Script Links -->
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/parallax.min.js"></script>
<!-- Intial HUD Animation -->
<script>
	$(document).ready(function(){
		// set starting states
		$('.hud-caption').hide();
		$('.hud-item').css({opacity: '0'});
		$('#hud-item-1').css({
			top: '50vh',
			left: '50vw'
		});
		$('#hud-item-2').css({
			top: '50vh',
			right: '50vw'
		});
		$('#hud-item-3').css({
			bottom: '50vh',
			left: '50vw'
		});
		$('#hud-item-4').css({
			bottom: '50vh',
			right: '50vw'
		});
		// fade out welcome, fade in icons
		$('#welcome-message').delay(2000).fadeOut(500, function(){
			$('#hud-item-1').animate({
				opacity: '1'
			}, 500);
			$('#hud-item-2').delay(500).animate({
				opacity: '1'
			}, 500);
			$('#hud-item-3').delay(1000).animate({
				opacity: '1'
			}, 500);
			$('#hud-item-4').delay(1500).animate({
				opacity: '1'
			}, 500);
			// move icons to corners
			$('#hud-item-1').delay(2000).animate({
				top: '0',
				left: '0'
			}, 500);
			$('#hud-item-2').delay(1500).animate({
				top: '0',
				right: '0'
			}, 500);
			$('#hud-item-3').delay(1000).animate({
				bottom: '0',
				left: '0'
			}, 500);
			$('#hud-item-4').delay(500).animate({
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
		});
	});
</script>
<!-- Parallax Scene Initialization -->
<script>
var scene = document.getElementById('scene');
var parallax = new Parallax(scene, {
	originX: 0,
	originY: 0
});
</script>
</body>
</html>