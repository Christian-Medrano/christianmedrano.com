<?php 
include 'header.php'; 
include 'welcome.php';
?>
<main class="fullscreen">
	<?php
	include 'hud.php';
	include 'portfolio.php';
	include 'contact.php'
	?>
	<!-- scene overlay -->
	<div class="scene-overlay fullscreen" style="background-color: rgba(0, 0, 0, 0.5);"></div>
	<!-- Parallax Scene -->
	
	<div id="scene-container" class="center">
		<div id="scene">
			<div class="layer" data-depth="0.00">
				<img src="img/scene/4.jpg" alt="">
			</div>
			<div class="layer" data-depth="0.33">
				<img src="img/scene/3.png" alt="">
			</div>
			<div class="layer" data-depth="0.66">
				<img src="img/scene/2.png" alt="">
			</div>
			<div class="layer" data-depth="1.00">
				<img src="img/scene/1.png" alt="">
			</div>
		</div>
	</div>

	<div id="blurb" class="center">
		<h1>Meet the</h1>
		<h1>Swiss Army Designer</h1>
		<p>His name is Christian Medrano, and he is a Los Angeles based visual designer<br> with a passion for user experience and front end development.</p>
	</div>


	<div id="modal-dimmer" class="fullscreen"></div>

</main>

<?php include 'footer.php'; ?>
	
