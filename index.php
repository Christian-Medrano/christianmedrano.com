<?php 

include 'header.php'; 
include 'welcome.php';
include 'hud.php';

?>

<!-- Parallax Scene -->
<div id="scene-container" class="fullscreen">
	<div id="scene" class="scene">
		<div class="layer" data-depth="0.00">
			<img src="img/scene/4.jpg" alt="">
		</div>
		<div class="layer" data-depth="0.33">
			<img src="img/scene/3.png" alt="">
		</div>
		<div class="layer" data-depth="0.66">
			<img src="img/scene/2.png" alt="">
		</div>
		<div class="layer" data-depth="1.00" >
			<img src="img/scene/1.png" alt="">
		</div>
	</div>
</div>

<?php include 'footer.php'; ?>
	
