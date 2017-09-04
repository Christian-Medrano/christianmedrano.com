<!-- Scripts -->
<script src="js/jquery-3.2.1.min.js"></script>
<script>
	$(document).ready(function(){
		$('#welcome').delay(2000).fadeOut(1000, function(){
			$('.hud-caption').css({
				opacity: '1',
				transform: 'translateX(0%)'
			});
		});
	});
</script>
<script src="js/parallax.min.js"></script>
<script>

// Pretty simple huh?
var scene = document.getElementById('scene');
var parallax = new Parallax(scene, {
	originX: 0,
	originY: 0
});

</script>
</body>
</html>