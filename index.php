<?php 
include 'header.php'; 
include 'welcome.php';
?>

<main class="fullscreen">
	<?php
		include 'hud.php';
		include 'portfolio.php';
		include 'contact.php';
	?>

	<!-- scene overlay -->
	<div class="scene-overlay fullscreen" style="background-color: rgba(0, 0, 0, 0.5);"></div>
	<!-- Parallax Scene -->

	<div id="scene-container">
		<div id="scene">

			<div class="layer" data-depth="0.00">
				<img src="img/scene/bg.jpg">
			</div>

			<div class="layer" data-depth="0.5">
				<img src="img/scene/christianmedrano.png" alt="">
			</div>
			
		</div>
	</div>

	<div id="blurb" class="center">
		<h1>Looking for user experience solutions?</h1>
		<h1>I'm your guy</h1>
		<p>My name is Christian Medrano, and I am a Los Angeles based visual designer<br> with a passion for user experience and front end development.</p>
	</div>


	<div id="modal-dimmer" class="fullscreen"></div>

</main>

<?php include 'footer.php'; ?>
	
